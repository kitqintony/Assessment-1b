<!DOCTYPE html>
<html>
<head>
    <title>PlantATree</title>
    <meta name="description" content="This is the description">
    <link rel="stylesheet" href="styles.css" />
	<style>
	.section-header{
		color: #000000;
	}

	img {
	display: block;
		margin-left: auto;
		margin-right: auto;
	}
	</style>
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

        <section class="content-section container">
            <h2 class="section-header">ABOUT</h2>
            <img src="Images/members.png" width="400px";height="250px";>
			<h3>
			TreeCo is one of New Zealands biggest Nurseries with 10 Nurseries spread out across the country and over 500 knowledgable and enthusiastic staff members who are always available to help. We import, grow and sell trees as well as a wide range of gardening products related to growing and maintaining trees. We help customers ranging from Landscape gardeners, Housing Developers, Local Councils and to the General Public. We look forward to seeing you soon in one of our local Nurseries.
			</h3>
			<h2>Mt Eden Branch:</h2>
            <h3>
                445 Mount Eden Road, Mount Eden, Auckland</br>
				Contact: Stephen Beck, 09 789 4455</br></br>
            </h3>
			<h2>East Tamaki Branch:</h2>
            <h3>
                29 Kerwyn Ave, East Tamaki, Auckland 2013<br>
				Contact: Amy Anderson, 09 789 4444</br></br>
            </h3>
			<h2>Albany Branch:</h2>
            <h3>
                67 Kell Dr, Albany, Auckland 0632</br>
				Contact: Chris  Wilson, 09 789 1458</br></br>
			</br></br>
            </h3>

        </section>

        <section class="container content-section">

                   <div class="shop-items">
                       <div class="shop-item">
                           <span class="shop-item-title">Feedback us</span>

                           <form action="about.php" method="post">

                             <label><br>How do you rate our service </label><br/>
        <input type="checkbox" name="permission" value="Allow Like">Fantastic<br/>
        <input type="checkbox" name="permission" value="Allow Comment">Amazing<br/>
        <input type="checkbox" name="permission" value="Allow share">Awesome<br/>

                            <br/>
                            <button onclick="myFunction()">Send</button>


                               </form>

                           <div class="shop-item-details">

                           </div>
                       </div>
                   </div>
               </section>
          <script>
              function myFunction() {
                  alert("Thanks for your feedback");
              }
          </script>

        <footer class="main-footer">
            <div class="container main-footer-container">
                <h3 class="band-name">TreeCo</h3>

            </div>
        </footer>
    </body>
</html>
