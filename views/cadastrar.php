<?php include('_header.php'); ?>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
                    <span class="anchor" id="formLogin"></span>
                    <div class="card card-outline-secondary" style="margin-top: 40px;">
                        <div class="card-header">
                            <h3 class="mb-0">Cadastro</h3>
                        </div>
                        <div class="card-body">
                        	<?php if(!empty($msg)): ?>
							<div class="warning">
								<?php echo $msg; ?>
							</div>
							<?php endif; ?>
                            <form method="POST">
                            	<div class="row">
                            		<div class="col-md-6 col-xs-6">
		                                <div class="form-group">
		                                    <label for="nome">Nome</label>
		                                    <input type="text" class="form-control" name="nome" id="nome" required="required">
		                                </div>
		                            </div>   
		                            <div class="col-md-6 col-xs-6"> 
		                                <div class="form-group">
		                                    <label for="email">Email</label>
		                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" required="">
		                                </div>
	                                </div>
	                            </div>    
	                            <div class="row">  
		                            <div class="col-md-6 col-xs-6">
		                                <div class="form-group">
		                                    <label>Senha</label>
                                    		<input type="password" class="form-control" name="pass" id="senha" required="required">
		                                </div>
		                            </div>
	                            </div>
	                            <div class="row">
		                            <div class="col-md-6 col-xs-6">
		                                <div class="form-group">
		                                    <button type="submit" class="btn btn-form btn-lg" style="width: 185px;margin-top: 23px;" id="btnLogin">Cadastrar</button>
		                                </div>
		                            </div>
	                            </div>
                            </form>
                        </div>
                        <!--/card-body-->
                    </div>
                    <!-- /form card login -->
			<!-- <div class="card">
			  <div class="card-body">
			    <div class="card-header">
                    <h3 class="mb-0">Login</h3>
                </div>
				    <?php if(!empty($msg)): ?>
					<div class="warning">
						<?php echo $msg; ?>
					</div>
					<?php endif; ?>
			    <form method="POST">
					<div class="form-group">
					    <label for="exampleInputEmail1">Email address</label>
					    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
					    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
					  </div>
					  <div class="form-group">
					    <label for="exampleInputPassword1">Password</label>
					    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
					</div>

					<input type="submit" value="Cadastrar" />
				</form>
			    <a href="#" class="btn btn-primary">Button</a>
			  </div>
			</div> -->
			
		</div>
	</div>
<?php include('_footer.php'); ?>