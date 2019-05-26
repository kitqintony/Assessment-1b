<!DOCTYPE html>
<html>
<head>
    <title>PlantATree</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        {
            box-sizing: border-box;
        }

        #myInput {
            background-image: url('/Images/search.png');
            background-position: 10px 10px;
            background-repeat: no-repeat;
            width: 100%;
            font-size: 16px;
            padding: 12px 20px 12px 40px;
            border: 1px solid #ddd;
            margin-bottom: 12px;
        }

        #myTable {
            border-collapse: collapse;
            width: 100%;
            border: 1px solid #ddd;
            font-size: 18px;
        }

            #myTable th, #myTable td {
                text-align: left;
                padding: 12px;
            }

            #myTable tr {
                border-bottom: 1px solid #ddd;
            }

                #myTable tr.header, #myTable tr:hover {
                    background-color: #f1f1f1;
                }

    </style>

    <meta name="description" content="This is the description">
    <link rel="stylesheet" href="styles.css" />
    <script src="store.js" async></script>


</head>
<body>
    <header class="main-header">
        <nav class="main-nav nav">
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="category.php">CATEGORY</a></li>
                <li><a href="tool.php">Gardening tools</a></li>
                <li><a href="service.php">Extra Service</a></li>
                <li><a href="about.php">ABOUT US</a></li>
            </ul>
        </nav>
        <h1 class="band-name band-name-large">TreeCo</h1>
    </header>
    <section class="container content-section">
        <h2>Search trees by name</h2>

        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Type names..">

        <table id="myTable">
            <tr class="header">
                <th style="width:60%;">Products</th>
                <th style="width:40%;">Price</th>
            </tr>
            <tr>
                <td> <a href="./apple.php">Initial Apple</td>
                <td>$50</td>
            </tr>
            <tr>
                <td><a href="./orange.php">Nevelina Orange</td>
                <td>$28</td>
            </tr>
            <tr>
                <td><a href="./lemon.php">Meter Lemon</td>
                <td>$15</td>
            </tr>
            <tr>
                <td><a href="./helen.php">Paradise Helen</td>
                <td>$20</td>
            </tr>
            <tr>
                <td><a href="./magnolia.php">Little Gem Magnolia</td>
                <td>$17</td>
            </tr>
            <tr>
                <td><a href="./lemonwood.php">Lemonwood</td>
                <td>$20</td>
            </tr>
            <tr>
                <td><a href="./cabbagetree.php">Cabbage Tree</td>
                <td>$20</td>
            </tr>
            <tr>
                <td><a href="./evergreenalder.php">Evergree Alder</td>
                <td>$25</td>
            </tr>
            <tr>
                <td><a href="./mistralpohutukawa.php">Mistral Pohutukawa</td>
                <td>$15</td>
            </tr>
            <tr>
                <td><a href="./lacebark.php">Lacebark</td>
                <td>$15</td>
            </tr>
            <tr>
                <td><a href="./rewarewa.php">Rewarewa</td>
                <td>$30</td>
            </tr>
            <tr>
                <td><a href="./maoriprincesspohutukawa.php">Maori Princess Pohutukawa</td>
                <td>$15</td>
            </tr>
            <tr>
                <td><a href="./babyblue.php">Baby Blue</td>
                <td>$16</td>
            </tr>
            <tr>
                <td><a href="./gunnii.php">Gunnii</td>
                <td>$15</td>
            </tr>
            <tr>
                <td><a href="./perriniana.php">Perriniana</td>
                <td>$50</td>
            </tr>
            <tr>
                <td> <a href="./bangalowPalm.php">Bungalow Palm</td>
                <td>$20</td>
            </tr>

            <tr>
                <td> <a href="./costaRicaBamboo.php">Costa rica bamboo</td>
                <td>$25</td>
            </tr>
            <tr>
                <td> <a href="./dypsisbaronii.php">Dypsis Baronii</td>
                <td>$15</td>
            </tr>
            <tr>
                <td><a href="./blackBeech.php">Black Beech</td>
                <td>$55</td>
            </tr>
            <tr>
                <td><a href="./redBeech.php">Red Beech</td>
                <td>$65</td>
            </tr>
            <tr>
                <td><a href="./silverBeech.php">Silver Beech</td>
                <td>$45</td>
            </tr>
        </table>
    </section>
        <script>
            function myFunction() {
                var input, filter, table, tr, td, i, txtValue;
                input = document.getElementById("myInput");
                filter = input.value.toUpperCase();
                table = document.getElementById("myTable");
                tr = table.getElementsByTagName("tr");
                for (i = 0; i < tr.length; i++) {
                    td = tr[i].getElementsByTagName("td")[0];
                    if (td) {
                        txtValue = td.textContent || td.innerText;
                        if (txtValue.toUpperCase().indexOf(filter) > -1) {
                            tr[i].style.display = "";
                        } else {
                            tr[i].style.display = "none";
                        }
                    }
                }
            }
        </script>
        <footer class="main-footer">
            <div class="container main-footer-container">
                <h3 class="band-name">TreeCo</h3>
            </div>
        </footer>
</body>
</html>
