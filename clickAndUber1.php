<?php
    $lesson_title ="click and uber (intro)";	// titre de la leçon
	$lesson_slides ="";					// nom du fichier de slides dans /assets/slides
    $lesson_duration_mn ="45"; 
    $jQueryRequired=false;
    $quizlyRequired=false;
    
    require('./local_header.php');
?>
<?php
    $URL_Project_start = ";";
    $URL_Project_end = ""; ;
    $URL_Youtube_video = "" ;
?>

<!-- début de la partie spécifique à cette leçon  -->
			<img 												 
				src="./assets/img/travauxEnCours128.png" 
				Style ="display: block; margin: auto; width: 15%;"
				width="128"
			/> 
                
  
            <div class="gcb-aside gcb-button-box">
              <div class="gcb-lesson-content"
                  data-scored="False"
                  data-question-batch-id="L1001">
				
				<?php
                if (isset($lesson_slides)&&$lesson_slides<>""){?>
                <p style="float:right; margin-top: 0px;">
                    <a role="button" 
                      class="gcb-button" 
                      id="lessonNotesLink"
                      href="<?php echo $app_directory ;?>/assets/slides/<?php echo $lesson_slides;?>" target="_blank">
                      Version textuelle
                    </a>
                </p>
                <?php }
                ?>
				
				<h2>Présentation :</h2>										<!-- à compléter   --> 
               <p style ="color:red;">à compléter</p>

				<h2>Ce que vous allez faire :</h2>							<!-- à compléter  --> 
				<p style ="color:red;">à compléter</p>
								
			    <h2>Ce que vous allez apprendre (notions abordées) :</h2>	<!-- à compléter par vous  --> 
				<p style ="color:red;">à compléter</p>
                
                <h2>Ressources en entrée : </h2> 
				<p style ="color:red;">à compléter</p>				<!-- à compléter ou laisser vide --> 
                <?php
                if (isset($URL_project_start)&& $URL_project_start<>""){
                    echo '<a href="' . $URL_project_start .'">' . $URL_project_start .'</a><br>';
                }else{
                ?>
                <?php }
                ?>
                
				<h2>Réalisation :</h2>	
				<p style ="color:red;">à compléter</p>										<!-- à compléter  --> 
                <?php if (isset($URL_Youtube_video) && $URL_Youtube_video<>""){ ?>
				<iframe 
                    width="780" 
                    height="440"
				    src="<?php echo $URL_Youtube_video;?>"
				    frameborder="0" 
				    allowfullscreen>
                </iframe>
                <?php } ?>
				
			    <h2>Quiz / auto contrôle:</h2>	
				<p style ="color:red;">à compléter ou supprimer</p>								<!-- supprimer ou compléter  -->   
				
				<h2>Extensions possibles / pour votre portfolio</h2>
				<p style ="color:red;">à compléter ou supprimer</p>	     	<!-- supprimer ou compléter  -->         


              </div>
            </div> <!-- /gcb-aside -->
			
<!-- fin de la partie spécifique à cette leçon  -->
<?php
    require('./local_footer.php');
?>  