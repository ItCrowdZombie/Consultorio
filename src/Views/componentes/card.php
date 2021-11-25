<?php

echo "<section id='SectionCitas' class='row justify-content-center'>
        <div class='card w-50'>
          <div class='card-body'>
            <h5 class='card-title'>{$cita->usuario}</h5>
            <p class='card-text'>{$cita->consulta}</p>
            <a href='?action=delete&id={$cita->id}' class='btn btn-primary'>Delete</a>
            <a href='?action=modify&id={$cita->id}'class='btn btn-danger'>Modify</a>
          </div>
        </div>
        </section>";