
            
                    <h1>Contato</h1>

                    <form action="Contato.php" method="POST" id="Contato" name="Contato">


                        <table border="0">
                            <tr>
                                <td class="tituloCampo"> Nome: </td>
                                <td><input class="formInput" required type="text" id="nome" name="nome" value="" placeholder="Digite seu nome"></td>
                            </tr>
                            <tr>
                                <td class="tituloCampo"> RG: </td>
                                <td><input class="formInput" required type="text" id="rg" name="rg" value="" placeholder="Digite seu RG"></td>
                            </tr>
                            <tr>
                                <td class="tituloCampo"> CPF: </td>
                                <td><input class="formInput" required type="text" id="cpf" name="cpf" value="" placeholder="Digite seu CPF"></td>
                            </tr>
                            <tr>
                                <td class="tituloCampo">Sexo: </td>
                                <td>
                                    <input type="radio" id="sexoM" name="sexo" value="M"> Masculino
                                    <input type="radio" id="sexoF" name="sexo" value="F"> Feminino
                                </td>
                            </tr>
                            <tr>
                                <td class="tituloCampo"> Data de nascimento: </td>
                                <td>
                                    <input class="formInput" required type="date" id="dtnascimento" name="dtnascimento" value="" placeholder="Digite sua data de nascimento ">
                                </td>
                            </tr>
                            <tr>
                                <td class="tituloCampo"> Endereço: </td>
                                <td><input class="formInput" required type="text" id="endereco" name="endereco" value="" placeholder="Digite seu endereço"></td>
                            </tr>

                            
                            <tr>
                                    <td class="tituloCampo"> Você tem estação de rádio móvel ou base?: </td>
                                    <td>
                                        <select required name="radio" id="radio">
                                                <option> - </option>
                                                <option>Sim</option>
                                                <option>Nao </option>                                                
                                                
                                        </select>
                                    </td>
                            </tr>

                            <tr>
                                    <td class="tituloCampo"> Classe: </td>
                                    <td>
                                        <select required name="classe" id="classe">
                                                <option> - </option>
                                                <option>A</option>
                                                <option>B </option>
                                                <option>C</option>
                                                
                                        </select>
                                    </td>
                            </tr>

                            <tr>
                                <td class="tituloCampo"> Quantidade de estações móveis: </td>
                                <td><input class="formInput" required type="text" id="qtd" name="qtd" value="" placeholder=""></td>                                
                            </tr>



                            <tr>
                                <td class="tituloCampo"> Indicativo: </td>
                                <td><input class="formInput" required type="text" id="indicativo" name="indicativo" value="" placeholder="Digite seu indicativo"></td>                                
                            </tr>

                            


                            <tr>
                                    <td class="tituloCampo"> Cidade: </td>
                                    <td>
                                        <select required name="cidade" id="cidade">
                                                <option> - </option>
                                                <option>Três Corações</option>
                                                <option>Cambuquira </option>
                                                <option>Varginha</option>
                                                <option>São Paulo</option>
                                                <option>Rio de Janeiro</option>
                                                <option>Belo Horizonte</option>
                                                <option>Pouso Alegre</option>
                                                <option>Curitiba</option>
                                                <option>Salvador</option>
                                        </select>
                                    </td>
                            </tr>
                            <tr>
                                    <td class="tituloCampo"> Estado: </td>
                                    <td>
                                        <select required name="estado"id="estado">
                                                <option> - </option>
                                                <option>MG</option>
                                                <option>RJ</option>
                                                <option>SP</option>
                                                <option>PR</option>
                                                <option>ES</option>
                                                <option>AM</option>
                                                <option>BA</option>
                                                
                                        </select>
                                    </td>
                            </tr>


                            <tr>
                                    <td class="tituloCampo"> Pais: </td>
                                    <td>
                                        <select required name="pais" id="pais">
                                                <option> - </option>
                                                <option> Brasil </option>
                                                <option> Argentina </option>
                                                <option> Paraguay </option>
                                                <option> Chile </option>
                                                <option> Venezuela </option>
                                                <option> Panamá </option>
                                                <option> EUA </option>
                                                <option> Uruguai </option>
                                                <option> Colombia </option>
                                                
                                        </select>
                                    </td>
                            </tr>

                            <tr>
                                    <td class="tituloCampo"> Faz parte do Movimento Escoteiro?: </td>
                                    <td>
                                        <select required name="escoteiro" id="escoteiro">
                                                <option> - </option>
                                                <option>Sim</option>
                                                <option>Nao </option>                                                
                                                
                                        </select>
                                    </td>
                            </tr>

                            <tr>
                                <td class="tituloCampo"> Caso faça parte qual seu GE?: </td>
                                <td><input class="formInput" required type="text" id="grupo" name="grupo" value="" placeholder="Digite o nome do seu GE"></td>                                
                            </tr>

                            <tr>
                                    <td class="tituloCampo"> Faz parte da RENER <h6>(Rede Nacional de Emergência de Radioamadores)</h6> </td>
                                    <td>
                                        <select required name="classe" id="classe">
                                                <option> - </option>
                                                <option>Sim</option>
                                                <option>Não</option>
                                                
                                                
                                        </select>
                                    </td>
                            </tr>

                             <tr>
                                    <td class="tituloCampo"> Anexar: </td>
                                    <td>
                                    	<input type="file" name="anexo" id="anexo">
                                        
                                    </td>
                            </tr>



                            
                            
                            
                            <tr>
                                <td></td>
                                <td>
                                    <input type="submit" name="enviar" value="Submeter">
                                </td>
                            </tr>
                            
            
                        </table>
                        <img src="https://blog.pluga.co/uploads/2017/10/como-elaborar-um-formulario-de-pesquisa.png">
                    </form>
           