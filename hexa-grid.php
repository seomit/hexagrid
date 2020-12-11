<?php 
/*
Plugin Name: Hexa Grid
Plugin URI: https://urjasoft.com/
Description: Hexa Grid plugin is used to make Heagonal grid system.
Version: 1.0
Author: Sumit Kumar
Author URI: https://thesumit.com
Text Domain: hexa-grid
@package hexa-grid
Copyright 2019 Urjasoft.
*/
function hexa_enqueue() 
{       
    // CSS
    wp_register_style('hexa_custom_css', plugins_url().'/hexa-grid/css/hexa-grid-style.css');
    wp_enqueue_style('hexa_custom_css');
}

function hexa_grid(){
ob_start();
hexa_enqueue();
?>
<div class="hex-start-section">	

	<div class="heading-section">
		<div class="heading1">
			Strategic Digital Consultancy
		</div>
		<p class="subtext1">
			Enabling you to rapidly conceive and develop practical digital strategies, whilst also assessing the readiness of your organisation for implementing change and to what extent your current infrastructure is fit for the future.
		</p>
		<div class="heading2">
			Architecture and Design
		</div>  
	<p class="subtext2">
		Highly adaptable and addressing a wide range of needs; from solving strategic business problems to the discovery, shaping and design of new digital services or recommending specific modernisation initiatives to existing applications.
	</p>
		<div class="heading3">
			Development and Migration
		</div>  
	<p class="subtext3">Combining flexible software engineering practices and expertise in leading technology with a value-driven pragmatism, we build long-lasting, scalable and flexible applications on time and with the highest levels of quality and predictability.
	</p>
		<div class="heading4">
			Support and Maintenance
		</div> 
	<p class="subtext4">Ensuring your business is as reliable and efficient as it can be. Plus, driving high levels of user adoption and improving working practices through a comprehensive range of training and development programmes.</p>
	</div>
	<div class="grid-section">
            <section class="hex-grid">



                    <div class="grid-item repeat-animation invisible">
                        <div class="inner">
                            <div  class="inner-inner" style="background:#552682">  
                                <a target="_blank" href="#" class="grid-info">
                                    <div class ="inner-text">
                                        <div class="inner-text-inner">

                                        </div><!-- /.inner-text-inner -->
                                    </div><!-- /.inner-text -->
                                </a><!-- /.grid-info -->
                            </div><!-- /.inner-inner -->
                        </div><!-- /.inner -->
                    </div><!-- /.grid-item -->
                    
                    <div class="grid-item repeat-animation no-pointer">
                        <div class="inner">
                            <div  class="inner-inner" style="background:#552682">  
                                <a target="_blank" href="#" class="grid-info no-pointer">
                                    <div class ="inner-text">
                                        <div class="inner-text-inner">
                                            <p>Our<br>Engagement<br>Framework</p>

                                        </div><!-- /.inner-text-inner -->
                                    </div><!-- /.inner-text -->
                                </a><!-- /.grid-info -->
                            </div><!-- /.inner-inner -->
                        </div><!-- /.inner -->
                    </div><!-- /.grid-item -->
                    
                    <div class="grid-item repeat-animation invisible">
                        <div class="inner">
                            <div  class="inner-inner" style="background:#552682">  
                                <a target="_blank" href="#" class="grid-info">
                                    <div class ="inner-text">
                                        <div class="inner-text-inner">

                                        </div><!-- /.inner-text-inner -->
                                    </div><!-- /.inner-text -->
                                </a><!-- /.grid-info -->
                            </div><!-- /.inner-inner -->
                        </div><!-- /.inner -->
                    </div><!-- /.grid-item -->
                    
                    
                    <div class="grid-item repeat-animation mobile-h">
                        <div class="inner">
                            <div  class="inner-inner" style="background:#4ab052">  
                                <a target="_blank" href="#" class="grid-info">
                                    <div class ="inner-text">
                                        <div class="inner-text-inner">
                                           
                                        </div><!-- /.inner-text-inner -->
                                    </div><!-- /.inner-text -->
                                </a><!-- /.grid-info -->
                            </div><!-- /.inner-inner -->
                        </div><!-- /.inner -->
                    </div><!-- /.grid-item -->
                    
                    <div class="grid-item repeat-animation mobile-v">
                        <div class="inner">
                            <div  class="inner-inner" style="background:lightgrey">  
                                <a target="_blank" href="#" class="grid-info">
                                    <div class ="inner-text">
                                        <div class="inner-text-inner">
                                           <p>
                                                Strategic<br/>Digital<br/>Consultancy
                                            </p>
                                        </div><!-- /.inner-text-inner -->
                                    </div><!-- /.inner-text -->
                                </a><!-- /.grid-info -->
                            </div><!-- /.inner-inner -->
                        </div><!-- /.inner -->
                    </div><!-- /.grid-item -->
                    
                    <div class="grid-item repeat-animation mobile-h">
                        <div class="inner">
                            <div  class="inner-inner" style="background:#4ab052">  
                                <a target="_blank" href="#" class="grid-info">
                                    <div class ="inner-text">
                                        <div class="inner-text-inner">
                                           
                                        </div><!-- /.inner-text-inner -->
                                    </div><!-- /.inner-text -->
                                </a><!-- /.grid-info -->
                            </div><!-- /.inner-inner -->
                        </div><!-- /.inner -->
                    </div><!-- /.grid-item -->
                    <div class="grid-item repeat-animation">
                        <div class="inner">
                            <div  class="inner-inner" style="background:#4ab052">  
                                <a target="_blank" href="https://www.arrkgroup.com/approach/thinkdigital-digital-strategies/" class="grid-info">
                                    <div class ="inner-text">
                                        <div class="inner-text-inner">
                                            <p>
                                                Shaping<br>Digital<br>Strategy<br>
                                                
                                                <span>ThinkDigital<sup>TM</sup></span>
                                            </p>

                                        </div><!-- /.inner-text-inner -->
                                    </div><!-- /.inner-text -->
                                </a><!-- /.grid-info -->
                            </div><!-- /.inner-inner -->
                        </div><!-- /.inner -->
                    </div><!-- /.grid-item -->
                    
                    <div class="grid-item repeat-animation">
                        <div class="inner">
                            <div  class="inner-inner" style="background:#4ab052">  
                                <a target="_blank" href="https://www.arrkgroup.com/approach/benchmarrk-transformation-readiness/" class="grid-info">
                                    <div class ="inner-text">
                                        <div class="inner-text-inner">

                                           <p>
                                                Assessing<br/>Digital<br/>Readiness
                                               
                                                <span>BenchmArrk<sup>TM</sup></span>
                                            </p>

                                        </div><!-- /.inner-text-inner -->
                                    </div><!-- /.inner-text -->
                                </a><!-- /.grid-info -->
                            </div><!-- /.inner-inner -->
                        </div><!-- /.inner -->
                    </div><!-- /.grid-item -->
                    
                    <div class="grid-item repeat-animation">
                        <div class="inner">
                            <div  class="inner-inner" style="background:#4ab052">  
                                <a target="_blank" href="https://www.arrkgroup.com/approach/checkmarrk-application-estate-maturity-assessment/" class="grid-info">
                                    <div class ="inner-text">
                                        <div class="inner-text-inner">
                                             <p>
                                                Application<br/>Maturity<br/>Assessment                                                
                                                <span>CheckmArrk<sup>TM</sup></span>
                                            </p>
                                        </div><!-- /.inner-text-inner -->
                                    </div><!-- /.inner-text -->
                                </a><!-- /.grid-info -->
                            </div><!-- /.inner-inner -->
                        </div><!-- /.inner -->
                    </div><!-- /.grid-item -->
                    
                    
                    <div class="grid-item repeat-animation mobile-h">
                        <div class="inner">
                            <div  class="inner-inner" style="background:#f7bd33">  
                                <a target="_blank" href="#" class="grid-info">
                                    <div class ="inner-text">
                                        <div class="inner-text-inner">
                                           
                                        </div><!-- /.inner-text-inner -->
                                    </div><!-- /.inner-text -->
                                </a><!-- /.grid-info -->
                            </div><!-- /.inner-inner -->
                        </div><!-- /.inner -->
                    </div><!-- /.grid-item -->
                    
                    <div class="grid-item repeat-animation mobile-v">
                        <div class="inner">
                            <div  class="inner-inner" style="background:lightgrey">  
                                <a target="_blank" href="#" class="grid-info">
                                    <div class ="inner-text">
                                        <div class="inner-text-inner">
                                           <p>
                                                Architecture<br/>and<br/>Design
                                            </p>
                                        </div><!-- /.inner-text-inner -->
                                    </div><!-- /.inner-text -->
                                </a><!-- /.grid-info -->
                            </div><!-- /.inner-inner -->
                        </div><!-- /.inner -->
                    </div><!-- /.grid-item -->
                    
                    <div class="grid-item repeat-animation mobile-h">
                        <div class="inner">
                            <div  class="inner-inner" style="background:#f7bd33">  
                                <a target="_blank" href="#" class="grid-info">
                                    <div class ="inner-text">
                                        <div class="inner-text-inner">
                                           
                                        </div><!-- /.inner-text-inner -->
                                    </div><!-- /.inner-text -->
                                </a><!-- /.grid-info -->
                            </div><!-- /.inner-inner -->
                        </div><!-- /.inner -->
                    </div><!-- /.grid-item -->
                    <div class="grid-item repeat-animation">
                        <div class="inner">
                            <div  class="inner-inner" style="background:#f7bd33">  
                                <a target="_blank" href="https://www.arrkgroup.com/approach/techmarrk-enterprise-architecture-review/" class="grid-info">
                                    <div class ="inner-text">
                                        <div class="inner-text-inner">

                                            <p>
                                                Environment<br/>Architecture<br/>Review
                                                
                                                <span>TechmArrk<sup>TM</sup></span>
                                            </p>

                                        </div><!-- /.inner-text-inner -->
                                    </div><!-- /.inner-text -->
                                </a><!-- /.grid-info -->
                            </div><!-- /.inner-inner -->
                        </div><!-- /.inner -->
                    </div><!-- /.grid-item -->
                    
                    
                    <div class="grid-item repeat-animation">
                        <div class="inner">
                            <div  class="inner-inner" style="background:#f7bd33">  
                                <a target="_blank" href="https://www.arrkgroup.com/approach/softmarrk-software-application-review/" class="grid-info">
                                    <div class ="inner-text">
                                        <div class="inner-text-inner">

                                            <p>
                                                Software<br/>Architecture<br/>Review
                                               
                                                <span>SoftmArrk<sup>TM</sup></span>
                                            </p>
                                        </div><!-- /.inner-text-inner -->
                                    </div><!-- /.inner-text -->
                                </a><!-- /.grid-info -->
                            </div><!-- /.inner-inner -->
                        </div><!-- /.inner -->
                    </div><!-- /.grid-item -->
                    
                    <div class="grid-item repeat-animation">
                        <div class="inner">
                            <div  class="inner-inner" style="background:#f7bd33">  
                                <a target="_blank" href="https://www.arrkgroup.com/approach/embarrk-digital-solution-design/" class="grid-info">
                                    <div class ="inner-text">
                                        <div class="inner-text-inner">
                                            <p>
                                                Digital<br/>Solution<br/>Design
                                                <span>EmbArrk<sup>TM</sup></span>
                                            </p>

                                        </div><!-- /.inner-text-inner -->
                                    </div><!-- /.inner-text -->
                                </a><!-- /.grid-info -->
                            </div><!-- /.inner-inner -->
                        </div><!-- /.inner -->
                    </div><!-- /.grid-item -->
                    
                    <div class="grid-item repeat-animation mobile-h">
                        <div class="inner">
                            <div  class="inner-inner" style="background:#00b0eb">  
                                <a target="_blank" href="#" class="grid-info">
                                    <div class ="inner-text">
                                        <div class="inner-text-inner">
                                           
                                        </div><!-- /.inner-text-inner -->
                                    </div><!-- /.inner-text -->
                                </a><!-- /.grid-info -->
                            </div><!-- /.inner-inner -->
                        </div><!-- /.inner -->
                    </div><!-- /.grid-item -->
                    
                    <div class="grid-item repeat-animation mobile-v">
                        <div class="inner">
                            <div  class="inner-inner" style="background:lightgrey">  
                                <a target="_blank" href="#" class="grid-info">
                                    <div class ="inner-text">
                                        <div class="inner-text-inner">
                                          <p>
                                                Development<br/>and<br/>Migration
                                            </p>
                                        </div><!-- /.inner-text-inner -->
                                    </div><!-- /.inner-text -->
                                </a><!-- /.grid-info -->
                            </div><!-- /.inner-inner -->
                        </div><!-- /.inner -->
                    </div><!-- /.grid-item -->
                    
                    <div class="grid-item repeat-animation mobile-h">
                        <div class="inner">
                            <div  class="inner-inner" style="background:#00b0eb">  
                                <a target="_blank" href="#" class="grid-info">
                                    <div class ="inner-text">
                                        <div class="inner-text-inner">
                                           
                                        </div><!-- /.inner-text-inner -->
                                    </div><!-- /.inner-text -->
                                </a><!-- /.grid-info -->
                            </div><!-- /.inner-inner -->
                        </div><!-- /.inner -->
                    </div><!-- /.grid-item -->
                    
                    <div class="grid-item repeat-animation">
                        <div class="inner">
                            <div  class="inner-inner" style="background:#00b0eb">  
                                <a target="_blank" href="https://www.arrkgroup.com/approach/agile-at-arrk-software-engineering/" class="grid-info">
                                    <div class ="inner-text">
                                        <div class="inner-text-inner">
                                           <p>
                                                Rapid<br/>Software<br/>Engineering
                                               
                                                <span>Agile@Arrk<sup>TM</sup></span>
                                            </p>
                                        </div><!-- /.inner-text-inner -->
                                    </div><!-- /.inner-text -->
                                </a><!-- /.grid-info -->
                            </div><!-- /.inner-inner -->
                        </div><!-- /.inner -->
                    </div><!-- /.grid-item -->
                    
                    <div class="grid-item repeat-animation">
                        <div class="inner">
                            <div  class="inner-inner" style="background:#00b0eb">  
                                <a target="_blank" href="https://www.arrkgroup.com/services/remarrk-application-modernisation/" class="grid-info">
                                    <div class ="inner-text">
                                        <div class="inner-text-inner">
                                            <p>
                                                Application<br/>Modernisation<br/>&nbsp;
                                               
                                                <span>RemArrk<sup>TM</sup></span>
                                            </p>
                                        </div><!-- /.inner-text-inner -->
                                    </div><!-- /.inner-text -->
                                </a><!-- /.grid-info -->
                            </div><!-- /.inner-inner -->
                        </div><!-- /.inner -->
                    </div><!-- /.grid-item -->
                    
                    <div class="grid-item repeat-animation">
                        <div class="inner">
                            <div  class="inner-inner" style="background:#00b0eb">  
                                <a target="_blank" href="https://www.arrkgroup.com/approach/emoto-cloud-services/" class="grid-info">
                                    <div class ="inner-text">
                                        <div class="inner-text-inner">

                                           <p>
                                                Cloud<br/>Services<br/>&nbsp;
                                                <span>EMOTO<sup>TM</sup></span>
                                            </p>

                                        </div><!-- /.inner-text-inner -->
                                    </div><!-- /.inner-text -->
                                </a><!-- /.grid-info -->
                            </div><!-- /.inner-inner -->
                        </div><!-- /.inner -->
                    </div><!-- /.grid-item -->
                    
                    <div class="grid-item repeat-animation mobile-h">
                        <div class="inner">
                            <div  class="inner-inner" style="background:#f07d26">  
                                <a target="_blank" href="#" class="grid-info">
                                    <div class ="inner-text">
                                        <div class="inner-text-inner">
                                           
                                        </div><!-- /.inner-text-inner -->
                                    </div><!-- /.inner-text -->
                                </a><!-- /.grid-info -->
                            </div><!-- /.inner-inner -->
                        </div><!-- /.inner -->
                    </div><!-- /.grid-item -->
                    
                    <div class="grid-item repeat-animation mobile-v">
                        <div class="inner">
                            <div  class="inner-inner" style="background:lightgrey">  
                                <a target="_blank" href="#" class="grid-info">
                                    <div class ="inner-text">
                                        <div class="inner-text-inner">
                                          <p>
                                               Support<br/>and<br/>Maintenance
                                            </p>
                                        </div><!-- /.inner-text-inner -->
                                    </div><!-- /.inner-text -->
                                </a><!-- /.grid-info -->
                            </div><!-- /.inner-inner -->
                        </div><!-- /.inner -->
                    </div><!-- /.grid-item -->
                    
                    <div class="grid-item repeat-animation mobile-h">
                        <div class="inner">
                            <div  class="inner-inner" style="background:#f07d26">  
                                <a target="_blank" href="#" class="grid-info">
                                    <div class ="inner-text">
                                        <div class="inner-text-inner">
                                           
                                        </div><!-- /.inner-text-inner -->
                                    </div><!-- /.inner-text -->
                                </a><!-- /.grid-info -->
                            </div><!-- /.inner-inner -->
                        </div><!-- /.inner -->
                    </div><!-- /.grid-item -->
                    
                    <div class="grid-item repeat-animation">
                        <div class="inner">
                            <div  class="inner-inner" style="background:#f07d26">  
                                <a target="_blank" href="https://www.arrkgroup.com/approach/application-support-management/" class="grid-info">
                                    <div class ="inner-text">
                                        <div class="inner-text-inner">
                                            <p>
                                                Application<br/>Support<br/>Management
                                               
                                                <span>ServiceFlex<sup>TM</sup></span>
                                            </p>
                                        </div><!-- /.inner-text-inner -->
                                    </div><!-- /.inner-text -->
                                </a><!-- /.grid-info -->
                            </div><!-- /.inner-inner -->
                        </div><!-- /.inner -->
                    </div><!-- /.grid-item -->
                    
                    <div class="grid-item repeat-animation">
                        <div class="inner">
                            <div  class="inner-inner" style="background:#f07d26">  
                                <a target="_blank" href="https://www.arrkgroup.com/approach/cloudmarrk-cloud-managed-services/" class="grid-info">
                                    <div class ="inner-text">
                                        <div class="inner-text-inner">
                                            <p>
                                                Managed<br/>Cloud<br/>Services
                                               
                                                <span>CloudmArrk<sup>TM</sup></span>
                                            </p>
                                        </div><!-- /.inner-text-inner -->
                                    </div><!-- /.inner-text -->
                                </a><!-- /.grid-info -->
                            </div><!-- /.inner-inner -->
                        </div><!-- /.inner -->
                    </div><!-- /.grid-item -->
                    
                    <div class="grid-item repeat-animation">
                        <div class="inner">
                            <div  class="inner-inner" style="background:#f07d26">  
                                <a target="_blank" href="https://www.arrkgroup.com/approach/arrkademy/" class="grid-info">
                                    <div class ="inner-text">
                                        <div class="inner-text-inner">
                                            <p>
                                                Training <br/>and<br/>Development
                                               
                                                <span>Arrkademy<sup>TM</sup></span>
                                            </p>

                                        </div><!-- /.inner-text-inner -->
                                    </div><!-- /.inner-text -->
                                </a><!-- /.grid-info -->
                            </div><!-- /.inner-inner -->
                        </div><!-- /.inner -->
                    </div><!-- /.grid-item -->
                    
                    <div class="grid-item repeat-animation invisible">
                        <div class="inner">
                            <div  class="inner-inner" style="background:#f07d26">  
                                <a target="_blank" href="#" class="grid-info">
                                    <div class ="inner-text">
                                        <div class="inner-text-inner">
                                           
                                        </div><!-- /.inner-text-inner -->
                                    </div><!-- /.inner-text -->
                                </a><!-- /.grid-info -->
                            </div><!-- /.inner-inner -->
                        </div><!-- /.inner -->
                    </div><!-- /.grid-item -->
                    <div class="grid-item repeat-animation invisible">
                        <div class="inner">
                            <div  class="inner-inner" style="background:#f07d26">  
                                <a target="_blank" href="#" class="grid-info">
                                    <div class ="inner-text">
                                        <div class="inner-text-inner">
                                           
                                        </div><!-- /.inner-text-inner -->
                                    </div><!-- /.inner-text -->
                                </a><!-- /.grid-info -->
                            </div><!-- /.inner-inner -->
                        </div><!-- /.inner -->
                    </div><!-- /.grid-item -->
                    <div class="grid-item repeat-animation invisible">
                        <div class="inner">
                            <div  class="inner-inner" style="background:#f07d26">  
                                <a target="_blank" href="#" class="grid-info">
                                    <div class ="inner-text">
                                        <div class="inner-text-inner">
                                           
                                        </div><!-- /.inner-text-inner -->
                                    </div><!-- /.inner-text -->
                                </a><!-- /.grid-info -->
                            </div><!-- /.inner-inner -->
                        </div><!-- /.inner -->
                    </div><!-- /.grid-item -->
            </section><!-- /.hex-grid -->
	</div>
</div>
<?php
return ob_get_clean();
}

add_shortcode( 'hexagrid', 'hexa_grid' );

?>