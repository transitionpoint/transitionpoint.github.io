		<!--Begin of sidebar-->
        <div class="sidebar">
        	<div class="contact_form">
            	<div class="contact_form_top_left">
                    <div class="contact_form_top_right">
                        <div class="contact_form_bottom_left">
                            <div class="contact_form_bottom_right">
                            	<div class="contact_form_inner">
                                	<h3>Conatact Form</h3>
                                    <div class="contact_form_hint" id="hint">Use the form below to contact us and we well try to reach you as soon as possible</div>
                                    <form action="" id="wr" name="wr" class="index_contact_form">
                                    	<div class="contact_form_inner_form">
                                        	<div class="index_contact_form_title">Name</div>
                                            <input type="text" name="name" id="form_name" />
                                            <div class="index_contact_form_title">Email</div>
                                            <input type="text" name="email" id="form_email" />
                                            <div class="index_contact_form_title">Website</div>
                                            <input type="text" name="website" id="form_website" />
                                        	<div class="index_contact_form_title">Message</div>
                                            <textarea name="message" id="form_message" cols="" rows=""></textarea>
                                           <input type="button" value="Send" class="contact_form_submit" onclick="initrequest('<?php bloginfo('template_url'); ?>/contact.php');" />
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>	
            </div>
            <ul>
            	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(1) ) : ?>
            	<?php endif; ?>
            </ul>
        </div>
        <!--End of sidebar-->



