 <div class="row">
                            <div class="col-lg-6">
                                <!-- Bootstrap Forms Validation -->
                                <h2 class="section-title">Add Category</h2>
                                <div class="card">
                                    <div class="card-header">
                                        <!-- <h4>Validation</h4> -->
                                        <ul class="card-actions">
                                            <li>
                                                <button type="button"><i class="ion-more"></i></button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-block">
                                        <!-- jQuery Validation (.js-validation-bootstrap class is initialized in js/pages/base_forms_validation.js) -->
                                        <!-- For more examples please check https://github.com/jzaefferer/jquery-validation -->
                                        <form class="js-validation-bootstrap form-horizontal" action="base_forms_validation.html" method="post">
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="val-username">Username <span class="text-orange">*</span></label>
                                                <div class="col-md-7">
                                                    <input class="form-control" type="text" id="val-username" name="val-username" placeholder="Choose a nice username..." />
                                                </div>
                                            </div>


                                            
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="val-suggestions">Suggestions <span class="text-orange">*</span></label>
                                                <div class="col-md-8">
                                                    <textarea class="form-control" id="val-suggestions" name="val-suggestions" rows="8" placeholder="Share your ideas with us.."></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="val-skill">Best Skill <span class="text-orange">*</span></label>
                                                <div class="col-md-7">
                                                    <select class="form-control" id="val-skill" name="val-skill">
                    									<option value="">Please select</option>
                    									<option value="html">HTML</option>
                    									<option value="css">CSS</option>
                    									<option value="javascript">Javascript</option>
                    									<option value="ruby">Ruby</option>
                    									<option value="php">PHP</option>
                    									<option value="asp">ASP.NET</option>
                    									<option value="python">Python</option>
                    									<option value="mysql">MySQL</option>
                    								</select>
                                                </div>
                                            </div>
                                         
                                           
                                            <div class="form-group m-b-0">
                                                <div class="col-md-8 col-md-offset-4">
                                                    <button class="btn btn-app" type="submit">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- .card-block -->
                                </div>
                                <!-- .card -->
                                <!-- Bootstrap Forms Validation -->
                            </div>
                            <!-- .col-lg-6 -->

                   

                        </div>