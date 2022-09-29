<?php
foreach ($data->locais as $local) {     
    if ($local->tabelas->modelo3 === true) {
        echo'
            <div class="local '.$local->sigla.' '.$local->ativo.'">
                <h1>HORÁRIOS E VALORES - '.$local->sigla.'</h1>
                <h2>
                    '.$local->horarios->linha1.'
                    <br>
                    '.$local->horarios->linha2.'
                </h2>
                
                <div class="modelo-3">
                    <table>
                        <tr>
                            <td class="cel-amarela">Dias e Sessões</td>
                            <td class="cel-amarela">QUI e SEX - 17h30, e 20h00</td>
                        </tr>
                        <tr>
                            <td class="cel-azul">Magic Fast Pass (Acesso Exclusivo)</td>
                            <td class="cel-verde">Acesso Normal</td>
                        </tr>
                        <tr>
                            <td>Combo VIP</td>
                            <td>Combo VIP</td>
                        </tr>
                        <tr>
                            <td>Show, Entrada e Prato Principal</td>
                            <td>Show, Entrada e Prato Principal</td>
                        </tr>
                        <tr>
                            <td>De R$ 124,90 por R$ 94,90</td>
                            <td>De R$ 114,90 por R$ 84,90</td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td class="cel-amarela">Dias e Sessões</td>
                            <td class="cel-amarela">SÁB e DOM - 10h30</td>
                        </tr>
                        <tr>
                            <td class="cel-azul">Magic Fast Pass (Acesso Exclusivo)</td>
                            <td class="cel-verde">Acesso Normal</td>
                        </tr>                        
                        <tr>
                            <td>Promocional Pré Venda Show + Café da Manhã</td>
                            <td>Promocional Pré Venda Show + Café da Manhã</td>
                        </tr>
                        <tr>
                            <td>R$ 99,90</td>
                            <td>R$ 89,90</td>
                        </tr>
                    </table>                    
                    <table>
                        <tr>
                            <td class="cel-amarela" rowspan="2" colspan="2">Dias e Sessões</td>
                            <td class="cel-amarela" colspan="2">SÁB - 20h30</td>
                        </tr>
                        <tr>
                            <td class="cel-amarela" colspan="2">DOM - 18h e 20h30</td>
                        </tr>
                        <tr>
                            <td class="cel-azul" colspan="2">Magic Fast Pass (Acesso Exclusivo)</td>
                            <td class="cel-verde" colspan="2">Acesso Normal</td>
                        </tr>
                        <tr class="colunas-4">
                            <td>Combo Premium</td>
                            <td>Combo VIP</td>
                            <td>Combo Premium</td>
                            <td>Combo VIP</td>
                        </tr>
                        <tr class="colunas-4">
                            <td>Show, Entrada, Prato Principal e Sobremesa</td>
                            <td>Show, Entrada, Prato Principal</td>
                            <td>Show, Entrada, Prato Principal e Sobremesa</td>
                            <td>Show, Entrada, Prato Principal</td>
                        </tr>
                        <tr class="colunas-4">
                            <td>De R$ 139,90 por R$ 109,90</td>
                            <td>R$ 99,90</td>
                            <td>De R$ 109,90 por R$ 79,90</td>
                            <td>R$ 69,90</td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td class="cel-amarela" rowspan="2" colspan="2">Dias e Sessões</td>
                            <td class="cel-amarela" colspan="2">SÁB - 13h, 15h30, 18h</td>
                        </tr>
                        <tr>
                            <td class="cel-amarela" colspan="2">DOM - 13h, 15h30</td>
                        </tr>
                        <tr>
                            <td class="cel-azul" colspan="2">Magic Fast Pass (Acesso Exclusivo)</td>
                            <td class="cel-verde" colspan="2">Acesso Normal</td>
                        </tr>
                        <tr class="colunas-4">
                            <td>Combo Premium</td>
                            <td>Combo VIP</td>
                            <td>Combo Premium</td>
                            <td>Combo VIP</td>
                        </tr>
                        <tr class="colunas-4">
                            <td>Show, Entrada, Prato Principal e Sobremesa</td>
                            <td>Show, Entrada, Prato Principal</td>
                            <td>Show, Entrada, Prato Principal e Sobremesa</td>
                            <td>Show, Entrada, Prato Principal</td>
                        </tr>
                        <tr class="colunas-4">
                            <td>De R$ 149,90 por R$ 119,90</td>
                            <td>R$ 119,90</td>
                            <td>De R$ 139,90 por R$ 109,90</td>
                            <td>R$ 99,90</td>
                        </tr>
                    </table>
                </div>
            </div>
        ';
    }

    if ($local->tabelas->modelo4 === true) {
        echo'
            <div class="local '.$local->sigla.' '.$local->ativo.'">
                <h1>HORÁRIOS E VALORES - '.$local->sigla.'</h1>
                <h2>
                    '.$local->horarios->linha1.'
                    <br>
                    '.$local->horarios->linha2.'
                </h2>
                
                <table class="modelo4">
                    <tr>
                        <td class="first" rowspan ="2">Dias e Sessões</td>
                        <td class="first">QUI E SEX</td>
                        <td class="first">SÁB E DOM</td>
                    </tr>
                    <tr>
                        <td class="">17h30 e 20h00</td>
                        <td class="">10h30 - 13h00 - 15h30 - 18h00 e 20h30</td>
                    <tr>
                        <td class="">Consumação (Sem cobrança de Couvert Artístico)</td>
                        <td>R$ 50,00</td>
                        <td>R$ 60,00</td>
                    </tr>
                </table>
            </div>
        ';
    }
}
?>