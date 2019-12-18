<?php

class ImageUpload
{

    /** ** @var string - diretorio do upload */
    private $pasta;
    /** * * @var array - tipos aceitos */
    private $tipos = array('jpg', 'jpeg', 'png');

    /** * * @var int - largura da foto w */
    private $largura;
    /** ** @var array- dados que eu preciso  pra gravar no banco  */
    public $retorno;

    /**
     *
     * @param string - $tmp  nome temporario
     * @param string $novo_nome - novo nome da foto
     * @param int - $largura- largura da nova imagem
     * @param string - $pasta - pasta para upload
     * @return string: nova foto
     */
    protected function Resize($tmp, $novo_nome, $largura, $pasta)
    {

        // cria uma imagem a partir da temporaria
        $img = imagecreatefromjpeg($tmp);
        // altura e largura
        $x = imagesx($img);
        $y = imagesy($img);
        $altura = ($largura * $y) / $x;
        // nova imagem
        $nova_img = imagecreatetruecolor($largura, $altura);
        imagecopyresampled($nova_img, $img, 0, 0, 0, 0, $largura, $altura, $x, $y);

        // definir nova imagem e sua qualidade
        imagejpeg($nova_img, $pasta . $novo_nome, 95);
        imagedestroy($nova_img);
        imagedestroy($img);

        return $novo_nome;
    } // fim do metodo upload

    /**
     * @param int - $largura largura da imagem em px
     * @param int - $produto ID do produto
     */
    public function Upload($largura, $campo)
    {

        //pega a pasta raiz do upload //
        $this->pasta = Rotas::get_SiteRAIZ() . '/' . Rotas::get_ImagePasta();
        $time = date('ymdHis');

        // verifico se passou o POST com campo $_FILES
        if (!empty($_FILES)):

            // pego o temp file   pro_img
            $temp = $_FILES[$campo]['tmp_name'];

            //  verificando o tamanho da imagem
            $tam = getimagesize($temp);

            // pego o tamanho real e verifico se é maior que o tamanho que quero
            if ($tam[0] > $largura):
                // se foi maior eu reduzo para $largura passada
                $this->largura = $largura;

            else:
                // se for pequena deixo to tamanho que é
                $this->largura = $tam[0];

            endif;
            //verificando os tipos de arquivo
            $arquivo_info = pathinfo($_FILES[$campo]['name']);

            // obtendo a extensão do arquivo
            $ext = $arquivo_info['extension']; // jpg

            // define um novo nome // 137184087-1238921716-1-1-0536c34ec06798e5.jpg

            // minha foto da maçã.jpg  /  170517142050minha-foto-da-maca.jpg
            $imagem = Sistema::GetSlug($time . $_FILES[$campo]['name']) . "." . $ext;
            // alvo final da foto //  htdocs/media/images/137184087-1238921716-1-1-0536c34ec06798e5.jpg
            $destino = $this->pasta . $imagem;

            //verificando os tipos de arquivo
            if (in_array(strtolower($arquivo_info['extension']), $this->tipos)):

                // fazendo o upload, caso seja JPG passo pelo método resize, caso não jogo direto  'png'
                if ($ext == 'jpeg'):
                    $this->Resize($temp, $imagem, $this->largura, $this->pasta);

                else:
                    // se não for JPG não passo pelo $this->Resize
                    move_uploaded_file($temp, $destino);

                endif;

                // retorno os dados // 137184087-1238921716-1-1-0536c34ec06798e5.jpg
                $this->retorno = $imagem;

                return true;

            else:
                // se o tipo de arquivo for incorreto
                echo 'Arquivo inválido';
                // retorno os dados
                $this->retorno = 'Tipo de arquivo incorreto';

                return false;

            endif; // fim da verificação do array tipo de arquivos

        endif;
        // fim do IF existe $_files[]

    } // fim do upload five

}