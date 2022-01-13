<?php
// Header
include_once 'includes/header.php';
?>

<div class="row">
	<div class="col s12 m8 push-m2">
		<h3 class="light"> Clientes </h3>
		<table class="striped">
			<thead>
				<tr>
					<th>Nome:</th>
					<th>Sobrenome:</th>
					<th>Email:</th>
					<th>Idade:</th>
				</tr>
			</thead>
            <tbody>
                <tr>
                    <td>Jefferson</td>
                    <td>Ventura</td>
                    <td>jefferson@gmail.com</td>
                    <td>21</td>
                    <td><a href="" class="btn-floating green"><i class="material-icons">edit</i></td>
                    <td><a href="" class="btn-floating red"><i class="material-icons">delete</i></td>
                </tr>
            </tbody>
            </table>
            <br>
            <a href="" class="btn">Adicionar cliente</a>
    </div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>