<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>e-mail</title>
</head>
<body style="margin:0; padding:0;" bgcolor="#F0F0F0" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

        <!-- 100% background wrapper (grey background) -->
        <table border="0" width="100%" height="100%" cellpadding="0" cellspacing="0" bgcolor="#F0F0F0">
            <tr>
                <td align="center" valign="top" bgcolor="#F0F0F0" style="background-color: #F0F0F0;">

                    <br>

                    <!-- 600px container (white background) -->
                    <table border="0" width="600" cellpadding="0" cellspacing="0" class="container" style="width:600px;max-width:600px">
                        <tr>
                            <td class="container-padding header" align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:24px;font-weight:bold;padding-bottom:12px;color:#17396D;padding-left:24px;padding-right:24px;color:#00AD8E">
                                <p style="display: block; margin: 0 auto;">Reeduca Cursos</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="container-padding content" align="left" style="padding-left:24px;padding-right:24px;padding-top:12px;padding-bottom:12px;background-color:#ffffff">
                                <br>

                                <div class="title" style="font-family:Helvetica, Arial, sans-serif;font-size:18px;font-weight:600;color:#374550">Olá {{ $nome }}!</div>
                                <br>

                                <div class="body-text" style="font-family:Helvetica, Arial, sans-serif;font-size:14px;line-height:20px;text-align:left;color:#333333">
                                    <p>Seu pagamento foi aprovado!</p>
                                    <p>Antes de tudo, queremos agradecer pela confiança. Pode ter certeza que estamos fazendo o nosso melhor para você aprender muito durante todo esse processo.</p>
                                    <p>Para acessar a nossa plataforma digital basta <a href="reeduca.amtsol.com.br/moodle">clicar aqui</a></p>
                                    <p>
                                        Para seu primeiro acesso foi gerado um usuário e senha automaticamente.<br>
                                        <b>Usuário:</b> {{ $usuario }}<br>
                                        <b>Senha temporária: </b>{{ $senha }}
                                    </p>
                                    <hr>
                                    <table style='width: 100%'>
                                        <tr>
                                            <td>STATUS:</td>
                                            <td style='color: #00AD8E; text-align: center;'>✓ Aguardando Pagamento</td>
                                            <td style='color: #00AD8E; text-align: center;'>✓ Processando</td>
                                            <td style='color: #00AD8E; text-align: right;'>✓ Concluído</td>
                                        </tr>
                                    </table>

                                </div>
                            </td>
                        </tr>
                    </table>
                    <!--/600px container -->


                </td>
            </tr>
        </table>
        <!--/100% background wrapper-->

    </body>
</html>
