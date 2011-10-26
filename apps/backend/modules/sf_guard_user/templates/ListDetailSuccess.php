<form class="plain" action="<?php echo url_for('pay_cash_flow') ?>" method="post">
    <div id="box1" class="box altbox"><!-- box full-width -->
        <div class="boxin">

            <div class="header">
                <h3>Detalles del usuario</h3>
            </div>
            <div class="content"><!-- content box 1 for tab switching -->
            <h1 style="font-size: 16px;font-weight: bold;padding: 10px;">Pagos Pendientes</h1>
            <table cellspacing="0">
            <thead><!-- universal table heading -->
                <tr>
                    <td style="width:1px;"></td>
                    <td>Descripión</td>
                    <td>Fecha de emisión</td>
                    <td>Monto</td>
                </tr>
            </thead>
            
            <tbody>
                    <?php
                    if($pendingPays->count())
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
                        <td><?php echo date('d.m.Y', strtotime($pendingPay->getCreatedAt())) ?></td>
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
        <h1 style="font-size: 16px;font-weight: bold;padding: 10px;">Pagos Efectuados</h1>
            <table cellspacing="0">
            <thead><!-- universal table heading -->
                <tr>
                    <td>Descripión</td>
                    <td>Pagado el</td>
                    <td>Monto</td>
                </tr>
            </thead>
            
            <tbody>
                    <?php
                    if($canceledPays->count())
                    {
                        $i = 0;
                        foreach($canceledPays AS $canceledPay)
                        {
                            $odd = fmod(++$i, 2) ? 'odd' : 'even';
                    ?>
                    <tr id="cash_<?php echo $canceledPay['id'] ?>" class="<?php if ($i == 1): ?>first <?php endif; ?><?php echo $odd ?>">
                        <td><?php echo $canceledPay->getConcept() ?></td>
                        <td><?php echo date('d.m.Y', strtotime($pendingPay->getUpdatedAt())) ?></td>
                        <td><?php echo $canceledPay->getAmount() ?> </td>
                    </tr>
                    <?php
                        $i++;
                        }
                    }
                    else
                    {
                    ?>
                    <tr>
                        <td colspan="3">Este socio no posee pagos cancelados.</td>
                    </tr>
                    <?php
                    }
                    ?>
               
            </tbody>
            
        </table>
            <h1 style="font-size: 16px;font-weight: bold;padding: 10px;">Tickets</h1>
            <table cellspacing="0">
            <thead><!-- universal table heading -->
                <tr>
                    <td>Número de ticket</td>
                    <td>Asunto</td>
                    <td>Abierto el</td>
                    <td>Respuestas</td>
                    <td>Estado</td>
                    <td>Detalle</td>
                </tr>
            </thead>
            
            <tbody>
                    <?php
                    if($tickets->count())
                    {
                        $i = 0;
                        foreach($tickets AS $ticket)
                        {
                            $odd = fmod(++$i, 2) ? 'odd' : 'even';
                    ?>
                    <tr id="cash_<?php echo $ticket['id'] ?>" class="<?php if ($i == 1): ?>first <?php endif; ?><?php echo $odd ?>">
                        <td width="1"><?php echo $ticket->getId() ?></td>
                        <td><?php echo link_to($ticket->getSubject(), 'ticket_show', array('id'=>$ticket->getId())) ?></td>
                        <td><?php echo date('d.m.Y', strtotime($ticket->getCreatedAt())) ?></td>
                        <td><?php echo $ticket->getNbReplies() ?> </td>
                        <td><?php echo ($ticket->getIsOpen()) ? "Abierto" : "Cerrado" ?> </td>
                        <td><?php echo link_to('<input class="button altbutton" type="button" value="Ver detalle" />', 'ticket_show', array('id'=>$ticket->getId()))?></td>
                    </tr>
                    <?php
                        $i++;
                        }
                    }
                    else
                    {
                    ?>
                    <tr>
                        <td colspan="3">Este socio no posee tickets.</td>
                    </tr>
                    <?php
                    }
                    ?>
               
            </tbody>
            
        </table>
            <h1 style="font-size: 16px;font-weight: bold;padding: 10px;">Encuestas</h1>
            <table cellspacing="0">
            <thead><!-- universal table heading -->
                <tr>
                    <td>Nombre</td>
                    <td>Opción elegida</td>
                    <td>Fecha de voto</td>
                </tr>
            </thead>
            
            <tbody>
                    <?php
                    if($polls->count())
                    {
                        $i = 0;
                        foreach($polls AS $poll)
                        {
                            $odd = fmod(++$i, 2) ? 'odd' : 'even';
                            //$opcion1 = $poll->getPollOptions();
                    ?>
                    <tr id="cash_<?php echo $poll['id'] ?>" class="<?php if ($i == 1): ?>first <?php endif; ?><?php echo $odd ?>">
                        <td><?php echo $poll->getPollOption()->getPoll()->getTitle(); ?></td>
                        <td><?php echo $poll->getPollOption()->getTitle(); ?></td>
                        <td><?php echo date('d.m.Y', strtotime($poll->getCreatedAt())) ?></td>
                    </tr>
                    <?php
                        $i++;
                        }
                    }
                    else
                    {
                    ?>
                    <tr>
                        <td colspan="3">Este socio no participo de encuestas.</td>
                    </tr>
                    <?php
                    }
                    ?>
               
            </tbody>
            
        </table>
        <h1 style="font-size: 16px;font-weight: bold;padding: 10px;">Cursos</h1>
        <table cellspacing="0">
            <thead>
                <tr>
                    <td>Curso</td>
                    <td>Iniciado</td>
                    <td>Asistencias</td>
                    <td>Creado</td>
                </tr>
            </thead>
            <tbody>
                    <?php
                    if($courses->count())
                    {
                        $i = 0;
                        foreach($courses AS $course)
                        {
                            $odd = fmod(++$i, 2) ? 'odd' : 'even';
                            //$opcion1 = $poll->getPollOptions();
                    ?>
                    <tr id="cash_<?php echo $course['id'] ?>" class="<?php if ($i == 1): ?>first <?php endif; ?><?php echo $odd ?>">
                        <td><?php echo $course->getCourse()->getTitle(); ?></td>
                        <td><?php echo $course->getCourse()->getCreatedAt(); ?></td>
                        <td><?php echo $course->getNbAsist(); ?></td>
                        <td><?php echo date('d.m.Y', strtotime($course->getCourse()->getCreatedAt())) ?></td>
                    </tr>
                    <?php
                        $i++;
                        }
                    }
                    else
                    {
                    ?>
                    <tr>
                        <td colspan="3">Este socio no esta inscripto en ningun curso.</td>
                    </tr>
                    <?php
                    }
                    ?>
            </tbody>
        </table>   
            </div><!-- .content#box-1-holder -->
        </div>
    </div>
</form>