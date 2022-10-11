<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <title>SENEWEBSITE</title>
</head>

<body>
    <div class="sene_header">
        <div class="sene_logo">
            <h1>Senewebsite</h1>
        </div>
        <div class="sene_login-signup">
            <!-- <div class="sene_login-btn"><i class="fa-solid fa-user">Login</i></div>
            <div class="sene_login-btn"><i class="fa-solid fa-user-pen">Regiter</i></div> by Md Hasib Un Nabi Schneho Khan -->
        </div>
    </div>
    <div class="sene_form_container">
        <form action="form_handler.php" method="post" enctype="multipart/form-data" onkeydown="return event.key != 'Enter';">
            <div class="sene_form_fields">
                <div class="sene_form_heading">
                    <h2>Upload your Company/Brand logo</h2>
                </div>
                <div class="label_input_hldr">
                    <input name="company_logo" type="file" require accept=".png,.jpg,.jpeg">
                </div>
            </div>
            <div class="sene_form_fields">
                <div class="sene_form_heading">
                    <h2>Company/Brand Name</h2>
                </div>
                <input name="company_name" type="text" placeholder="Enter your Company/Brand Name" require>
            </div>
            <div class="sene_form_fields">
                <div class="sene_form_heading">
                    <h2>Qui Sommes Nous</h2>
                </div>
                <input name="company_about" type="text" placeholder="Enter a description of your business" require>
            </div>
            <div class="sene_form_fields">
                <div class="sene_form_heading">
                    <h2>Nos Produits et Services</h2>
                </div>
                <input name="company_services" type="text" placeholder="List your services and products" require>
            </div>
            <div class="sene_form_fields">
                <div class="sene_form_heading">
                    <h2>Nos Clients</h2>
                </div>
                <input name="company_target" type="text" placeholder="Describe customers you are serving" require>
            </div>
            <div class="sene_form_fields">
                <div class="sene_form_heading">
                    <h2>Nous Contacter</h2>
                </div>
                <input name="company_contact" type="text"
                    placeholder="Indicate how you want to be contacted by your Customers" require>
            </div>
            <div class="sene_form_buttons">
                <div class="sene_form_button">
                    <input type="submit" name="submit">
                </div>
                <div class="sene_form_button">
                    <input type="reset">
                </div>
            </div>
        </form>
    </div>
<script>


</script>
</body>


</html>