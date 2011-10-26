<form class="plain" action="<?php echo url_for('pay_cash_flow') ?>" method="post">
    <div id="box1" class="box altbox"><!-- box full-width -->
        <div class="boxin">

            <div class="header">
                <h3><?php echo __('Listado de pagos pendientes', array(), 'messages') ?></h3>
            </div>

            <div class="content"><!-- content box 1 for tab switching -->
                    <table cellspacing="0">
            <thead><!-- universal table heading -->
                <tr>
                    <td style="width:1px;"></td>
                    <td>Descripión</td>
                    <td>Monto</td>
                </tr>
            </thead>
            
            <tbody>
                    <?php
                    if($pendingPays[0]->getAmount())
                    {
                        $i = 0;
                        foreach($pendingPays AS $pendingPay)
                        {
                            $odd = fmod(++$i, 2) ? 'odd' : 'even';
                    ?>
                    <tr id="cash_<?php echo $pendingPay['id'] ?>" class="<?php if ($i == 1): ?>first <?php endif; ?><?php echo $odd ?>">
                        <td class="tc checkboxes">
                            <input type="checkbox" name="ids[]" value="<?php echo $pendingPay->getId() ?>" class="checkbox" />
                        </td>
                        <td><?php echo $pendingPay->getConcept() ?></td>
                        <td><?php echo $pendingPay->getAmount() ?> </td>
                    </tr>
                    <?php
                        $i++;
                        }
                    }
                    else
                    {
                    ?>
                    <tr>
                        <td colspan="3">Este socio no posee pagos pendientes.</td>
                    </tr>
                    <?php
                    }
                    ?>
               
            </tbody>
            
            <tfoot><!-- table foot - what to do with selected items -->
                <tr>
                    <td colspan="6"><!-- do not forget to set appropriate colspan if you will edit this table -->
                        <input class="button altbutton" type="submit" value="Pagar seleccionadas" />
                    </td>
                </tr>
            </tfoot>
            
        </table>
                    
            </div><!-- .content#box-1-holder -->
        </div>
    </div>
</form>