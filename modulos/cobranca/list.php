<h2>Cobrança - Iniciar Cobrança</h2><br>
<div id="tablewrapper">

	<div id="tableheader">

		<div class="search">
			<select id="columns" onchange="sorter.search('query')"></select>
			<input type="text" id="query" onkeyup="sorter.search('query')"/>
		</div>

		<span class="details" style="margin-top: 18px;">
			<div>Entradas <span id="startrecord"></span>-<span id="endrecord"></span> de <span id="totalrecords"></span></div>
			<div><a href="javascript:sorter.reset()">resetar</a></div>
		</span>

	</div>
	<div class="teste">
		<table cellpadding="0" cellspacing="0" border="0" id="table" class="tinytable">
			<thead>
				<tr>
					<th><h3>ID</h3></th>
					<th><h3>TIPO</h3></th>
					<th><h3>VALOR</h3></th>
					<th><h3>PAGAMENTO</h3></th>
					<th><h3>STATUS</h3></th>
					<th width="50"><h3>ADICIONADO</h3></th>
					<th width="50"><h3>ATUALIZADO</h3></th>
					<th width="100"><h3>DETALHE</h3></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td align="left">100447</td>
					<td align="left">QUEBRA ACIDENTAL</td>
					<td align="left">R$ 1,00</td>
					<td align="left">R$ 0,00</td>
					<td align="center">Em aberto</td>
					<td align="center">19/05/2021</td>
					<td align="center">Atualizar</td>
					<td align="center">
						<a href="#">
							<i class="fas fa-edit"></i> Detalhe
						</a>
					</td>
				</tr>				
			</tbody>
		</table>
	</div>

	<div id="tablefooter">

		<div id="tablenav">
							<!--
							<div class="tablenav_img">
								<img src="componentes/tinytable/images/first.gif" width="16" height="16" alt="First Page"
									 onclick="sorter.move(-1,true)"/>
								<img src="componentes/tinytable/images/previous.gif" width="16" height="16" alt="First Page"
									 onclick="sorter.move(-1)"/>
								<img src="componentes/tinytable/images/next.gif" width="16" height="16" alt="First Page"
									 onclick="sorter.move(1)"/>
								<img src="componentes/tinytable/images/last.gif" width="16" height="16" alt="Last Page"
									 onclick="sorter.move(1,true)"/>
							</div>
						-->
						<div>
							<select id="pagedropdown"></select>
						</div>
						<div class="tablenav_a">
							<a href="javascript:sorter.showall()">ver tudo</a>
						</div>
					</div>

					<div id="tablelocation">
						<div>
							<span>Páginas: </span>
							<select onchange="sorter.size(this.value)">
								<option value="100" selected="selected">100</option>
								<option value="150">150</option>
								<option value="200">200</option>
								<option value="250">250</option>
								<option value="300">300</option>
							</select>
						</div>
						<div class="page">Mostrando <span id="currentpage"></span> de <span id="totalpages"></span></div>
					</div>
	</div>
</div>				