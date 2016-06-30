<?php
	 //Inclui a casa mPDF, responsável por converter o código HTML
	 include('mpdf60/mpdf.php');

	 //Extrai os dados do HTML gerado pelo código PHP no final do HTML
	 $filename = "code.html";
	 $html = file_get_contents($filename);
	 $mpdf = new mPDF('', 'A4', 10, 'DejaVuSansCondensed'); //Atribui definições de tamanho do papel, fonte e estilo

	 //A conversão dos caracteres é apenas ativada quando for necessário
	 $mdpf->allow_charset_conversion = true; //Ativa a conversão
	 $mpdf->charset_in = 'windows-1252'; //Codifica o arquivo $filename
	 
	 //Definição das propriedades do documento gerado em PDF
	 $mpdf->SetAuthor('Raabe'); //Autor
	 $mpdf->SetSubject("Curriculo via download em pdf gerado no site portfoliop.esy.es"); //Assunto
	 $mpdf->SetTitle('Curriculum_Raabe'); //Título do pdf
	 $mpdf->SetCreator('Raabe'); //Criador

	 //Proteção para o PDF dando permissão apenas para ser impresso - opcional, apenas para teste
	 $mpdf->SetProtection(array('print'), '', '223344');

	 //Gerador do PDF
	 $mpdf->WriteHTML($html, 0); //Carrega o conteúdo do HTML que gerará o PDF
	 $mpdf->Output("curriculum.pdf", 'D'); //Cria o arquivo 'curriculum.pdf' e usa 'D' para forçar Download
	 unlink($filename); //Apaga o HTML que gerou o pdf
	 ob_clean(); //Descarta o buffer do processo atual
	 exit(); 
?>