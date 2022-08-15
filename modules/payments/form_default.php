<?php
// require_once($_SESSION['raiz'] . '/modules/sections/role-access-admin.php');
?>
<div class="form-gridview">
	<table class="default">
        <div class="content-title-table">
        <h3 class="title-table">Tipo de pago</h3>

        </div>
		<?php
		if ($_SESSION['total_groups'] != 0) {
			echo '
                
					<tr>
						<th>ID</th>
						<th>Nombre</th>
						<th>Descripción</th>
                        <th>Monto</th>
						<th class="center"><a class="icon">visibility</a></th>
						<th class="center"><a class="icon">edit</a></th>
			';
			if ($_SESSION['permissions'] != 'student') {
				echo '
						<th class="center"><a class="icon">delete</a></th>
				';
			}
			echo '
					</tr>
			';
		}
		?>
		<?php
                    for ($i = 0; $i < $_SESSION['total_groups']; $i++) {
                        echo '
                                <tr>
                                    <td>' . $_SESSION["group"][$i] . '</td>
                                    <td>' . $_SESSION["group_name"][$i] . '</td>
                                    <td>' . $_SESSION["group_subject"][$i] . '</td>
                                    <td>' . $_SESSION["group_subject"][$i] . '</td>

                                    <td>
                                        <form action="" method="POST">
                                            <input style="display:none;" type="text" name="txtgroup" value="' . $_SESSION["group"][$i] . '"/>
                                            <button class="btnview" name="btn" value="form_consult" type="submit"></button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="" method="POST">
                                            <input style="display:none;" type="text" name="txtgroup" value="' . $_SESSION["group"][$i] . '"/>
                                            <button class="btnedit" name="btn" value="form_update" type="submit"></button>
                                        </form>
                                    </td>';
                        if ($_SESSION['permissions'] != 'student') {
                            echo '
                                            <td>
                                                <form action="" method="POST">
                                                    <input style="display:none;" type="text" name="txtgroup" value="' . $_SESSION["group"][$i] . '"/>
                                                    <button class="btndelete" name="btn" value="form_delete" type="submit"></button>
                                                </form>
                                            </td>
                                        ';
                        }
                        echo '
                                </tr>
                            ';
                    }
    ?>
	</table>

    
	<?php
	if ($_SESSION['total_groups'] == 0) {
		echo '<img src="/images/404.svg" class="data-not-found" alt="404">';
	}
	?>
	<div class="pages">
		<ul>
			
		</ul>
	</div>
</div>
<div class="content-aside">
	<?php
	include_once '../notif_info.php';
	include_once "../sections/options.php";
	?>
</div>

<div class="form-gridview">
	<table class="default">
        <div class="content-title-table">
        <h3 class="title-table">Pagos registrados</h3>

        </div>
		<?php
		if ($_SESSION['total_groups'] != 0) {
			echo '
                
					<tr>
						<th>Nombre alumno</th>
						<th>CURP</th>
						<th>Correo</th>
                        <th>Concepto</th>
						<th class="center"><a class="icon">visibility</a></th>
						<th class="center"><a class="icon">edit</a></th>
			';
			if ($_SESSION['permissions'] != 'student') {
				echo '
						<th class="center"><a class="icon">delete</a></th>
				';
			}
			echo '
					</tr>
			';
		}
		?>
		<?php
                    for ($i = 0; $i < $_SESSION['total_groups']; $i++) {
                        echo '
                                <tr>
                                    <td>' . $_SESSION["group"][$i] . '</td>
                                    <td>' . $_SESSION["group_name"][$i] . '</td>
                                    <td>' . $_SESSION["group_subject"][$i] . '</td>
                                    <td>' . $_SESSION["group_subject"][$i] . '</td>

                                    <td>
                                        <form action="" method="POST">
                                            <input style="display:none;" type="text" name="txtgroup" value="' . $_SESSION["group"][$i] . '"/>
                                            <button class="btnview" name="btn" value="form_consult" type="submit"></button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="" method="POST">
                                            <input style="display:none;" type="text" name="txtgroup" value="' . $_SESSION["group"][$i] . '"/>
                                            <button class="btnedit" name="btn" value="form_update" type="submit"></button>
                                        </form>
                                    </td>';
                        if ($_SESSION['permissions'] != 'student') {
                            echo '
                                            <td>
                                                <form action="" method="POST">
                                                    <input style="display:none;" type="text" name="txtgroup" value="' . $_SESSION["group"][$i] . '"/>
                                                    <button class="btndelete" name="btn" value="form_delete" type="submit"></button>
                                                </form>
                                            </td>
                                        ';
                        }
                        echo '
                                </tr>
                            ';
                    }
    ?>
	</table>

    
	<?php
	if ($_SESSION['total_groups'] == 0) {
		echo '<img src="/images/404.svg" class="data-not-found" alt="404">';
	}
	?>
	<div class="pages">
		<ul>
			
		</ul>
	</div>
</div>

