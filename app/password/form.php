<div class="wrap-login100">
				<form class="login100-form validate-form"  id="password_" name="password_" action="" method="POST">
					<!--<span class="login100-form-title p-b-26">
						Welcome
					</span>-->
					<input type="hidden" value="<?php echo $token; ?>" name='token'>
					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>

					<div class="wrap-input100" data-validate="Informe sua senha" >
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="pass1" id="pass" required>
						<span class="focus-input100" data-placeholder="Nova Senha"></span>
					</div>

					<div class="wrap-input100" data-validate="Repita sua senha" >
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="pass2" id="pass" required>
						<span class="focus-input100" data-placeholder="Repita Senha"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" name="loginEntrar" id="loginEntrar" class="login100-form-btn">
								Atualizar
							</button>
						</div>
					</div>

					
					
				</form>
			</div>