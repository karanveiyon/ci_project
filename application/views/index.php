<?php defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php include('header.php');?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<style>
    *{padding: 0;margin: 0;box-sizing:border-box;}
    body{font-family:monospace;}
    .top-nav{background-color:#3A3A3A; width:100%; color:white; font-family:monospace; display:flex; align-items:center;padding: .7rem;}
    .content-container{padding: 0 2rem; line-height:1.5rem; }
    .function{
        font-family:monospace;
        background-color: #3A3A3A;
        color:greenyellow;
        width: max-content;
        padding: 1rem;
        line-height: 2rem;
    }
    #logo{height:35px; width:30px;}
</style>

<div class="content-container">
<ul>
    <li>Codeigniter 3 is one of the most powerful php framework which works on MVC (Model, View, Controller) pattern. Its a open
   source php framework which we can easily download it from its official site <a href="https://codeigniter.com/download">https://codeigniter.com/download</a>. </li>
    <li>It will download a zip file. unzip it inside a htdocs folder.</li>
    <li>If you have xampp version higher than 7.4 <a href="https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/7.4.30/">Xampp 7.4</a> then it will show error for codeigniter 3 </li>
    <li>After unzipping it we have to config the following steps.</li>
</ul>
<?php
//foreach($folderStructure as $folders)
/* {
   if(is_array($folders))
   {
    echo $folders;
    foreach($folders as $folder)
    {
        if(is_array($folder))
        {
            foreach($folder as $files)
            {
                echo $files."<br>";
            }
        }
        echo $folder."<br>";
    }
   }
    else if(!is_array($folders))
    {
        echo $folders."<br>";
    }



} */
        
 ?>

<details class="fs_main">
  <summary class="fs_sub">application</summary>
  <details class="fs_main">
  <summary class="fs_sub">cache</summary>
</details class="fs_main">
</details class="fs_main">
<details class="fs_main">
  <summary class="fs_sub">system</summary>
</details class="fs_main">
<summary class="fs_sub">.editorconfig</summary>
<summary class="fs_sub">.gitignore</summary>
<summary class="fs_sub"><a href="<?php echo base_url('/htaccess.txt');?>" download>htaccess</a></summary>
<summary class="fs_sub">index.php</summary>
<summary class="fs_sub">index.txt</summary>
<summary class="fs_sub">readme.rst</summary>
    </div>

<?php include('footer.php');?>