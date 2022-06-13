<!DOCTYPE html>

<link rel="stylesheet" href="./style/admin.css">
<html>



<body>

    <h1>All trainers info</h1>
    <a href="trainers.php"> back to trainers </a>
    <script src="./js/club.js"></script>
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
    <table style="width:100%" id="myTable" class="sortable">
        <thead>
            <tr>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>PhoneNumber</th>
                <th>Exp(years)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>arnold </td>
                <td>shayto</td>
                <td>0525673245</td>
                <td>4</td>
            </tr>
            <tr>
                <td>jack </td>
                <td>kuo</td>
                <td>0523813245</td>
                <td>6</td>
            </tr>
            <tr>
                <td>sam</td>
                <td>smith</td>
                <td>0521234987</td>
                <td>10</td>
            </tr>
            <tr>
                <td>david </td>
                <td>smith</td>
                <td>0523241976</td>
                <td>15</td>
            </tr>
            <tr>
                <td>kate </td>
                <td>robinson</td>
                <td>0547658123</td>
                <td>7</td>
            </tr>
            <tr>
                <td>robert </td>
                <td>danial</td>
                <td>0536547968</td>
                <td>2</td>
            </tr>
            <tr>
                <td>wade </td>
                <td>thompson</td>
                <td>0531234765</td>
                <td>5</td>
            </tr>
            <tr>
                <td>don </td>
                <td>curry</td>
                <td>0526789463</td>
                <td>5</td>
            </tr>
            <tr>
                <td>harry </td>
                <td>jibson</td>
                <td>0528765409</td>
                <td>12</td>
            </tr>
            <tr>
                <td>fabian </td>
                <td>kuik</td>
                <td>0544539221</td>
                <td>12</td>
            </tr>
            <tr>
                <td>carol</td>
                <td>fujo</td>
                <td>0547509321</td>
                <td>13</td>
            </tr>
            <tr>
                <td>Alma </td>
                <td>curry</td>
                <td>0537109222</td>
                <td>15</td>
            </tr>
            <tr>
                <td>Carla</td>
                <td>Lin</td>
                <td>0526665123</td>
                <td>9</td>
            </tr>
            <tr>
                <td>Cassandra </td>
                <td>Carrie</td>
                <td>0527654342</td>
                <td>2</td>
            </tr>
        </tbody>
    </table>
    <script src="./js/club.js"></script>

    <script>
    var tables = document.querySelectorAll("table.sortable"),
        table,
        thead,
        headers,
        i,
        j;

    for (i = 0; i < tables.length; i++) {
        table = tables[i];

        if (thead = table.querySelector("thead")) {
            headers = thead.querySelectorAll("th");

            for (j = 0; j < headers.length; j++) {
                headers[j].innerHTML = "<a href='#'>" + headers[j].innerText + "</a>";
            }

            thead.addEventListener("click", sortTableFunction(table));
        }
    }

    /**
     * Create a function to sort the given table.
     */
    function sortTableFunction(table) {
        return function(ev) {
            if (ev.target.tagName.toLowerCase() == 'a') {
                sortRows(table, siblingIndex(ev.target.parentNode));
                ev.preventDefault();
            }
        };
    }

    /**
     * Get the index of a node relative to its siblings — the first (eldest) sibling
     * has index 0, the next index 1, etc.
     */
    function siblingIndex(node) {
        var count = 0;

        while (node = node.previousElementSibling) {
            count++;
        }

        return count;
    }

    /**
     * Sort the given table by the numbered column (0 is the first column, etc.)
     */
    function sortRows(table, columnIndex) {
        var rows = table.querySelectorAll("tbody tr"),
            sel = "thead th:nth-child(" + (columnIndex + 1) + ")",
            sel2 = "td:nth-child(" + (columnIndex + 1) + ")",
            classList = table.querySelector(sel).classList,
            values = [],
            cls = "",
            allNum = true,
            val,
            index,
            node;

        if (classList) {
            if (classList.contains("date")) {
                cls = "date";
            } else if (classList.contains("number")) {
                cls = "number";
            }
        }

        for (index = 0; index < rows.length; index++) {
            node = rows[index].querySelector(sel2);
            val = node.innerText;

            if (isNaN(val)) {
                allNum = false;
            } else {
                val = parseFloat(val);
            }

            values.push({
                value: val,
                row: rows[index]
            });
        }

        if (cls == "" && allNum) {
            cls = "number";
        }

        if (cls == "number") {
            values.sort(sortNumberVal);
            values = values.reverse();
        } else if (cls == "date") {
            values.sort(sortDateVal);
        } else {
            values.sort(sortTextVal);
        }

        for (var idx = 0; idx < values.length; idx++) {
            table.querySelector("tbody").appendChild(values[idx].row);
        }
    }

    /**
     * Compare two 'value objects' numerically
     */
    function sortNumberVal(a, b) {
        return sortNumber(a.value, b.value);
    }

    /**
     * Numeric sort comparison
     */
    function sortNumber(a, b) {
        return a - b;
    }

    /**
     * Compare two 'value objects' as simple text; case-insensitive
     */
    function sortTextVal(a, b) {
        var textA = (a.value + "").toUpperCase();
        var textB = (b.value + "").toUpperCase();

        if (textA < textB) {
            return -1;
        }

        if (textA > textB) {
            return 1;
        }

        return 0;
    }
    </script>
</body>

</html>