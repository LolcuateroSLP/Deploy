<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="{{url('css/base.css')}}" rel="stylesheet">
        <link href="{{url('css/main.css')}}" rel="stylesheet">
        <link href="{{url('css/vendor.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <!-- Compiled and minified CSS -->
        {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> --}}

        <!-- Compiled and minified JavaScript -->
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> --}}
        <!-- Styles -->
        <style>
            .fondo{
                background: rgba(10,25,47,255);
            }

            .fontNav{
                color: white;
                font-weight:800;
            }

            .fontNavNumber{
                color: #42a599;
                font-weight:600;
            }

            .Cnav{
                margin-top:1%;
            }
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        
    </head>
    <body id="top">
    
        <!-- intro section
       ================================================== -->
       <section id="intro">   
    
           <div class="intro-overlay"></div>	
    
           <div class="intro-content">
               <div class="row">
    
                   <div class="col-twelve">
    
                       <h5>Hello, World.</h5>
                       <h1>I'm Edwin Issac Lopez Sanchez.</h1>
    
                       <p class="intro-position">
                           <span>Front-end Developer</span>
                           <span>Backend Developer</span>
                           <span>Managment DataBase</span> 
                       </p>
    
                       <a class="button stroke smoothscroll" href="#about" title="">More About Me</a>
    
                   </div>  
                   
               </div>   		 		
           </div> <!-- /intro-content --> 
    
           {{-- <ul class="intro-social">        
             <li><a href="#"><i class="fa fa-facebook"></i></a></li>
             <li><a href="#"><i class="fa fa-behance"></i></a></li>
             <li><a href="#"><i class="fa fa-twitter"></i></a></li>
             <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
             <li><a href="#"><i class="fa fa-instagram"></i></a></li>
          </ul> <!-- /intro-social -->      	 --}}
    
       </section> <!-- /intro -->
    
    
       <!-- about section
       ================================================== -->
       <section id="about">  
    
           <div class="row section-intro">
               <div class="col-twelve">
    
                   <h5>About</h5>
                   <h1>Let me introduce myself.</h1>
    
                   <div class="intro-info">
    
                       <img src="images/profile-pic.jpg" alt="Profile Picture">
    
                       <p class="lead">Lorem ipsum Exercitation culpa qui dolor consequat exercitation fugiat laborum ex ea eiusmod ad do aliqua occaecat nisi ad irure sunt id pariatur Duis laboris amet exercitation veniam labore consectetur ea id quis eiusmod.</p>
                   </div>   			
    
               </div>   		
           </div> <!-- /section-intro -->
    
           <div class="row about-content">
    
               <div class="col-six tab-full">
    
                   <h3>Profile</h3>
                   <p>Lorem ipsum Qui veniam ut consequat ex ullamco nulla in non ut esse in magna sint minim officia consectetur nisi commodo ea magna pariatur nisi cillum.</p>
    
                   <ul class="info-list">
                       <li>
                           <strong>Fullname:</strong>
                           <span>Juan Dela Cruz</span>
                       </li>
                       <li>
                           <strong>Birth Date:</strong>
                           <span>September 28, 1987</span>
                       </li>
                       <li>
                           <strong>Job:</strong>
                           <span>Freelancer, Frontend Developer</span>
                       </li>
                       <li>
                           <strong>Website:</strong>
                           <span>www.kardswebsite.com</span>
                       </li>
                       <li>
                           <strong>Email:</strong>
                           <span>me@kardswebsite.com</span>
                       </li>
    
                   </ul> <!-- /info-list -->
    
               </div>
    
               <div class="col-six tab-full">
    
                   <h3>Skills</h3>
                   <p>Lorem ipsum Qui veniam ut consequat ex ullamco nulla in non ut esse in magna sint minim officia consectetur nisi commodo ea magna pariatur nisi cillum.</p>
    
                    <ul class="skill-bars">
                       <li>
                           <div class="progress percent90"><span>90%</span></div>
                           <strong>HTML5</strong>
                       </li>
                       <li>
                           <div class="progress percent85"><span>85%</span></div>
                           <strong>CSS3</strong>
                       </li>
                       <li>
                           <div class="progress percent70"><span>70%</span></div>
                           <strong>JQuery</strong>
                       </li>
                       <li>
                           <div class="progress percent95"><span>95%</span></div>
                           <strong>PHP</strong>
                       </li>
                       <li>
    
                           <div class="progress percent75"><span>75%</span></div>
                           <strong>Wordpress</strong>
                       </li>
          
                    </ul> <!-- /skill-bars -->		
    
               </div>
    
           </div>
    
           <div class="row button-section">
               <div class="col-twelve">
                   <a href="#contact" title="Hire Me" class="button stroke smoothscroll">Hire Me</a>
                   <a href="#" title="Download CV" class="button button-primary">Download CV</a>
               </div>   		
           </div>
    
       </section> <!-- /process-->    
    
    
       <!-- resume Section
       ================================================== -->
        <section id="resume" class="grey-section">
    
            <div class="row section-intro">
               <div class="col-twelve">
    
                   <h5>Resume</h5>
                   <h1>More of my credentials.</h1>
    
                   <p class="lead">Lorem ipsum Do commodo in proident enim in dolor cupidatat adipisicing dolore officia nisi aliqua incididunt Ut veniam lorem ipsum Consectetur ut in in eu do.</p>
    
               </div>   		
           </div> <!-- /section-intro--> 
    
           <div class="row resume-timeline">
    
               <div class="col-twelve resume-header">
    
                   <h2>Work Experience</h2>
    
               </div> <!-- /resume-header -->
    
               <div class="col-twelve">
    
                   <div class="timeline-wrap">
    
                       <div class="timeline-block">
    
                           <div class="timeline-ico">
                               <i class="fa fa-graduation-cap"></i>
                           </div>
    
                           <div class="timeline-header">
                               <h3>UI Designer</h3>
                               <p>July 2015 - Present</p>
                           </div>
    
                           <div class="timeline-content">
                               <h4>Awesome Studio</h4>
                               <p>Lorem ipsum Occaecat do esse ex et dolor culpa nisi ex in magna consectetur nisi cupidatat laboris esse eiusmod deserunt aute do quis velit esse sed Ut proident cupidatat nulla esse cillum laborum occaecat nostrud sit dolor incididunt amet est occaecat nisi.</p>
                           </div>
    
                       </div> <!-- /timeline-block -->
    
                       <div class="timeline-block">
    
                           <div class="timeline-ico">
                               <i class="fa fa-graduation-cap"></i>
                           </div>
    
                           <div class="timeline-header">
                               <h3>Front-end Developer</h3>
                               <p>July 2014 - June 2015</p>
                           </div>
    
                           <div class="timeline-content">
                               <h4>Super Cool Agency</h4>
                               <p>Lorem ipsum Occaecat do esse ex et dolor culpa nisi ex in magna consectetur nisi cupidatat laboris esse eiusmod deserunt aute do quis velit esse sed Ut proident cupidatat nulla esse cillum laborum occaecat nostrud sit dolor incididunt amet est occaecat nisi incididunt.</p>
                           </div>
    
                       </div> <!-- /timeline-block -->
    
                       <div class="timeline-block">
    
                           <div class="timeline-ico">
                               <i class="fa fa-graduation-cap"></i>
                           </div>
    
                           <div class="timeline-header">
                               <h3>Web Designer</h3>
                               <p>May 2013 - June 2014</p>
                           </div>
    
                           <div class="timeline-content">
                               <h4>Great Designs Studio</h4>
                               <p>Lorem ipsum Occaecat do esse ex et dolor culpa nisi ex in magna consectetur nisi cupidatat laboris esse eiusmod deserunt aute do quis velit esse sed Ut proident cupidatat nulla esse cillum laborum occaecat nostrud sit dolor incididunt amet est occaecat nisi incididunt.</p>
                           </div>
    
                       </div> <!-- /timeline-block -->
    
                   </div> <!-- /timeline-wrap -->   			
    
               </div> <!-- /col-twelve -->
               
           </div> <!-- /resume-timeline -->
           
           <div class="row resume-timeline">
    
               <div class="col-twelve resume-header">
    
                   <h2>Education</h2>
    
               </div> <!-- /resume-header -->
    
               <div class="col-twelve">
    
                   <div class="timeline-wrap">
    
                       <div class="timeline-block">
    
                           <div class="timeline-ico">
                               <i class="fa fa-briefcase"></i>
                           </div>
    
                           <div class="timeline-header">
                               <h3>Master Degree</h3>
                               <p>July 2015 - Present</p>
                           </div>
    
                           <div class="timeline-content">
                               <h4>University of Life</h4>
                               <p>Lorem ipsum Occaecat do esse ex et dolor culpa nisi ex in magna consectetur nisi cupidatat laboris esse eiusmod deserunt aute do quis velit esse sed Ut proident cupidatat nulla esse cillum laborum occaecat nostrud sit dolor incididunt amet est occaecat nisi.</p>
                           </div>
    
                       </div> <!-- /timeline-block -->
    
                       <div class="timeline-block">
    
                           <div class="timeline-ico">
                               <i class="fa fa-briefcase"></i>
                           </div>
    
                           <div class="timeline-header">
                               <h3>Bachelor Degree</h3>
                               <p>July 2014 - June 2015</p>
                           </div>
    
                           <div class="timeline-content">
                               <h4>State Design University</h4>
                               <p>Lorem ipsum Occaecat do esse ex et dolor culpa nisi ex in magna consectetur nisi cupidatat laboris esse eiusmod deserunt aute do quis velit esse sed Ut proident cupidatat nulla esse cillum laborum occaecat nostrud sit dolor incididunt amet est occaecat nisi incididunt.</p>
                           </div>
    
                       </div> <!-- /timeline-block -->
    
                       <div class="timeline-block">
    
                           <div class="timeline-ico">
                               <i class="fa fa-briefcase"></i>
                           </div>
    
                           <div class="timeline-header">
                               <h3>Bachelor Degree</h3>
                               <p>May 2013 - June 2014</p>
                           </div>
    
                           <div class="timeline-content">
                               <h4>Design College</h4>
                               <p>Lorem ipsum Occaecat do esse ex et dolor culpa nisi ex in magna consectetur nisi cupidatat laboris esse eiusmod deserunt aute do quis velit esse sed Ut proident cupidatat nulla esse cillum laborum occaecat nostrud sit dolor incididunt amet est occaecat nisi incididunt.</p>
                           </div>
    
                       </div> <!-- /timeline-block -->
    
                   </div> <!-- /timeline-wrap -->   			
    
               </div> <!-- /col-twelve -->
               
           </div> <!-- /resume-timeline -->
            
        </section> <!-- /features -->
    
    
        <!-- Portfolio Section
       ================================================== -->
        <section id="portfolio">
    
            <div class="row section-intro">
               <div class="col-twelve">
    
                   <h5>Portfolio</h5>
                   <h1>Check Out Some of My Works.</h1>
    
                   <p class="lead">Lorem ipsum Do commodo in proident enim in dolor cupidatat adipisicing dolore officia nisi aliqua incididunt Ut veniam lorem ipsum Consectetur ut in in eu do.</p>
    
               </div>   		
           </div> <!-- /section-intro--> 
    
           <div class="row portfolio-content">
    
               <div class="col-twelve">
    
                   <!-- portfolio-wrapper -->
                 <div id="folio-wrapper" class="block-1-2 block-mob-full stack">
    
                     <div class="bgrid folio-item">
                       <div class="item-wrap">
                           <img src="images/portfolio/liberty.jpg" alt="Liberty">
                          <a href="#modal-01" class="overlay">	                  	           
                             <div class="folio-item-table">
                                 <div class="folio-item-cell">
                                            <h3 class="folio-title">Liberty</h3>	     					    
                                              <span class="folio-types">
                                                  Graphic Design
                                            </span>
                                        </div>	                      	
                             </div>                    
                          </a>
                       </div>	               
                        </div> <!-- /folio-item -->
    
                        <div class="bgrid folio-item">
                       <div class="item-wrap">
                           <img src="images/portfolio/shutterbug.jpg" alt="Shutterbug">
                           <a href="#modal-02" class="overlay">              		                  
                             <div class="folio-item-table">
                                 <div class="folio-item-cell">
                                     <h3 class="folio-title">Shutterbug</h3>	     					    
                                             <span class="folio-types">
                                                  Web Design
                                           </span>		     		
                                        </div> 	                      	
                             </div>                    
                          </a>
                       </div>
                        </div> <!-- /folio-item -->
    
                    <div class="bgrid folio-item">
                       <div class="item-wrap">
                           <img src="images/portfolio/clouds.jpg"alt="Clouds">
                          <a href="#modal-03" class="overlay">             		                  
                             <div class="folio-item-table">
                                 <div class="folio-item-cell">
                                     <h3 class="folio-title">Clouds</h3>	     					    
                                             <span class="folio-types">
                                                  Web Design
                                           </span>		     		
                                        </div> 	                      	
                             </div>                    
                          </a>
                       </div>
                        </div> <!-- /folio-item -->
    
                    <div class="bgrid folio-item">
                       <div class="item-wrap">
                           <img src="images/portfolio/beetle.jpg" alt="Beetle">
                          <a href="#modal-04" class="overlay">                  	                 
                             <div class="folio-item-table">
                                 <div class="folio-item-cell">
                                     <h3 class="folio-title">Beetle</h3>	     					    
                                             <span class="folio-types">
                                                  Branding
                                           </span>		     		
                                        </div>  	                      	
                             </div>                    
                          </a>
                       </div>
                        </div> <!-- /folio-item -->     
    
                        <div class="bgrid folio-item">
                       <div class="item-wrap">
                           <img src="images/portfolio/lighthouse.jpg" alt="Lighthouse">
                          <a href="#modal-05" class="overlay">             		                  
                             <div class="folio-item-table">
                                 <div class="folio-item-cell">
                                     <h3 class="folio-title">Lighthouse</h3>	     					    
                                             <span class="folio-types">
                                                  Web Development
                                           </span>		     		
                                        </div> 	                      	
                             </div>                    
                          </a>
                       </div>
                        </div> <!-- /folio-item -->
    
                    <div class="bgrid folio-item">
                       <div class="item-wrap">
                           <img src="images/portfolio/salad.jpg" alt="Salad">
                          <a href="#modal-06" class="overlay">
                             <div class="folio-item-table">
                                 <div class="folio-item-cell">
                                     <h3 class="folio-title">Salad</h3>	     					    
                                             <span class="folio-types">
                                                  Branding
                                           </span>		     		
                                        </div>	                      	
                             </div>                    
                          </a>
                       </div>
                        </div> <!-- /folio-item -->   
    
                    <!-- modal popups - begin
                    ============================================================= -->
                    <div id="modal-01" class="popup-modal slider mfp-hide">	
    
                             <div class="media">
                                 <img src="images/portfolio/modals/m-liberty.jpg" alt="" />
                             </div>      	
    
                           <div class="description-box">
                              <h4>Liberty</h4>		      
                              <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
    
                              <div class="categories">Web Development</div>			               
                           </div>
    
                         <div class="link-box">
                            <a href="http://www.behance.net">Details</a>
                              <a href="#" class="popup-modal-dismiss">Close</a>
                         </div>		      
    
                       </div> <!-- /modal-01 -->
    
                       <div id="modal-02" class="popup-modal slider mfp-hide">	
    
                             <div class="media">
                                 <img src="images/portfolio/modals/m-shutterbug.jpg" alt="" />
                             </div>      	
    
                           <div class="description-box">
                              <h4>Shutterbug</h4>		      
                              <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
    
                              <div class="categories">Web Design</div>			               
                           </div>
    
                         <div class="link-box">
                            <a href="http://www.behance.net">Details</a>
                              <a href="#" class="popup-modal-dismiss">Close</a>
                         </div>		      
    
                       </div> <!-- /modal-02 -->
    
                       <div id="modal-03" class="popup-modal slider mfp-hide">	
    
                             <div class="media">
                                 <img src="images/portfolio/modals/m-clouds.jpg" alt="" />
                             </div>      	
    
                           <div class="description-box">
                              <h4>Clouds</h4>		      
                              <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
    
                              <div class="categories">Web Design</div>			               
                           </div>
    
                         <div class="link-box">
                            <a href="http://www.behance.net">Details</a>
                              <a href="#" class="popup-modal-dismiss">Close</a>
                         </div>		      
    
                       </div> <!-- /modal-03 -->
    
                       <div id="modal-04" class="popup-modal slider mfp-hide">	
    
                             <div class="media">
                                 <img src="images/portfolio/modals/m-beetle.jpg" alt="" />
                             </div>      	
    
                           <div class="description-box">
                              <h4>Beetle</h4>		      
                              <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
    
                              <div class="categories">Branding</div>			               
                           </div>
    
                         <div class="link-box">
                            <a href="http://www.behance.net">Details</a>
                              <a href="#" class="popup-modal-dismiss">Close</a>
                         </div>		      
    
                       </div> <!-- /modal-04 -->
    
                       <div id="modal-05" class="popup-modal slider mfp-hide">	
    
                             <div class="media">
                                 <img src="images/portfolio/modals/m-lighthouse.jpg" alt="" />
                             </div>      	
    
                           <div class="description-box">
                              <h4>Lighthouse</h4>		      
                              <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
    
                              <div class="categories">Web Development</div>			               
                           </div>
    
                         <div class="link-box">
                            <a href="http://www.behance.net">Details</a>
                              <a href="#" class="popup-modal-dismiss">Close</a>
                         </div>		      
    
                       </div> <!-- /modal-05 -->
    
                       <div id="modal-06" class="popup-modal slider mfp-hide">	
    
                             <div class="media">
                                 <img src="images/portfolio/modals/m-salad.jpg" alt="" />
                             </div>      	
    
                           <div class="description-box">
                              <h4>Salad</h4>		      
                              <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
    
                              <div class="categories">Branding</div>			               
                           </div>
    
                         <div class="link-box">
                            <a href="http://www.behance.net">Details</a>
                              <a href="#" class="popup-modal-dismiss">Close</a>
                         </div>		      
    
                       </div> <!-- /modal-06 -->
    
    
                       <!-- modal popups - end
                    ============================================================= -->
    
                 </div> <!-- /portfolio-wrapper --> 
    
               </div>  <!-- /twelve -->   
    
           </div> <!-- /portfolio-content --> 
            
        </section> <!-- /portfolio --> 
    
    
        <!-- CTA Section
       ================================================== -->
        <section id="cta" class="grey-section">
    
           <div class="row cta-content">
    
               <div class="col-twelve section-ads">  
    
                     <h2 class="h01"><a href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT">Styleshout Recommends Dreamhost.</a></h2>
    
                  <p class="lead">
                  Looking for an awesome and reliable webhosting? Try <a href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT"><span>DreamHost</span></a>.
                    Get <span>$50 off</span> when you sign up with the promocode <span>styleshout</span>. 
                    <!-- Simply type	the promocode in the box labeled “Promo Code” when placing your order. -->	
                    </p>
    
                    <div class="action">
                      <a class="button button-primary large" href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT">Sign Up Now</a>
                  </div>		     	
    
               </div>
    
           </div> <!-- /cta-content -->
    
       </section> <!-- /cta --> 
    
        
        <!-- services Section
       ================================================== -->
        <section id="services">
    
            <div class="overlay"></div>
    
            <div class="row section-intro">
               <div class="col-twelve">
    
                   <h5>Services</h5>
                   <h1>What Can I Do For You?</h1>
    
                   <p class="lead">Lorem ipsum Do commodo in proident enim in dolor cupidatat adipisicing dolore officia nisi aliqua incididunt Ut veniam lorem ipsum Consectetur ut in in eu do.</p>
    
               </div>   		
           </div> <!-- /section-intro -->
    
           <div class="row services-content">
    
               <div id="owl-slider" class="owl-carousel services-list">
    
                  <div class="service">	
    
                      <span class="icon"><i class="icon-earth"></i></span>            
    
                    <div class="service-content">	
    
                         <h3>Webdesign</h3>
    
                        <p class="desc">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
                         </p>
                         
                     </div> 	         	 
    
                    </div> <!-- /service -->
    
                    <div class="service">	
    
                        <span class="icon"><i class="icon-window"></i></span>                          
    
                    <div class="service-content">	
    
                        <h3>Web Development</h3>  
    
                        <p class="desc">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
                         </p>
    
                    </div>	                          
    
                   </div> <!-- /service -->
    
                   <div class="service">
    
                       <span class="icon"><i class="icon-paint-brush"></i></span>		            
    
                    <div class="service-content">
    
                        <h3>Branding</h3>
    
                        <p class="desc">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
                            </p> 
    
                    </div> 	            	               
    
                   </div> <!-- /service -->
    
                    <div class="service">
    
                        <span class="icon"><i class="icon-toggles"></i></span>	              
    
                    <div class="service-content">
    
                        <h3>UI/UX Design</h3>
    
                        <p class="desc">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
                         </p> 
                         
                    </div>                
    
                    </div> <!-- /service -->
    
                   <div class="service">
    
                       <span class="icon"><i class="icon-image"></i></span>	            
    
                    <div class="service-content">
    
                        <h3>Graphics Design</h3>
    
                        <p class="desc">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
                            </p> 
    
                    </div>	               
    
                   </div> <!-- /service -->
    
                   <div class="service">
    
                       <span class="icon"><i class="icon-chat"></i></span>	   	           
    
                    <div class="service-content">
    
                         <h3>Consultancy</h3>
    
                        <p class="desc">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
                            </p> 
                            
                    </div>	               
    
                   </div> <!-- /service -->
    
              </div> <!-- /services-list -->
               
           </div> <!-- /services-content -->
            
        </section> <!-- /services -->	
    
    
        <!-- stats Section
       ================================================== -->
        <section id="stats" class="count-up">
    
            <div class="row">
                <div class="col-twelve">
    
                    <div class="block-1-6 block-s-1-3 block-tab-1-2 block-mob-full stats-list">
    
                        <div class="bgrid stat">
    
                            <div class="icon-part">
                                <i class="icon-pencil-ruler"></i>
                            </div>
    
                            <h3 class="stat-count">
                                1500
                            </h3>
    
                            <h5 class="stat-title">
                                Projects Completed
                            </h5>
    
                        </div> <!-- /stat -->					
    
                        <div class="bgrid stat">
    
                            <div class="icon-part">
                                <i class="icon-users"></i>
                            </div>
    
                            <h3 class="stat-count">
                                900
                            </h3>
    
                            <h5 class="stat-title">
                                Happy Clients
                            </h5>
    
                        </div> <!-- /stat -->
    
                        <div class="bgrid stat">
    
                            <div class="icon-part">
                                <i class="icon-badge"></i>
                            </div>
    
                            <h3 class="stat-count">
                                200
                            </h3>
    
                            <h5 class="stat-title">
                                Awards Received
                            </h5>
    
                        </div> <!-- /stat -->									
    
                        <div class="bgrid stat">
    
                            <div class="icon-part">
                                <i class="icon-light-bulb"></i>
                            </div>
    
                            <h3 class="stat-count">
                                120
                            </h3>
    
                            <h5 class="stat-title">
                                Crazy Ideas
                            </h5>
    
                        </div> <!-- /stat -->
    
                        <div class="bgrid stat">
    
                            <div class="icon-part">
                                <i class="icon-cup"></i>
                            </div>
    
                            <h3 class="stat-count">
                                1500
                            </h3>
    
                            <h5 class="stat-title">
                                Coffee Cups
                            </h5>
    
                        </div> <!-- /stat -->
    
                        <div class="bgrid stat">
    
                            <div class="icon-part">
                                <i class="icon-clock"></i>
                            </div>
    
                            <h3 class="stat-count">
                                7200
                            </h3>
    
                            <h5 class="stat-title">
                                Hours
                            </h5>
    
                        </div> <!-- /stat -->
    
                    </div> <!-- /stats-list -->
    
                </div> <!-- /twelve -->
            </div> <!-- /row -->
    
        </section> <!-- /stats -->
    
        
       <!-- contact
       ================================================== -->
        <section id="contact">
    
            <div class="row section-intro">
               <div class="col-twelve">
    
                   <h5>Contact</h5>
                   <h1>I'd Love To Hear From You.</h1>
    
                   <p class="lead">Lorem ipsum Do commodo in proident enim in dolor cupidatat adipisicing dolore officia nisi aliqua incididunt Ut veniam lorem ipsum Consectetur ut in in eu do.</p>
    
               </div> 
           </div> <!-- /section-intro -->
    
           <div class="row contact-form">
    
               <div class="col-twelve">
    
                <!-- form -->
                <form name="contactForm" id="contactForm" method="post" action="">
                      <fieldset>
    
                      <div class="form-field">
                                <input name="contactName" type="text" id="contactName" placeholder="Name" value="" minlength="2" required="">
                      </div>
                      <div class="form-field">
                             <input name="contactEmail" type="email" id="contactEmail" placeholder="Email" value="" required="">
                       </div>
                      <div class="form-field">
                                <input name="contactSubject" type="text" id="contactSubject" placeholder="Subject" value="">
                       </div>                       
                      <div class="form-field">
                             <textarea name="contactMessage" id="contactMessage" placeholder="message" rows="10" cols="50" required=""></textarea>
                       </div>                      
                     <div class="form-field">
                         <button class="submitform">Submit</button>
                         <div id="submit-loader">
                            <div class="text-loader">Sending...</div>                             
                                 <div class="s-loader">
                                          <div class="bounce1"></div>
                                          <div class="bounce2"></div>
                                          <div class="bounce3"></div>
                                    </div>
                                </div>
                      </div>
    
                      </fieldset>
                  </form> <!-- Form End -->
    
                <!-- contact-warning -->
                <div id="message-warning">            	
                </div>            
                <!-- contact-success -->
                  <div id="message-success">
                   <i class="fa fa-check"></i>Your message was sent, thank you!<br>
                  </div>
    
             </div> <!-- /col-twelve -->
               
           </div> <!-- /contact-form -->
    
           <div class="row contact-info">
    
               <div class="col-four tab-full">
    
                   <div class="icon">
                       <i class="icon-pin"></i>
                   </div>
    
                   <h5>Where to find me</h5>
    
                   <p>
                1600 Amphitheatre Parkway<br>
                Mountain View, CA<br>
                94043 US
                </p>
    
               </div>
    
               <div class="col-four tab-full collapse">
    
                   <div class="icon">
                       <i class="icon-mail"></i>
                   </div>
    
                   <h5>Email Me At</h5>
    
                   <p>someone@kardswebsite.com<br>
                       info@kardswebsite.com			     
                   </p>
    
               </div>
    
               <div class="col-four tab-full">
    
                   <div class="icon">
                       <i class="icon-phone"></i>
                   </div>
    
                   <h5>Call Me At</h5>
    
                   <p>Phone: (+63) 555 1212<br>
                       Mobile: (+63) 555 0100<br>
                         Fax: (+63) 555 0101
                   </p>
    
               </div>
               
           </div> <!-- /contact-info -->
            
        </section> <!-- /contact -->
    
    
       <!-- footer
       ================================================== -->
    
       <footer>
             <div class="row">
    
                 <div class="col-six tab-full pull-right social">
    
                     <ul class="footer-social">        
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-behance"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                      <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                   </ul> 
                      
              </div>
    
              <div class="col-six tab-full">
                  <div class="copyright">
                        <span>© Copyright Kards 2016.</span> 
                        <span>Design by <a href="http://www.styleshout.com/">styleshout</a></span>	         	
                     </div>		                  
                  </div>
    
                  <div id="go-top">
                     <a class="smoothscroll" title="Back to Top" href="#top"><i class="fa fa-long-arrow-up"></i></a>
                  </div>
    
              </div> <!-- /row -->     	
       </footer>  
    
       <div id="preloader"> 
            <div id="loader"></div>
       </div> 
    
       <!-- Java Script
       ================================================== --> 
       <script src="js/jquery-2.1.3.min.js"></script>
       <script src="js/plugins.js"></script>
       <script src="js/main.js"></script>
    
    </body>
</html>
