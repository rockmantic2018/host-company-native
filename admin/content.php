<?php
///halaman testimoni belum ada
if(isset($_GET['page']))
          {

            if($_GET['page']=='domain-edit')
            {
              include 'pages/domain_edit.php';
            }                       
            elseif ($_GET['page']=='domain') 
            {
              include 'pages/domain.php';
            }
            elseif ($_GET['page']=='domain-add') 
            {
              include 'pages/domain_add.php';
            }
            elseif ($_GET['page']=='web') 
            {
            	include 'pages/web.php';
            }
            elseif ($_GET['page']=='hosting') 
            {
            	include 'pages/hosting.php';
            }
            elseif ($_GET['page']=='hosting-add') 
            {
              include 'pages/hosting_add.php';
            }
            elseif ($_GET['page']=='hosting-edit') 
            {
              include 'pages/hosting_edit.php';
            }
            elseif ($_GET['page']=='profil') 
            {
              include 'pages/profil/profil.php';
            }
          }
          else
          {
            include 'pages/rm_home.php';
          }

?>