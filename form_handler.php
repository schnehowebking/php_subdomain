<!-- Get Form Data by Md Hasib Un Nabi Schneho Khan -->


<?php

if(isset($_POST['submit'])){
    $company_logo = $_FILES['company_logo'];
    $company_name = $_POST['company_name'];
    $company_about = $_POST['company_about'];
    $company_services = $_POST['company_services'];
    $company_target = $_POST['company_target'];
    $company_contact = $_POST['company_contact'];
    
    if($company_name && $company_logo && $company_about && $company_services && $company_target && $company_contact){
        $str = $company_name;
        $company_name = str_replace(' ', '-', strtolower($str));
        $dirname = "".$company_name;
        mkdir($dirname, 0777, true);
        if (file_exists($company_name)){
            $logo = uploadLogo($company_logo, $company_name);
            profileFileCreate($company_name, $logo, $company_about , $company_services ,$company_target, $company_contact);
            
        }
    }

}

function uploadLogo($logo, $path) {
    $ext = explode('.', $logo['name'])[1];
    move_uploaded_file($logo['tmp_name'], $path."/"."logo.".$ext);
    return $logo = "logo.".$ext;
}

function profileFileCreate($company_name, $logo, $about, $services, $target, $contact) {
    $content = fopen($company_name."/index.php", "w");
    $a = file_get_contents('profile.php');
    $css = "style.css";
    $a = str_replace('profile.css', $css, $a);
    $a= str_replace('logo.png', $logo, $a);
    $a = str_replace('replace_comapany_about', $about, $a);
    $a = str_replace('replace_comapany_services', $services, $a);
    $a = str_replace('replace_comapany_target', $target, $a);
    $a = str_replace('replace_comapany_contact', $contact, $a);
    $style = fopen($company_name."/style.css", "w");
    $b = file_get_contents('style.css');
    fwrite($style, $b);
    $company_name = str_replace('-',' ', ucwords($company_name));
    $a = str_replace('replace_comapany_name', $company_name, $a);
    fclose($style);
    fwrite($content, $a);
    fclose($content);
    
    
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GO to your site</title>
</head>

<body>


    <h4>Click here to visit your site <a
            href="<?php echo '$dirname'.str_replace(' ', '-', strtolower($company_name));?>"><?php echo "$dirname".str_replace(' ', '-', strtolower($company_name)); ?></a></h4>

</body>

</html>