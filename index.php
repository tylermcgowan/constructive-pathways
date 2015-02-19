<?php

$emailSent = false;

if (!empty($_POST['email'])) {
   
   $name = trim($_POST['name']);
   $to = 'studio@cedarmade.co';
   $from = trim($_POST['email']);
   $message = trim($_POST['message']);
   $honeypot = $_POST['website'];
   $subject = 'Collective Partners Contact Form';
   
   if (empty($honeypot)) {
      if (!empty($name) && !empty($from) && !empty($message)) {
         $emailSent = true;
         
         $headers =  'From: '.$from."\r\n".
                  'Reply-To: '.$from."\r\n" .
                  'X-Mailer: PHP/' . phpversion();
         
         $s = mail($to, $subject, $message, $headers);  
         $error = error_get_last();
         print_r($error);
         exit; 
         
      }
   }
}


?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <<title>Constructive Pathways Behaviour Consulting</title>
      <meta name="description" content="Constructive Pathways Behaviour Consulting empowers families and school teams to positively support children to become happy, productive, and contributing members in home, school, and community environments.">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <link rel="stylesheet" href="style/normalize.css" type="text/css" />
      <link rel="stylesheet" href="fonts/ss-social-regular.css" type="text/css" />
      <link rel="stylesheet" href="style/main.css" type="text/css" />

      <script type="text/javascript" src="js/modernizr.js"></script>
   </head>
   <body>
      <header>
         <div class="wrap">
            <div class="logo"><a href="/"><img src="img/logo.svg"/></a></div>
            <div class="menu">
               <button>Menu</button>
               <ul>
                  <li><a href="#about">About</a></li> 
                  <li><a href="#our-focus">Our Focus</a></li>  
                  <li><a href="#approach">Approach</a></li> 
                  <li><a href="#our-team">Team</a></li>  
                  <li><a href="#contact">Contact</a></li>   
               </ul>          
            </div>
         </div>
      </header>
      
      <section id="about-section">
      
         <div class="row">
            <div class="large-fixed-10 columns medium-centered">
               <h1>
                  <span class="part-1">Constructive families.</span> 
                  <span class="part-2">Constructive schools.</span> 
                  <span class="part-3">Successful children.</span> 
               </h1>
            </div>
         </div>
      
         <div class="hero">
            <div class="flex-image"></div>
         </div>
         
         <div id="about" class="content">
            <div class="row">
               <div class="large-fixed-8 columns medium-centered">
                  <p class="important"><strong>Constructive Pathways Behaviour Consulting</strong> empowers families and school teams to positively support children to become happy, productive, and contributing members in home, school, and community environments.</p>
                  
                  <p>Based in Vancouver, BC, we provide positive behaviour support (PBS) services to families and schools with children that engage in various forms of problem behaviour, regardless of whether or not they have a formal diagnosis. Our team has experience working with children with anxiety, attention deficit/hyperactivity disorder, autism spectrum disorder, oppositional defiant disorder, and intellectual disabilities.</p>
                  
               </div>
         </div>
      </section>
      
      
      <section id="our-focus">
         <h1>Our Focus</h1>
         <div class="hero">
            <div class="flex-image"></div>
         </div>
                  
         <div class="content">
            <div class="row">
               <div class="large-fixed-8 columns medium-centered">
                  <p class="important"><em>Problem behaviour that affects quality of life.</em> Problem behaviour may range from mild to extreme in terms of intensity. You might not realize that your child’s behaviour is problematic because it has become the norm at home and school.</p>
                  
                  <label>Examples might include:</label>
                  
                  <div class="row">
                     <div class="sm-med-6 columns">
                        <ul>
                           <li>refusing to get out of bed</li>
                           <li>taking too long to get dressed in the morning</li>
                           <li>repeatedly leaving his/her seat</li>
                           <li>refusing to eat during mealtimes</li>
                           <li>not paying attention to lessons</li>
                           <li>tearing up worksheets when given work at school</li>
                           <li>not engaging with peers </li>
                        </ul>
                     </div>
                     <div class="sm-med-6 columns">
                        <ul>
                           <li>bullying others on the playground</li>
                           <li>whining at a store because she/he wants a treat or to go home</li>
                           <li>fighting with a sibling</li>
                           <li>constantly bugging mom or dad when they are busy</li>
                           <li>waking up or sleeping with one or both parents on a nightly basis</li>
                        </ul>
                     </div>
                  </div>
                  
                  <p class="sep">These and other problem behaviours often emerge early on in home and school life and remain persistent and pervasive. Problem behaviour does not just go away and many children do not outgrow their challenges without intervention. Problem behaviour negatively affects the quality of life of the child, family, and school community. Children who engage in problem behaviour are more likely to miss out on learning activities, be socially isolated from family and peers, and are less likely to participate in community activities.</p>
                  
               </div>
         </div>
         
      </section>
      
      <section id="approach">
         <div class="content-container">
            <div class="row">
               <div class="small-12 columns">
                  <div class="content">
                     <div class="row">
                        <div class="large-fixed-8 columns medium-centered">
                     
                           <h1>Our Approach</h1>
                     
                           <p class="important">We aim to develop positive behaviour support (PBS) plans in collaboration with families and school teams. </p>
                     
                           <p>Our PBS approach incorporates the assessment of the functions of problem behaviour, the analysis of adult-child interactions, and an understanding of the contextual and ecological elements of a family’s or school’s daily routines. These three levels of analysis provide for a comprehensive understanding of why problem behaviour occurs and promotes the development of <strong>effective</strong>, <strong>acceptable</strong>, <strong>sustainable</strong>, and <strong>durable</strong> interventions.</p>
                        </div>
                     </div>
               
                  </div>
               </div>
            </div>
         </div>         
         <div class="goals">
            <div class="row">
               <div class="large-fixed-10 columns medium-centered">
            
                  <h2>The goals of our approach are to: </h2>
                  
                  <div class="row col-content">
                     <div class="large-4 columns">
                        <h4>1</h4>
                        <p>Reduce and replace problem behaviour by teaching adaptive and functionally appropriate skills.</p>
                     </div>
                     <div class="large-4 columns">
                        <h4>2</h4>
                        <p>Transform problematic relationships into constructive relationships in the context of valued family/school routines.</p>
                     </div>
                     <div class="large-4 columns">
                        <h4>3</h4>
                        <p>Promote meaningful changes in the funtioning of the family and school environments.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         
         
         <div class="hero two-up">
            <div class="flex-image a"></div>
            <div class="flex-image b"></div>
         </div>
                  
         <div class="content-container">
            <div class="row">
               <div class="small-12 columns">
                  <div class="content">
                     <div class="row">
                        <div class="large-fixed-8 columns medium-centered">
                     
                           <p class="important"><strong>Examples of adaptive and functionally appropriate skills that we teach include: </strong></p>
                           <ul>
                              <li>learning everyday expectations and monitoring success</li>
                              <li>understanding and making good vs. bad decisions</li>
                              <li>understanding and expressing emotions</li>
                              <li>learning and using self-regulation techniques</li>
                              <li>social skills and communication</li>
                              <li>academic programming and tutoring</li>
                              <li>life-skills (e.g., toileting, getting dressed, eating, and sleeping independently)</li>
                           </ul>          
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         
      </section>
      
      
      <section id="our-team">
         <div class="content">
            <div class="row">
               <div class="large-fixed-8 columns medium-centered">
                  <h1>Our Team</h1>
            
                  <div class="row">
                     <!-- <div class="sm-med-4 columns">
                        <img src="img/bio.jpg"/>
                     </div> -->
                     
                     <div class="sm-med-10 columns">
                        <h2>Stephen Chinn  <span>MA, BCBA</span></h2>
                        <h3>Director and Behaviour Consultant</h3>
                        <p>Stephen Chinn is a Board Certified Behaviour Analyst™ and holds a master’s degree in Special Education from the University of British Columbia with a concentration on autism and other developmental disorders. Stephen’s graduate research involved designing and implementing a family-centered, ecological, positive behaviour support intervention with a family of a child with autism and significant problem behaviour. Stephen has shared his research at conferences across North America and has presented a number of workshops and training sessions for parents and professionals. Stephen also has teaching experience at the university level, most recently as a sessional instructor at the University of British Columbia. Stephen’s CV is available upon request. </p>
                        
                        <p>Stephen has extensive clinical experience with children, adolescents, and adults with developmental disabilities. Stephen has worked as an interventionist and consultant in a range of settings. The focus of his work has been on collaborating with families and school teams to develop positive behaviour support plans targeted on reducing the problem behaviour of children and teaching them adaptive and functionally appropriate skills in various home-, school-, and community-based routines. Stephen also has experience in developing intensive intervention programs, home-school academic programs, social skills groups, life-skills programs, and vocational programs. </p>
                     </div>
                  </div>
                  
               </div>
            </div>
         </div>
         
      </section>
      
      <section id="redefine">
         <div class="hero">
            <div class="flex-image">
               <h1>Redefine your everyday</h1>
            </div>
         </div>
      </section>
      
      <section id="contact">

         <div class="row">
            <div class="small-12 columns">
               <div class="content">
                  <div class="row">
                     <div class="large-fixed-8 columns medium-centered">
                        <div class="row">
                           <div class="small-12 columns">
                              <h1>Get in touch</h1>
                           </div>
                        </div>
                        <div class="row">
                           <div class="sm-med-7 large-8 columns">
                              <p>For more information on our process or how we can help, send us a message!</p>
                              
                              <?php if ($emailSent): ?>
                              <p class="notice">Thanks for your message. We will be in touch soon!</p>
                              <?php endif;?>
                              <p class="error-message">Oops! Looks like you forgot to enter some information.</p>
                              
                              <form method="post">
                                 <div class="row">
                                    <div class="large-6 columns">
                                       <input type="text" name="name" placeholder="Name *" class="required" />
                                    </div>
                                    <div class="large-6 columns">
                                       <input type="text" name="email" placeholder="Emails *" class="required email" />
                                    </div>
                                 </div>
                                 <input type="text" style="display: none; width: 0; height: 0;" name="website" value="" autocomplete="off" />
                                 <textarea name="message" placeholder="Message *" class="required"></textarea>
                                 
                                 <button type="submit">Send Message</button>
                                 
                              </form>
                           </div>
                           <div class="sm-med-5 large-4 columns note">
                              <p><strong>Helping families in Vancouver, BC and surrounding areas.</strong></p>
                              <p><a href="mailto:info@constructivepathways.ca">info@constructivepathways.ca</a></p>
                              <p>778.229.9942</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

      </section>


      
      <footer>
         <div class="row">
            <div class="small-12 columns">
               <div class="content">
                  <div class="social">
                     <a href="http://facebook.com" class="ss-facebook"></a>
                     <a href="http://twitter.com" class="ss-twitter"></a>
                  </div>
                  <div class="info">
                     <p>&copy; 2014 Constructive Pathways Behaviour Consulting Ltd.</p>
                  </div>
               </div>
            </div>
         </div>
      </footer>

   <script type="text/javascript" src="js/jquery-2.1.1-min.js"></script>
   <script type="text/javascript" src="js/jquery.scrollto.min.js"></script>
   <script type="text/javascript" src="js/scripts.js"></script>
   </body>
</html>
   