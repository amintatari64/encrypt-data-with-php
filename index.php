<?php
function encrypt($data){
        $data = str_replace('0','000;',$data);
        $data = str_replace('1','111;',$data);
        $data = str_replace('2','121;',$data);
        $data = str_replace('3','131;',$data);
        $data = str_replace('4','141;',$data);
        $data = str_replace('5','151;',$data);
        $data = str_replace('6','161;',$data);
        $data = str_replace('7','171;',$data);
        $data = str_replace('8','181;',$data);
        $data = str_replace('9','191;',$data);
        $data = str_replace('a','21;',$data);
        $data = str_replace('b','22;',$data);
        $data = str_replace('c','23;',$data);
        $data = str_replace('d','24;',$data);
        $data = str_replace('e','25;',$data);
        $data = str_replace('f','26;',$data);
        $data = str_replace('g','27;',$data);
        $data = str_replace('h','28;',$data);
        $data = str_replace('i','29;',$data);
        $data = str_replace('j','30;',$data);
        $data = str_replace('k','31;',$data);
        $data = str_replace('l','32;',$data);
        $data = str_replace('m','33;',$data);
        $data = str_replace('n','34;',$data);
        $data = str_replace('o','35;',$data);
        $data = str_replace('p','36;',$data);
        $data = str_replace('q','37;',$data);
        $data = str_replace('r','38;',$data);
        $data = str_replace('s','39;',$data);
        $data = str_replace('t','40;',$data);
        $data = str_replace('u','41;',$data);
        $data = str_replace('v','42;',$data);
        $data = str_replace('w','43;',$data);
        $data = str_replace('x','44;',$data);
        $data = str_replace('y','45;',$data);
        $data = str_replace('z','46;',$data);
        $data = str_replace('A','47;',$data);
        $data = str_replace('B','48;',$data);
        $data = str_replace('C','49;',$data);
        $data = str_replace('D','50;',$data);
        $data = str_replace('E','51;',$data);
        $data = str_replace('F','52',$data);
        $data = str_replace('G','53;',$data);
        $data = str_replace('H','54;',$data);
        $data = str_replace('I','55;',$data);
        $data = str_replace('J','56;',$data);
        $data = str_replace('K','57;',$data);
        $data = str_replace('L','58;',$data);
        $data = str_replace('M','59;',$data);
        $data = str_replace('N','60;',$data);
        $data = str_replace('O','61;',$data);
        $data = str_replace('P','62;',$data);
        $data = str_replace('Q','63;',$data);
        $data = str_replace('R','64;',$data);
        $data = str_replace('S','65;',$data);
        $data = str_replace('T','66;',$data);
        $data = str_replace('U','67;',$data);
        $data = str_replace('V','68;',$data);
        $data = str_replace('W','69;',$data);
        $data = str_replace('X','70;',$data);
        $data = str_replace('Y','71;',$data);
        $data = str_replace('Z','72;',$data);
        $data = str_replace('.','73;',$data);
        $data = str_replace('@','74;',$data);
        return $data;
    }


function unencrypt($data){
        $datae = explode(';',$data);
        foreach($datae as $datae){
                if($datae == '000'){
                        $data = str_replace($datae,'0',$data);
                }
                if($datae == '111'){
                        $data = str_replace($datae,'1',$data);
                }
                if($datae == '121'){
                        $data = str_replace($datae,'2',$data);
                }
                if($datae == '131'){
                        $data = str_replace($datae,'3',$data);
                }
                if($datae == '141'){
                        $data = str_replace($datae,'4',$data);
                }
                if($datae == '151'){
                        $data = str_replace($datae,'5',$data);
                }
                if($datae == '161'){
                        $data = str_replace($datae,'6',$data);
                }
                if($datae == '171'){
                        $data = str_replace($datae,'7',$data);
                }
                if($datae == '181'){
                        $data = str_replace($datae,'8',$data);
                }
                if($datae == '191'){
                        $data = str_replace($datae,'9',$data);
                }
                if($datae == '21'){
                        $data = str_replace($datae,'a',$data);
                }
                if($datae == '22'){
                        $data = str_replace($datae,'b',$data);
                }
                if($datae == '23'){
                        $data = str_replace($datae,'c',$data);
                }
                if($datae == '24'){
                        $data = str_replace($datae,'d',$data);
                }
                if($datae == '25'){
                        $data = str_replace($datae,'e',$data);
                }
                if($datae == '26'){
                        $data = str_replace($datae,'f',$data);
                }
                if($datae == '27'){
                        $data = str_replace($datae,'g',$data);
                }
                if($datae == '28'){
                        $data = str_replace($datae,'h',$data);
                }
                if($datae == '29'){
                        $data = str_replace($datae,'i',$data);
                }
                if($datae == '30'){
                        $data = str_replace($datae,'j',$data);
                }
                if($datae == '31'){
                        $data = str_replace($datae,'k',$data);
                }
                if($datae == '32'){
                        $data = str_replace($datae,'l',$data);
                }
                if($datae == '33'){
                        $data = str_replace($datae,'m',$data);
                }
                if($datae == '34'){
                        $data = str_replace($datae,'n',$data);
                }
                if($datae == '35'){
                        $data = str_replace($datae,'o',$data);
                }
                if($datae == '36'){
                        $data = str_replace($datae,'p',$data);
                }
                if($datae == '37'){
                        $data = str_replace($datae,'q',$data);
                }
                if($datae == '38'){
                        $data = str_replace($datae,'r',$data);
                }
                if($datae == '39'){
                        $data = str_replace($datae,'s',$data);
                }
                if($datae == '40'){
                        $data = str_replace($datae,'t',$data);
                }
                if($datae == '41'){
                        $data = str_replace($datae,'u',$data);
                }
                if($datae == '42'){
                        $data = str_replace($datae,'v',$data);
                }
                if($datae == '43'){
                        $data = str_replace($datae,'w',$data);
                }
                if($datae == '44'){
                        $data = str_replace($datae,'x',$data);
                }
                if($datae == '45'){
                        $data = str_replace($datae,'y',$data);
                }
                if($datae == '46'){
                        $data = str_replace($datae,'z',$data);
                }
                if($datae == '47'){
                        $data = str_replace($datae,'A',$data);
                }
                if($datae == '48'){
                        $data = str_replace($datae,'B',$data);
                }
                if($datae == '49'){
                        $data = str_replace($datae,'C',$data);
                }
                if($datae == '50'){
                        $data = str_replace($datae,'D',$data);
                }
                if($datae == '51'){
                        $data = str_replace($datae,'E',$data);
                }
                if($datae == '52'){
                        $data = str_replace($datae,'F',$data);
                }
                if($datae == '53'){
                        $data = str_replace($datae,'G',$data);
                }
                if($datae == '54'){
                        $data = str_replace($datae,'H',$data);
                }
                if($datae == '55'){
                        $data = str_replace($datae,'I',$data);
                }
                if($datae == '56'){
                        $data = str_replace($datae,'J',$data);
                }
                if($datae == '57'){
                        $data = str_replace($datae,'K',$data);
                }
                if($datae == '58'){
                        $data = str_replace($datae,'L',$data);
                }
                if($datae == '59'){
                        $data = str_replace($datae,'M',$data);
                }
                if($datae == '60'){
                        $data = str_replace($datae,'N',$data);
                }
                if($datae == '61'){
                        $data = str_replace($datae,'O',$data);
                }
                if($datae == '62'){
                        $data = str_replace($datae,'P',$data);
                }
                if($datae == '63'){
                        $data = str_replace($datae,'Q',$data);
                }
                if($datae == '64'){
                        $data = str_replace($datae,'R',$data);
                }
                if($datae == '65'){
                        $data = str_replace($datae,'S',$data);
                }
                if($datae == '66'){
                        $data = str_replace($datae,'T',$data);
                }
                if($datae == '67'){
                        $data = str_replace($datae,'U',$data);
                }
                if($datae == '68'){
                        $data = str_replace($datae,'V',$data);
                }
                if($datae == '69'){
                        $data = str_replace($datae,'W',$data);
                }
                if($datae == '70'){
                        $data = str_replace($datae,'X',$data);
                }
                if($datae == '71'){
                        $data = str_replace($datae,'Y',$data);
                }
                if($datae == '72'){
                        $data = str_replace($datae,'Z',$data);
                }
                if($datae == '73'){
                        $data = str_replace($datae,'.',$data);
                }
                if($datae == '74'){
                        $data = str_replace($datae,'@',$data);
                }
        }
        $data = str_replace(';','',$data);
        return $data;
}
$code = encrypt('aMINtatari64@gmail.Com');
echo $code;
echo '<br>'.'<br>';
echo (unencrypt($code));
?>