<?php
foreach ($data->locais as $local) {
    if ($local->tabelas->modelo4 === true) {
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
                            <td class="cel-verde">Acesso Normal</td>
                            <td class="">Promocional couvert art + água ou refri + entrada (surpresa)</td>
                            <td class="">Reserva Vip</td>
                        </tr>
                        <tr>
                            <td class="">QUI/SEX</td>
                            <td class="">R$ 35,00</td>
                            <td class="">R$ 0,00</td>
                        </tr>
                        <tr>
                            <td class="">SAB/DOM</td>
                            <td class="">R$ 35,00</td>
                            <td class="">R$ 0,00</td>
                        </tr>
                    </table>
        
                    <table>
                        <tr>
                            <td class="cel-azul">Acesso Exclusivo (Magic Fast Pass)</td>
                            <td class="">Promocional couvert art + água ou refri + entrada (surpresa)</td>
                            <td class="">Reserva Vip</td>
                        </tr>
                        <tr>
                            <td class="">QUI/SEX</td>
                            <td class="">R$ 35,00</td>
                            <td class="">R$ 0,00</td>
                        </tr>
                        <tr>
                            <td class="">SAB/DOM</td>
                            <td class="">R$ 35,00</td>
                            <td class="">R$ 0,00</td>
                        </tr>
                    </table>		
        
                    <table>
                        <tr>
                            <td class="cel-azul" rowspan="2">Horário</td>
                            <td class="">QUI/SEX</td>
                            <td class="">Das 17:30 às 20:00</td>
                        </tr>
                        <tr>
                            <td class="">SAB/DOM</td>
                            <td class="">Das 10:30 às 20:30</td>
                        </tr>
                    </table>
                </div>
            </div>
        ';
    }
}
?>