    <div class="container row p-3 mb-3">
    <?php
    foreach($appointments as $appointment)
    {
        //se pinta registros obtenidos de la tabla 
        $template = "
        <div class = 'col'>  
            <div class='card' style='width: 18rem;'>
                <div class='card-body'>
                    <p class='card-text'>{$appointment->name}</p>
                    <p class='card-text'>{$appointment->lastName}</p>
                    <p class='card-text'>{$appointment->identification}</p>
                    <p class='card-text'>{$appointment->dateBirth}</p>
                    <p class='card-text'>{$appointment->city}</p>
                    <p class='card-text'>{$appointment->district}</p>
                    <p class='card-text'>{$appointment->cellPhone}</p>
                    <a href= 'http://localhost/WEBII/CitasCodeignater/controlClinica/deleteAppointment?id={$appointment->id}'card-link' class='float-right btn btn-danger'>DELETE</a>
                    <a href= 'http://localhost/WEBII/CitasCodeignater/controlClinica/updateAppointment?id={$appointment->id}'card-link' class='btn btn-success'>UPDATE</a>
                </div>
            </div>
        </div>";
    echo $template;
    }
    ?>
    </div>