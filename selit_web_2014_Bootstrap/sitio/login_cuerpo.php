<?
     /** \file CuerpoLogin.php
     * \Esta incluido en N_login.php, primera pantalla
     * \note Resuelve MD5 y llama a ExecLog.php
     */
    
		?>

                       <script language="javascript">
                       function Validar2(){
  alert('aca estoy cuerpo');
}</script>


		     					<!------------------ Comienzo del login form ----------------- -->				


					<tr height=285>
                   <td >
                       <Center>
	             					<!------------------ Comienzo del login form ----------------- -->
    			               	<FORM action="login.php" method=post name=login_form onSubmit="Validarotro();" autocomplete="off">
				                	<table>
                			     		<TR>
		                        		<td>
                                            <TABLE>
                                            <tr>
                                                <td>
                                                    <center>
													<h5 style="color:#FF5C00">
													Para uso exclusivo de la Direcci&oacute;n Nacional de Vialidad
													</h5>
													<br/>

                                                    <TABLE width="70%">
                                                    <TR>
                                                        <TD align=right noWrap><strong style="font-size:12px">Nombre de Usuario:</strong></TD>
                                                        <TD align=left><INPUT style="border:1px solid; font-size:12px" name=user size=15></TD>
                                                    </TR>
                                                    <TR>
                                                        <TD align=right noWrap><strong style="font-size:12px">Contraseña:</strong></TD>
                                                        <TD align=left><INPUT style="border:1px solid; font-size:12px" name=pass size=15 type=password></TD>
                                                    </TR>
                                                    <TR style="border:5px solid" >
                                                        <td >
                                                        <!--Para acomodar el boton-->
                                                        </td>
                                                        <TD align="left"><INPUT class="button small blue" name=.save type=submit value=Entrar></TD>
                                                        <INPUT type=hidden name=md5 value=none>
                                                    </TR>
                                                    </TABLE>
					     	
						    <div style="font-family: Trebuchet MS; font-size: 13px; font-style: italic">
 					                </br>
                					Recomendamos utlizar como mavegador Google Ghrome.
					                </br>
                					Link de descarga <a href="https://www.google.com/intl/es/chrome/browser/?hl=es" target="_blank">aqui</a>
					            </div>	
							
                                                    </center>
                                                </td>
                                            </tr>
                                            </table>
                                        </td>
                                        </TR>
                					</table>
                     			</FORM>
   						 </Center>
        		 	    </td>
				   </tr>

<?
  //	}//Fin function Mostrar.-
//}//Fin clase.-
?>


