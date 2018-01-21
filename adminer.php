<?php
/** Adminer - Compact database management
* @link https://www.adminer.org/
* @author Jakub Vrana, https://www.vrana.cz/
* @copyright 2007 Jakub Vrana
* @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license https://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 4.4.0
*/error_reporting(6135);$Mc=!preg_match('~^(unsafe_raw)?$~',ini_get("filter.default"));if($Mc||ini_get("filter.default_flags")){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$X){$Yh=filter_input_array(constant("INPUT$X"),FILTER_UNSAFE_RAW);if($Yh)$$X=$Yh;}}if(function_exists("mb_internal_encoding"))mb_internal_encoding("8bit");if(isset($_GET["file"])){if($_SERVER["HTTP_IF_MODIFIED_SINCE"]){header("HTTP/1.1 304 Not Modified");exit;}header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");header("Cache-Control: immutable");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
lzw_decompress("\0\0\0` \0„\0\n @\0´C„è\"\0`EãQ¸àÿ‡?ÀtvM'”JdÁd\\Œb0\0Ä\"™ÀfÓˆ¤îs5›ÏçÑAXPaJ“0„¥‘8„#RŠT©‘z`ˆ#.©ÇcíXÃþÈ€?À-\0¡Im? .«M¶€\0È¯(Ì‰ýÀ/(%Œ\0");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo
lzw_decompress("\n1Ì‡“ÙŒÞl7œ‡B1„4vb0˜Ífs‘¼ên2BÌÑ±Ù˜Þn:‡#(¼b.\rDc)ÈÈa7E„‘¤Âl¦Ã±”èi1ÌŽs˜´ç-4™‡fÓ	ÈÎi7†³é†„ŽŒFÃ©”vt2ž‚Ó!–r0Ïãã£t~½U'3M€ÉW„B¦'cÍPÂ:6T\rc£A¾zr_îWK¶\r-¼VNFS%~Ãc²Ùí&›\\^ÊrÀ›­æu‚ÅŽÃžôÙ‹4'7k¶è¯ÂãQÔæhš'g\rFB\ryT7SS¥PÐ1=Ç¤cIèÊ:d”ºm>£S8L†Jœt.M¢Š	Ï‹`'C¡¼ÛÐ889¤È ŽQØýŒî2#8Ð­£’˜6mú²†ðjˆ¢h«<…Œ°«Œ9/ë˜ç:Jê)Ê‚¤\0d>!\0Z‡ˆvì»në¾ð¼o(Úó¥ÉkÔ7½sàù>Œî†!ÐR\"*nSý\0@P\"Áè’(‹#[¶¥£@g¹oü­’znþ9k¤8†nš™ª1´I*ˆô=Ín²¤ª¸è0«c(ö;¾Ã Ðè!°üë*cì÷>ÎŽ¬E7DñLJ© 1Èä·ã`Â8(áÕ3M¨ó\"Ç39é?Ee=Ò¬ü~ù¾²ôÅîÓ¸7;ÉCÄÁ›ÍE\rd!)Âa*¯5ajo\0ª#`Ê38¶\0Êí]“eŒêˆÆ2¤	mk×øe]…Á­AZsÕStZ•Z!)BR¨G+Î#Jv2(ã öîc…4<¸#sB¯0éú‚6YL\r²=£…¿[×73Æð<Ô:£Šbx”ßJ=	m_ ¾ÏÅfªlÙ×t‹åIªƒHÚ3x*€›á6`t6¾Ã%UÔLòeÙ‚˜<´\0ÉAQ<P<:š#u/¤:T\\> Ë-…xJˆÍQH\nj¡L+jÝzðó°7£•«`ÝðŽ³\nkƒƒ'“NÓvX>îC-TË©¶œ¸†4*L”%Cj>7ß¨ŠÞ¨¨è-ŽƒÈà2‡¹pÂ3Œ¢îb–àÙ¥°¨çÞv>ñœp\\²ŒÃê6_HˆÛ»CxïW†1OjùAwH7q£ \\ÉŽ#¨ÒÉ®ýrŒ4v=ŸnòvÑO‰–÷6‡gWpß×ù'eÚy¯—ŸÝ÷¡pî0#z6=ÙÖ€u¡º\\_Ä.¬â£>H<rÞ+cz%}®w÷ÈVˆA*€¸Ã—B>dR:\rê‰\rœðl\rÕ9´jð43•¸qm\rPN	ðØAãþ`ÅûÁµxoÃ¨m\rÁì8?ÔüÃõ,	E·,UèŒ‚âêìòŸ%z®Ê›¬5õ’ˆvÃìvE 86H0[C¼Lmj¨2D¨¢¦Óü,ì­°tÞ`W‰©æ,—PËRa@ÉŽ\$’Ò* @:yíµb/ Ì×tn! €15xkˆâJh©10 T¡Chee\rÌG(…Ct4Ž­ig¿xôbt‰‘n]?C„d¹W\"4D\rÕ”´¶7\0ÃÈŽ	…ÐnˆtI%å‚8 É`%|[¦ZÊà.bHb*4‚JÇ¾ˆêÒL…„`k3¦t„ÀºT–`ÖŸt'7DHÊDè%6¦´Ø³‚n'¦Ø°×‹Z^‘\$ŸÈ˜â]	âÞJs§C1p¼ÕvjÂÉªM€aº†# µØQQ (Ë2|Ë“õfÔ-hšW\$Ÿš3H:%„Ñ•êh\\V‘\$7‡_Ê:ÎŸiý@¨4OG(ð:¤¾‘@2äC»(ÎEgö`C\"\$üžÓ¤¼“JÑ2±\$9‡4dÊµ1 â”LQb.iõ\"¬´Èé:TÁX/A„¾@:¬T[«íf°œ	Ž©)cGP`ÚŽD“t(c¡Èú6w\0ÎË˜p²? tƒHx2‡žò¦úZŠ6aèÈ¢ê×\rƒ!JU¬yå²d~âI¡\rpN¨Å¨ÎâbôP‰’Œ¨Ú(Ò_u¡\ráœ‹/¨…%7…¦2Ã?BýŠý%Nö½D‚âvœ3sˆV@èWPG\"h%„·…®ßÈfÅ”\"’Nyp©0@šT•Á7‹ÜÂ§VÊ¿¹òì\0XÔZÎ°wq\\£CÈÅTq×gˆèõžÓßgU‰øxª_	ÅÌè.jŽžøIC\$1f<9bìà©Û[˜„`ç{ïŒŠŒ±nÔ`è–¦ÁÞÂÏn™áËfT-& Àà€™`dûJÌ+²ò,2·ItDW‘¢k%}.ÉòeHšS(F¦•ÅÒ~7RÛøg,zÏ\$6<¨Fz¶˜	<¢ÉýÞ ÅT cTÚx»‰£ïºpÂ,‹…–_P2²XîJ!l¾ÔO372À1‹'woº7»y¢´ZÓè#8òÖbÄY\rih…é„ÙO<O–]AÒ0ùS©éÐüÆ±zD9ÍR™ƒp-¹€Ù÷[¼§B‰Ù›' ì¸`ôM²:¥%™')ƒYuØKì9÷§x#Õ¦è¦+ÌB«é\nÀ	ù†™â´9ÞD ÉWªøV\\6»ÖÚnêÜ\rY«ƒ\n¼2qÜÉ†å·|ì.TÎ¸»²]×or­Ö+Öom\"›<ÈÞ|n{\$YV™ K8ƒìÝÃâPw¯ÊeB‡ è\0hC-UÜ™xbOä¹ßñõ«8 Ç*W’_˜òé3\"¤b~»\rÙ7²®;Í°íµ}jáµ\ndãƒ?äøþ­Ëm~ZK)ç‡a[#'v²_>å<¸æuÓš³eÌÅ¶¿=_†O£y3wå¼€XEØº@;ì–K­òJïŸå|ýÀö÷.ŒûkSígã(~kÒî€uèo«±ôe\$IÜÞ\$ßî\n˜.Km¢ÒÐtÃK!ï¶ÉËß:N‘ñ9KM‡4öÁ¨ïžÅºG–ƒrú'WÒ<˜3\rþZýq›¨<!Ü-¶ÈOÍ ë¹£°Øûê:R¼íÖ×û?Ó2OM–»£{¯£òúþkùÁïê÷ú|”&×´šäx®/«„+ÿh`_kÓµ†²÷9›æ~/žÿhŠÈ¤O(žÄèÆ\r©\0H°ëLRLDüãh6Å‚•‚¶B	¥ƒr€Úâ\r¨06£n¬0ApGð< FõÃp-ÐC@à\r\0àç´p_pcp?ãq ¿ÐX¨7ãE„phI-ú‰0E°eÐ|4@ï\nPdéò…iXI\0``f’JÁ```–3®x ßÐÕ\r€ê\rð‰pž°|¤yÅ7\rp‚© ØðóÐøŒÐü…±\0©À¿\r°÷Ðì_IX‘ì7	Ða\nðò— `)oð¡pÔàì)°­q:“ç‘8)­LÓâêÔ11‘\$…¥yp}qCñ\rñ_1AÍ<*zÈÙ0|yXCø­¢³ˆÌA*Ä€1FO`ÏÉÙH9bÒ‘\rñ©@Æ‘qoq³±»ÑÂ7Ç ØŽ0.€Q‹PÆÀŠ¸°ç\0¾ƒqÊšq±±qµP5pÿ1Ç Å±ÕÑ¿	7…5ÉÐ­Å°ÊÑWŒ\0Û± Ž\"÷	²=’3#pý\$RCì?\$ñ­¤ŠóbÁñýpõ&r&qÔŽ'Eü„°4ÿ	Y'r{p†\r`Ê0(²à[°5)FÏ ˆ['J÷(qœ7†2f`•’?p}’™1¹¯,Éro\0¿\"Á,0Ó,qa,ªœŒÒÝ-	,à¾\0Ï,ÒãRá-Rõ/’Õ-0Ñ`Ú‘j.²i“0S’ð5ÀÆ›2ñ)Ó2S)/±j™pÃ`G`…41éEß“K,Î&Pƒ1±\r51\n0\"Á&ˆâ˜ðæ Ks&•s<—ÉŒi#ÊÉ\$žÆ‚ß¢\n¯jú0Šÿ*â13Uqj©Ç9ð5-“§\nR÷9Ð5+Ó1:ðöeÒzÂ3~JŽL\rŠ—/2hÆ‘i=±Y.Ñl*ÓÌÐˆÔðƒá\$óû]:G\rSÿ0t”	@SÝ`e7éX8B8©X,&ò‘gä²Þ è	ÐTšŠ÷C@¦Á©¨¬@R6sp6Ëü010‚¯O\\GÃŒÂï>îÄAàÜ8bëCBƒ'BÂ?Cú\$8,´<TADDD²®½­`Nàú");}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("f:›ŒgCI¼Ü\n8œÅ3)°Ë7œ…'³‘”èu9„CyŒêm2›Ž‚ã‰ÔÊr<”á°ó¤F+ˆD‡gØ\n	„Í’øtÄXcƒ§ƒ¤Lìa9¡§1ì\$Ã<–DgôÐø|ŽG¤!Hî+Œˆ)eºXºn3\rÑ‰vg5Á`ôê„ú\"ªÄëñˆÕÞ…D’I¥©ì´äA6Ná˜Xvi¸Îˆ!†vf7Q©\0ªAž˜A9Œ'‘q„àp6Eã®\$YÈN‡1Hºti1™EíîÃp››…¨µðA˜Òéõ\"‹Q¤ç¯9g±Öü‡“9eMš8£1š¤çsú'QªÖk¶½ž÷‹¿êÜ…ØŸˆ¶0.sµï|kÓ<î`Ðç:’fê&Ë6#ÀÒáŒê,cz0Ü¢c2\\£©#XÊ<Px\nÂã*'º(°·/ÌH971\\>·¬|œ2Êä!ƒæ…!©ü{‰Ã\n@\$#Ä‡\"cHÌ!¨šrç\"¤ì§*ÇÒ¼Œ2…È«P0·!@¤2Œâ(ð88P/‚à¸Úá\\¹\"Ká\\Ý9càH„áHX„•Êt”‡á8A:Îòò@ô\ng2(:Z3ŒèpP4Œ”6)¨PNÎµ»-ÊÒÀÊÊd©VËáèzÀc È„ôhOJW5ØÝK7Ïó,†AÈ \rãXÒÝK£HÎ7ƒ#FÚpàk(AèÜ2ŽàPˆ0¨NwnL`éqÜ·@\\3¢×ct…v°òÚ\\èëb‘Jƒ}›g¿Qý¤7OAÚÅ5(ª™:ÝK¬;\$òpò+\$ã›ä4-’'fYÍÐN0Œe¾9ø€å‹ Áè`…àwmIÍ²¬ßiÆŠÜƒ(Š‡=“nc/ÒÙú@ÛF¸Ð:ƒ€æáxï§´¹“…ÈˆÎäÙ@Ü‡øÂ*‘Vó²1¯ŽÞ…0ÙÊ!\"5Øå•lÛL¾\r¬ì\$¶–¸lí¶n7±0xÏ[ÃxO¸íM°è<¡ÁpïP-U¸n¡ðûèçÅñ£Fò3ïa8bA¨Ê6ò²7#ƒ¸\\8\rü¸š2Çã\ràÝ?S¨Œ‚. ‘	Žr…‘É»–‡Ëñ“\0ÈçLcÏƒ¼>AÜ÷c§{Ë¤)<Úv7†Xà>C/£àÊŽª9ZP}m\\iV™§jEªjÔ\r²Íî£ Æ4ºÆ*¹VpV\nAx.(d=ð› \\·	]IÀ¡ú¿v6¿˜êm}ÍM’5—ø`hheµ–˜äj2ÇDÄÌ„¦ÐGˆ2<Ä„24\"ŸxPLcK±–\$ÅÔ¢‡¸a¹6ÄÀ¡@’ê\nÄ,j ’2Ž	13[Q42†@{Z¨p8!Ì-Åˆ©¢@x-ËCÈªiZCäAÔ¡0]É1WaôÚ‡0àCÒrÏ€þ/ÆøtAÔ}/å‡ £œ’±ˆD3ª\"*·—\0\nLé¥5¦Ð¼›A\\ŒO@¤2ÀNV!ýTFÐè¬e+²UÆ9î\"l¤AÝH20‰‡x^nˆk´2DË7d\nR’¤Jg`ÙàÞ®ÉšÅ,A²B“€èŽÜÐc\rjÅQLð{1	±‘@žg©drIÑâ]9ÉA¿r‡ƒ#,KsFt@¤ž”ÐÐr\r®ÒxÚØù‰ávz+)ã=çÈlŸmTÃpæ.ŸóàËP »A­\\ÈÖVxšÐ±\"Sá©zº‚@t\r¤íPÀPP(ò¶VêõJ©I1IèÈtOP©1#ÔÊÂàB\0ýXÀÈÁœtiü†u£×¢P%umÕK	•J¡n3Qù””#aL.’|7U€é:•”Ø“]º¹^H«\$#ž ¡˜7ÀyUêÉf\$%¤46`Vÿêª!«±°×fÃInuúR‡˜îùÃ˜uH2¯¤ÚöHÞ8sQqUXR†À­Ù\\¢‡ÄœOø]9ÍZ_TD¬6”Ã›§üg†È9ƒº×[Aƒf–’7zé]«ÄQMS+G,.·hš`ÛûCç4Ò²–*NÈªæ}ŸšVúÒÜ{5E@RIa–éM9«dêÕ’M·h‡2Æh{\ní¯3a¦·^Ga\\‹Aj·€¦ôâm.Hk²`¡9§è)]„§½×ä+BA0+ÌÏ¼%>n&Y€îµ®Cfl57\0Ô0Uð¶áª»¢y¡h0P[\rT<30—/ƒL0¡X˜:bˆaf¡ª\nŸáTNÊ7hÕ\$%TõEU«+óe!lYG%šAìõÎ†)áª,­Mg…2zÏ+TèífU²õÖëi†¯iÃ°ù'Ü<\0åî¦¸VŠ~Ükƒ“ØÞJ®ê^edüvlš<¢OxÙ\$*Æè4Ò²º5•pBíƒ{ª^ÐÂÂäUô^S'ê0bM1ªYHè¹Še>|+€î[b“u.ÃœÚH86¥æE?ªeèlPw¸>ù_ƒäƒ•á‡VÀ´¦âã¸!V÷ä1ððü–)3Ø›=M\$©CdV¢”GAdjtÃ¬õŽc†Z¦R‰?ª_lÏìY‹ƒ&+dø¶†J§µ(@{sžÊn}’ÚS ÛÂ~Ñ\r	Dò% ÈÁõm\$=Ù½7uØÙaãfÍ=¤ø\rÌÉ»Š%“=|øƒšÁÐ%¡÷h\n»±T«ò,•šÒÈ=âV‹'d¥aÉ¸@?æ+täðu3É5L½v?³ëË+Ú´úÎÉÔ¶^fïË‚¼…p~i–²åV­ÕúÚ×<Ã˜Ù…¯¼òãÕ;	péW+Àú»¤–‹W®o¹Û€Ý:üc¬ZVÖœ«×êUÌçodŽ‰†&pöW{-¨9EjJXe}âå ;[fÑ½\"Ô†‘Ñ°XÑé8©øìªª§¸`_˜T‹xÖ†ÊX«N•\rÌŒ\$@š¸&\rÁŠ;·¶2ŠJh?Özïaè”¾1']…ZN\rT[N°¦[J§·+«\"¡Ø‚‡PæÃJKïïæg0û2¾fw2kÃ†‚€ÐEC0,üh›Wj„ŠGë.Óùx²:¹.üá”3ßöÅým„%ÏÖl/âv@Ê-€RR…,ò”+`ê	æL€¢¸¯ ÂÓ¢,ÓíÉ°m`; ÂPmlŽÀÂXoæÀÂj ÌÅÔ	ø¦PV\rðZ]@®r\0ÐÐVõ\r»\\\"Ðn‚Ô-€jDïqGŠj¦LÀØÑ%nú†,»onøB@žƒ†k˜x‡\rð—	 îVàÂ‡Îèš%t\nM%´Ä¢ŠËNèâ’PœJ§˜­#¼YìU…v½0ôÝ-ö\rN^®ˆ€è]m½\rÌU1\\È¦ˆŽzèšeèëÒÂn¤¶ Òˆšê«â®¬Ä¯>¸îPUñJ¸,Ì¦¤È7@^`Â ô ¸j|`^P`HÀbRÑR¡è¾ˆåvààŽv«Ñ&¯Ñ,Ñ12Ëk`¶N¨ÌDÌn©ÎÁ±TnqX¦ñaQiÀÉu†‚ëŒÞÀÅ^R®½ÊØ^ØiØØ­Žìê³Ìž­¬ÛÏp!ˆ}ˆüŠÓ\nqÝ0øL\n…gPÝ\0QéX³\$0¢T)îã òu#„áí\\Ú@\\EŠ0Wel f*ò5#»#àaÃœ ‚\"Gð¢°²¥.»›\"\$`\rh~ð²‡ë˜ŽØ¹’Ä­ÖÝ†0¨«B‡°¨Yg\0#àÜ	¤,!ŠOEÀÝr¨Áï®¢D*Ý*‘@¶ñF¾‚€Š\0ÚklÎ”ò½Ò¤\"rÓäºUÍ‡)rÊN²£-ä¾*å*ºòDh‰&àÐ´.ÆÓŒtr]@[%rjRÅY.Ä³E´xàís ¬µñ;2¾êêñ1àÒÀ{3»	µ2\rÔÄíÚPq+(š‡2\0I(LÅ%BVÎ&ïÀÊ/\0F«VÓ1B'5íÎÝ±þ\$Å¼KåÏ3³JÝ“d¢-æ&sHäÓ–CB<!CÜ‰cŽ„LîÒÉž'r0Œ’4 `ä\r’)\$GÄ\$#\"RÜÄG2(Îí<BMB{î(8Ò4E\r<Èd`gl°\$LîØ È2)\"Ð<ˆÖiJG¢\nbZMŽLðÔ48\"Ð<Ã™>@\\\rO¬\r\0¨*­vDóäåT9CÎ3D\"ˆ×n,Ió¹<t2ãòFCò;òA?Eù\$’< c\$çh—ƒ»?'ˆˆ×4Dg\rnçìHBFIb0\\ÈA\"Z30µCŠJBÀª\$1ÏJ­@¡Iì6Ë±ŽJÅõ:Ãù;ò™)Dçô»/Ë#µI”+BóæcJ¦Õà‡;´3GFã\$œã„?4˜°«Vë±oô46ÔT—LÌ­NÀNä—àÖpåÔ\n€Ò\$,”ò]D”¾µ50öàY\$òc/hªù@­\"óèp=#ti\$ z€aPqNUt`q4_;Ç¾»ô)>-AC4%\n*ðuoGQßW…[âˆû´-~ààúoªúï³YàÎRÍ9Pò ¨»\\'°IÞ\rŽ?H	¶› R*åbK@Ù]5²àº˜ÕMdÕS^©×6JÒ‹ˆ¯ŒbÏ“\\Í¶­ S_td˜Mï`»`Í»a5` Õ\"ÑvÁ	ë:ª&™TÖ®/?n5P€ò—TãV@ïVŒú«‚;-[dS´ûôÚð´ß/j+3\r‘Ž¯‹˜¡nÄL·À¼¢±ró\nP5Ø‡“X‡kNÁâí\"Z@¨°ÑÞ¢WlJ[åC¶¨|€Ïjë°‘ÜlË|e¤	 Âa.¶í\r(Òû(ØcÈ¦êl-P°‚*\r°¼¶è™öì\\ Oo6÷o Ñ®ÑÅnonñ\$CEÖÓj¶Çkè\$w °—1l½jhÙm@Ïm–ÜêÐreW6ˆ`ép¨ÕnäÛqVÛq†YsÖÅtÖÞ®ˆ< Êü¼Ñ`t¯Èèg4\r€àG‡[9ò’eœ\0ŸlD2ÐòÝeD3\r\$ŽUõº{Õ¿[Å9-Ðªw¬ˆ’†%’ŠŒ y6{|c|¢|ñ‡YU¯\"Rg…ágÐç°š[ððè)èv\0çJ¬ç…JÁ‘”’ê,­îyKçlê¸2x¥bg€‚ñÎ‰\nCj@Y!X¹—xëUJŽlî Õm P#\rdjDÈ\reª\\F{\$^	¢JÀ%`ÑT^¤&’Løvrà~[åÃˆ\0™ˆ@áˆ‚LÍ|À‚.& \0ž@Ô%˜Ž’8ª ˜¯‹8¶ dÚ	£q„*ã`]‰OZ\n€ P u)€ªb+ˆ¨z[XQm´\\¬ó`G ðrøøf‚IømCë… ñb.Ïx\$ïZõån“ \" Eåà@|ƒa†àÊO@xó!“ wúÅg1…_•#‘¹VO‡h Pà@X\"B¨¥ô»•Ù–%%”%o–å@XOoŽ¸ž\$`ÞŽã…5ØhQ  	à¦\n•¶à‹š……”4‰Ž×Y‰Ìo@zÀN£ð\$@[t	<@\rÿàð¦žàZŸà[…‚B(v#™›øu™9ÄmÄÚ\0[œ¨€[öüPxØ}:±£ù›ÂgB„~ñ'\$ŸŸÇ.L3o@yZkèÀd€+{¤•ï¬Á\\18`ºzYKry}–Y\"ö 9ÿ£¬úY¤Hì ÂE@èR™)3¹,JÙ0\$ðèY8N°i	†¦uç³” O”yJ›Ù•(ÜR2á§9U¬‘´¤Æ¦ùˆWYr¨Òòø:'™(†uœB9ú”ZY„úÂòjD'yµ>¢29…sÆ„;¦ªò\0{Š`”\n`ž	À±û\"¬ÆN7ZŠaGY* Ë©P{×¤MÄë³'a³z’*©6RËÔC¤>¯E·†’Ù¯Ï*E˜fB\$dE¨=!·ë\0ŒžÃ¼žÀY“@ËAÙJeE±€¶-Ì¤)‹R´Œ³µr¹‹fÈX!,*òÜ¬óåd¸itJk\"²v¾`_híL€^\r2Î•Ý\$§'ˆ”8ÖF‡ûÆ¤ñâØÀø4GŽ\ràùQkŒJI›Í½z×÷5\$MîáVÔ±Jˆut>Q9ô ª\n@’£\0Û³cd•šOFÃŸ-»Â|*\rü.yŠ5^\rW5(øˆ–ž—L[ÚøæðûÁ Ô\räM M\\ƒ7…‘ñL\$È8-¾ï˜›Ï½+S=\0Ð˜ìÇ˜Y¤Z×À¸à\\V’PêX^¸h\\øi‚Öm;…›ò:ŽÛb('f?‘Z…˜¨C³Z‘³¢òªx§E\0Ð\"|ìÿFô Ç8€¾‘€P«|\"e“Ö©uVƒÛk†¹?‘Ìˆ”æz)* Xâ\rÏ·N°àñÔ%NÕ•´\"‡õ‹OíoR\0èÝ7ÔÝ&±ôEfpP.ëÔÓå–fÜvHtÝ.ûi”2ÂN”ý,#.øŠC7s¢TNõOzõë *®T*¢®§Ì·½ˆQOMBNì¼èfón(Süg©Q­uÕå)R–Ñj€ÜE’-£œÅ##\r¥±¤ví¥Eµ£W4v@o»®1dò)ßH\r=Î<ÍQO´`á÷6H CÌ9nÞº\rÓ§zz½¦2Å/BO˜KGÄ4Sœ	ðj\"Ô%‚½Õ3„G\"¯ØéœÇ~*ÍsáïV\$ú•Ü·G„Àqð„Ø-Fé…]Ž¢#e0† h€e\$äô\rŽªi‘Í)€bèòÉÊmÊ¶¨ØKàæûÈm>¬¾­Þ˜*Và¸ `\0‚eb®«i@‘eC7Çç ¸}°_ˆš.I£~ãP(ˆÿ=´g ¥ã{Fép`¨\rïŒAôò_žx\$@°IÅñ è8^4^\0eëŸ\0€ê5pg%Íò`Ê_bÛ©`*£˜ª_=ôÔ§Qðª4ÿXŸFu-B»âÿRÀq‚gØþ ÷Ø-Øø=!-ÚSë+¥Õó §Lo	öoLªK	:­Jžel[Þ,;	¸\\8/ôýõÇ WÃÅwÄ-Ã\n5÷ÅCÃ‡·±<Ü‡¨´š³›=‚Hœþ¹þ:´ÜäG˜Œìì¹ÜÒÁTž@ç*xy»‹÷0ƒ1ì;\$×l  çØÀPµ¯pÐ{Üº§93ðOÛÞB%Aœ	ï«={úsŸB3¦»\0£A¢_yƒ€XÒÂ\$ñ@+>dEáò‰¯,ˆ€LxÈœP±€,BhÈ2´¡ÅN§Èp~Éß(HÿðV?û)à®ÓÇàA4xáh*™ÿÃêÒ%ÁAuË‡ñÿÉBD¶Â2(üÇès	¤Û§U8ÀŒ+NÙHÎ‹Vúð:)ÄRÐ&8i~É'ú?ùåéƒ/q\nŸ†B×âÂ@j„iî›!¯£HJ>DÒ¸Á¤(!3eëøOøãô=A¬µE»y ê|“ú‹ˆ\n[ÓW†‚¸CžÀ €ttWè,£i(9™jHÉÆ:ÊTHÐåÙ—†eŽÊeRêxPN6±EÛ<!á „p8?-QŽf~{ŸP6A¢hB,+Óþ\0t\nî“urmáÞGB¼Q€à(m¡X“*eÖé#E÷Ö~L8_™AÎ9ðhäG*óñ‘]cÃ¤È8±‡ó¢ý†!`íçí{kqº‹Á¿Æ¦iQ€bº6õ‡ÔWCºpÉ_…ýG6ù·©Õ\nèóâXâRÇŠ\rIÐ6+óÂ0AâìDÉLëúA×ä:€\"ñ`l4dAÄå\rDx‡¤ßØ•‚qA­r)e_\$ZÎ\"€—¸ž¼&(‘RŠ8\"’BÖÅ6qOÁâ¤X¦‚*ÑRŠÌR¢Ò€ô¤­v,ÑvŠd8”Èzv¨uCíJQ¼–%%©6îÂ`*2!öUÂ¯Lò‡ú&Ñ ÀøagëØFÂÓVÌµ‚ÄDQÏ€xæÀ¤£áûa+ñðK±aè’)Çár<º	ÀÈà‰\$dVQ°\rôÇ~r„Æðwƒ¾©–ãfhÚŽ¢7 !M‘ø%1rD~ñ7%8	ÈR¸ã‹Q9±·Ž/Ã­ª*}T eUwš:P˜ð9Ñ&wC²ÿº| Í„5ò¢¬C¼{ÔÜù&„DVñ.%T\$¹œö?\$ä20¶£Ûé*QòŒ«tKe êFe3nÃ[ÎÞ%!S!uºì„NÎöôˆ±2mº¾À÷ y\0—D²ÎäJ|‚Åùù°å8¬_´¦”û°A3aWÔi5:mNÉ÷O’„–ö»‘ÈªnkuPJÞh·¥Ù® ›ÑqŠ©8”˜(5ÅÉH‘jIàí\$Žºƒa¥]À&T<—é/¢„:jp„,@VÁý¨,ÕÎuPûž?‡m”êÏXÂÀ@§`*hG®ç(Êœ!ÂŸ¡ªA'édà2wºîCm­žXX-m½‹@=”²xà6ýu¬ ÐRšT‰M„‰EÃ+h\"r¤x“¤^\"ÄbÊ’Er²aCÙhS†Rt€/h½ÀâÅ¤Êä`/?@ÝF¶'RfE7•ØV@ç+±¯ÊX2Î|²\$â‘K.N‡ë¹Å°ç”ê„´\r²{|Ÿe8¡ùnÉô&nyEÜúçòDÀÈÛ£,UbGd‰7p¦Ü¼Ð\$5tØÝ\"F&ee¹y}Dà'0¹Ø±%3DÀRÔÊÃ,‘îy—ÈSæX\r/mÌ¯Êˆ<E€Ñ :Dd”ó>\n#¾OdC¡½·äòaÄåüVâÔÈH|FÉÊN&²\"{v\"){Gpºq¶’)»åÛ0ðc¨W¦¸9Å“w\0UU¶1Í\0Lü6P¹p~É“)¸@s†Cá¢ˆ¸Ç’”\râœ/(µeøHI—·H,³2Œ1šöhBk†P\r+ÒØ§[†2àÉ-pÒMlˆêX¡Ë™l7„LxžLÉÂÃ!{‰Oë	‹°@1%8úÀe\"¬á‰9	Ã•ôs‡VcÜ\0Å8£ê%<kCÊÖˆµÒ*¦þsêÞé²’˜Íd'˜NjþGÁ9„î¤ µ\naTÄ •8{u ©†*Bæž\n¥ÔJŽ©ÏNv“·çF„rátØK[?àÔÖ¾“·ýO2u‡ÖžzJg¢.yÕÎ.{“®ž¤ê\rÝ;\$‡„²e\$0_À¼ÊòOù×ÎìžQÿX¬Ju˜Ç= çä '´ƒeÿtd7U‹–ˆ{þ;Fñ„\0001\$ƒ˜a)ã:Šs)MÂ—”Ìýfbªä'ÛÈ‘*Uˆˆ=¹þ¨Hèt|Ê>µ d¹%Vq©0›Il‘?@)	…\$‰¨… é×hP*DÕ‘ü‡‘ ÈþI.K`“‰€écàH@01ò‚S È¨™—CBPè¡d ØDôÌ°.“íò\$Oqé<€·E@¶‰è‰ôY(|H–6×;Ä(f—J`Î>0	 K(\0¤Vk`\n\rC2ÕæÊ>À|ôr£¤hÈž\\Ð¤-Ð	'•8	J—¹?¬â‡¹\\©L\0Ør'Ê®‚Ë5u¹hzß4±Ñ´À)	­hŽ‚`É«R˜)%ÀÂ`3ð²ÁV¥˜FÇ| ðò„b€Âîýð>-î˜\"oØGÉ9GÄ±˜\"—t% š1‚“EÊ¦¶ŠsV ÕeäÊ2(j“2'¡IÆ;D±Êž–e,ýÔy-‘'Ó|ÍãhIèùJ£–¶’Ôi#\rÊJMP˜÷!3M²n)ÐŠeÂ(Î:@à]J{œBžb\"£QÃ)º`fÓèÚâ5&P³Bf‘s¯âm-CFYGÐ5ŠøR€!:53ƒ8Öâ+\0œÈË¹F\n<Zä½Šî‚:(IW¤Dð×¨\"5f\\=Dôñ:Š“–µOª„Ê.è`b¤@aÉN’y±T4äàð¼ê–¦#Ú<7n1Š\0ÌP9°¸Žá¤¥n¤€.Â«ÂWO¶(ž€ÜÕ8E’.®£C\\`@nùÈþ}d1ž(fZ'ÎkY|‹2Ãfr¥¬d‹japê@3—Õ{	\0`a—k0!³\0´ ;'ÀQJ00Vœô§ %gÑLÞãoÑ4ì‘¶¬¸P”~+jÏ£H 2¥Rk]YQã‹¢Œ¤–Z+‡ýV†] ¤ì·L-Mëj~¦æ^ÐÜ£rª\n–@7\0öŠ€2®°RLÙÑ–NKeÛ®+-@ç\nä¼×Œq²·…z™YÐ¤˜T¶&08W‚÷(˜»d\\1Tê“P€7Uôf´\nÀCh1SJ›î§î\nv(ÿS+„ž¦ u©¸e¬”Êõ¶u–Djæ«aÁœ•ôuÑ>\rëiaÔ-VE\$a;]‰ë0Žäæ=ú;Â\n«pàÐD5Ý·ñ4+Íi‘oQ€.\0ºÇà?­eV†ùbQP?ˆ®Ø@~<ò3ÕÞ«VMMð¬ þÑÏ[H—›ˆÙ„Á¥€(Iï•:/`ÏF=¬\nFc§eîùR­Ù®Ìsþ/l½è`¢@Ï\0ÉÂµ˜¹CÑVÖ§¨²Ô>à-È¨¬‹˜ÕBÍè¦±Zülûõø\r÷²÷Œ{XCfûJÏîÎnÖ:ÔÀlôŠøH9³³¹«­\\±¡ô¸\\l©|8ùZzµïúÅ¢¬òc—,ŽÖS5}©ÚÒäöZ€¢Ðv…¢±\0\0Yh–ñ\"Ö«b‰édâ öX-L/ùom|`{<ÎÏT{r:©:S€-Ÿ˜GÀ_ŠÔZm«kkØj×eÈµÍ'&‚‚ÚÆµpüûB¼h–Ë¢Yˆ\0„Àˆ¶`Ñ 2³`ê•¬hÅu™|Jg]\\Jùo03ÕÆv«¡[LzBgep–`pè—©pHŒæ³J}¥&âgƒHlr˜ö!µô]m`âÙ:Ã-¼¨¯ò-h­Z«cR¬µÈ·ÉZ{\nˆ\$) o·6Ý—Ä°\$4²#ÉX·î6J%‘Õ´xõo]*àîN<xÜÙm	Ì‹a¬Ì¡ Ôp*¯¤	÷‡UÇÉ#2’ÍD½ÏM¸V[~:ößäñ¸Åª0–¢[á{s¡>µÙ.¯]¶à÷~»0Z.ópk±Áþïëß¼â¯\n{ÀÝéa¨=yl“®ßšœé« `µÔ•`…ÐUÈš± ‚fàY3YHË`0\$]êçWÐVÙ”ÑZ‚æ­C?ûQÖE¹·Š­u•Ë{¥0·8\$MÙ5óvÅjœP	èkŒ¬e<­ƒ0>‰z!(¦;zNº—ÖúÒUõÌÞ—¤ÑþØ!!û~Â-}RÞß]sTMùEÕ~‹tä˜	`­·ôé…´³°5G ]ú•MÈñ²	Âñ£rË‡|¤AÎÜ‘|¥hAìEÂîE-í`þËàL³\0õ‰·,S+A¥8æ•GÕñ`|†®m,b=\rób¨N“m—Ãeè‡V…Zü€m¿0Qo¿mkù;Ó\0·ÇÀØÂ1ai‘WÒTÁ€ÿƒ1–`Ø¾À[ðÕöøfÿA4*Á,PC¬\n5P†Zþ\rÂ\r'p‡3jÄl À_|Íp‡å‚ø«¯\n5~\$`8`g8v£åøp…|l4_&±8k©E€Ë„±a7LÅæ*Ñ~2õx«ÇBjTu©Ž\nI\0h½N0™f3 a\$UÂfÂL*sàr¾ôÀó†4´8ª‡I>¼™Ynö½Û„|í¿™î!‰¸™¿Tš®›IJAJ¦_\\à÷NÅšA'¶®|âîòÓÔØýƒ°Õ¹ÇTÏ¬ÒàVê\r\nÁ¼u*ÖâMIÒõA»e!êúý«™’y—@\"à€DY[ŠW`'Ç¸©2ðä„BA6BPº˜WP·b G£Ê8ánœo›©Ý\$xÙ\n\r~ÀÜ¬ñæäBƒ7Ÿ@R±2ŒMÄøËkÕ¹^-Èz›ÊÂ³.ÆÆñîv†üp²ÔÕ‰¹¨¨¬(J>c ‰øþ°í% ÒVøõ*•qñhUËWxüÊ=°¡±AãÜy?CöLe’;d/\"Ù>AÐ“t¼­d4y‡·8U\n@¦ä›>Âée&¨ÉãMÐ&­ÌõCû!çBÛQŒžÔ¸p'VÝN`ñ“—[T)è ðæ8XÌ'~p®âÏ´ë¹§o>C%&Î@y³ÝøoÈtNe&˜2ŠŸ\r™@Ñî¦»\0e\rhùbspìBì.@BS•Äâ‰›Œ¸‘Üx€‚ækòŽLÓ§~,“Zµšâ~JÈG(Z·&äE²}æ˜4ÍÀpsw…à>Eö\"K)ó•ƒÁçT.@-„h …q<(çˆ Ù×!\$×‘‰cñg<.W{ñ^l¹fX÷Ýq€Jò\rí¾2Rê„à§.þ£‡ÏÕ˜3ËYµ„Wø‘ó	Ra›€ŒÆ÷'ÕŒ`E ë1/ò>¢»‡9, k¯ÇáVj ýÁlèÝ*Í±ðÑ]ŸòJaA€Åh¾D•£‰ibÄºº>á ”L'lŒ#°Ðšô*ˆíÇ„×ZC~49£Àç°\rYº#³Ž‰X—„O\"JÔº-®—g”‚›Ô4vµEºÒQv‹×ähÔ¸9ÜÑÌc\nõ?’ñF@•,Ñ=\0\nã6Ê£]Ú.´yô‡,ôp#ˆPˆäzÍk‡mÓÛéAƒeå`íTß‰6¥'LS›¸=ƒ„½³Æ¨¯%Ã\ncrmBHÈv©0¢¿‡†œŠ¿s'SvdŒ?UÑt?£Ö~iÕ¶\0½í\0áY˜:ìK>ˆÍéÕ¥ží°W–\nÞÐ7Z½˜Åœ`½N88ã5<9ÌÉk=Ò7ió)4EršÒ@º¹è­3:˜h\nõ’ãWªf­‘`Óýõ,ô7\$ˆoŸŽ”Ã\n¿,˜- h§¹žµ¨(=k£º±‹M\"ù4ØKR[ã15¤MI°€D' Xí½£r0#K+í¬p\\¦Ûöé°ûÄXÒDí´Ý`µ¯ô¨x×šAtEAÝj-rØÒÆŠWPÁ¢ütðÎÍ‰¦(#L¨ãÓFÌõý±Ô£^{~n¥©9öêXýZé´Lþ\n³i˜Èì¯VL Û6Äv@+OGhÖ”³6tŽ3jkZÅ8›ê7üc†ÛÚ;ÕpwRk6~h!ø¶\0Êª#Lkc\$¤®S„àÍ±{„Ïa™þFR}äöŽ¥â¹•”:”ZzAdÄÎäiœ€œ\n‹bƒµsš”rbÒÜ©@Þ@Y:Ÿ¥ÓX[‰'Â¨D®5}Õ6‘OD'üu7UTò`MŠ€wª¦|\0û—Ìç5ã™ÑÏ;[°iºÑèÊœ\n P @¨P<ÈSª €élpæ¦õ«æ†ë9#MNYÝ‚OU¹©Gîôox\r.‚ÀR‘ô#“]¨ÄO	AƒdÐf<tzH1Øò·Ú,ð‘g<ˆGjº§Ù—šñ“›zéOàáˆ@°µØS¦Zäõ…DãŠÃ~ûïlj€^:7NÑ=VïŽßÖ+ø.Õ	&b1é“«Ð¹#‘€•/bqÐê½ÃSS#jW¸&tÍMh9H	å5ðÜåÙ±i³€©‹\0EiFŠ!¼gè@\\U\n4ýé§Är‡Š‚«x¡R@EXË1BCeÛXHø JX*båîâïávà.€ë‹Ü<»qêwú¶eð}UjûP—\0è…±ÚÄVâÿ¥nèTÜà£þÓ6Ïxb™S\$ØI}Éƒ<<Ü\rtq½ëÑEPñØ<zâþUøìÞ;\0ÄOC£?Øv9mq)!VUÞh9LòC”c¤ãª_+É.J\nõœvo%ÂÛÉ·¦ò3\"Erà€eË>Rñ³”á)åJìyXG\\„r¼±8ß1ÀOÊGz„j|)áü‰Ž\n53Íðý“á’)¸ý³Œ™\0»@.äÿ«Ð~€6\0“Mzâ¾6Ë²Ì¾<(<^¼å.Ô-Ç)Õ™o•ç×0¹üø08p|ª|_äRgøÙÈåóÿ`f¸sÉ¿üŒ\$üÌg*“'Í\$Žiú\0=åÀ’‚ ðô\\Úæ@Lú3Éäœ½ +å	Ry±Òü„(?¤‚ää˜Èƒ™Ï‚Eô¦Ü´á@Š…@šfˆ×--BO'øíÒÞ¥ó§\\úæ¿-2;½QÑ‡{\0e|Êç >¥ð.|¼R¯[<ñrcHÅYÿëQºH›pðO -àðèÊM× :4‚Ã£wRø=U¯+6ó°êà¦‹&°”¶\\g\\@+`ž…(¾\\P‘®Üdë<­z*¥½\$à/ìËØÄôl~ÈtðL%¬'aû*#:*öc³]›ìîŽŒ¨'¸Qý.\$KGêµ8>:Ë•ÝX¯&eÊ)i>B˜ÿ½Á?ýÌð¨Ú+W¸^…­à³È\$5!‘·ˆ±`ŸÜ°ç€ÍU‚5Ö\$ÀžÌÃË„4\0IÀw¦,¬Iõmpf[6”=7ž1d>˜%D®ŸPÃ¨Džq¼ï=Ø•^Rå%´ï|9Úø“ï\$¢@ÊòSÇ	I†îó3)ÏÝÞñ1ûb–ÄœÞ\"H0Ë²FŽ~t\0ñ'ÇMÜ+yÒÝ÷=‚*5)|ÑclZØàŒô!3±‘ò0y{¾f ö+¿/¼]RàÒœs68\0006t ~'\\ã2ÀZ±P”çæñß?†ðýò(sÉÃ›9\0\0d¯\nùMúÀz+Ñü+Ó€£ÇÕaÌà`q¿!„³˜€tò?|<•åùfP^L^2lƒ(©ŸÙž{öŠ’ôd%ï½<*F<¸x¼¤‹a°»èøp¢é¥BÑã+	Hèu*wíy0AzØñ.oMb[Ø‰Š²`ü'žl9ÇÜ&`");}elseif($_GET["file"]=="jush.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("v0œF£©ÌÐ==˜ÎFS	ÐÊ_6MÆ³˜èèr:™E‡CI´Êo:C„”Xc‚\ræØ„J(:=ŸE†¦a28¡xð¸?Ä'ƒi°SANN‘ùðxs…NBáÌVl0›ŒçS	œËUl(D|Ò„çÊP¦À>šE†ã©¶yHchäÂ-3Eb“å ¸b½ßpEÁpÿ9.Š˜Ì~\nŽ?Kb±iw|È`Ç÷d.¼x8EN¦ã!”Í2™‡3©ˆá\r‡ÑYŽÌèy6GFmYŽ8o7\n\r³0¤÷\0DbcÓ!¾Q7Ð¨d8‹Áì~‘¬N)ùEÐ³`ôNsßð`ÆS)ÐOé—·ç/º<xÆ9Žo»ÔåµÁì3n«®2»!r¼:;ã+Â9ˆCÈ¨®‰Ã\n<ñ`Èó¯bè\\š?`†4\r#`È<¯BeãB#¤N Üã\r.D`¬«jê4ÿŽŽpéar°øã¢º÷>ò8Ó\$Éc ¾1Écœ ¡c êÝê{n7ÀÃ¡ƒAðNÊRLi\r1À¾ø!£(æjÂ´®+Âê62ÀXÊ8+Êâàä.\rÍÎôƒÎ!x¼åƒhù'ãâˆ6Sð\0RïÔôñOÒ\n¼…1(W0…ãœÇ7qœë:NÃE:68n+ŽäÕ´5_(®s \rã”ê‰/m6PÔ@ÃEQàÄ9\n¨V-‹Áó\"¦.:åJÏ8weÎq½|Ø‡³XÐ]µÝY XÁeåzWâü Ž7âûZ1íhQfÙãu£jÑ4Z{p\\AUËJ<õ†káÁ@¼ÉÃà@„}&„ˆL7U°wuYhÔ2¸È@ûu  Pà7ËA†hèÌò°Þ3Ã›êçXEÍ…Zˆ]­lá@MplvÂ)æ ÁÁHW‘‘Ôy>Y-øYŸè/«›ªÁî hC [*‹ûFã­#~†!Ð`ô\r#0PïCË—f ·¶¡îÃ\\î›¶‡É^Ã%B<\\½fˆÞ±ÅáÐÝã&/¦O‚ðL\\jF¨jZ£1«\\:Æ´>N¹¯XaFÃAÀ³²ðÃØÍf…h{\"s\n×64‡ÜøÒ…¼?Ä8Ü^p\"ë°ñÈ¸\\Úe(¸PƒNµìq[g¸Árÿ&Â}PhÊà¡ÀWÙí*Þír_sËP‡hà¼àÐ\nÛËÃomõ¿¥Ãê—Ó#§¡.Á\0@épdW ²\$Òº°QÛ½Tl0† ¾ÃHdHë)š‡ÛÙÀ)PÓÜØHgàýUþ„ªBèe\r†t:‡Õ\0)\"Åtô,´œ’ÛÇ[(DøO\nR8!†Æ¬ÖšðÜlAüV…¨4 hà£Sq<žà@}ÃëÊgK±]®àè]â=90°'€åâøwA<‚ƒÐÑaÁ~€òWšæƒD|A´††2ÓXÙU2àéyÅŠŠ=¡p)«\0P	˜s€µn…3îr„f\0¢F…·ºvÒÌG®ÁI@é%¤”Ÿ+Àö_I`¶ÌôÅ\r.ƒ N²ºËKI…[”Ê–SJò©¾aUf›Szûƒ«M§ô„%¬·\"Q|9€¨Bc§aÁq\0©8Ÿ#Ò<a„³:z1Ufª·>îZ¹l‰‰¹ÓÀe5#U@iUGÂ‚™©n¨%Ò°s¦„Ë;gxL´pPš?BçŒÊQ\\—b„ÿé¾’Q„=7:¸¯Ý¡Qº\r:ƒtì¥:y(Å ×\nÛd)¹ÐÒ\nÁX; ‹ìŽêCaA¬\ráÝñŸP¨GHù!¡ ¢@È9\n\nAl~H úªV\nsªÉÕ«Æ¯ÕbBr£ªö„’­²ßû3ƒ\ržP¿%¢Ñ„\r}b/‰Î‘\$“5§PëCä\"wÌB_çŽÉUÕgAtë¤ô…å¤…é^QÄåUÉÄÖj™Áí Bvhì¡„4‡)¹ã+ª)<–j^<Lóà4U* õBg ëÐæè*nÊ–è-ÿÜõÓ	9O\$´‰Ø·zyM™3„\\9Üè˜.oŠ¶šÌë¸E(iåàžœÄÓ7	tßšé-&¢\nj!\rÀyœyàD1gðÒö]«ÜyRÔ7\"ðæ§·ƒˆ~ÀíàÜ)TZ0E9MåYZtXe!Ýf†@ç{È¬yl	8‡;¦ƒR{„ë8‡Ä®ÁeØ+ULñ'‚F²1ýøæ8PE5-	Ð_!Ô7…ó [2‰JËÁ;‡HR²éÇ¹€8pç—²Ý‡@™£0,Õ®psK0\r¿4”¢\$sJ¾Ã4ÉDZ©ÕI¢™'\$cL”R–MpY&ü½Íiçz3GÍzÒšJ%ÁÌPÜ-„[É/xç³T¾{p¶§z‹CÖvµ¥Ó:ƒV'\\–’KJa¨ÃMƒ&º°£Ó¾\"à²eo^Q+h^âÐiTð1ªORäl«,5[Ý˜\$¹·)¬ôjLÆU`£SË`Z^ð|€‡r½=Ð÷nç™»–˜TU	1Hyk›Çt+\0váD¿\r	<œàÆ™ìñjG”ž­tÆ*3%k›YÜ²T*Ý|\"CŠülhE§(È\rÃ8r‡×{Üñ0å²×þÙDÜ_Œ‡.6Ð¸è;ãü‡„rBjƒO'Ûœ¥¥Ï>\$¤Ô`^6™Ì9‘#¸¨§æ4Xþ¥mh8:êûc‹þ0ø×;Ø/Ô‰·¿¹Ø;ä\\'( î„tú'+™òý¯Ì·°^]­±NÑv¹ç#Ç,ëvð×ÃOÏiÏ–©>·Þ<SïA\\€\\îµü!Ø3*tl`÷u\0p'è7…Pà9·bsœ{Àv®{·ü7ˆ\"{ÛÆrîaÖ(¿^æ¼ÝE÷úÿë¹gÒÜ/¡øžUÄ9g¶î÷/ÈÔ`Ä\nL\n)À†‚(Aúað\" žçØ	Á&„PøÂ@O\nå¸«0†(M&©FJ'Ú! …0Š<ïHëîÂçÆù¥*Ì|ìÆ*çOZím*n/bî/ö®Ôˆ¹.ìâ©o\0ÎÊdnÎ)ùŽi:RŽÎëP2êmµ\0/vìOX÷ðøFÊ³ÏˆîŒè®\"ñ®êöî¸÷0õ0ö‚¬©í0bËÐgjðð\$ñné0}°	î@ø=MÆ‚0nîPŸ/pæotì€÷°¨ð.ÌÌ½g\0Ð)o—\n0È÷‰\rF¶é€ b¾i¶Ão}\n°Ì¯…	NQ°'ðxòFaÐJîÎôLõéðÐàÆ\rÀÍ\r€Öö‘0Åñ'ð¬Éd	oepÝ°4DÐÜÊ¦q(~ÀÌ ê\r‚E°ÛprùQVFHœl£‚Kj¦¿äN&­j!ÍH`‚_bh\r1Ž ºn!ÍÉŽ­z™°¡ð¥Í\\«¬\rŠíŠÃ`V_kÚÃ\"\\×‚'Vˆ«\0Ê¾`ACúÀ±Ï…¦VÆ`\r%¢’ÂÅì¦\rñâƒ‚k@NÀ°üBñíš™¯ ·!È\n’\0Z™6°\$d Œ,%à%laíH×\n‹#¢S\$!\$@¶Ý2±„I\$r€{!±°J‡2HàZM\\ÉÇhb,‡'||cj~gÐr…`¼Ä¼º\$ºÄÂ+êA1ðœE€ÇÀÙ <ÊL¨Ñ\$âY%-FDªŠd€Lç„³ ª\n@’bVfè¾;2_(ëôLÄÐ¿Â²<%@Úœ,\"êdÄÀN‚erô\0æƒ`Ä¤Z€¾4Å'ld9-ò#`äóÅ–…à¶Öãj6ëÆ£ãv ¶àNÕÍf Ö@Ü†“&’B\$å¶(ðZ&„ßó278I à¿àP\rk\\§—2`¶\rdLb@Eöƒ2`P( B'ã€¶€º0²& ô{Â•“§:®ªdBå1ò^Ø‰*\r\0c<K|Ý5sZ¾`ºÀÀO3ê5=@å5ÀC>@ÂW*	=\0N<g¿6s67Sm7u?	{<&LÂ.3~DÄê\rÅš¯x¹í),rîinÅ/ åO\0o{0kÎ]3>m‹”1\0”I@Ô9T34+Ô™@e”GFMCÉ\rE3ËEtm!Û#1ÁD @‚H(‘Ón ÃÆ<g,V`R]@úÂÇÉ3Cr7s~ÅGIói@\0vÂÓ5\rVß'¬ ¤ Î£PÀÔ\râ\$<bÐ%(‡Ddƒ‹PWÄîÐÌbØfO æx\0è} Üâ”lb &‰vj4µLS¼¨Ö´Ô¶5&dsF Mó4ÌÓ\".HËM0ó1uL³\"ÂÂ/J`ò{Çþ§€ÊxÇYu*\"U.I53Q­3Qô»J„”g ’5…sàúŽ&jÑŒ’Õu‚Ù­ÐªGQMTmGBƒtl-cù*±þ\rŠ«Z7Ôõó*hs/RUV·ðôªBŸNËˆ¸ÃóãêÔŠài¨Lk÷.©´Ätì é¾©…rYi”Õé-Sµƒ3Í\\šTëOM^­G>‘ZQjÔ‡™\"¤Ž¬i”ÖMsSãS\$Ib	f²âÑuæ¦´™å:êSB|i¢ YÂ¦ƒà8	vÊ#é”Dª4`‡†.€Ë^óHÅM‰_Õ¼ŠuÀ™UÊz`ZJ	eçºÝ@Ceíëa‰\"mób„6Ô¯JRÂÖ‘T?Ô£XMZÜÍÐ†ÍòpèÒ¶ªQv¯jÿjV¶{¶¼ÅCœ\rµÕ7‰TÊžª úí5{Pö¿]’\rÓ?QàAAÀèŽ‹’Í2ñ¾ “V)Ji£Ü-N99f–l JmÍò;u¨@‚<FþÑ ¾e†j€ÒÄ¦I‰<+CW@ðçÀ¿Z‘lÑ1É<2ÅiFý7`KG˜~L&+NàYtWHé£‘w	Ö•ƒòl€Òs'gÉãq+Lézbiz«ÆÊÅ¢Ð.ÐŠÇzW²Ç ùzd•W¦Û÷¹(y)vÝE4,\0Ô\"d¢¤\$Bã{²Ž!)1U†5bp#Å}m=×È@ˆwÄ	P\0ä\rì¢·‘€`O|ëÆö	œÉüÅõûYôæJÕ‚öE×ÙOuž_§\n`F`È}MÂ.#1á‚¬fì*´Õ¡µ§  ¿zàucû€—³ xfÓ8kZR¯s2Ê‚-†’§Z2­+ŽÊ·¯(åsUõcDòÑ·Êì˜ÝX!àÍuø&-vPÐØ±\0'LïŒX øLÃ¹Œˆo	Ýô>¸ÕŽÓ\r@ÙPõ\rxF×üE€ÌÈ­ï%Àãì®ü=5NÖœƒ¸?„7ùNËÃ…©wŠ`ØhX«98 Ìø¯q¬£zãÏd%6Ì‚tÍ/…•˜ä¬ëLúÍl¾Ê,ÜKa•N~ÏÀÛìú,ÿ'íÇ€M\rf9£w˜!x÷x[ˆÏ‘ØG’8;„xA˜ù-IÌ&5\$–D\$ö¼³%…ØxÑ¬Á”ÈÂ´ÀÂŒ]›¤õ‡&o‰-39ÖLù½zü§y6¹;u¹zZ èÑ8ÿ_•Éx\0D?šX7†™«’y±OY.#3Ÿ8 ™Ç€˜e”Q¨=Ø€*˜™GŒwm ³Ú„Y‘ù ÀÚ]YOY¨F¨íšÙ)„z#\$eŠš)†/Œz?£z;™—Ù¬^ÛúFÒZg¤ù• Ì÷¥™§ƒš`^Úe¡­¦º#§“Øñ”©Žú?œ¸e£€M£Ú3uÌåƒ0¹>Ê\"?Ÿö@×—Xv•\"ç”Œ¹¬¦*Ô¢\r6v~‡ÃOV~&×¨^gü šÄ‘Ùž‡'Î€f6:-Z~¹šO6;zx²;&!Û+{9M³Ù³d¬ \r,9Öí°ä·WÂÆÝ­:ê\rúÙœùã@ç‚+¢·]œÌ-ž[gž™Û‡[s¶[ižÙiÈq››y›éxé+“|7Í{7Ë|w³}„¢›£E–ûW°€Wk¸|JØ¶å‰xmˆ¸q xwyjŸ»˜#³˜e¼ø(²©‰¸ÀßžÃ¾™†ò³ {èßÚ y“ »M»¸´@«æÉ‚“°Y(gÍš-ÿ©º©äí¡š¡ØJ(¥ü@ó…;…yÂ#S¼‡µY„Èp@Ï%èsžúoŸ9;°ê¿ôõ¤¹+¯Ú	¥;«ÁúˆZNÙ¯Âº§„š k¼V§·u‰[ñ¼x…|q’¤ON?€ÉÕ	…`uœ¡6|­|X¹¤­—Ø³|Oìx!ë:¨œÏ—Y]–¬¹Ž™c•¬À\r¹hÍ9nÎÁ¬¬ë€Ï8'—ù‚êà Æ\rS.1¿¢USÈ¸…¼X‰É+ËÉz]ÉµÊ¤?œ©ÊÀCË\r×Ë\\º­¹ø\$Ï`ùÌ)UÌ|Ë¤|Ñ¨x'ÕœØÌäÊ<àÌ™eÎ|êÍ³ç—â’Ìé—LïÏÝMÎy€(Û§ÐlÐº¤O]{Ñ¾×FD®ÕÙ}¡yu‹ÑÄ’ß,XL\\ÆxÆÈ;U×ÉWt€vŸÄ\\OxWJ9È’×R5·WiMi[‡Kˆ€f(\0æ¾dÄšÒè¿©´\rìMÄáÈÙ7¿;ÈÃÆóÒñçÓ6‰KÊ¦Iª\rÄÜÃxv\r²V3ÕÛßÉ±.ÌàRùÂþÉá|Ÿá¾^2‰^0ß¾\$ QÍä[ã¿D÷áÜ£å>1'^X~t1\"6Lþ›+þ¾Aàžeá“æÞåI‘ç~Ÿåâ³â³@ßÕ­õpM>Óm<´ÒSKÊç-HÉÀ¼T76ÙSMfg¨=»ÅGPÊ°›PÖ\r¸é>Íö¾¡¥2Sb\$•C[Ø×ï(Ä)žÞ%Q#G`uð°ÇGwp\rkÞKe—zhjÓ“zi(ôèrO«óÄÞÓþØT=·7³òî~ÿ4\"ef›~íd™ôíVÿZ‰š÷U•-ëb'VµJ¹Z7ÛöÂ)T‘£8.<¿RMÿ\$‰žôÛØ'ßbyï\n5øƒÝõ_ŽàwñÎ°íUð’`eiÞ¿J”b©gðuSÍë?Íå`öážì+¾Ïï Mïgè7`ùïí\0¢_Ô-ûŸõ_÷–?õF°\0“õ¸X‚å´’[²¯Jœ8&~D#Áö{P•Øô4Ü—½ù\"›\0ÌÀ€‹ý§ý@Ò“–¥\0F ?* ^ñï¹å¯wëÐž:ð¾uàÏ3xKÍ^ów“¼¨ß¯‰y[Ôž(žæ–µ#¦/zr_”g·æ?¾\0?€1wMR&M¿†ù?¬St€T]Ý´Gõ:I·à¢÷ˆ)‡©Bïˆ‹ vô§’½1ç<ôtÈâ6½:W{ÀŠôx:=Èî‘ƒŒÞšóø:Â!!\0x›Õ˜£÷q&áè0}z\"]ÄÞo•z¥™ÒjÃw×ßÊÚÁ6¸ÒJ¢PÛž[\\ }ûª`S™\0à¤qHMë/7B’€P°ÂÄ]FTã•8S5±/IÑ\rŒ\n îO¯0aQ\n >Ã2­j…;=Ú¬ÛdA=­p£VL)Xõ\nÂ¦`e\$˜TÆ¦QJÍó®ælJïŠÔîÑy„IÞ	ä:ƒÑÄÄBùbPÀ†ûZÍ¸n«ª°ÕU;>_Ñ\n	¾õëÐÌ`–ÔuMòŒ‚‚ÂÖm³ÕóÂLwúB\0\\b8¢MÜ[z‘&©1ý\0ô	¡\r˜TÖ×› €+\\»3ÀPlb4-)%Wd#\nÈårÞåMX\"Ï¡ä(Ei11(b`@fÒ´­ƒSÒóˆjåD†bf£}€rï¾‘ýD‘R1…´bÓ˜AÛïIy\"µWvàÁgC¸IÄJ8z\"P\\i¥\\m~ZR¹¢vî1ZB5IŠÃi@x”†·°-‰uM\njKÕU°h\$o—ˆJÏ¤!ÈL\"#p7\0´ P€\0ŠD÷\$	 GK4eÔÐ\$\nGä?ù3£EAJF4àIp\0«×FŽ4±²<f@ž %q¸<kãw€	àLOp\0‰xÓÇ(	€G>ð@¡ØçÆÆ9\0TÀˆ˜ìGB7 - €žøâG:<Q™ #Ã¨ÓÇ´û1Ï&tz£á0*J=à'‹J>ØßÇ8q¡Ð¥ªà	€OÀ¢XôF´àQ,ÀÊÐ\"9‘®pä*ð66A'ý,y€IF€Rˆ³TˆÏý\"”÷HÀR‚!´j#kyFÀ™àe‘¬z£ëéÈðG\0Žp£‰aJ`C÷iù@œT÷|\n€Ix£K\"­´*¨Tk\$c³òÆ”aAh€“! \"úE\0OdÄSxò\0T	ö\0‚žà!FÜ\n’U“|™#S&		IvL\"”“…ä\$hÐÈÞEAïN\$—%%ù/\nP†1š“²{¤ï) <‡ð L å-R1¤â6‘¶’<@O*\0J@q¹‘Ôª#É@Çµ0\$tƒ|’]ã`»¡ÄŠA]èÍìPá‘€˜CÀp\\pÒ¤\0™ÒÅ7°ÄÖ@9©bmˆr¶oÛC+Ù]¥JrÔfü¶\rì)d¤’Ñœ­^hßI\\Î. g–Ê>¥Í×8ŒÞÀ'–HÀf™rJÒ[rçoã¥¯.¹v„½ï#„#yR·+©yËÖ^òù›†F\0á±™]!É•ÒÞ”++Ù_Ë,©\0<@€M-¤2WòâÙR,c•Œœe2Ä*@\0êP €Âc°a0Ç\\PÁŠˆO ø`I_2Qs\$´w£¿=:Îz\0)Ì`ÌhŠÂ–Áƒˆç¢\nJ@@Ê«–\0šø 6qT¯å‡4J%•N-ºm¤Äåã.É‹%*cnäËNç6\"\rÍ‘¸òè—ûŠfÒAµÁ„põMÛ€I7\0™MÈ>lO›4ÅS	7™cÍì€\"ìß§\0å“6îps…–ÄÝåy.´ã	ò¦ñRKð•PAo1FÂtIÄb*ÉÁ<‡©ý@¾7ÐË‚p,ï0NÅ÷: ¨N²m ,xO%è!‚Úv³¨˜ gz(ÐM´óÀIÃà	à~yËö›h\0U:éØOZyA8<2§²ð¸ÊusÞ~lòÆÎEð˜O”0±Ÿ0]'…>¡ÝÉŒ:ÜêÅ;°/€ÂwÒôäì'~3GÎ–~Ó­äþ§c.	þ„òvT\0cØt'Ó;P²\$À\$ø€‚Ð-‚s³òe|º!•@dÐObwÓæc¢õ'Ó@`P\"xôµèÀ0O™5´/|ãU{:b©R\"û0…Ñˆk˜Ðâ`BD\nk€Pãc©á4ä^ p6S`Ü\$ëf;Î7µ?lsÅÀß†gDÊ'4Xja	A‡…E%™	86b¡:qr\r±]C8ÊcÀF\n'ÑŒf_9Ã%(¦š*”~ŠãiSèÛÉ@(85 T”Ë[þ†JÚ4I…l=°ŽQÜ\$dÀ®hä@D	-Ù!ü_]ÉÚH–ÆŠ”k6:·Úò\\M-ÌØðò£\r‘FJ>\n.‘”qeGú5QZ´†‹' É¢ž½Û0ŸîzP–à#Å¤øöÖéràÒít½’ÒÏËŽþŠ<QˆT¸£3D\\¹„ÄÓpOE¦%)77–Wt[ºô@¼›Žš\$F)½5qG0«-ÑW´v¢`è°*)RrÕ¨=9qE*K\$g	‚íA!åPjBT:—Kû§!×÷H“ R0?„6¤yA)B@:Q„8B+J5U]`„Ò¬€:£ðå*%Ip9ŒÌ€ÿ`KcQúQ.B”±Ltbª–yJñEê›Té¥õ7•ÎöAmÓä¢•Ku:ŽðSji— 5.q%LiFºšTr¦Ài©ÕKˆÒ¨z—55T%U•‰UÚIÕ‚¦µÕY\"\nSÕm†ÑÄx¨½Ch÷NZ¶UZ”Ä( Bêô\$YËV²ã€u@è”»’¯¢ª|	‚\$\0ÿ\0 oZw2Ò€x2‘ûk\$Á*I6IÒn• •¡ƒI,€ÆQU4ü\n„¢).øQôÖaIá]™À èLâh\"øf¢ÓŠ>˜:Z¥>L¡`n˜Ø¶Õì7”VLZu”…e¨ëXúè†ºB¿¬¥B‰º’¡Z`;®ø•J‡]òÑ€žäS8¼«f \nÚ¶ˆ#\$ùjM(¹‘Þ¡”„¬a­Gí§Ì+Aý!èxL/\0)	Cö\nñW@é4€ºáÛ©• ŠÔRZƒ®â =˜Çî8“`²8~â†hÀìP °\r–	°žìD-FyX°+Êf°QSj+Xó|•È9-’øs¬xØü†ê+‰VÉcbpì¿”o6HÐq °³ªÈ@.€˜l 8g½YMŸÖWMPÀªU¡·YLß3PaèH2Ð9©„:¶a²`¬Æd\0à&ê²YìÞY0Ù˜¡¶SŒ-—’%;/‡TÝBS³PÔ%fØÚý• @ßFí¬(´Ö*Ñq +[ƒZ:ÒQY\0Þ´ëJUYÖ“/ý¦†pkzÈˆò€,´ðª‡ƒjÚê€¥W°×´e©JµFèýVBIµ\r£ÆpF›NÙ‚Ö¶™*Õ¨Í3kÚ0§D€{™Ôø`q™•Ò²Bqµe¥D‰cÚÚÔVÃE©‚¬nñ×äFG E›>jîèÐú0g´a|¡Shì7uÂÝ„\$•†ì;aô—7&¡ë°R[WX„ÊØ(qÖ#Œ¬P¹Æä×–Ýc8!°H¸àØVX§ÄŽ­jøÊZŽô‘¡¥°Q,DUaQ±X0‘ÕÕ¨ÀÝËGbÁÜlŠBŠt9-oZü”L÷£¥Â­åpË‡‘x6&¯¯MyÔÏsÒ¿–èð\"ÕÍ€èR‚IWU`c÷°à}l<|Â~Äw\"·ðvI%r+‹Rà¶\n\\ØùÃÑ][‹Ñ6&Á¸ÝÈ­Ãa”ÓºìÅj¹(Ú“ðTÑ“À·C'Š…´ '%de,È\n–FCÅÑe9C¹NäÐ‚-6”UeÈµŒýCX¶ÐV±ƒ¹ýÜ+ÔR+ºØ”Ë•3BÜÚŒJð¢è™œ±æT2 ]ì\0PèaÇt29Ï×(i‹#€aÆ®1\"S…:ö· ˆÖoF)kÙfôòÄÐª\0ÎÓ¿þÕ,ËÕwêƒJ@ìÖVò„Žµéq.e}KmZúÛïå¹XnZ{G-»÷ÕZQº¯Ç}‘Å×¶û6É¸ðµÄ_žØÕ‰à\nÖ@7ß` Õï‹˜C\0]_ ©Êµù¬«ï»}ûGÁWW: fCYk+éÚbÛ¶·¦µ2S,	Ú‹Þ9™\0ï¯+þWÄZ!¯eþ°2ûôà›—í²k.OcƒÖ(vÌ®8œDeG`Û‡ÂŒöL±õ“,ƒdË\"CÊÈÖB-”Ä°(þ„„„p÷íÓp±=àÙü¶!ýk’ØÒÄ¼ï}(ýÑÊB–kr_Rî—Ü¼0Œ8a%Û˜L	\0é†Àñ‰b¥²šñÅþ@×\"ÑÏr,µ0TÛrV>ˆ…ÚÈQŸÐ\"•rÞ÷P‰&3báP²æ- x‚Ò±uW~\"ÿ*èˆžŒNâh—%7²µþK¡Y€€^A÷®úÊC‚èþ»p£áîˆ\0ð..`cÅæ+ÏŠâGJ£¤¸H¿À®E‚…¤¾l@|I#AcâÿD…|+<[c2Ü+*WS<ˆràãg¸ÛÅ}‰Š>iÝ€!`f8ñ€(c¦èÉQý=fñ\nç2Ñc£h4–+q8\na·RãBÜ|°R“×ê¿ÝmµŠ\\qÚõgXÀ –ÏŽ0äXä«`nîF€îìŒO pÈîHòCƒ”jd¡fµßEuDV˜bJÉ¦¿å:±ï€\\¤!mÉ±?,TIa˜†ØaT.L€]“,JŒ?™?Ï”FMct!aÙ§RêF„Gð!¹Aõ“»rrŒ-pŽXŸ·\r»òC^À7áð&ãRé\0ÎÑf²*àA\nõÕ›Háã¤yîY=Çúè…l€<‡¹AÄ_¹è	+‘ÎtAú\0B•<Ay…(fy‹1Îc§O;pèÅá¦`ç’4Ð¡Mìà*œîf†ê 5fvy {?©àË:yøÑ^câÍuœ'‡™€8\0±¼Ó±?«ŠgšÓ‡ 8BÎ&p9ÖO\"zÇõžrs–0ºæB‘!uÍ3™f{×\0£:Á\n@\0ÜÀ£pÙÆ6þv.;àú©„Êb«Æ«:J>Ë‚‰é-ÃBÏhkR`-ÜñÎðawæxEj©…÷Árž8¸\0\\Áïô€\\¸Uhm› ý(mÕH3Ì´í§S™“Áæq\0ùŸNVh³Hy	—»5ãMÍŽe\\g½\nçIP:Sj¦Û¡Ù¶è<Ž¯Ñxó&ŒLÚ¿;nfÍ¶cóq›¦\$fð&lïÍþi³…œàç0%yÎž¾tì/¹÷gUÌ³¬dï\0e:ÃÌhïZ	Ð^ƒ@ç ý1€Ïm#ÑNów@ŒßOððzGÎ\$ò¨¦m6é6}ÙÒÒ‹šX'¥I×i\\QºY€¸4k-.è:yzÑÈÝH¿¦]ææxåGÏÖ3ü¿M\0€£@z7¢„³6¦-DO34Þ‹\0ÎšÄùÎ°t\"Î\"vC\"JfÏRÊžÔúku3™MÎæ~ú¤ÓŽ5V à„j/3úƒÓ@gG›}Dé¾ºBÓNq´Ù=]\$é¿I‡õÓž”3¨x=_j‹XÙ¨fk(C]^jÙMÁÍF«ÕÕ¡ŒàÏ£CzÈÒVœÁ=]&ž\r´A<	æµÂÀÜãç6ÙÔ®¶×´Ý`jk7:gÍî‘4Õ®áë“YZqÖftu|hÈZÒÒ6µ­iã€°0 ?éõéª­{-7_:°×ÞtÑ¯íck‹`YÍØ&“´éIõlP`:íô j­{hì=Ðf	àÃ[byž¢Ê€oÐ‹B°RS—€¼B6°À^@'4æø1UÛDq}ìÃNÚ(Xô6j}¬cà{@8ãòð,À	ÏPFCàð‰Bà\$mv˜¨Pæ\"ºÛLöÕCS³]›ÝàEÙÞÏlU†Ñfíwh{o(—ä)è\0@*a1GÄ ( D4-cØóP8£N|R›†âVM¸°×n8G`e}„!}¥€Çp»‡Üòý@_¸ÍÑnCtÂ9ŽÑ\0]»u±î¯s»ŠÝ~èr§»#Cn p;·%‹>wu¸ÞnÃwû¤Ýžê.âà[ÇÝhT÷{¸Ýå€¼	ç¨Ë‡·JðÔÆ—iJÊ6æ€O¾=¡€‡ûæßE”÷Ù´‘ImÛïÚV'É¿@â&‚{ª‘›òö¯µ;íop;^–Ø6Å¶@2ç¯lûÔÞNï·ºMÉ¿r€_Ü°ËÃ´` ì( yß6ç7‘¹ýëîÇ‚“7/Ápðe>|ßà	ø=½]Ðocû‘á&åxNm£‰çƒ»¬ào·GÃN	p—‚»˜x¨•Ã½Ýðƒy\\3àø‡Â€'ÖI`râG÷]Ä¾ñ7ˆ\\7Ú49¡]Å^p‡{<Zá·¸q4™uÎ|ÕÛQÛ™àõp™ýši\$¶@oxñ_<Àæ9pBU\"\0005— iä×‚»¸Cûp´\nôi@‚[ãœÆ4¼jÐ„6bæP„\0Ÿ&F2~ŽÀù£¼ïU&š}¾½¿É˜	™ÌDa<€æzx¶k£ˆ‹=ùñ°r3éË(l_”…FeF›ž4ä1“K	\\ÓŽldî	ä1H\r½€ùp!†%bGæXfÌÀ'\0ÈœØ	'6Àžps_›á\$?0\0’~p(H\n€1…W:9ÕÍ¢¯˜`‹æ:hÇB–èg›BŠk©ÆpÄÆót¼ìˆEBI@<ò%Ã¸Àù` êŠyd\\Y@D–P?Š|+!„áWÀø.:ŸLe€v,Ð>qóAÈçº:ž–îbYéˆ@8Ÿd>r/)ÂBç4ÀÐÎ(·Š`|é¸:t±!«‹Á¨?<¯@ø«’/¥ S’¯P\0Âà>\\æâ |é3ï:VÑuw¥ëçx°(®²Ÿœ4€ÇZjD^´¥¦Lý'¼ìÄC[×'ú°§®éjÂº[ E¸ó uã°{KZ[s„ž€6ˆ‚S1Ìz%1õc™£B4ˆB\n3M`0§;çòÌÂ3Ð.”&?¡ê!YAÀI,)ðå•l†W['ÆÊIÂ‡Tjƒè>F©¼÷S§‡ BÐ±Pá»caþÇŒuï¢NÝÏÀøHÔ	LSôî0”ÕY`ÂÆÈ\"il‘\rçB²ëã/Œôãø%P€ÏÝN”Gô0JÆX\n?aë!Ï3@MæF&Ã³Öþ¿,°\"î€èlbô:KJ\rï`k_êb÷üAáÙÄ¯Ìü1ÑI,ÅÝîüˆ;B,×:ó¾ìY%¼J ŽŠ#v”€'†{ßÑÀã„ž	wx:\ni°¶³’}cÀ°eN®Ñï`!wÆ\0ÄBRU#ØSý!à<`–&v¬<¾&íqOÒ+Î£¥sfL9QÒBÊ‡„ÉóäbÓà_+ï«*€Su>%0€Ž™©…8@l±?’L1po.ÄC&½íÉ BÀÊqh˜¦ó­’Ážz\0±`1á_9ð\"–€è!\$øŒ¶~~-±.¼*3r?øÃ²Àd™s\0ÌõÈ>z\nÈ\0Š0 1Ä~‘ô˜Jð³ðú”|SÞœô k7gé\0ŒúKÔ d¶ÙaÉîPgº%ãw“DôêzmÒûÈõ·)¿‘ñŠœj‹Û×Âÿ`k»ÒQà^ÃÎ1üŒº+Îåœ>/wbüGwOkÃÞÓ_Ù'ƒ¬-CJ¸å7&¨¢ºðEñ\0L\r>™!ÏqÌîÒ7ÝÁ­õoŠ™`9O`ˆàƒ”ö+!}÷P~EåNÈc”öQŸ)ìá#ûï#åò‡€ì‡ÌÑøÀ‘¡¯èJñÄz_u{³ÛK%‘\0=óáOŽX«ß¶Cù>\n²€…|wá?ÆF€Åê„Õa–Ï©UÙåÖb	N¥YïÉhŠ½»é‘/úû)ÞGÎŒ2ü™¢K|ã±y/Ÿ\0éä¿Z”{éßP÷YG¤;õ?Z}T!Þ0ŸÕ=mN¯«úÃfØ\"%4™aö\"!–ÞŸúºµ\0çõï©}»î[òçÜ¾³ëbU}»Ú•mõÖ2±• …ö/tþî‘%#.ÑØ–Äÿse€Bÿp&}[ËŸŽÇ7ã<aùKýïñ8æúP\0™ó¡g¼ò?šù,Ö\0ßßˆr, >¿ŒýWÓþïù/Öþ[™qýk~®CÓ‹4ÛûGŠ¯:„€X÷˜Gúr\0ÉéŸâ¯÷ŸL%VFLUc¯Þä‘¢þŽHÿybP‚Ú'#ÿ×	\0Ð¿ýÏì¹`9Ø9¿~ïò—_¼¬0qä5K-ÙE0àbôÏ­üš¡Žœt`lmêíËÿbŒàÆ˜; ,=˜ 'S‚.bÊçS„¾øCc—ƒêëÊAR,„ƒíÆXŠ@à'…œ8Z0„&ìXnc<<È£ð3\0(ü+*À3·@&\r¸+Ð@h, öò\$O’¸„\0Å’ƒèt+>¬¢‹œbª€Ê°€\r£><]#õ%ƒ;Nìsó®ÅŽ€¢Êð*»ïcû0-@®ªLì >½Yp#Ð-†f0îÃÊ±aª,>»Ü`ÆÅàPà:9ŒŒo·ð°ov¹R)e\0Ú¢\\²°Áµ\nr{Ã®X™ÒøÎ:A*ÛÇ.Dõº7Ž»¼ò#,ûN¸\rŽE™Ô÷hQK2»Ý©¥½zÀ>P@°°¦	T<ÒÊ=¡:òÀ°XÁGJ<°GAfõ&×A^pã`©ÀÐ{ûÔ0`¼:ûð€);U !Ðe\0î£½Ïc†p\r‹³ ‹¾:(ø•@…%2	S¯\$Y«Ý3é¯hCÖì™:O˜#ÏÁLóï/šé‚ç¬k,†¯Kåoo7¥BD0{ƒ¡jó ìj&X2Ú«{¯}„RÏx¤ÂvÁä÷Ø£À9Aë¸¶¾0‰;0õá‘à-€5„ˆ/”<Üç° ¾NÜ8E¯‘—Ç	+ãÐ…ÂPd¡‚;ªÃÀ*nŸ¼&²8/jX°\rš>	PÏW>Kà•O’¢VÄ/”¬U\n<°¥\0Ù\nIk@Šºã¦ƒ[àÈÏ¦Â²œ#Ž?€Ùã%ñƒ‚èË.\0001\0ø¡kè`1T· ©„¾ë‚Él¼šÀ£îÅp®¢°Á¤³¬³…< .£>íØ5ŽÐ\0ä»	O¬>k@Bn¾Š<\"i%•>œºzÄ–ç“ñáºÇ3ÙPƒ!ð\rÀ\"¬ã¬\r ‰>šadàöó¢U?ÚÇ”3P×Áj3£ä°‘>;Óä¡¿>žt6Ë2ä[ÂðÞ¾M\r >°º\0äìP®‚·Bè«Oe*Rn¬§œy;« 8\0ÈËÕoæ½0ýÓøiÂøþ3Ê€2@Êýà£î¯?xô[÷€ÛÃLÿaŽ¯ƒw\ns÷ˆ‡ŒA²¿x\r[Ñaª6Âclc=¶Ê¼X0§z/>+šª‰øW[´o2ÂøŒ)eî2þHQPéDY“zG4#YD…ö…ºp)	ºHúpŽ˜&â4*@†/:˜	á‰T˜	­Ÿ¦aH5‘ƒëh.ƒA>œï`;.Ÿ­îY“Áa	Âòút/ =3…°BnhD?(\n€!ÄBúsš\0ØÌDÑ&D“J‘)\0‡jÅQÄyŽhDh(ôK‘/!Ð>®h,=Ûõ±†ãtJ€+¡Sõ±,\"M¸Ä¿´NÑ1¿[;øÐ¢Š¼+õ±#<ìŒI¤ZÄŸŒP‘)ÄáLJñDéìP1\$Äîõ¼Q‘>dO‘¼vé#˜/mh8881N:øZ0ZŠÁèT •BóCÇq3%°¤@¡\0Øï\"ñXD	à3\0•!\\ì8#h¼vìibÏ‚T€!dª—ˆÎüV\\2óÀSëÅÅ’\nA+Í½pšxÈiD(ìº(à<*öÚ+ÅÕE·ÌT®¾ BèS·CÈ¿T´æÙÄ e„Aï’\"á|©u¼v8ÄT\0002‘@8D^ooƒ‚ø÷‘|”Nù˜ô¥ÊJ8[¬Ï3ÄÂõîJz×³WL\0¶\0ž€È†8×:y,Ï6&@”À E£Ê¯Ý‘h;¼!f˜¼.Bþ;:ÃÊÎ[Z3¥™Â«‚ðn»ìëÈ‘­éA¨’ÓqP4,„óºXc8^»Ä`×ƒ‚ôl.®üº¢S±hÞ”°‚O+ª%P#Î¡\n?ÛÜIB½ÊeË‘O\\]ÎÂ6ö#û¦Û½Ø(!c) Nõ¸ºÑ?EØ”B##D íDdo½åPAª\0€:ÜnÂÆŸ€`  ÚèQ„³>!\r6¨\0€‰V%cbHF×)¤m&\0B¨2Ií5’Ù#]ú˜ØD>¬ì3<\n:MLðÉ9CñÊ˜0ãë\0“¨(á©H\nþ€¦ºM€\"GR\n@éø`[Ãó€Š˜\ni*\0œð)ˆü€‚ìu©)¤«Hp\0€Nˆ	À\"€®N:9qÛ.\r!´JÖÔ{,Û'æÙŠ4…B†úÇlqÅ¨ŸXc«Â4ß‹N1É¨5«WmÇ3\nÁF€„`­'‘ˆÒŠxàƒ&>z>N¬\$4?ó›ÃïÂ(\nì€¨>à	ëÏµPÔ!CqÍŒ¼Œp­qGLqqöG²yÍH.«^àž\0zÕ\$€AT9Fs†Ð…¢D{ía§øcc_€GÈz†)ó³‡ Ü}QÆÅhóÌHBÖ¸<‚y!L­“€Û!\\‚²ˆî ø'’H(‚ä-µ\"ƒin]Äžˆ³­\\¨!Ú`M˜H,gÈŽí»*ÒKfë*\0ò>Â€6¶ˆà6ÈÖ2óhJæ7Ù{nqÂ8àßôÉHÕ#cHã#˜\r’:¶–7Ê8àÜ€Z²˜ZrD£þß²`rG\0äl\n®Iˆi\0<±äãô\0Lg…~¨ÃE¬Û\$¹ÒP“\$Š@ÒPÆ¼T03ÉHGH±lÉQ%*\"N?ë%œ–	€Î\nñCrWÉC\$¬–pñ%‰uR`ÀË%³òR\$–<‘`ÖIfxª¯÷\$/\$„”¥\$œš’O…(‹Ë\0æË\0RY‚*Ù/	ê\rÜœC9€ï&hhá=IÓ'\$–RRIÇ'\\•a=EÔ„òuÂ·'Ì™wIå'T’€€‘üÿ©¾ãK9%˜d¢´·‚!ü”ÀÊÊÀÒj…ì¡íÓÊ&Ðæ„vÌŸ²\\=<,œEùŒ`ÛYÁò\\Ÿ²‚¤*b0>²r®à,d–pdŒŒÌ0DD Ì–`â,T ­1Ý% P‘ž¤/ø\ròb¹(Œ£õJÑèÍîT0ò``Æ¾ÞèíóJ”t©’©ÊŸ((dÇÊªáh+ <Éˆ+H%i‡Èô‹²•#´`­ ÚÊÑ'ô£B>t˜¯J€Z\\‘`<Jç+hR·ÊÔ8î‰€àhR±,J]gò¨Iä•è0\n%J¹*ÐY²¯£JwDœ°&Ê–D±®•ÉÐœªR§K\"ß1Qò¨Ë ”²AJKC,ä´mV’»Ž²›ÊÙ-±òÏKI*±r¨ƒ\0ÇL³\"ÆKb(üªóJ:qKr·dùÊŸ-)ÁžË†#Ô¸²Þ¸[ºA»@•.[–Ò¨Ê¼ß4º¡¯.™1ò®J½.Ì®¦u#J“‡Ág\0Æãò‘§£<Ë&”’ðK¤+½	M?Í/d£Ê%'/›¿2YÈä>­\$Í¬lº\0†©+ø—Á‰}-tº’Í…*ê‰Rä\$ß”òÌK».´Á­óJHûÊ‰‡2\r„¿B‚½(PÍÓÌ6\"ü–nf†\0#Ð‡ ®Í%\$ÄÊ[€\nÐnoLJ°ŒÅÓÂe'<¯ó…‡1KíÁyÌY1¤Çs¥0À&zLf#üÆ³/%y-²Ë£3-„Â’ÍK£L¶ÎÉ×0œ³’ë¸[,¤ËÌµ,œ±’«„§0”±Ó(‹.DÀ¡@ÏÁ2ïL+.|£’÷¤É2è(³L¥*´¹S:\0Ù3´ÌíóG3lÌÁaËl³@L³3z4­Ç½%Ì’ÍLÝ3»…³¼!0Š33=Lù4|È—¡à+\"°Êé4´Ëå7Ë,\$¬SPM‘\\±Î?JŠY“Ì¡¹½+(Âa=K¨ì4œ¤³CÌ¤<Ð…=\$,»³UJ]5h³W &tÖI%€é5¬Ò³\\M38g¢Í5HŠN?W1Hš±^ÊÙÔ¸“YÍ—Ø Í.‚N3MŸ4Ã…³`„Ži/P‰7ÖdM>šd¯/LRÎÜâ=K‘60>¯I\0[ðõ\0ßÍ\r2ôÔòZ@Ï1„Û2ÿ°7È9äFG+ä¯ÒœÅ\r)àhQtL}8\$ÊBeC#Á“r*HÈÛ«Ž-›Hý/ØËÒ6Èß\$øRC9ÂØ¨!‚€Å7ük/PË0Xr5ƒ¡3D„¼<TÁÔ’q¯Kô©³nÎH§<µFÿ:1SLÎrÀ%(ÿu)¸Xr—1Ñ€nJÃIÌ´S£\$\$é.Î‡9Ôé²IÎŸÒ3 ¨LÃl”“¯Î™9äÅC•N #Ô¡ó\$µ/ÔésÉ9«@6Êt“²®Nñ9¼´·NÉ:¹’Â¡7ó Ó¬Í:DáÓÁM)<#–ÓÃM}+ñ2ÎNþñ²›O&„ð¢JNy*ŒòòÙ¸[;ñóÎO\"mÚÄóÅMõ<c Â´‚°±8¬K²,´ÓÇN£=07s×JE=Tá³ÆO<Ôô³£Jé=D“Ó:ÏC<Ì“àË‰=äèó®KÊ»Ì³ÈL3¬÷­„LTÐ€3ÊS,œ.¨ÿÏq-Œñsç7Í>‚?ó¼7O;Ü `ùOA9´óñÏ»\$œüÁOÑ;ìý`9ÎnÇIAŒxpÜöE=O¹<ü²5ÏÎ„ý2¸O?d´Ž„´Œ`NòiOÿ>Œþ3½P	?¤òÔOžmœúSðMôË¬·†=¹(ãdã¤AÈ­9“‘\0í#üä²@ƒ­9DŽÁÉ&ÜýòŠ‚?œ “Ði9»\nà/€ñAÝóòÈ­A¤ýSËPo?kuN5¨~4ÜãÆ6††Ø=ò–Œ“*@(®N\0\\Û”dGåüp#è¤> 0À«\$2“4z )À`ÂW˜ð +\0Š‘80£è¦• ¤ª”äz\"TÐä0Ô:\0Š\ne \$€ŽrM”=¡r\n²N‰P÷Cmt80ðú #¤ØJ= &ÐÆ3\0*€Bú6€\"€ˆéèú€#Ì>˜	 (Q\nŒðê´8Ñ1C\rt2ƒECˆ\n`(Çx?j8N¹\0¨È[À¤QN>£©à'\0¬x	cêªð\nÉ3×Chü`&\0²Ð´8Ñ\0ø\näµ¦úO`/€„¢A`#ÐìXcèÐÏD ÿtR\n>¼ÔdÑBòD´LÐÄÌõ‰äÐÍDt4ÐÖ j”pµGAoQoG8,-sÑÖðÔK#‡);§E5´TQÑGÐ4Ao\0 >ðtMÓD8yRG@'PõC°	ô<PõCå\"”K\0’xüÔ~\0ªei9Ðìœv))ÑµGb6‰€±H\r48Ñ@‚M‰:€³FØtQÒ!H•”{R} ôURpÍÔO\0¥I…t8¤ØðûÎÇ[D4FÑD#ÊÑ+D½'ôMÊ•À>RgIÕ´ŠQïJ¨””UÒ)EmàüTZ­Eµ'ãê£iEÝ´£ÒqFzAªº>ý)T‹Q3HÅ#TLÒqIjNT½¼…&CøÒhX\nT›ÑÙK\0000´5€ˆ¢JHÑ\0“FE@'Ñ™Fp´hS5F\"ÎoÑ®e%aoS E)  €“DU «Q—FmÎÑ£M´ÑÑ²e(tnÒ “U1Ü£~>\$ñßÇ‚’­(hÕÇ‘Güy`«\0’ê 	ƒíG„ò3Ô5Sp(ýõPãGí\$”œ#¤¨	©†©N¨\nôV\$ö]ÔœPÖ=\"RÓ¨?Lzt·ƒ1L\$\0ÔøG~å ,‰KNý=”ëÒGMÅ”…¤NS€)ÑáO]:ÔŠS}Ý81àRGe@Cí\0«OPðSõNÍ1ôÝT!P•@ÑÝS€ðÿÕS‰G`\nÉ:€“P°j”7R€ @3üÑ\n‘ üã÷â£”DÓ æúLÈÏ¼Ž 	èë\0ùQ5ôµ©CPúµSMP´v4†º?h	hëT‡D0úÑÖàõ>&ÒITxôO¼?•@U¤÷R8@%Ô–ŒõK‰€§NåKãóRyE­E#ýù @ýÃøä%Là«Q«Q¨µ£ª?N5\0¥R\0úÔTëFåÔ”RŸSí!oTEÂC(Ï¶ÈýÄµ\0„?3iîSS@U÷QeMµƒ	KØ\n4PÕCeS”‘\0NC«P‚­Oõ! \"RTûõ€S¥NÕÁU5OU>UiIÕPU#UnKPô£UYTè*ÕC«U¥/\0+º¸Å)ÈÚ:ReAà\$\0øŽ¤xòÇWDº3Ãêà`üÚüçU5ÒIHUY”ô:°P	õe\0–MJi€ƒµÃýQø>õ@«T±C{›ÕuÑì?Õ^µv\0WR]U}Cöê1-5+Uä?í\rõW<¸?5•JU-SXüÕLÔß \\tÕ?ÒsMÕb„ÕƒVÜt§TŒ>ÂMU+Ö	EÅcˆÏÔ9Nm\rRÇƒCý8ŽSÇX•'RÒéXjCI#G|¥!QÙGh•tðQ¸ý )<¹YÐ*ÔÐRmX0üôö½M£›õOQßYýhÀ«ßduÕ¤ÕZ(ýAo#¥NlyN¬V€Z9IÕºM•¦V«ZuOÕ…TÕTÅEÕ‡Ö·SÍeµµÖÊ\nµXµªSÛQERµ³ÔÙ[MF±VçO=/õ­¨>õgÕ¹TíVoUT³Z’N€*T\\*ÃïÐ×S-pµSÕÃVÕq€ÒM(ÏQ=\\-UUUV­C•Ä×ZØ\nu’V\$?M@UÎWJ\r\rUÐÔ\\å'U×W]…W”£W8ºN '#h=oCóÐýF(üé:9ÕYu•†¤÷V-UÓ9Ÿ]ÒC©:U¿\\\nµqW—™à(TT?5Páª\$ R3ÕâºŸC}`>\0®E]ˆ#Rêà	ƒÿ#R¥)²W–’:`#óGõ)4ŠRÀý;õáViD%8À)Ç“^¥Qõé#”h	´HÂŽX	ƒþ\$Nýx´š#i xûÔ’XRõ€'Ô9`m\\©†¨\nEÀ¦Q±`¥bu@×ñN¥dT×#YYý„µ®GV]j5#?L¤xt/#¬”å#é…½O­PÕëQæ¢6•££Ï^í† €šŽðüÖØM\\R5t´Óšpà*€ƒXˆV\"WÅD€	oRALm\rdGN	ÕÖÀú6”p\$PåºŸE5Ôý†©Tx\n€+€‹C[¨ôVŽŒýÖ8U•Du}Ø»F\$.ªËQ-;4È€±NX\n.XñbÍ•\0¯b¥)–#­NýG4KØÐZS”^×´M¶8Øód­\"C‚¬>ÅÕdHe\nöY8¥Ñ.ê ú°ˆÒFúD”½W1cZ6”›QâKHü@*\0¿^¸úÖ\\QßF‚4U3Y|‘=˜Ó¤éE›ÔÛ¤¦?-™47YƒPm™hYw_\ršVe×±M˜±ßÙe(0¶ÔFÕ\r !ÒPUI•uÑ7Qå•CèÑŽ?0ÿµÝgu\rqà¤§Y-Qèó°èú=g\0…\0M#÷U×S5Zt®ÖŸae^•\$>²ArV¯_\r;tî¬’¨”HW©Zí@HÕØhzDèÚ\0«S2Jµ HIåO 'ÇeígÉ6¹[µR”<¸?È /ÒKM¤ö–Ø\n>½¤HáZ!iˆö¤ŸTX6–Ò×iºC !Ó›g½à ÒG }Q6žÑ4>äwà!Ú™C}§VBÖ>åªUQÚ‘jª8cïUTàû–'<‚>ÈýõôHC]¨VšÑ7jj3v¥¤å`0ÃèÈ23ö°Ðòxû@U—k \n€:Si5žÕ#Yì-wî”ÕàéM?céÒMQÅGQÕÑƒb`•ò\0Ž@õËÒ§\0M¥à)ZrKXûÖŸÙWl­²öÍlå³TM×D\r4—QsS¥40ÑsQÌõmYãh•d¶ÂC`{›V€gEÈ\n–»XkÕà'Óè,4ú¼¹^í¢6Æ#<4éNXnM):¹·OM_6d€–æõ¸Ãõ[\"KU²nžÖ?l´x\0&\0¿R56ŸT~> ô†Õ¸?”Jnž€’ ˆÏZ/iÒ6ôÎÚglÍ¦ÖUÛáF}´.ž£¼JLöCTbMŽ4ÍÓcLõTjSD’}JtŒ€Z›ªµÇ:±L­€´d:‰Ez”Ê¤ª>ÖV\$2>­µŽ¢[ãpâ6öÔRŽ9uêW.?•1®£RHužèÛR¸?58Ô®¤íDÝÆuƒ£çpûcìZà?œr×» Eaf°}5wY´ëå‚Ï’ÒêÅW‚wT[Sp7'Ô_aEk \"[/i¥¿#ÿ\$;m…fØ£WOüô”ÔFò\r%\$Íju-t#<Å!·\n:«KEA£íÒÑ]À\nUæQ­KEÀ #€¿Xå¨÷5[Ê>ˆ`/£ÍDµÊÖ­VEpà)åI%ÏqßÜûníx):¤§le¢´Õ[eÕ\\•eV[j…–£éÑ7 -+ÖßGWEwt¯WkEÅ~uìQ/mõ#ÔW—`ýyu“Ç£DÝAö'×±\r±•Õ™OD )ZM^€³u-|v8]‹g½‘hö×ÅLà–W\0øÈû6ËX†‘=YÔd½Q­7Ï“”Ï9£çÍ²r <ÃÖêD³ºB`c 9¿’È`D¬=wx©I%ä,á„¬†è²àêƒj[ÑšÖíßOÿ‹´ ``ŽÅ|¸òòÆÞø¤Œ˜¼í.Ì	AOŠÀÄ	·‰@å@ 0h2í\\âÐ€M{eã€9^>ô•â@7\0òôË‚W’€ò\$,íÉÅš¡@Ø€Òâ•å×w^fmå‰,\0ÏyD,×^X€.¯Ö†©7ã·›Ã×2ÝÅf;¥€6«\n”¤Ž…^ŸzC©×§mz…én–^ˆô”&LFFê,°ö[€¥eÈõaXy9h€!:zÍ9còQ9bÅ !€¦µGw_WÉg¥9©ÓS+t®ÚápÝtÉƒ\nm+–œÞÙ_ð	¡ª\\¼’k5£ÒÜ]Æ4ˆ_h•9 Ù÷N…—Å]%|¥ˆ7ËÖœŽ];”ï|ñµ ßXýÍ9Õ|åñ×ÌG¢“¨[×Ô\0‘}Uñ”çßMCI:ÒqO¨VÔƒa\0\rñRÍ6Ï€Ã\0ø@H¢ÅP+rìS¤Wãè€øp7äI~p/ø HÏ^Ýê²ü¤¬E§-%û¥Ì»Í&.ÎÄ+¸JÑ’;:³¶«!“ýÐNð	Æ~öª‰€/“WÄÂ!„BèL+Â\$ðíq§=ü¿+Ñ`/Æ„e„\\±ÒÏxÀpE‘lpSÂJSÝ¢½ö6à‡_¹(Å¯©Äéb\\OÆÊ&ì¼\\Ð59\0ûÂ€9nñøD¸{¡\$á¸‹K‘v2	d]èv…CÕþÅÕ?tf|WÜ:£Ô¨p&¿àLn„Îè³žî{;ˆçÚGR9øT.y¹üïI8€¹´\rl° ú	Tè n”3¼öðT.ƒ9´è3› š¼Zès¡¯ÑÒGñþŽˆ:	0£¦£zè­Ý.Œ]ÀçÄ£Q›?àgT»%ñ™ÕxŒÕŒ.„šÔÇn<ì£-â8BË³,Bòì˜rgQþ¢íßó„ÉŽ`Úá2é„:îµ½{…gëÄs„øgóZ¿•… ×Œ<æ×w{¦˜ƒbU9ˆ	`5`4„\0BxMpð‘8qnahé†@Ø¼í†-â(—>S|0®…¾¥…3á8h\0Ñ«µCÔzLQž@¶\n?†¸`AÀ >2šÂ,÷á˜ñN&Œ«xˆl8sah1è|˜B‡É‡DxBÞ#V—‹V–×Š`Wâa'@›‡¬	X_?\nì¾  •_â. ØP¼r2®bUarÀI¸~áñ…S“àú\0×…\" 2€ÖþÀ>b;…vPh{[°7a`Ë\0êË²j—oŒ~·ûþvÍÙ|fv†4[½\$¶«{ó¯P\rvæBKGbpëÈÅø™–OŠ5Ý 2\0j÷Ù„LŽ€î)ÇmáÈV¡ejBB.'R{C¤ïV'`Ø‚ ‰Ž%­Ç€Ð\$ Oå\0˜`‚’«4 ÌNò>;4£³¢/ÌÏ€´À*Âø\\5„ÅÁ!†û`X*Þ%îÄNÍ3SõAMôþËÆ”,þ1¬²®í\\¯²caÏ§ ³ù@Ø¬Ëƒ¸B/„¬Íø0`óv2ï¡„§Œ`hDÅJO\$ç…@p!9˜!¥\n1ø7pB,>8F4¯åf Ï€:“ñ7Â„î3›£3…¿à°T8—=+~Øn«Îâ\\Äe¸<br·þ øFØ²° ¹C¡N‹:c€:Ôl–<\r›ã\\3à>ñ˜‡À6ONnŠä!;áñ@›twë^Fé€Là;€×º,^aÈ\ra\"ÞÀÚ®'ú:„vàJe4Ã×;•ñ_d\r4\rÌ:ÛüÀ¬S˜à2€[c€„XÿÊ¦Pl˜\$¹Þ£i“wåd#ŽB šb›Î×¤õ’™`:†€Ï~ <\0Ñ2Ù·—‘RŒÂÆPÈ\r¸J8D¡t@ìEŽè\0\rÍœ6öóäÞ7•½ä˜YÏ£ú\"åäÀš\rüƒ¦Àš3ƒ¡.˜+«z3±;_ÊŸvLÝäÓwJ¿94ÀIJa,A¦ñˆ¯;ƒs?ÖN\nR‡!Ž§Ý†Om…sÈ_æà-zÛ­w„€ÛzÜ­7¡ÍÅzî÷–M”ˆ€o¿”¥æ\0¢ƒa”ÅÝ¹4å8èPfñYå?”òi—–eBÎSà1\0ÉjDTeK”®UYSå?66R	¦cõ6Ry[c÷”°5Ù]BÍ”ÖRù_eA)&ù[å‡•XYRW–6VYaeU•fYeåw•ŽU¹båw”Eë°Ê†;z¤^W«9–ä×§äÝ–õë\0<Þ˜èeê9SåÎ¤daª	”_-îá‰L×8Ç…ÍQöèTH[!<p\0£”Py5ˆ|—#ê‘P³	×9vàš2Â|Ç¸áfao†á,j8×\$A@kñƒ¿ŽaË‘½bócñÈf4!4¨‘¶cr,;™‘æ‘öbÆ=€Â;\0°øÅº…˜†cdÃæX¾bìx™a™Rx0Aãh£+wðxN[˜ÜB·pÚƒ¿w™TÀ8T%™šMšl2à‡½¡šð—}¡Ès.kY„˜0\$/èfU€=þØs„gKÃ¡ˆM› õ?ÿ›ç`4c.Ôø!¡&€åˆ†g°ûfà/þf1=¯›V AE<#Ì¹¡f\n») Šë›Npò“ã`.\"\"»Açœ¤ã—üq¸X“ Ù¬:aÉ8™¹f¯™Vsó‹G™ÞrŽ:æVÞÆcÔgVl™g=`ã“WŽËýyÒgUÀË™ªáº¼îeT= ã€á€Æx 0â M¼@ˆ»šÂ%Îºb½œþw™ÆfÛÙOøç­˜Ü*0¯…®|tá°%±™PÈÍpæúgKžù¬?pô@JÀ<BÙŸ#­`1„î9þ2çg¶!3~ØÜçînläÅfŠØVhù¬Ž.Ñ€à…aCÑù•?³Šû-à1œ68>A¤ˆaÈ\r—¦y‹0 Öi‘J«} à¹© Ðz:\r¡)‘Sþ‚¡@¢åh@äöƒY¹ã´mCEg¡cyÏ†‚<õàÍh@¼@«zh<WÙÄ`Â•¨±:zOãÎÖ\rÍêW«“°V08Ùf7™(Gyƒ²`St#ï„f†#ƒ²œC(9ÈÂ˜Ø€dùææ8T:¯»Œ0ºè qµ  79·á£phAgÜ6Š.ãæ7Fr™bä ÈjšèA5î…†ƒá¡a1úÚh•ZCh:–%¹ÎgU¢ðD9ÖÅÉˆ„×¹Ïé0~vTi;VvSš„wœØ\rÎƒ?àÇf²£…ÿ¥nŠÏ›iY™ìaº¬3 Î‡9Õ,\n™Ãr‘‰,/,@.:èY>&…šFÑ)ú™¶}šb£€èiOÝiæš:dèAŒn˜šc=¤L9O’h{¦ 8hY.’ÙÀ®¾‡®‡…œüÇ\r¬Ö‡£À›Šé1Q¯U	”C‘hô†eÿO‰›°+2oÌÎìÞN‹˜÷§øzpè¢(þ]Óh€å¢Z|¬O¡cÑzDáþ;õT\0j¡\0…8#>ÎŽÁ=bZ8Fjóìé;íÞºTé…¡w®Í)¦ýøN`æë¨¤Ã…B{ûƒz\ró¡c“Óè|dTG“iœ/ûú!i†Ê0±¼ø'`Z:ŠCHï(8Âê`V¥™Úãöª\0Üê§©†£WïßÇª˜ÕzgG¾‘…ƒ½²-[ÃÐ	iœêN\rqºé«n„„“o	Æ¥fEJý¡apb¹ê}6£…Õ=o¤–„,tèY+ö®EC\rÖPx4=¼¾™Ù@‡‰¦.†‘F£[¡zqçÜèX6:FG¨ #°û\$@&­ab¤þhE:²ƒå¬ä`¶S­1—1g1©þ„2uhY‹¬_:Bß¡dcï–*ÿ­†\0úÆ—FYFœ:Ë£ªn„ØÌ=Û¨H*Z¼Mhk/ëƒ¡žzÙ¹ï‹´]šÁh@ôæ©Øã1\0˜øZKùž¢ëÎÆè^+º,vfós®š>ˆ¤’Oã|èÀÊsÃ\0Öœ5öXé‹îÑ¯F„÷n¿Aˆr]|ÏIi4è…þ ØÂC° h@Ø¹´Ÿž–cß¥¨6smOÃå‰™›gX¬V2¦6g?~ÖÃYÕÑ°†súcl \\RŠ\0Œ¨cœA+Œ1°„›ùÌé\n(ÑúÃÌ^368cz:=z÷‚(äø ;è£¨ñsüF¶@`;ì€,>yTßï&–•d½L×Ÿœÿ%Òƒ-ëCHL8\r‡Çbû°°£úMj]4Ym9üÛüÐZÚBøïP}<ŸûàX²¯‰Ì¥á+gÅ^ØMÞ + B_Fd¬X„ø‹lówÈ~î\râ½‹è\":ÔêqA1X¾ìæ²Ðø¯3ÖÎ“Eáh±4ßZZÂó¸& …ææ1~!Nfã´öo—ˆ™\nMeÜà¬„îëXIÎ„íG@V*X¯†;µY5{Vˆ\nè»ÏTéz\rF 3}m¶Ôp1í[€>©tèe¶w™Ÿæë@VÖz#‚2Äï	iôôÎ{ã9ƒ‚pÌ»gh‘Šæ+[elU‰¦ÛAßÙ¶Ó¼i1Ä!Œ¾ommµ*Kà‡ê}¶°!íÆ³í¡®Ý{me·f`“—mè˜CÛz=žnÞ:}g° T›mLu1FÜÚ}=8¸ZáíèOžÛmFFMf¤…OO€ðîáÀ‹ƒèøß/¼éõ¸Þ“šå€þV™oqj³²èn!+½òµüZ¨ËI¹.Ì9!nG¹\\„›3a¹~…O+Îå::îK@Œ\nÚ@ƒ‘¤Hph‘´\\BÄõdmfvCèžÓPÛ\" æ½Û.nW&–ên¢øHYþ+\r¶“Äz÷i>MfqÛ¤î­ºùÝQc‚[­H+æÀo¤Ñ*ú1'¤÷#ÄEw€D_Xí)>Ðs£„-~\rT=½£žà÷ˆà- íy§m§¹æð{„hóŸÌjÚMè)€^ž¹ïÀ'@Vå¡+iÈîÎò›Ÿåµ†É;F“ D[Îb!¼¾´B	¦¤:MP‹îóÛ­oC¼vAE?éC²IiYÍ„#þp¶P\$kâJÞq½.É07œþöxˆl¦sC|ï½¾bo–2äXª>Mô\rl&»Ç:2ã~ÛÑcQ²îò²æoÑÞdá‚-þèUÜRo‚YšnM;’n©#–ß\0–P¾fðÚPo×¿(CÚv<Ê¬ø[òoÛ¸”šû×fÑ¿ÖüÁ;ßáº–õ[úYŸ.o®Up¿®pUŒø”.ž ©B!'\0‹òã<Tñ:1±À¾ šã¤î<„›ðnˆîF³ðƒI¢Ç”´‚V0ÊÇRO8‰wøÎ,aFú¼É¥¹[´ÎŸ…ñYOù«‰€/\0™Ùox÷ÇQð?§°:Ù‹ëÆè`h@:ƒ«¿öÑ/Mím¼x:Û°c1¤Öàû¯ív²;„‚è^æØÆ@®õ@£úð½ÂÇ\n{¯¼Âî‹à;ç‘´B¼í¸8‘º gå’ä\\*gåyC)Û„E^ýOÄh	¡³¦Aƒu>Æèü@àDÌ†Yæ¼í›â`o»<>Àƒp‰™ŠÄ·’q,Y1Q¨Áß¸†/qgŒ\0+\0âæå‡Dÿƒç?¶þ î©Úßîk:ù\$©û¬í×¥6~I¥…=@ŽíÑ!¾ùvÚzOñš²â+ÍõÆ9Çi³–›¼aïð†êû…gòðôî¿—¹ÿ?š0Gn˜q²]{Ò¸,FáÃøO¡â„Þ <_>f+¢,ñÌ	»Ôñ±&ôœ†ðíÂ·¼yêÇ©Oü:¬UÂ¯ˆLÆ\nÃÃºI:2³¿-;_Ä¢È|%éå´¿!Îõfž\$¦ˆ†Xr\"Kniîñ—ÀÐ\$8#›g¤t-›€r@LÓåœè@S£<‘rN\nD/rLdQkà£“”ªõÄîeðåäãÐ­åø\n=4)ƒB˜”Ë×šôÌZ-|Hb¡†‘HkÊ*	ÖQ!Ð'êG ž›Ybt!¿Ê(n,ìP³OfqÑ+X“Y±ÿ‚ë\"b F6ÖÌr fò\"ÒÜ³!N¡ó^¼¦r±B_(í\"¨KÊ_-<µò *Q÷ò¨Ù/,)H\0„‰²rç\"z2(¹tÙ‡.F>†‡#3â®Ø¦268shÙ þ¨Æ‘I1Sn20¶çÊ-«4’ÚÇ2Aœs(¬4ä¼Ë¶Š\0ÆÝ#„årþK'ËÍ·G'—7&\n>xßüÜJØGO8,ó…0¼â‹ù8”ÑÓ\0óW9’ÝIˆ?:3nº\r-w:³ÂÌÅ×;3È‰”!Ï;³Üêƒ˜˜Z’RMƒ+>ÖÜðÊé0/=R…'1Ï4Õ8ûÑÏmÿ%È¥}Ï‡9»;‚=ÏnQöã=ÏhhLõ·GÏkWÎ\rô	%Ø4ÒœsñÎ–J€3sÛ4—@™U‚%\$ÜÑN;Ì?4­»óNÚÏ2|ÊóZÚ3Øh\0Ï3“5€^Àxi2d\r|ûM·Ê£bh|Ý#vÇ` \0”ê®äàû\$\r2h#ú¤?³ˆI\n’¼+o-œŠ?6`á¹½¿.\$µšøKY%ØÂJ?¦c°RN#K:°KáELÁ>:Á¥@ŒãjP‘Ìn_t&slm’'æÐ©É¸Óœ²Œ½—ã;6Û—HU5#ìQ7U ýWYÜU bNµ–Wû_ûª©;TCø[Ý<Ú–>ÅÇõ‰WýCUÔ6X#`MI:tùÓµ€ö	u#`­fu«\$«t­öXó`f<Ô;båghöÑÕ9×7ØS58õ¬Ý#^–-õ\0êÀúîÕ¹R*Ö'£¨(õðõqZå££êX¹QÝFUvÔW GWíñÓTêÇWô~Ú­^§WöÄÁÕýJ=_Ø—bmÖÝbV\\l·/ÚMÕÿTmTOXuÊ=_ýITvvu‹a\rL_ÕqR/]]mÒsu=H=uÑg o\\UÕ…gM×	XVU À%õhý¡53U™\\=¡öQßØM¹v‡€¡gåmàõue¡ˆÙûhÿbÝMÝGCeO5®ÔÖO5…ÔYÙi=eÕ	GTURvOa°*ÝivWX•J5<õ¯bu ]ˆ×Öðúµ<õÃÙÕ\$u3v#×'eöuÑR5m•Šv‹D5.vŽŒõW=ŸU_å(´\\VØÏ_<õ÷SÍn)Ü1M%QháZ‡T…f5EÕ'ÕÍW½ŠvÅUmiÕ‚UÔÕ]aW©U§dRváÙ-YUZuÙUV—UiRV™õ³ÓÇ[£íZMU§\\=Âv{ÛXýµ¼wQ÷huHvÇ×gqÝ´w!Úoqt¢U{TGqý{÷#^G_ubQ„êå•i9Qb>ÚNUdº±k…½5hPÙmu[•\0¦êÅ_¶é[õY-ðô÷rõÈÕ(ÖCrMeýJõ!h?QrX3 xÿÈÏ#‡÷xÖ<Û{u5~ƒíÑ-ÝuŽëYyQ\r-”î\0ùuÕ£uuÙ¿pUÚ…•)–PåÜ\r<u«S›0ÝÉw¹ß-iÝóÔ!ÌÖŠøB÷áÆd]ùèÅ‡ÔÆEêðvlmQÝ6k¼ÒJ´ˆwí¦ÄžØÃãŒED¶UÙR“ev:XßcØNW}`-¨tÓH#e„bº±u€ãó	~B7ê ?ƒ	OPœCWµ×SEÍ•V>¶“×UÛ7ßžç‰Ôám»Ó‚¬zÿ=µƒÍØ1º™ƒ+ ¹mÃI,>µX7àä] .‡½*	^îŠã°N…º.èÎ/\"„˜)Ð	…¯‚sž®|à¤çÓŸÐlÁ}ã¸ŽÍç!óîƒ‘5n±p„j£¾h’}½èðm“EázHÂaO0d=A|wëß³ãë×šÎìu²œŸvùØ¼G€x#®…b”cSðo-‰ùtOm`C‹ò^MŒÅ@ë´h­n\$k´`þ`HD^PEà[äŒ]¹¨rR¸mž=‚.ñÙ‡>Ayi‚ \"ú€ò	Ö·oã-,.œ\nq+À¥åfXdŠ«¶ã*ß½ˆKÎØƒ'Üê Ð%aôÿ‡ù9pûæ—øKLM„à!þ,èÊËŽ¨ŒzX#˜Vá†uH%!Àœ63œJ¾ryÕíùq_èu	úWù±‡Æ|@3b1åÈ7|~wï±³þíA7“ÒÂ›è™	¼™9cS&{ãäÒ%VxðïkZO‰×w‰Ur?®„’ªN Î|…CÉ#Å°õåÕ¯ ¹/ú™9ftŽEw¸CÁºa¦^\0øO<þW¦{Yã=éŸeë˜ýnÉ„ígyf0h@ìSÝ\0:C©´^€¸VgpE9:85Ã3æÞ§áºð@»áŽj_ª[Þ+«êÇ©xƒ^“ê®†~@Ñ‡Wª¸ãã“œ†9x—FC˜¿­.ãšçöük^IŽû¡pU9üØSŸØ÷½—œ\$óóø\r4´…ù\0ÎèO°ã‘Ä)L[Âp?ì.PECSìI1nm{Å?žPîWAß²Á;€ñìD°;SºaKføò›%?´XõÞ+¤B>½ù9¿¯ÙGj˜cžz‘AÍŽ÷:êa³n0bJ{o¥·!3À­!'’ØKÃÅíùÔ}ã\\èÎ3Wøê5îxÏÉÁL;ƒ2Î¶n—a;²í×ºXÓ›]Éoºœxû{ä¦5Þ™jX÷ˆð—¶vÓšéãqÞÊEE{Ñ€4Á¾öÄ{íÙç	Ì\nöÊ>ù™aï¯·¾üì§ïØLûÔûåïÿ½ûìñ'ð½Þé{ë\n‰—>JøßŒŒá¸Ó—†÷YÏ\rOÊ½ð‘t¯ÿû¥-OÃ¦ü4Ôÿ9Fü;ð§Á»ÔüGðøIªFßì1ÂoÿßóñO²¾éa{w—0Ó»ï¤Æ¯;ñ”„‘lüoñàJÐTb\rwÇ2®Jµþ=D#ònÁ:ÉyñûSø^ã,.¿?(ÈI\$¯ÊÆ¯í¨á3÷Ãsð4MÊaCRÉÆÍGÌ‘œúIß°n<ûzyÑXN¾ð?õâ.Ãî=—àñ´DÇ¼\r›žØé\nÕó¨\roõý\nÐŸCl%ÁÍYÎû¥ß°ÏàGÑþÚ}#VÐ%ý(ÔÿÒà3æÉ˜ržð};ôû×¿GÉÌnö[ª{¥¹–“_<m4[	I¥¢À¼q°µ?ð0cVýnms„³nMõõˆ\"Nj1õw?@ì\$1¦þ>ðÒ^øÕû¥ö\\Ì{nÂ\\Ìžé7Ÿ„¿ÙŸic1ïÚÿhooê·?j<GöxŸlÏù©Sèr}ÍÃÚ|\"}•÷/Ú?sç¬tIäåê¼&^ý1eóÓtãô,*'F¸ß=/Fkþ,95rVâáøàÀºì‘ˆÛo9Íø/FÀ–_†~*^×ã{ÐIÆö¯ã_ƒ‚²Œ“^n„øþNŸŠ~øáÅAí¦‘d©åñþUøwäqY±åî´T¸2ÀéGä?‡&–§æô:yùè%Ÿ–Xç˜JÛCþd	WèßŽ~úG!†´J}›—¤úìùõÄB-Óï±;îûœhÃ*ó¼R´ìöE¶ ~âæó.«~Éçæ SAqDVxÂîÍ='íÉEÙ(^Šû¢~›ùø¿›çòéçïo7~‚M[§Qãî(³Üy¸ùnPÑ>[WX{qÔaÏ¤ÆÉý.&NÚ3]ñúHYïÝûƒëÛ[¶ÁÙ&ü8?Ñ3„‹›¦¶§Ý†Ú»¶á#Œ¦ÎBðe6ë…@–“[°¤£ûàÐG\rÎ+ý§}ü˜÷ÁÿÏ_Ýç7–|N„§«Þ4~(zÁ~“»¹ï§%›–?±ßÓÈ[¹ø1žSª]xØköÑKxO^éA€‰rZ+ºÿ»½*ÂWö¯kþwD(¹ø»R:æý\0•§íù'¤Šó“m!OÐ\näÅuè‚Æó.[ PÆ!¹²}×Ïm Ûï1pñuüâ,T©çL 	Â€0}â&PÙ¥\n€=Dÿ=¾ñÐ\rÂšA/·o@äü2ãt 6àDK³¶\0ÈÂƒq†7„l ¼ðBêŠúÌ(ƒ;[ñˆkr\r‘;#‘ÃäƒlÅ”\r³<}zb+ÔÐOñ[€WrXƒ`Z Å£†Pm'Fn ¼‰îSpß-°\0005À`d¨Ø÷P„ÁÚÇ¾·Û;²Ìn\0‚5fïP„¿EJäwûÛ ¹.?À;¶§NòÞ¥,;Æ¦Ï-[7·ÞeþÚiÅâ-“ÖîdÙŽ<[~”6k:&Ð.7‡]\0ó©ûë–ù/µ59 ñÁ@eT:ç…˜¯3ÅdsÝú5äœ5f\0ÐPµöHB–•í°½º8JÔLS\0vI\0ˆ™Ç7DmÆaž3e×íŽ?B³ª\$´.E‹ÐfË@ªnúƒ‰bòGbÁÏq3Ÿ|üšPaËˆøÏ¯X7Tg>Â.ÚpØï™’5¸«AHÅµ’Š3Sð,˜Á@Ô#&wµî3†ôm[ÏÀòIíÑ¥Ó^“Ì¤J1?©gTá½#ÏS±=_„‚_±	«£ÉVq/CÛ¾·Ý€Î|ËôáþD ƒg>Ü„õëé 6\rŠ7}q”ÆÅ¤‹JGïB^î†\\g´Ýõüœ&%­Ø[ª2IxÃ¬ªñ6\03]Á3Œ{É@RUàÙMö v<å1Š¿‘¾sz±uP’5ŸªF:Òiî|À`­qÓ÷†V| »¦\nkâ}Ð'|Žgd†!¨8¦ <,ëP7˜m¦»||»ÿ¶IŽAÓ]BB ÏFö0XÏú³	ŠDÖß`W µÁqm¦OL‘	ì¸.Í(Áp‚¼Òä¶\"!‹ýª\0âÍAïÃô‡‰ÁV€–7kƒŒM¸\$ÓN0\\Õ§ƒ\"‹f‘á Çëñ È\0uqž—,Œ 5ÆãA6×pÎÎÈ\nðÎjY³7[pK°ð4;lœ5n©Á@â\\fûÐl	¦‚MöùûPÁç3®—C HbÐŒ©¸cEpP‰ÚÐ4eooeù{\r-àš2.ÔÖ¥½ŒP50uÁ²°G}Äâ\0îËõ¨<\röœ!¸œ~Êýµ¾óñ¹\n7F®d¶ýà“œ>·Ôa¢Ù%ºc6Ôž§õMÀ¥|òàd‹û·ìOÓ_¨?J„æªC0Ä>ÐÁ&7kM4ª`%fílðÎ˜B~¢wxÑÚZGéP†2¯à0ü=ž*pð†@ˆBeÈ”ØÏ|2Ä\r³?q¸Ð8í¸ë±ñÍÐŠ(·yráö 0àî>œ>ÀE?wÜ|r]Ö%AvàýÁÅä@Ž+ÝXÁªAgâÉÛÿsû®CÐûAXmNÒú4\0\rÚÍ½8JÝJðÇ¸DÒšó´:=	•ðó‡ëÆS™4¯ñF;	¬\\&Öè†P!6%\$iäxi4c½0Bá;62=ÚÛ1ÂùÌˆPCØåÂƒmËÍ“dpc+Ò5Šå\$/rCR†`£MQ¤6(\\á2A ¦¹\\ªŒlGòl¬\0Bq°¤P¯r²ûøBµ‰ê›Ñ‚¹_6LlË!BQŽ‰IÂŽGÀåÜØðXRbs¡]B—Hržã˜`ÎX‹ä\$på±8ð„•	nbR,Â±…L \"ÂE%\0’aYB¦sœ…ÍD,!Æ×Ï›pN9RbG·4ÆþM¬Œt…¸œ¬jUô¤À§y\0ìÝ%\$.˜iL!xÂìÒ“Å(Ä.‘)6T(’I…ìa%ÒKÈ]mÄt¥ô…ú&‚óG7ÇITMóBú\rzaÂØ])vaˆ%œ†²41TÁjÍ¹(!…¬Þ¡¨\\\\ÆWÂÜ\\t\$¤0Åæ%á”\0aK\$èTšF(YàC@‚ºHÏŽÐHã€nD’dÃ†Wp˜ÉhZ¯'áZC,/Ž¡\$û¦£—J¡FB¨uÜ¬Q:Î¥ÂAö‰:-a#”ì=jb¨§lÕUg;{R°€Uº±EWnÔUa»Vâî•Nj¬§u‹GÉ*¨yÖ¹%ÝÒ@Åï*Ìä«ÕYxê±_ó²§z€]ë)v\"£çRÕåL¯VIvê=`›¾'ª°UÝ) S\r~R˜•™\ni”Å)5S¦åD49~Êb”;)3‡,¦9M3¯HsJkTœÃœ‡(¢†ú—uJ‰][\$uf¨íob£µ¹\n.,îYÜµ9j1'µŒ!ö1\$J¶‘gÚ¤ÕŸÄ†U0­ÓZuah£±·cH¥,ÃYt²ñKbö5—ë5–’/dY¬³AUšÒ…©‹[W>¨_Vÿ\rˆ‘*·õ©j£§-T±… zÖYÊd•c®m‡Ò¹±Ø:¹€üË[Ut-{ªµýl	£i+a)».[º•_:Ú5žähƒò­WÂ§Ém»¥%JI‘´[T«h>š®µ·°•™;ËXÌºdêÂŸS›d‰Væ;\rÆ±!Nˆ“K&—AˆJu4B…ÁdgÎ¢.Vp¢ámb‹…)ÇV!U\0Gä¸¨“`‹Ð­\\…qâŸ7Qöb«VL¥Þ:äÕ‚úƒó¬Z.­Nò˜Ä*–ÔU]Z´læzë…Îöù®ÇR D1IŸåÂ£Ñr:\0<1~;#ÀJbà¦ÊM˜yÝ+™Û”/\"Ï›j<3æ#“–ÌŒêñ¡…:P.}êe÷ïòD\"qÙyJýGŒû·sopŒ¯²þXŒ\rÝ³d–Þ\rxJ%–í‰ÏÆ¼O:%yyãÅ,‡”%{Î3<îXÃ¸ÏÌ÷¯zÂEÎz(\0 €D_÷½Ÿ.2+Ög®bºcÚxìpgÞ¨Áß|9CPŽûî˜48U	Q§/Aq®ÝQ¼(4 7e\$D“‰v:ŒV¡b×ûN4[ùˆiv°Àê2ñ\r•X1¼˜AJ(<PlFÐ\0¾¨€\\zÝ)ÑçšW€(ü4ôÈÃÚï¢ p•™ÓõÊ`µÇ\r³da6”¯üOÖímña´}qÅ`ÂÀ6Pƒ'hàç3§|š’îÃf jÈÿAæƒz‰ø£+ŒDŒUWøDíþÞ5ÅÄ%#é°x“3{«¶L\r-Í™]:jd×P	jüf½q:Z÷\"sadÒ)óGØ3	¤+ðŠr„NKö1Qþ½ç†x=>û\"¤°-á:ÊFÍõœIÙƒ*í@ÔŸÇy»Tí\\Uè¨ãŠY~ÂŠ‰Žäâš‚3Då€Á™ã¨f,s¢8HV¯'Ét9v(:ÖB9ñ\\Zš¡…(‘&‚E8¯ƒÍW\$X\0»\nŒž9«WBÀ’bÁÃ66j9Ð âÊˆ„ƒ?,š¬| ùa¾g1²\nPs \0@%#K„¸€ \r\0Å§\0çˆÀ0ä?ÀÅ¡,ä\0ÔhµÑh€\08\0l\0Ö-ÜZ±jbàÅ¬\0p\0Þ-Ùf`ql¢ä€0\0i-Ü\\ps¢è€7‹e\"-ZðlbßEÑ,ä\0ÈÌ]P ¢ÚE¶‹b\0Ú/,Zðà\rÀ\0000‹[f-@\rÓ¯EÚ‹Ï/„Z8½‘~\"ÚÅÚ‹­ö.^ÒÎQw€ÅÏ‹‚\0Ö/t_È¼ÀâèEð‹Ö\0æ0d]µ€búÅ¤‹|\0ÈÄ\\Ø¼‚¢íE¤\0af0tZÀÑnJô\0l\0Î0L^˜´Qj@ÅáŒJˆ´^¸¹q#F(Œ1º/ì[µ1Š¢ãÆŒIæ.Ü^8»\0[ŒqØÌ[Ã‘l\"åÆ Œ€\0æ0,dè¶À€Æ\rŒÌ„cøµ{cEÁ\0oâ0¬]°\0\rc%ÅÛ‹—ðˆ8½w¢åÆZ‹µ-Ä\\ºñ{ãÅÖ‹Gª/\\bp„…@1Æ\0a²1ù‹ÈÏÑsã!Å¨Œ/î/Ì]8¹‘~c\"ÅÛ‹Åþ2ôcÎ‘m£\"€9Œqš/\\^fQ~cÆ_‹£Î-\$iž\"Ö\0003ŒË¬¤fXºqx#\09Œ—Z.´i¸ÈŒ@FˆŒ‰3tZHÉ \rcK€b\0j’/DjøÉ1¨ââÆIh´aÈñv€Æ©OZ4œZòÌÑ‚#YE¨\0i–.hHÒÑsX/F<‹Ï†.äjøËñ­bèÆÍ\0mV/d\\èØñ‹b÷E³‹£ž3T^(ÝÑˆcKFR‹Õù‚ô]X¶q½¢øÅà—’6Ô]hÓñžc6EÄ‹ó66Üh‘Ÿãn\0005sn/dn¸Ô`\r\"ÑFŒ³Ú-D`ÈÕ‘‹ãN€2‹Y”¤bxÀñ”#\\Åë‹‡V3x·1x€FxŒ¾\0Ê6Œb°q£ƒÇ!Žž8|^‚ÌÑubåÆàÕ-ôrØäq¼ã:ÆéŽ%ö0Œppñ”#Ç‹¢\0Æ6ÔfÕÑÇ¢âÅ¬dÒ0„qH´±¾£\$Ç@‹qò-¼^B4±¦\"ú\08Ž1ª/lnxÏ‘ âêG3:0tjhÒ~@Æ¼Ž¥¦3¤vHÆñ¹bÜG(Že„4gØºqÂã2Æ1ŒÉ-ŒnXËñº\"ãF<Qž1\\j¸¸1®ãÈEÇ‹Çä³4m¨Õñªã[ô‹nÁz7üyhÞ1§#ÆÞŽ/‚3\\xÐqÍKG‚ŒÿÆ6äo˜Ñ1{£°FJ×š6¼lXéqâ£„Æu©Þ9œr(¿1Òã‡Gc\0Åf:„rX½ #ÐÅ½\0iÞ<\\}×ñåbîF½\0sÖ7Üy2ÌÑæ#uFe›\">4iØÅ¿âÔÆçŒé\n<{¸ã‘£âÆ‰ŒJ;¬]ØÄ1Å#ÎÆ0ÙJ;4^èÂD½ãóÇ®‹Ÿ¨³4i¨À(H#ÚÆEŒx–/¤nøû1ðã/Ç¡‹åj6,l˜Û1tã/\0005%ï0„]xü‘¶£GG5!’0¤€¨×ñÚâé–rŒq¢2Ì¨Þ‘ÎãNFPo\"4ô_˜·1×dÇ%‹e ²3¬s8é‘üã†G5Ž“ æ6Ô[Hë“cØHjYš;ô[è¾‘˜bë! Žyò@Ä\\¸½qØ#WHN‡Ž;ÌcÆQèã:Ç-%ª.œkXÆ‘ý£ÚGÍŒÏ†1Df¨ß‘ºcWFl¡!‚0ü€™²c EÜ©Ž;l˜Ñq\"ëF©ß¢7\\\\¨ùñâ£ÔÆO‹qþ.T|\"?‘ñã™ÆE³f9TyYÑ©ãSG1ûÂA\$f9R\n\"ÞÆxŒ¹>Bœ…HÚñß¤\0ÇŒ¶:\$e¹1œ£³F?=º3Tu)\nq¹béÇ~ËÎ<TøÎ±Ðc‰H.‘m~CôwHÊ±¸#/ÈI]~3ä^ˆºÑ„#§Æ>‘Y®4Œ^¸ÎQjcÊÇKŒ1\"Ò8¬|6Ñåc\"ÇB‘µ\"b4ãèæ%œ¢ÔÈG\0e\"’/t‹¨´1r£1Æe!v2„yÀ±õä<Ç †8\\o¨ÊÑ’#tÅÑ\rz@´}HÂ‘èbïÆèy î1Ì\\¨ðëdeGŽÁZ3Œ~ér)ã1È¿‹Û†Bl~H½²:£dF£‘-Î?”k8´qèc(FÍ‹ŠKÞ5|myñ€c1Æ<’*@´jØáò1ãÛÅ¾Œ‹>I´ZèÍQjä•È2ŒÉ\$0¤‹hµQˆäVFTŒ	\$ÆAl~öqÚ£È±Ž\$Ö>\\pÙ\rq‚\$/Èu%ï!®Jq \$ ãtE²‹GN-Tq)ò\"¢ÛHÊŒË¦=ì–XÉ2-£H’«š8\\nˆµRW\$HŒë\"¢C\\_¹\0»d\$Çf‘³\".D„u	'Q£zEíŒÙ&0toˆóqjãúÆ¿Œ³R@d—øÉä£ùÇu##¶LLkÉ*qó\$*GÄ‘iÎ@TŠi‘lãòEª‘ƒÎ5Œ˜¾r\\d–I–‘µ\"/ÌZÉ0’j\$TÅþŒz5Ld3’£ëÉ’oÂ.Tq¹!1{£Æ‹åÖ9œZ¸¾QÕbÓFŒwJ94nˆÒÄÖä{É(“-Ž8·2h¤uÈé“;\$†-Dkøårs£‡Hž™#¡‚ôY7ò\"Ø/E¿’Ó 	\$j¢^ò-£]Ç7Ž[\"N\$’èÂ‘“¤WÈ‘¯Ö/]à\$²+€1Ga/&IDnøÂ’@\$åÆ!‹ç\$Î-Œk!Q¨âùÊ)(N/\$t¸Ý¹äëÆOKzP´tXÜò[\0’GŽ’w(*K\$vˆË1ócÉ'“ÞGÌžIòxd­È\n“AÒ8\\rX·Òa£÷I”iNœI%\$½ã’Æ_‘÷ª6¤fçQþ#–ÈI”5#ŽF´—ØºñÏ#³Eâ’•\"î3\$¢IÜc‡Hˆ‹ÝvR|ùQ€¤cE¸ñ:R„eº±hä¶EÎfK`8þr.#·E³s®0L…˜üRä†F©‹·!\nC\$`Èöñ´\$ôH?’ËnPÜe™!ñš¥@F'”¿–/œ‡¸¶ÄÖäÿÊ”¯%ÂN,hÈÌrF\$öÈþŒÇ3´tøæÒ€¥Åæ’!1<„ÉCQÏ%ÉÃ’¹æJäZØf.Ý6Å†œ·±C‰¥ÊÔœ.²[þ™BÒ¿xëàƒè\0NRn`šÈùY\n’%+N¨IMs:Ã¹Ydƒef¬B[¶°ÝnÆ¹YŠòm¨ÁR®×’ûÉY¯ÚC„XŒëÛj³çU+Vk,¯\0Pëýb@e²¹¥x¬„V¾ºyT¤7ˆuî«[Jï•È±\nD¯§eR¿¬mx&°lÀ\0)Œ}ÚJ¼,\0„IØZÆµ\$k!µ¨ñYb²Áœ°€RÂ‡e/Q¾Àk°5.Áe‘­5•À¨žW‘`ª¥\0)€Yv\"VÂ\0•Ã\n‡%—å–`Yn¯Õ¡aôÔxÃ†Q!,õ`\"‰	_.Ÿå©Æ–tm\$•\"“²J«¤ÖÀ§ŽvÆ%‰M9j‚°	æ–§Ä*³KpÖ”’;\\R ¼ü3(§õŠ^¯:}–Èï|>Âµa-'U%w*‰#>¤@Ì¬e–Jÿ¤;Pw/+¹á5E\rjn¡ÐÃd–ô¢^[ú¯§cÎ°¥uËz\\Ø1mi\"x‚„påÃ;£ÌîˆæˆP)äøªÇ#„±Ø’¡…Ë!Aª;¨ß	4ì³a{`aV{KUàÊ8ã¨Ÿ0''o€2ˆ¨¢ycÌ¸9]Ké@ºÒ—^ðlBˆâOrëÔã,du¤¾8¤?õ‰€Õ%¼gB»ˆî‚ÆYn+ã%c¬e\0Œ°ñà¤±Yr@fì‹(]Ö¼¨\nbizîÖn€SS2£ÁGdBPjŠ¹Ö@€(—È¥¦!à-çv²´eÚ*c\0„ª4Jæç‚’ùÕÙ,“UÈ	dºÉeðj'TˆH]ÔŠÔG!œ)u‹ÕÖ¯Ÿ•Ò¯ùZËB5ûÌ“WŽ‰0\n±á¡ÔR«ÁW…\\¦Q jÄ^rÊ%lÌ˜3,ÒYy×Éf3&Ì•ÜŽÕQ:Ïµ2„mÉR)”T€¾(KRÁ 0ªÊ”@«ìY´¢Y:£Ùe3\r%´¨°Tö%­X”Á¹‡STÔ.J\\ë0ÙhôÄ…ŠD!Ä:—uæêÉU\"¾ÅÁo+7–\"„µ“f'º­R\0°‘ÞJõ2S–2è#nm »ÁIåŠœý\"Xü³²[Ö€Ñì} J¨¯c¼9p0ªüÕQ»(U\0£xDEW‚Œ.LõÁ=<BÔ0+½)ZS V;â\\âµI{5I‘AôÖÃ,dW²uè5Ew\n\$%Ò…ˆ½2i_\$ÈÙ+ìæO,Œ¬‡íX‹´Õ‘Jg&J¡úG’º%\\J“·b.ÄÝ^L‹TòFlŒè–¹]k#f@L·G€ÄT¼Ù—ÒÍHÏÌ\"–q1SÌ°ù‰jVÉ(Î™„ìZVzßÅ†³,§ÊèG.1Fû±gNÊ;×1ÃŠV¬¦5EÍò5`ò\0Ctè=F\ná¹›Î±•K‡þ™Ö\0­ÛŠ±%¨ËD]Q\$\r\0‡3J\\,Í™š³<T4*£™Á.ÒYK²D«QƒéLïS%,ŠgÔÇåª§Ö<Ëë™u0–ôÍUÄ‰Ö*x(©åNÂ’Yv!þ¥yÍ	wÅ4fdª¥rG•‰M \$äê‰^;ºéîÝæˆ)<Pã]DÒ%%Ó;ÔjÊåšI0æaÓu^Jp—[)¦v©3RhRúEöÀ\næ–L_š#5|Ü¾Õm3Pñ*¨\\Y51X’’	i³N—Èñ\$\"°ºaü­õh*KUÝÌïV8¨åuò±%&„ræ¯Ëš ²5oŒÕçg³;ÝrMl[Æ¨ögœ³ùª’·UÍq™ê¹šh|ÔeO2·f MlW2AP„×¹˜’ÍÀÍv~eD¬eñ3UÓ«l‡E62iüÎõìÓUbÌï˜¬«õUŒ¬©¨îøýªVðêiI!\$i¨Ê­&Z:½–xm!Å†“.ÖOÍfwÒ¯!”ÌÓkÝ¤Íƒ™6b\"«I™J]]:T™6ÒVrú¹}’ÜÇ«]™®±‘U¢Ž	ys7fÔMÅ™ÿ3ˆŒÜÎYœó:T_MÍw%3ÆnÏ¥\nÎæz*™í3âhƒ·	»`U–²Lÿš‡,¥Û„Ð5¨óvfƒ»Ã›Ù42_Q‰¼hÝÇÍuD§\no£¹)¤ÄœÕ«M9¿7foÛ¼©¤rÖÝÇÎWB~iTÝeyQTâN\nšd¦pr§#›óM§;’˜…4æpª¼„têÿ–(;š›³5	|¬àÇ‚Š­',AV7Ü”ÔåUAö&ìÍRœP¯\"äÕy‡Ò·•‰) [ŠnÌÕñ-3V•Ë,?œs6ºpŠù†3ŽfµÎAšÛ9k|ÝÉ®S†f¬*@œ•5Þg¼¾É¿2·Í}œŒ®þUüÝ™‘ðùæHÎF›l%®pÂ«Ie³be—MÙSO\rŽ[¼æi²3fÉÎLVá®rÙu®Š¾¥ÛNA›:î%r„Úy3Q_Ì¸›W.ÑÕÈ^Sl@&ÌÁ5ÖYlÂÌ1åæÎ}VxêžgÊ…§^SnÕÌÍQ!:5×ZÞiZCÔˆ:¿›•3qgé%DáõÝª{U¡3’tZ¹`ûÓu%w:ÉZQ:QìÏÇW fî‡í›¿9Jplê)Ö3xÔvÌþK7žb#«ù½«çX+Jš(¢Âh´ìP*Ó´«Î›þ¢!×”ìÅSLçh*'¤¨\npBù™ÚªgNÊ§8BuÒªéÂŽ¯çÎŒ½8niêˆIÍs¸USÍIš‡;vvÚ³UõsR•7Nu×8©H|íéÅÓ·§ÌŽœ«8òq´ÕÙÞ+'ÑßÍ`œx¢9Rˆ	Õ®ºçMaR8úxä)¸'!Ïœ;±U¬×YÖ“’ÝsNIg:ÕKTëy¯3®gŽÍYìëÊkäãÉÜ³n'LO(œ¿3šw4ñ4î»¦ÇÏœÚêþl¬ñÎJ½–ªw½9Ý\\ìç•óóhf(¢_~ìòà}9Nö¦Õ\0–´åb\"¢Yé¤ƒTh,Úž¤@ú±D¡û€\$€Iž·;ŽeüèUÊn¨³ž·,¹OªÆ	Xÿg´-ÀžÉ+>ti'G‚öŽlª%\0­8âVBËU1«ye\0KTÆ4ûÁÈm’ºV2)\r]I/\rFù…ÔXˆ×Àß¨ña·­GŠÂ¹ò*ˆ§»žÿ>ERì÷ðî®¥ž‡ÑZ›-)I\$®¹íç:¦aË\0¾FybaÙg«w§­(ß_@§v}öiõÊ³î€S^Ë25DÔ³Ð	ÈôURO±ŸJHÖ\\ØisðfÆËKšN±€qi÷Sg×OÂŸ\n²F~|«µÏ*@gR€_Q<9sÜ¬3i+Ø—².Cw²²ê|‚øyË6aìOÜY9¶Œ¶É–\nëÔ½-([®±†_ˆ}íSû]c¤S=Â¤ÎÙþÎÍÔYÎàU-> <ú©µ\n<ÖsOôQ4F¦^}\0007uäk(/‹ŸÛ/5{Lÿ9µ\0§¬Ð &³Š[<ÏõŸsÛ\0&Íè#…@hÌéª3©V}ÐH¢Š*Üw+]'DÐ& @§Ö])µè;TGe3\\Îên®ÑßËd\$:¦uN4Åyktê-dR!7–­Ée4(P!•Ÿ-þ9À4ç_PMGbÄ±w…«ØÉ6O§S¦F‚âí)§Šyh0+€ž²§qT|·Š+uÔÿÎ+ A¬?òÞ	öTè3.q 41T´¸e›€\n:P ø¯–{Tî\n³ëh?«šTïAùS£­*«åÒ+åu¥>ú\\ê¾ZéíÊîYì·¢wEJö%·’s—L±¾dªšyÀ+\rCèœß¡'Añl,Òyå3þç²ËÍ—`º	_*ÑPû ThKDV²·–~5	à0´+á¼,š-?­]œºò3ëÖKå—`¯^†¸¤I42(]ªwž.æ†rÄÊËê]¬\nYÆ¨B†£­Ð	³í–}Ð‹R ¾ÉgØ}:H§ðJÄWP²ê„\"Þµ—ðôV\\¬<——? >½å—áÿ§Ü¬Ý†¿=¦…:Ÿ\n0×è\\+ñS–´æfÝUŒ³í‰U,…WCÖˆè•On¨òÎ…¢§.†e9|R÷I'©[×/º²ÄÙü2ù›«QžÓBn:ÆIõ\nö§g¼9Æ\rü,ÓR6³ýçÒQ\$XÝ+¸>–©±`\nù)/_8QiÔùµê—=‡êv?5v\0 \n¨çÉLG¥Dmˆw\\ëFÖŒ‡Ñ¢¯ÁdêŸµ}s‰\"‘ÃYv¤|â™J*´9h­¡Ñ@XEUÑ*Þ(oQ]\$Bžˆ,ûéÜƒ•KTœv¤AptCÉƒ\n×C,/˜<¡­Ú™EW‹-VïP¡¢=Wÿ*%Kê—-Q`9	(Êú59Ó€èm)ËX¸¨@ç2ø ýT@ˆÛ\nS–¯‘bd×EÎ´a€+€DXîá|UÚ	‹	’¡F® 2ú%5\nj•m«€WÙ+xêKŒæVÌ3#„¶CTÃek¤™–&Î,£l¬jbd7)Ó“\"\n+ìPüºb’èIŠ@è3Ñ•ÜµjUÒÌEsÞÔ)D¢fë’ƒõŠû•ÇPZ3AÎŒÕ\nwThð—²ªÛ˜Å4Zäª<Êuß©ßdqâËŠu(÷ž“bKG±à¥éÀnÓTï®ˆ]z¨f%#3IËfS¨®&}µ@D†@++ù¤Aíhª¿\nªï€U—Þ¥|B¡;”…UmÑÙU…E•N¥!ôx2±1Ò\0§GmvH~õÁHèTê)öW®³YNý\"åk5©ÑvT#=µÚ¥Ê<\n}‘#R3YƒHÅRÍIÍ³Ü¦;ÌÑRl£1léuB%TQJî™*ºêˆÙ'ºEë0i¬dw,¥zÊÍ¥:\$†¦;Í? üîj‘¿)§ô)ÔÊ\$32J}Å&‡[³\$¨õÌ¤;DnýE×´À+0ÛaZ{¨èC èû€(¤ê:“¸ ÚO@hø²D£æ\0¡‰`PTou“³ÄïF®\rQv‚û¨˜o½Ü¡\$Sîö+˜Ò#7À¤Izr…pk DW”ˆFsÍ9™ Qê  Ð°1€gÀÅ#•\0\\Là\$Ø 3€g©XŽyôy œ-3h›ÀþÃ!†nXèô]+±—	É€c\0È\0¼bØÅ\0\r‰ü‡-{ž\0ºQ(ðQÔ\$s€0…ºém(°[RuòVÆ÷ÒØ>Æ¼+àJ[©6à‘ÒàJ\0Ö—ú\\´¶ã,Òé‚Kš3ý.ê]a_\0RòJ Æ—`š^Ô¶ClRÛIKî–ù\n \$®nÅÒä¥ïKj–©\n€šÁ©~/¥ªmn˜].ª`ô¿ijÒâ¦#K¾˜f:`\0…éŒ€6¦7Kâ–¨zcôÂ\0’Òõ¦/K®–­/ªdôÄé‡FE\0aLŽ˜¤dZ`ƒJé†S‘ÏÊ™…2ØÍ4Î@/Æ(Œ‹Lò™õ0ª`´Ä©†€_ŽLþ™]4ZhôÐ©šSD¦M˜…4:cÑé‹SR¥×M—E4šiò€éžSG¦EMj˜å4zdÔÕ©–SFKLª›%4ªeÔÏ%\$ÓlKM2–õ1ÈÚ”Ôi¦Ó©MV›­.¸Ú”Öi´Ó©Lz›/ˆ÷ôÛ£Ó„¦ÑMæ›,`Š_ôàimSŠ¦gMÆœ€jg‘òéÇÓ5¦9.›…9j_òéºS¥µ.›Å9ê_±òé¾Sˆ¦‹.œ7Úrò)ÉÓ%§[2m8ºuTæé™S±§3M:]3ºq”èänÓ±§KNˆ1|^ÒktÏ\"ÒÓH§gKjž-;zcñiÎÓš§–\r<ê_²-iÊÓ¸¥ñ\"ÖžU.¹´óiëRÚ‘kOFží=:\\ôÏ\$ZÓ©§MLE­5úxôø©ÂÓ»_\"Öœ=<\0ñtéÙSç¦9OÒž­1Š~”öi²Óô§¹Oêí>ê~qœ)òF¸¨’ =6:~ÔõãJÔ‘ÏP:ŸÍ=¨åTÿ)¢Æ«§ÿPJ8õ@êwôô©÷Ç*§ÍOÊ5]>ªt÷£•T\n§å!\" 6Y	)€ÈH¨/Pªž…3É	éð†/‘P~ àù	ªÓ®¨!\"ŸC’ÌÔýj¡ ¨eNJ¡üˆêˆñÔ*%Ô4¦1Q¡ÅCZ‡Q‘jTBQ.¢\rE)\0004Ëê\$€2¨SM+å<j„t¿j0Ô,¦9Q†¡}F\0\$±s©žTa¨KÎ£]Ecj*€'K»M¾—MGx½ÕRÇT1¦#Qê¡¥GªŠ5ª:Ôz¨Lš¡4u6z•\"j\"TˆKuNÖ£ýGÚg\$jFSÜ¨ïQ2¤¥Høîµ\"êMTƒ©%R¤•HzŽÕ\$ª,Ôw¨Re.\$rªzµ)©ÛÔ¦©-Qö ÍJ„¹‘Êª@Ô°©=R&/IÊ•1†*]T³‹À7¼˜¾QÒåD&Ó©qN¦_(´q²c[TwŒQRôå´œJš\0nâ÷T­¨û.¦˜956cÔÜŒÕSz¥H˜Á•7ªRÔ}ŽSr8¥NŠšÕ\"bÖTè§ÁQÞ5MNŠ–õ#ãçÔè©ESÂ§-H˜Á7\"ÜTü©_Sê§}GØÌ•?*yÔ©‹‡Sò§½P*Ÿ5#âöÔÜÏT:§]PÊŸõC*€Ô‰‹T:¨-K8Æ5Cª„ÕªR¦--MÈ¾•HªˆÕ ª'T‚¨­HøËõHªŒÔÑ‹×TŠ¨íRª£õ,âéÔÜ‹GTÚ©-SJ¤õM*”Ô©‹UTÚ©mMH¸õMª˜Õ>ªgSD³5MÈÂ•RªœÕHªwU\"©íK8ÕÕRª ÔÚŒ¡U*ª-U*¨ànÂ¾TÙIR­,t¢Z«ÕêY¶IUF«51ª¬µW)vÕk‹_KÆ«pJ«5Zj­Å¯©R4r\n¬^jIÓCKº„‚ª}UÊ“_ª°Ô›ªãO¬=N·R*¯F-ª½Rž¬%Wš‹Õcê¦Õ\\ŽaV>«EYj–µdªªÔÃ«UÎ¬µWXÍ5*ÈÕ‹’¹Uy‚õZŠ°1kã™Õ¨«7Vš¬R\\HÍ5h*ÖU¢©ÏUÆ§M[Š²±kêvÕ¸«3Vò­}[(ä5WªzÕ¸«iB­Oº®1¯ê¯Tý«—V®;­[øîµpRæGu«;T@0>\0‚ê/I³ªÿW`í]¦ô\0ªîÆ8«¿PŠ¯]ÈÍ1m*ïÕÇyUz¨mW¡õ|ªÝ“[«¡Ö¯…]J¬ÑˆêøU±««ö¯…Z*¤5\\j‘Ö«ëZªô`ZÁ5~ª®Eì¬Wú«4ZšÁ5h£QÕ^‹cXZ®•Sú®1o«Vª¹U&«TºÄ5}cU^›Xš°dm*³±’kUu¥«SfG=[¹õjäsÕ¿‘ÏX¦Kc\n®iRâHç«i#ž±uWt»µª½¥º«»XÂÕcÄ¹•«U†¬”rÚ¢õUZ‹Õ‡ƒNE¢¬‘Xº¬…4ÚÈudê·Eä¬eV^²íKÉànâòV8‹sXÂ¥ÍfÇõ/ÂhJ³-J]Ó‚…™ÓÎÁÕzO›±<Eh‰\$å‹“·¡ó\0Kœë<bw„ñ…>·”øNž\")]b£	â+zê.cS.¢iFç	ã£µQNQ«éV*ªéÛÎúÞO[X¤nxŠ¤P	k­§oNø£}<aOò§Iß“Áh·ºšT;òrñ‰‰¤ƒVD6Qß;zŠ]j×~'’:ë–[Ivôó7^Ê‘§ÖÁžjëºw[«ùæîºçœÊÅ†¥:u ÅDs#¦¿Î\\wµ<n|*á‰hëmÎKv;YÒˆ±Ú3á]Œ«^#—Zªj¥gy³jÄ§Y,”%;3¾³ÊÚù×.ÈW\"‘Ã\$Ù3>gÚœºÏÓÏ¦ªVTóZj¥hYÝjžkD*!šh&XzËiª•¥+GV—­\"¥æ¸Z:Ò¤§+‡NoG¥Zjj¥iÉ]ÊžkOÐ_­Ö¬ÔmjIª•¨§t¯–#½[âj\rnŠãê©×Ðn™ßZ¥_,Õé†ógÎÄš©:¹¼Å9‰Áÿ«[L2®W=TÔ×0®ãf¶\0P®U6\ns%7isYæ?£¿uá3¾’½nb5¡«Ÿ»šX|G~l•&×k¤¥·M§ †¯ú¶ŒÏy¡S–É)Î]œÜ­r·¶Ù¸µ¸æìÖê›Å?Õ}u'n0W-Î¹®æb·´ÇªìõŸk?»vQý7…Ü}p\nìõÀ’ÍÙ®Z*»9)Êá5Þ•ZW­-ZB¸²Œ:ìõã«ŠW\0WZfp•GpõîÍÙ®:Fpú¤ŠäUÙëSN/™Ï\\©Ü%s9¬S{§ ×8®ÏZÍasÊÛ“’+¢N^®“9™MÕ{…P5Óç ×Q®ÔîJº¢«y§õÕè;œÚîz¸ƒÂÕYÚV Ä3—:ïœDÅIŠÃ+ç‡ý¯£19M;º¥Œ’ô¨“V´®š\rQ{êÉÕ®•¶Å+£ƒFCLÄ¹ŠN¥–©Ôˆ\\ùÞ)\$iŒŽÛN'\0¦°PŠÂšõÊÇ]XÌ^s1òf&Š\"'<OøóšÌ¡ËL\0¹\"‡@Ö”¥%ä6úÂUAõ1ýi(zÌèÝ€\rÒÕ‚ä±ÈbZÀ”+IQOï3€ºË\r=*Ä‰ ‰)ñ¨!Áž Ð`ª¼h°ˆ,Ð«mGPCËA Ù²íƒA„Œ(ZÅ°%ƒtì,h/Á‰ˆi–Èk¬«¡XEJ6ð±„IDèÈ¬\"›\nïaU- ›«\nvŽy°_€ÄÂÂ›Ú«¯k	a½B<ÇVÂƒÛD»/P»ôaîÁ)9Lã¶(Z‚°8êvvÃ¹Øk	§oÐZXkäÑå§|´&°.Âæ±C¹’Øá°`€1€]7&Ä™+™H¤CBcX“B7xXó|1“€0¦ãaš6š°ubpJLÇ…–(·š÷mbl8I¶*Rö—@tk0€—¡¯ÅxXÛÁÓ;ÁÅ al]4s°t¿íÅªð0§c‡'´ælß`8MŒ8‘ÀÃ€D4w`p?@706gÌˆ~K±\r‚Û “P´…Ùbh€\"&¯\nìq‘PDÈÐÎó\$Ð(Í0QP<÷°àÀã¬Q!X´…xúÔ5€ˆR·`w/2°2#ŠÀ¸Ž `¬»‘1†/ˆÜ\r¡Ö:Â²–±¢£B7öV7ZŒ›gMYúH3È „ÙbÎ	ZÁÓJÅöGâwÙgl^Æ-‘R-!Íl“7Ì²Lõ†Æ°<1 íQC/Õ²h¼à)ÏWž6C	÷*dˆþ6]VK!mì…ØÜã€05G\$–R˜µ4¯±=Cw&[æ«YP²›dÉš³')VK,¨5eÈ\rÞÊè†K+ï1„X)bÛe)ÄâuF2A#EÑ&g~‘e¡y’fp5¨lYl²Ôœ5õƒö¿Ö\nÂŠÙm}`‚(¬M Pl9Yÿfø±ýÖ]€Vl-4ŽÃ©¦«ÂÁ>`À•/û³fPE™i‹\0k™vÆ\0ßfhS0±&ÍÂ¦lÍ¼¢#fuåÌû5	i%ÿ:Fd€ö9Ž™Ø€G<ä	{ö}ìÂs[7\0á¬Îž3íft:+.È”–p >ØÕ±£@!Pas6q,À³—1bÇ¬Å‹ãZK°ê±Ü-ú“ar`•?RxXÁé‘¡ÏVïú˜#Ä¤ÔzÂ; ÀD€•¾H²Á1¥’6D`žþYê`÷RÅPÖ‹>-Æ!\$Ùù³ì×~Ï€ÐÅà`>Ùï³õhÔ0ô1†À¬–&\0Ãh—ëûI–wlûZ„\$“\\\r¡8¶~,\nºo_áÀB2D´–ƒa1ê³àÇ©=¢v<ÏkF´p``”kBF¶6 ÄÖ²—hÆÉT TÖŽ	‡@?drÑå‰€JÀH@1°G´dnÁÒw‡Æ%äÚJGšÒ0bðTf]m(Øk´qg\\í½ó¸–¬ë°ê ÈÑˆ3vk'ý^d´¨AXÿ™~ÇW™VsÂ*¼Ê±æd´ûM À¬@?²ÄÓ}§6\\–m9<Î±i”Ý§›ˆÔ¬h½^s}æ-¦[Kœs±qãbÎÓ-“öOORm8\$ÞywÄì##°Œ@â·\0ôÒØ¤ 5F7ö¨ƒ X\nÓÀ|JË/-S™W!fÇ† 0¶,w½¨D4Ù¡RU¥T´ž’îÕðZXÇ=í`‰W\$@âÔ¥(‹XG§‹ÒŠµ—a>Ö*ûY¶²ˆ\n³ü\nŒìš!«[mjœµŠ0,mu¬W@ FXúÚÎòðü=­ (¦ý­b¿ý<!\n\"”ª83Ã'¦‚(R™Ý\n>”ù@¨W¦r!L£HÅkÌ\rˆE\nWÆÞ\r¢‚'FHœ\$£‹ääÀm„È=ÔÛ¥{LY—…&ÑÜ£_\0ŽÆüÝ#¢ä”€[„9\0¤\"ÔÒ@8ÄiKª¹ö0Ùl‰ÑÐp\ngî‚Û'qbF–Øyá«cl@9Û(#JU«Ý²ƒ{io­‘¥.{ÔÍ³4ÞVÍŠVnFÉxðÑüzÎ QàÞž\$kSa~Ê¨0s@£À«%…y@•À5HŽ†NÎÍ¦´@†x’#	Ü« /\\¥Ö?<hÚ‚ù…¼ITŒ :3Ã\n%—¸");}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0!„©ËíMñÌ*)¾oú¯) q•¡eˆµî#ÄòLË\0;";break;case"cross.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0#„©Ëí#\naÖFo~yÃ._wa”á1ç±JîGÂL×6]\0\0;";break;case"up.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0 „©ËíMQN\nï}ôža8ŠyšaÅ¶®\0Çò\0;";break;case"down.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0 „©ËíMñÌ*)¾[Wþ\\¢ÇL&ÙœÆ¶•\0Çò\0;";break;case"arrow.gif":echo"GIF89a\0\n\0€\0\0€€€ÿÿÿ!ù\0\0\0,\0\0\0\0\0\n\0\0‚i–±‹ž”ªÓ²Þ»\0\0;";break;}}exit;}function
connection(){global$g;return$g;}function
adminer(){global$b;return$b;}function
idf_unescape($u){$Xd=substr($u,-1);return
str_replace($Xd.$Xd,$Xd,substr($u,1,-1));}function
escape_string($X){return
substr(q($X),1,-1);}function
number($X){return
preg_replace('~[^0-9]+~','',$X);}function
remove_slashes($Sf,$Mc=false){if(get_magic_quotes_gpc()){while(list($y,$X)=each($Sf)){foreach($X
as$Md=>$W){unset($Sf[$y][$Md]);if(is_array($W)){$Sf[$y][stripslashes($Md)]=$W;$Sf[]=&$Sf[$y][stripslashes($Md)];}else$Sf[$y][stripslashes($Md)]=($Mc?$W:stripslashes($W));}}}}function
bracket_escape($u,$Na=false){static$Ih=array(':'=>':1',']'=>':2','['=>':3','"'=>':4');return
strtr($u,($Na?array_flip($Ih):$Ih));}function
charset($g){return(version_compare($g->server_info,"5.5.3")>=0?"utf8mb4":"utf8");}function
script($Rg,$Hh="\n"){return"<script".nonce().">$Rg</script>$Hh";}function
script_src($di){return"<script src='".h($di)."'".nonce()."></script>\n";}function
nonce(){return' nonce="'.get_nonce().'"';}function
h($Q){return
str_replace("\0","&#0;",htmlspecialchars($Q,ENT_QUOTES,'utf-8'));}function
nbsp($Q){return(trim($Q)!=""?h($Q):"&nbsp;");}function
nl_br($Q){return
str_replace("\n","<br>",$Q);}function
checkbox($C,$Y,$db,$Td="",$Xe="",$ib="",$Ud=""){$J="<input type='checkbox' name='$C' value='".h($Y)."'".($db?" checked":"").($Ud?" aria-labelledby='$Ud'":"").">".($Xe?script("qsl('input').onclick = function () { $Xe };",""):"");return($Td!=""||$ib?"<label".($ib?" class='$ib'":"").">$J".h($Td)."</label>":$J);}function
optionlist($df,$Dg=null,$hi=false){$J="";foreach($df
as$Md=>$W){$ef=array($Md=>$W);if(is_array($W)){$J.='<optgroup label="'.h($Md).'">';$ef=$W;}foreach($ef
as$y=>$X)$J.='<option'.($hi||is_string($y)?' value="'.h($y).'"':'').(($hi||is_string($y)?(string)$y:$X)===$Dg?' selected':'').'>'.h($X);if(is_array($W))$J.='</optgroup>';}return$J;}function
html_select($C,$df,$Y="",$We=true,$Ud=""){if($We)return"<select name='".h($C)."'".($Ud?" aria-labelledby='$Ud'":"").">".optionlist($df,$Y)."</select>".(is_string($We)?script("qsl('select').onchange = function () { $We };",""):"");$J="";foreach($df
as$y=>$X)$J.="<label><input type='radio' name='".h($C)."' value='".h($y)."'".($y==$Y?" checked":"").">".h($X)."</label>";return$J;}function
select_input($Ja,$df,$Y="",$We="",$Ef=""){$oh=($df?"select":"input");return"<$oh$Ja".($df?"><option value=''>$Ef".optionlist($df,$Y,true)."</select>":" size='10' value='".h($Y)."' placeholder='$Ef'>").($We?script("qsl('$oh').onchange = $We;",""):"");}function
confirm($Eg="qsl('input')"){return
script("$Eg.onclick = function () { return confirm('".lang(0)."'); };","");}function
print_fieldset($t,$ce,$si=false){echo"<fieldset><legend>","<a href='#fieldset-$t'>$ce</a>",script("qsl('a').onclick = partial(toggle, 'fieldset-$t');",""),"</legend>","<div id='fieldset-$t'".($si?"":" class='hidden'").">\n";}function
bold($Va,$ib=""){return($Va?" class='active $ib'":($ib?" class='$ib'":""));}function
odd($J=' class="odd"'){static$s=0;if(!$J)$s=-1;return($s++%2?$J:'');}function
js_escape($Q){return
addcslashes($Q,"\r\n'\\/");}function
json_row($y,$X=null){static$Nc=true;if($Nc)echo"{";if($y!=""){echo($Nc?"":",")."\n\t\"".addcslashes($y,"\r\n\t\"\\/").'": '.($X!==null?'"'.addcslashes($X,"\r\n\"\\/").'"':'null');$Nc=false;}else{echo"\n}\n";$Nc=true;}}function
ini_bool($zd){$X=ini_get($zd);return(preg_match('~^(on|true|yes)$~i',$X)||(int)$X);}function
sid(){static$J;if($J===null)$J=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));return$J;}function
set_password($oi,$N,$V,$G){$_SESSION["pwds"][$oi][$N][$V]=($_COOKIE["adminer_key"]&&is_string($G)?array(encrypt_string($G,$_COOKIE["adminer_key"])):$G);}function
get_password(){$J=get_session("pwds");if(is_array($J))$J=($_COOKIE["adminer_key"]?decrypt_string($J[0],$_COOKIE["adminer_key"]):false);return$J;}function
q($Q){global$g;return$g->quote($Q);}function
get_vals($H,$d=0){global$g;$J=array();$I=$g->query($H);if(is_object($I)){while($K=$I->fetch_row())$J[]=$K[$d];}return$J;}function
get_key_vals($H,$h=null,$xh=0){global$g;if(!is_object($h))$h=$g;$J=array();$h->timeout=$xh;$I=$h->query($H);$h->timeout=0;if(is_object($I)){while($K=$I->fetch_row())$J[$K[0]]=$K[1];}return$J;}function
get_rows($H,$h=null,$n="<p class='error'>"){global$g;$vb=(is_object($h)?$h:$g);$J=array();$I=$vb->query($H);if(is_object($I)){while($K=$I->fetch_assoc())$J[]=$K;}elseif(!$I&&!is_object($h)&&$n&&defined("PAGE_HEADER"))echo$n.error()."\n";return$J;}function
unique_array($K,$w){foreach($w
as$v){if(preg_match("~PRIMARY|UNIQUE~",$v["type"])){$J=array();foreach($v["columns"]as$y){if(!isset($K[$y]))continue
2;$J[$y]=$K[$y];}return$J;}}}function
escape_key($y){if(preg_match('(^([\w(]+)('.str_replace("_",".*",preg_quote(idf_escape("_"))).')([ \w)]+)$)',$y,$B))return$B[1].idf_escape(idf_unescape($B[2])).$B[3];return
idf_escape($y);}function
where($Z,$p=array()){global$g,$x;$J=array();foreach((array)$Z["where"]as$y=>$X){$y=bracket_escape($y,1);$d=escape_key($y);$J[]=$d.($x=="sql"&&preg_match('~^[0-9]*\\.[0-9]*$~',$X)?" LIKE ".q(addcslashes($X,"%_\\")):($x=="mssql"?" LIKE ".q(preg_replace('~[_%[]~','[\0]',$X)):" = ".unconvert_field($p[$y],q($X))));if($x=="sql"&&preg_match('~char|text~',$p[$y]["type"])&&preg_match("~[^ -@]~",$X))$J[]="$d = ".q($X)." COLLATE ".charset($g)."_bin";}foreach((array)$Z["null"]as$y)$J[]=escape_key($y)." IS NULL";return
implode(" AND ",$J);}function
where_check($X,$p=array()){parse_str($X,$bb);remove_slashes(array(&$bb));return
where($bb,$p);}function
where_link($s,$d,$Y,$Ze="="){return"&where%5B$s%5D%5Bcol%5D=".urlencode($d)."&where%5B$s%5D%5Bop%5D=".urlencode(($Y!==null?$Ze:"IS NULL"))."&where%5B$s%5D%5Bval%5D=".urlencode($Y);}function
convert_fields($e,$p,$M=array()){$J="";foreach($e
as$y=>$X){if($M&&!in_array(idf_escape($y),$M))continue;$Ga=convert_field($p[$y]);if($Ga)$J.=", $Ga AS ".idf_escape($y);}return$J;}function
cookie($C,$Y,$fe=2592000){global$ba;return
header("Set-Cookie: $C=".urlencode($Y).($fe?"; expires=".gmdate("D, d M Y H:i:s",time()+$fe)." GMT":"")."; path=".preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]).($ba?"; secure":"")."; HttpOnly; SameSite=lax",false);}function
restart_session(){if(!ini_bool("session.use_cookies"))session_start();}function
stop_session(){if(!ini_bool("session.use_cookies"))session_write_close();}function&get_session($y){return$_SESSION[$y][DRIVER][SERVER][$_GET["username"]];}function
set_session($y,$X){$_SESSION[$y][DRIVER][SERVER][$_GET["username"]]=$X;}function
auth_url($oi,$N,$V,$m=null){global$Zb;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($Zb))."|username|".($m!==null?"db|":"").session_name()),$B);return"$B[1]?".(sid()?SID."&":"").($oi!="server"||$N!=""?urlencode($oi)."=".urlencode($N)."&":"")."username=".urlencode($V).($m!=""?"&db=".urlencode($m):"").($B[2]?"&$B[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($A,$te=null){if($te!==null){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',($A!==null?$A:$_SERVER["REQUEST_URI"]))][]=$te;}if($A!==null){if($A=="")$A=".";header("Location: $A");exit;}}function
query_redirect($H,$A,$te,$cg=true,$yc=true,$Fc=false,$wh=""){global$g,$n,$b;if($yc){$Wg=microtime(true);$Fc=!$g->query($H);$wh=format_time($Wg);}$Ug="";if($H)$Ug=$b->messageQuery($H,$wh);if($Fc){$n=error().$Ug.script("messagesPrint();");return
false;}if($cg)redirect($A,$te.$Ug);return
true;}function
queries($H){global$g;static$Wf=array();static$Wg;if(!$Wg)$Wg=microtime(true);if($H===null)return
array(implode("\n",$Wf),format_time($Wg));$Wf[]=(preg_match('~;$~',$H)?"DELIMITER ;;\n$H;\nDELIMITER ":$H).";";return$g->query($H);}function
apply_queries($H,$T,$uc='table'){foreach($T
as$R){if(!queries("$H ".$uc($R)))return
false;}return
true;}function
queries_redirect($A,$te,$cg){list($Wf,$wh)=queries(null);return
query_redirect($Wf,$A,$te,$cg,false,!$cg,$wh);}function
format_time($Wg){return
lang(1,max(0,microtime(true)-$Wg));}function
remove_from_uri($sf=""){return
substr(preg_replace("~(?<=[?&])($sf".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($E,$Fb){return" ".($E==$Fb?$E+1:'<a href="'.h(remove_from_uri("page").($E?"&page=$E".($_GET["next"]?"&next=".urlencode($_GET["next"]):""):"")).'">'.($E+1)."</a>");}function
get_file($y,$Mb=false){$Kc=$_FILES[$y];if(!$Kc)return
null;foreach($Kc
as$y=>$X)$Kc[$y]=(array)$X;$J='';foreach($Kc["error"]as$y=>$n){if($n)return$n;$C=$Kc["name"][$y];$Dh=$Kc["tmp_name"][$y];$xb=file_get_contents($Mb&&preg_match('~\\.gz$~',$C)?"compress.zlib://$Dh":$Dh);if($Mb){$Wg=substr($xb,0,3);if(function_exists("iconv")&&preg_match("~^\xFE\xFF|^\xFF\xFE~",$Wg,$ig))$xb=iconv("utf-16","utf-8",$xb);elseif($Wg=="\xEF\xBB\xBF")$xb=substr($xb,3);$J.=$xb."\n\n";}else$J.=$xb;}return$J;}function
upload_error($n){$qe=($n==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):0);return($n?lang(2).($qe?" ".lang(3,$qe):""):lang(4));}function
repeat_pattern($Cf,$de){return
str_repeat("$Cf{0,65535}",$de/65535)."$Cf{0,".($de%65535)."}";}function
is_utf8($X){return(preg_match('~~u',$X)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$X));}function
shorten_utf8($Q,$de=80,$ch=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{10FFFF}]",$de).")($)?)u",$Q,$B))preg_match("(^(".repeat_pattern("[\t\r\n -~]",$de).")($)?)",$Q,$B);return
h($B[1]).$ch.(isset($B[2])?"":"<i>...</i>");}function
format_number($X){return
strtr(number_format($X,0,".",lang(5)),preg_split('~~u',lang(6),-1,PREG_SPLIT_NO_EMPTY));}function
friendly_url($X){return
preg_replace('~[^a-z0-9_]~i','-',$X);}function
hidden_fields($Sf,$sd=array()){while(list($y,$X)=each($Sf)){if(!in_array($y,$sd)){if(is_array($X)){foreach($X
as$Md=>$W)$Sf[$y."[$Md]"]=$W;}else
echo'<input type="hidden" name="'.h($y).'" value="'.h($X).'">';}}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
table_status1($R,$Gc=false){$J=table_status($R,$Gc);return($J?$J:array("Name"=>$R));}function
column_foreign_keys($R){global$b;$J=array();foreach($b->foreignKeys($R)as$q){foreach($q["source"]as$X)$J[$X][]=$q;}return$J;}function
enum_input($U,$Ja,$o,$Y,$oc=null){global$b;preg_match_all("~'((?:[^']|'')*)'~",$o["length"],$le);$J=($oc!==null?"<label><input type='$U'$Ja value='$oc'".((is_array($Y)?in_array($oc,$Y):$Y===0)?" checked":"")."><i>".lang(7)."</i></label>":"");foreach($le[1]as$s=>$X){$X=stripcslashes(str_replace("''","'",$X));$db=(is_int($Y)?$Y==$s+1:(is_array($Y)?in_array($s+1,$Y):$Y===$X));$J.=" <label><input type='$U'$Ja value='".($s+1)."'".($db?' checked':'').'>'.h($b->editVal($X,$o)).'</label>';}return$J;}function
input($o,$Y,$r){global$g,$Th,$b,$x;$C=h(bracket_escape($o["field"]));echo"<td class='function'>";if(is_array($Y)&&!$r){$Ea=array($Y);if(version_compare(PHP_VERSION,5.4)>=0)$Ea[]=JSON_PRETTY_PRINT;$Y=call_user_func_array('json_encode',$Ea);$r="json";}$lg=($x=="mssql"&&$o["auto_increment"]);if($lg&&!$_POST["save"])$r=null;$ad=(isset($_GET["select"])||$lg?array("orig"=>lang(8)):array())+$b->editFunctions($o);$Ja=" name='fields[$C]'";if($o["type"]=="enum")echo
nbsp($ad[""])."<td>".$b->editInput($_GET["edit"],$o,$Ja,$Y);else{$id=(in_array($r,$ad)||isset($ad[$r]));echo(count($ad)>1?"<select name='function[$C]'>".optionlist($ad,$r===null||$id?$r:"")."</select>".on_help("getTarget(event).value.replace(/^SQL\$/, '')",1).script("qsl('select').onchange = functionChange;",""):nbsp(reset($ad))).'<td>';$Ad=$b->editInput($_GET["edit"],$o,$Ja,$Y);if($Ad!="")echo$Ad;elseif(preg_match('~bool~',$o["type"]))echo"<input type='hidden'$Ja value='0'>"."<input type='checkbox'".(in_array(strtolower($Y),array('1','t','true','y','yes','on'))?" checked='checked'":"")."$Ja value='1'>";elseif($o["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$o["length"],$le);foreach($le[1]as$s=>$X){$X=stripcslashes(str_replace("''","'",$X));$db=(is_int($Y)?($Y>>$s)&1:in_array($X,explode(",",$Y),true));echo" <label><input type='checkbox' name='fields[$C][$s]' value='".(1<<$s)."'".($db?' checked':'').">".h($b->editVal($X,$o)).'</label>';}}elseif(preg_match('~blob|bytea|raw|file~',$o["type"])&&ini_bool("file_uploads"))echo"<input type='file' name='fields-$C'>";elseif(($uh=preg_match('~text|lob~',$o["type"]))||preg_match("~\n~",$Y)){if($uh&&$x!="sqlite")$Ja.=" cols='50' rows='12'";else{$L=min(12,substr_count($Y,"\n")+1);$Ja.=" cols='30' rows='$L'".($L==1?" style='height: 1.2em;'":"");}echo"<textarea$Ja>".h($Y).'</textarea>';}elseif($r=="json"||preg_match('~^jsonb?$~',$o["type"]))echo"<textarea$Ja cols='50' rows='12' class='jush-js'>".h($Y).'</textarea>';else{$se=(!preg_match('~int~',$o["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$o["length"],$B)?((preg_match("~binary~",$o["type"])?2:1)*$B[1]+($B[3]?1:0)+($B[2]&&!$o["unsigned"]?1:0)):($Th[$o["type"]]?$Th[$o["type"]]+($o["unsigned"]?0:1):0));if($x=='sql'&&$g->server_info>=5.6&&preg_match('~time~',$o["type"]))$se+=7;echo"<input".((!$id||$r==="")&&preg_match('~(?<!o)int~',$o["type"])&&!preg_match('~\[\]~',$o["full_type"])?" type='number'":"")." value='".h($Y)."'".($se?" data-maxlength='$se'":"").(preg_match('~char|binary~',$o["type"])&&$se>20?" size='40'":"")."$Ja>";}echo$b->editHint($_GET["edit"],$o,$Y);$Nc=0;foreach($ad
as$y=>$X){if($y===""||!$X)break;$Nc++;}if($Nc)echo
script("mixin(qsl('td'), {onchange: partial(skipOriginal, $Nc), oninput: function () { this.onchange(); }});");}}function
process_input($o){global$b;$u=bracket_escape($o["field"]);$r=$_POST["function"][$u];$Y=$_POST["fields"][$u];if($o["type"]=="enum"){if($Y==-1)return
false;if($Y=="")return"NULL";return+$Y;}if($o["auto_increment"]&&$Y=="")return
null;if($r=="orig")return($o["on_update"]=="CURRENT_TIMESTAMP"?idf_escape($o["field"]):false);if($r=="NULL")return"NULL";if($o["type"]=="set")return
array_sum((array)$Y);if($r=="json"){$r="";$Y=json_decode($Y,true);if(!is_array($Y))return
false;return$Y;}if(preg_match('~blob|bytea|raw|file~',$o["type"])&&ini_bool("file_uploads")){$Kc=get_file("fields-$u");if(!is_string($Kc))return
false;return
q($Kc);}return$b->processInput($o,$Y,$r);}function
fields_from_edit(){global$Yb;$J=array();foreach((array)$_POST["field_keys"]as$y=>$X){if($X!=""){$X=bracket_escape($X);$_POST["function"][$X]=$_POST["field_funs"][$y];$_POST["fields"][$X]=$_POST["field_vals"][$y];}}foreach((array)$_POST["fields"]as$y=>$X){$C=bracket_escape($y,1);$J[$C]=array("field"=>$C,"privileges"=>array("insert"=>1,"update"=>1),"null"=>1,"auto_increment"=>($y==$Yb->primary),);}return$J;}function
search_tables(){global$b,$g;$_GET["where"][0]["val"]=$_POST["query"];$Wc=false;foreach(table_status('',true)as$R=>$S){$C=$b->tableName($S);if(isset($S["Engine"])&&$C!=""&&(!$_POST["tables"]||in_array($R,$_POST["tables"]))){$I=$g->query("SELECT".limit("1 FROM ".table($R)," WHERE ".implode(" AND ",$b->selectSearchProcess(fields($R),array())),1));if(!$I||$I->fetch_row()){if(!$Wc){echo"<ul>\n";$Wc=true;}echo"<li>".($I?"<a href='".h(ME."select=".urlencode($R)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>$C</a>\n":"$C: <span class='error'>".error()."</span>\n");}}}echo($Wc?"</ul>":"<p class='message'>".lang(9))."\n";}function
dump_headers($qd,$Be=false){global$b;$J=$b->dumpHeaders($qd,$Be);$qf=$_POST["output"];if($qf!="text")header("Content-Disposition: attachment; filename=".$b->dumpFilename($qd).".$J".($qf!="file"&&!preg_match('~[^0-9a-z]~',$qf)?".$qf":""));session_write_close();ob_flush();flush();return$J;}function
dump_csv($K){foreach($K
as$y=>$X){if(preg_match("~[\"\n,;\t]~",$X)||$X==="")$K[$y]='"'.str_replace('"','""',$X).'"';}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$K)."\r\n";}function
apply_sql_function($r,$d){return($r?($r=="unixepoch"?"DATETIME($d, '$r')":($r=="count distinct"?"COUNT(DISTINCT ":strtoupper("$r("))."$d)"):$d);}function
get_temp_dir(){$J=ini_get("upload_tmp_dir");if(!$J){if(function_exists('sys_get_temp_dir'))$J=sys_get_temp_dir();else{$Lc=@tempnam("","");if(!$Lc)return
false;$J=dirname($Lc);unlink($Lc);}}return$J;}function
password_file($i){$Lc=get_temp_dir()."/adminer.key";$J=@file_get_contents($Lc);if($J||!$i)return$J;$Yc=@fopen($Lc,"w");if($Yc){chmod($Lc,0660);$J=rand_string();fwrite($Yc,$J);fclose($Yc);}return$J;}function
rand_string(){return
md5(uniqid(mt_rand(),true));}function
select_value($X,$_,$o,$vh){global$b,$ba;if(is_array($X)){$J="";foreach($X
as$Md=>$W)$J.="<tr>".($X!=array_values($X)?"<th>".h($Md):"")."<td>".select_value($W,$_,$o,$vh);return"<table cellspacing='0'>$J</table>";}if(!$_)$_=$b->selectLink($X,$o);if($_===null){if(is_mail($X))$_="mailto:$X";if($Uf=is_url($X))$_=(($Uf=="http"&&$ba)||preg_match('~WebKit|Firefox~i',$_SERVER["HTTP_USER_AGENT"])?$X:"https://www.adminer.org/redirect/?url=".urlencode($X));}$J=$b->editVal($X,$o);if($J!==null){if($J==="")$J="&nbsp;";elseif(!is_utf8($J))$J="\0";elseif($vh!=""&&is_shortable($o))$J=shorten_utf8($J,max(0,+$vh));else$J=h($J);}return$b->selectVal($J,$_,$o,$X);}function
is_mail($lc){$Ha='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$Xb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$Cf="$Ha+(\\.$Ha+)*@($Xb?\\.)+$Xb";return
is_string($lc)&&preg_match("(^$Cf(,\\s*$Cf)*\$)i",$lc);}function
is_url($Q){$Xb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($Xb?\\.)+$Xb(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$Q,$B)?strtolower($B[1]):"");}function
is_shortable($o){return
preg_match('~char|text|lob|geometry|point|linestring|polygon|string|bytea~',$o["type"]);}function
count_rows($R,$Z,$Gd,$dd){global$x;$H=" FROM ".table($R).($Z?" WHERE ".implode(" AND ",$Z):"");return($Gd&&($x=="sql"||count($dd)==1)?"SELECT COUNT(DISTINCT ".implode(", ",$dd).")$H":"SELECT COUNT(*)".($Gd?" FROM (SELECT 1$H$ed) x":$H));}function
slow_query($H){global$b,$Eh;$m=$b->database();$xh=$b->queryTimeout();if(support("kill")&&is_object($h=connect())&&($m==""||$h->select_db($m))){$Rd=$h->result(connection_id());echo'<script',nonce(),'>
var timeout = setTimeout(function () {
	ajax(\'',js_escape(ME),'script=kill\', function () {
	}, \'token=',$Eh,'&kill=',$Rd,'\');
}, ',1000*$xh,');
</script>
';}else$h=null;ob_flush();flush();$J=@get_key_vals($H,$h,$xh);if($h){echo
script("clearTimeout(timeout);");ob_flush();flush();}return
array_keys($J);}function
get_token(){$Zf=rand(1,1e6);return($Zf^$_SESSION["token"]).":$Zf";}function
verify_token(){list($Eh,$Zf)=explode(":",$_POST["token"]);return($Zf^$_SESSION["token"])==$Eh;}function
lzw_decompress($Ra){$Tb=256;$Sa=8;$kb=array();$ng=0;$og=0;for($s=0;$s<strlen($Ra);$s++){$ng=($ng<<8)+ord($Ra[$s]);$og+=8;if($og>=$Sa){$og-=$Sa;$kb[]=$ng>>$og;$ng&=(1<<$og)-1;$Tb++;if($Tb>>$Sa)$Sa++;}}$Sb=range("\0","\xFF");$J="";foreach($kb
as$s=>$jb){$kc=$Sb[$jb];if(!isset($kc))$kc=$wi.$wi[0];$J.=$kc;if($s)$Sb[]=$wi.$kc[0];$wi=$kc;}return$J;}function
on_help($qb,$Ng=0){return
script("mixin(qsl('select, input'), {onmouseover: function (event) { helpMouseover.call(this, event, $qb, $Ng) }, onmouseout: helpMouseout});","");}function
edit_form($a,$p,$K,$bi){global$b,$x,$Eh,$n;$hh=$b->tableName(table_status1($a,true));page_header(($bi?lang(10):lang(11)),$n,array("select"=>array($a,$hh)),$hh);if($K===false)echo"<p class='error'>".lang(12)."\n";echo'<form action="" method="post" enctype="multipart/form-data" id="form">
';if(!$p)echo"<p class='error'>".lang(13)."\n";else{echo"<table cellspacing='0'>".script("qsl('table').onkeydown = editingKeydown;");foreach($p
as$C=>$o){echo"<tr><th>".$b->fieldName($o);$Nb=$_GET["set"][bracket_escape($C)];if($Nb===null){$Nb=$o["default"];if($o["type"]=="bit"&&preg_match("~^b'([01]*)'\$~",$Nb,$ig))$Nb=$ig[1];}$Y=($K!==null?($K[$C]!=""&&$x=="sql"&&preg_match("~enum|set~",$o["type"])?(is_array($K[$C])?array_sum($K[$C]):+$K[$C]):$K[$C]):(!$bi&&$o["auto_increment"]?"":(isset($_GET["select"])?false:$Nb)));if(!$_POST["save"]&&is_string($Y))$Y=$b->editVal($Y,$o);$r=($_POST["save"]?(string)$_POST["function"][$C]:($bi&&$o["on_update"]=="CURRENT_TIMESTAMP"?"now":($Y===false?null:($Y!==null?'':'NULL'))));if(preg_match("~time~",$o["type"])&&$Y=="CURRENT_TIMESTAMP"){$Y="";$r="now";}input($o,$Y,$r);echo"\n";}if(!support("table"))echo"<tr>"."<th><input name='field_keys[]'>".script("qsl('input').oninput = fieldChange;")."<td class='function'>".html_select("field_funs[]",$b->editFunctions(array("null"=>isset($_GET["select"]))))."<td><input name='field_vals[]'>"."\n";echo"</table>\n";}echo"<p>\n";if($p){echo"<input type='submit' value='".lang(14)."'>\n";if(!isset($_GET["select"])){echo"<input type='submit' name='insert' value='".($bi?lang(15):lang(16))."' title='Ctrl+Shift+Enter'>\n",($bi?script("qsl('input').onclick = function () { return !ajaxForm(this.form, '".lang(17)."...', this); };"):"");}}echo($bi?"<input type='submit' name='delete' value='".lang(18)."'>".confirm()."\n":($_POST||!$p?"":script("focus(qsa('td', qs('#form'))[1].firstChild);")));if(isset($_GET["select"]))hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$Eh,'">
</form>
';}global$b,$g,$Zb,$hc,$rc,$n,$ad,$fd,$ba,$_d,$x,$ca,$Wd,$Ve,$Df,$Zg,$jd,$Eh,$Kh,$Th,$ai,$ia;if(!$_SERVER["REQUEST_URI"])$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"];if(!strpos($_SERVER["REQUEST_URI"],'?')&&$_SERVER["QUERY_STRING"]!="")$_SERVER["REQUEST_URI"].="?$_SERVER[QUERY_STRING]";$ba=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);if(!defined("SID")){session_cache_limiter("");session_name("adminer_sid");$F=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$ba);if(version_compare(PHP_VERSION,'5.2.0')>=0)$F[]=true;call_user_func_array('session_set_cookie_params',$F);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE),$Mc);if(get_magic_quotes_runtime())set_magic_quotes_runtime(false);@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);$Wd=array('en'=>'English','ar'=>'Ø§Ù„Ø¹Ø±Ø¨ÙŠØ©','bg'=>'Ð‘ÑŠÐ»Ð³Ð°Ñ€ÑÐºÐ¸','bn'=>'à¦¬à¦¾à¦‚à¦²à¦¾','bs'=>'Bosanski','ca'=>'CatalÃ ','cs'=>'ÄŒeÅ¡tina','da'=>'Dansk','de'=>'Deutsch','el'=>'Î•Î»Î»Î·Î½Î¹ÎºÎ¬','es'=>'EspaÃ±ol','et'=>'Eesti','fa'=>'ÙØ§Ø±Ø³ÛŒ','fi'=>'Suomi','fr'=>'FranÃ§ais','gl'=>'Galego','he'=>'×¢×‘×¨×™×ª','hu'=>'Magyar','id'=>'Bahasa Indonesia','it'=>'Italiano','ja'=>'æ—¥æœ¬èªž','ko'=>'í•œêµ­ì–´','lt'=>'LietuviÅ³','nl'=>'Nederlands','no'=>'Norsk','pl'=>'Polski','pt'=>'PortuguÃªs','pt-br'=>'PortuguÃªs (Brazil)','ro'=>'Limba RomÃ¢nÄƒ','ru'=>'Ð ÑƒÑÑÐºÐ¸Ð¹','sk'=>'SlovenÄina','sl'=>'Slovenski','sr'=>'Ð¡Ñ€Ð¿ÑÐºÐ¸','ta'=>'à®¤â€Œà®®à®¿à®´à¯','th'=>'à¸ à¸²à¸©à¸²à¹„à¸—à¸¢','tr'=>'TÃ¼rkÃ§e','uk'=>'Ð£ÐºÑ€Ð°Ñ—Ð½ÑÑŒÐºÐ°','vi'=>'Tiáº¿ng Viá»‡t','zh'=>'ç®€ä½“ä¸­æ–‡','zh-tw'=>'ç¹é«”ä¸­æ–‡',);function
get_lang(){global$ca;return$ca;}function
lang($u,$Me=null){if(is_string($u)){$Gf=array_search($u,get_translations("en"));if($Gf!==false)$u=$Gf;}global$ca,$Kh;$Jh=($Kh[$u]?$Kh[$u]:$u);if(is_array($Jh)){$Gf=($Me==1?0:($ca=='cs'||$ca=='sk'?($Me&&$Me<5?1:2):($ca=='fr'?(!$Me?0:1):($ca=='pl'?($Me%10>1&&$Me%10<5&&$Me/10%10!=1?1:2):($ca=='sl'?($Me%100==1?0:($Me%100==2?1:($Me%100==3||$Me%100==4?2:3))):($ca=='lt'?($Me%10==1&&$Me%100!=11?0:($Me%10>1&&$Me/10%10!=1?1:2)):($ca=='bs'||$ca=='ru'||$ca=='sr'||$ca=='uk'?($Me%10==1&&$Me%100!=11?0:($Me%10>1&&$Me%10<5&&$Me/10%10!=1?1:2)):1)))))));$Jh=$Jh[$Gf];}$Ea=func_get_args();array_shift($Ea);$Vc=str_replace("%d","%s",$Jh);if($Vc!=$Jh)$Ea[0]=format_number($Me);return
vsprintf($Vc,$Ea);}function
switch_lang(){global$ca,$Wd;echo"<form action='' method='post'>\n<div id='lang'>",lang(19).": ".html_select("lang",$Wd,$ca,"this.form.submit();")," <input type='submit' value='".lang(20)."' class='hidden'>\n","<input type='hidden' name='token' value='".get_token()."'>\n";echo"</div>\n</form>\n";}if(isset($_POST["lang"])&&verify_token()){cookie("adminer_lang",$_POST["lang"]);$_SESSION["lang"]=$_POST["lang"];$_SESSION["translations"]=array();redirect(remove_from_uri());}$ca="en";if(isset($Wd[$_COOKIE["adminer_lang"]])){cookie("adminer_lang",$_COOKIE["adminer_lang"]);$ca=$_COOKIE["adminer_lang"];}elseif(isset($Wd[$_SESSION["lang"]]))$ca=$_SESSION["lang"];else{$ua=array();preg_match_all('~([-a-z]+)(;q=([0-9.]+))?~',str_replace("_","-",strtolower($_SERVER["HTTP_ACCEPT_LANGUAGE"])),$le,PREG_SET_ORDER);foreach($le
as$B)$ua[$B[1]]=(isset($B[3])?$B[3]:1);arsort($ua);foreach($ua
as$y=>$Vf){if(isset($Wd[$y])){$ca=$y;break;}$y=preg_replace('~-.*~','',$y);if(!isset($ua[$y])&&isset($Wd[$y])){$ca=$y;break;}}}$Kh=$_SESSION["translations"];if($_SESSION["translations_version"]!=3885454679){$Kh=array();$_SESSION["translations_version"]=3885454679;}function
get_translations($Vd){switch($Vd){case"en":$f="A9D“yÔ@s:ÀGà¡(¸ffƒ‚Š¦ã	ˆÙ:ÄS°Þa2\"1¦..L'ƒI´êm‘#Çs,†KƒšOP#IÌ@%9¥i4Èo2ÏÆó €Ë,9%ÀPÀb2£a¸àr\n2›NCÈ(Þr4™Í1C`(:Ebç9AÈi:‰&ã™”åy·ˆFó½ÐY‚ˆ\r´\n– 8ZÔS=\$Aœ†¤`Ñ=ËÜŒ²‚ž0Ê\nÒãdFé	ŒÞn:ZÎ°)­ãQ¦ÕÈmwÛø€ÝO¼êmfpQËÎ‚‰†qœêaÊÄ¯ ¢„\\Ã}ö5ð#|@èhÚ3·ÃN¾}@¡ÑiÕ¦¦t´sN}+ö\\òp¤Û¥æ+÷ÌˆÎ NbBØ­8„µŒ#’Ê'£ î³`PŽ2ð+à²‰‰ëÚÔ*ŠÂÔ/ÌhäúH¤\nê:ãœ9Ž+8Šºí8˜7­Cs¨¿\r®`ÊØôj‰Ð€ŒÁèD4ƒ à9‡Ax^;Êr@6­kð\\³Œá|w-<QØæòÁxDÐŽL¨é#è³˜5„Að’±\"ð+`ã|Ÿ§Ð°Ð7ÀhÐêì\nbŒ2Î´Ž8Ê1©¬ÚâÔOcºø´BÓˆ#c:9˜Ê;T­.Ð¢Í<G/øJŒCË:ÔáRÎ¾bÞ6%ñ°¨û´õÛ9/\"êÌ/c^8£(Ì0Ž´µ20Ö8§CQ\0PŒ:ÔDÀùˆ#8Î€ŒìäÁA#Ð9ƒÈîð -BÎ¼ŒŠHÇ®îk”–¶Â£Çc;¿NÚÍ}¥d•p9ŒncQA\ruw,ÏÄl9´Ôí,úÑQƒ§O>¸#ÁB\0 ÷Â0ÅËˆÅä8ÞH(2L£ó7ŽX\"ŠÿŽãìîÓâ¹;¦)äXâú‹Ú4´FÄ ÐK¸3Ãdª”Fc:\n¼Šƒz5ÃÊ6¾R7xæ9ŒÖL{7ac/\$VêÖmul¨7Wíªê÷.¶„zöÁ±GÛ.Ï­:×¶¤;~âÃ/cµ˜4¤\"¦)Ì¸Þ5ÇapAgµŒ»À’,é‡µê¦¦ƒëªNö6%£7\riðÌ³».@ Œ›zý³5Ï%ÛLH,T‰#(jŽŠ6.lé;PºüÀõŽJ2lÈèË”o£vÓÁ\rÉBUS„S¤*›çòÝì‡cHÒD•&IÒ€ï)v²¨å+Ì²ÔÂàKÓÅ2LÓDÔëk0N(ì:<tîPzOŽJ†(Û\niøMb<”¾kÝ pfÅ4—\\m¢¡„ À¿ƒÈ¿‹y¿uÍ\"—Y5@\$Öxà¹|\0  ’D@IŠ\$Æˆ”8—k^|\r+0Ã¢XK‰ƒp\r§ñLBÅ˜Lá‘%8áŸõÞMI«–:¯Lìµ…è/D@‚bîHJYM/®dïšMœÆ˜;Gl¦ú;a\$xìGR|÷Œ«©jÊ¸´Ã0žÂ  b®X)U\"gŠ2/…jb31ù\næàC¹\$§89-è0]È\nÖ1¤¡¤0“˜fHñ \$R03¹vMÈ“\$a*CdÛë‚’>tB•–‘g¥¥ë9D:q2”ÈØ'„à@B€D!P\"€©ª E	n1Õf­MðaDáAÎ¤}Q22_+ì'–5®§C\$p8¤7š¢9?\rQGèÚJ†Ùúiâ3N\$,õ’ƒþÉ‘‰>1f¨þH È`àÔaD\rD¢ö|®YÌ™¢M–öôPÐ\n\nÈ&%ªæ{Ìâ!„ùCtžÑƒ¡œ4C8k\rßÌ()RBué½C’±ì¤®5e4Šþ\n†Š—“¥r…Cƒq£jÎ¢Ð‰FÐnqT)”²7´€C‹'d…M)À¬TØ\nªj†°®Ðð~XÄœ5…<ü…2\n—}rA)™‰)yðM¦TÌ:¹…´l;g-&U…pŽ‘ãNu“y_Õ’òœéœAI©¥SæLi°?È½œ=6tŸËò\nP „0#Á~®ù¥â™`Ý¡ÈÁ×«plÐQ\$ ¼\\£aa!0fÖ«àcn\$„'„¶Ì«n™\"i•r0€›¬_®Åw»Ut]Û¿tŒ%¼¼j\"Ö\"ä»-Ä”*ÛrÚ/Ýì» ºèÜ{te°2ÀlÎõU¤2•\nmÓ>eœÉb‹p¡ÂÄ~üÛÒîÄ!C˜¦ñ\0 ®C\$>²á<Z5¨I\n)¨#!Â½býqTa„Æ¡²ì\\BÎ|ÂB,å”!dF]‹Á1-¡\$Î“O¨«Ö]§\"dÂÂbŽ¼DqEe\\›2~ZzÆì¿U×Rh²ÆP´ZŒˆG`•iÌDÅKÑªæN3Qa4‡7çs;‹ÍJ«c¬’›XãÊ(/åáåªlj‰|Ñú2OT³4I{®ÆZ‰,ô³3®oÓE<+sñ9• mzÀ ‹œÓ¾\nKv€¡ìXgœ×”³mÖt9g¢<s~»eÚAFt°höÃË:}‰¾CPÐRËÖòK\\æö€ÊµîÓØÙ›gíˆõµ~£A+Ú;K\n¶ü®&DÖ÷Üõožf6‘_¥]³±b¾ì'÷ÀÂÞ Íy3}  6*go}pèÏ±!žf†VµºwÎàS/†X¾Á³Ý®£Uø„®órÿk	œú©<§ò›§aiÒJMCðÙ¤@ƒ¥4þ¶Ù^ÃÆ5å%Å2ò¢­mã™H›‰jÃ&+y1ëCE…ðÒËTùéMdÄ]Žº³¢í\ro#FÕ½MñŽ#FºâŽÝ4_„fâQØxÆÛÜt…L×9j 'ìœ\$ºÚžO´¤_ÍýÁnžÕ›ëÉNîÖµ_L¸E5ŒÍPžõ˜SÒÒ&@€â­Í½wGxàýÓË¼]kæ³¦âÍûÓÏvœøJ<aZºFÂŸS#I¤²écÜh’-Eú½› õë¼2);FƒHKÖåË82Ûž‹Ü¶ª…øÜ{¿ztAòüþjï;6xûô<#:úæÏ¢×%qò;.vûÿ7x\rš}µ?¹g_ÆÙ3ëØþOí±êcˆ}Lûc¬§¦ü¾£óŸÜDoÔ#ð¶ ¨%£Nï‚ò\n£xü9OÞôô%þ@ïâP	®<ZôéJ6~Ç&4åZ÷gLã\0Ö\$Â.„lÆ¾ÓƒpÏPRÝlÞÈ£¶¹ÆÖ#\"â- —PpÉ®¼Þ+ÊU¥J\rª%-¦Þ\rþ¾j>\0Ø`ÆiÀÆ\rnt\$m#®O€ÒÆ´/Ò'fƒînšà¨ÀZœZ°´9«úßŽ0%«ƒ‹À¾,°¢§bÍâ&Í0hj¸çcDŸ‚ï~\r‰¦>ck#±*Puˆ ÑkIYeš%	Ø:1**ˆ–Jˆ+eâ8…ÎVbò­Îç­<Úe Z­ŽÌê]Læ ÃÏª©Lô5ÇšÎÑnåôînÍaÉáªÑm)~­ª^zk\0§®*¨fm7æJ\$`˜žeÆÔns-\\\\mf\0Œ #N´‹¨¥k´%é¼žÄ¨'e:-€óÀ†<¦÷ç¼yËöÄ\0 °…nbåŠF4àš éÌÊYï ¥æD÷®¨\"š-KR2ð¹ÀÊ¤r\$Î0Žb¤À²+\"àÙñˆzÒ4À";break;case"ar":$f="ÙC¶P‚Â²†l*„\r”,&\nÙA¶í„ø(J.™„0Se\\¶\r…ŒbÙ@¶0´,\nQ,l)ÅÀ¦Âµ°¬†Aòéj_1CÐM…«e€¢S™\ng@ŸOgë¨ô’XÙDMë)˜°0Œ†cA¨Øn8Çe*y#au4¡ ´Ir*;rSÁUµdJ	}‰ÎÑ*zªU@¦ŠX;ai1l(nóÕòýÃ[Óy™dÞu'c(€ÜoF“±¤Øe3™Nb¦ êp2NšS¡ Ó³:LZúz¶PØ\\bæ¼uÄ.•[¶Q`u	!Š­Jyµˆ&2¶(gTÍÔSÑšMÆxì5g5¸K®K¦Â¦àØ÷á—0Ê‡Æ¢¶§\nS ü›r\$ ®êjÄ(î¢v†°Ì¶!Jbž¸¡‰q««0\n¸šj\nÙˆé­¥jƒù@Åzšl<\$W¿ÈrØ“£åsœñ§Ì†U&…[Í*¯³lƒêŽ (B&÷¾ÆÉè4_!ÄÀËd\\B¾ñ=Èt[¢	ãë?‰:²X£ªØ¢eJ	\$£éÚ\n&Œ3Þœ:îšã•ÊÃ±?+T\n‰Ð¬§	JÓ\0x0´#Ê3¡Ð:ƒ€æáxïQ…ÃÈ6½C(ä\rãÎŒ£u`<7cpæ4õDÚ5pÊ:S\"û†0ÃXD	#hà×µˆèã|¥¶vkz7Œ£l9´¢˜¢&\r-Úž–&ÁmI\n¬ôÈH=ËsºŒ2NAª¥D–êÅÔUÝsO±“A(,\r¥Lij«&î²\$‹[2B€Ý¯ÚZ¬Æ’ÄQ~¿ió®A_¥–¿!)tå*£ÀP‰KŒ#¨Ø:°Â6£+ï/sÊIÅÊÊã~§	j>\\¦—²lU­HóÆE*èŒõ~Ü¹¬‘>ÈfÁdóAx©oÍˆAk”¸MÊðB6T6WŽJ9Œv\$ÂDIÍ¼&-HqZš8ÎÖ0ë H^G:Mn¤ð OhNï|ï3\$\nlüCÆ¼Šaq%»ÛÃò(Z×o´ÿuÏŽ£]Z•ÙµéÚþ‡`÷Înl;Ò;Â¿±tâÈo“µÓ<ê7l0†òVå…Fƒè6LóA^´£xÌ3\r•K\nüQ<-MÉ¸*\rí@Ûb!\0ë[£ÆÙc6T\rƒxÎõach9{£Î0½AêÛ5@Ü:·a@æ\nJy'!¢È0¦‚1*„|’”C¨+Arl!«•\0 ¥Ê{ËŠèDl„†£tÖ›[ê1z…Â“’Ÿ×úè„hu;˜Òú[ ƒ×4KÙ†eZ÷•¹ëSªäûƒ¹Vá‘U&¥Tº™)‹2+“tzƒ:ÐZE=Ö—±BWA8.I@lÂ®!œ²æ%Â‚#è^ž‚€zEF02fCs7aÈÔÇæÕjÙ¡à8•, ŒG\r\nYL)¥8§•¢TŠ™ý*¥X«•‚²jÕ[«^®Î\n¾X\0‰aÅˆ±–BÊY‹:)-2˜°h[jTÖiW	©UOl7,åÆ]H•%'íEÔ´ƒâÉAƒ%ŸÄ\"d|\n*¤•¡Ò¶Å\\ùFk°Ô†€á9û0d5Û@²­3JÓ>¥=Í»•ÑTtÊ„ƒ¨2l*I›\"d•¶<BŽ£|™'Pƒ2ŠQÏ‘ËJj:Ì²´ƒT'—q}j0’FƒÉŸ4­“NËàn[&ôß‚,YŒr˜9ðÛáìµŽ†õX‚\0ÆúVá´7ÆÌ8? Ë<HkPÐv,\0žÂ¡\"-ýr»c\0Lh*SLkØ½¥64Q!6g³bM¹¨CÎ}JNíIÐ§VôbfâÔrÍºM> ÈP	@ÎÑ&ÒžòË\rê˜)@ÄC8 môŒ×SZ¥0T\nÖ?e”«Yd±¤”˜ª£HªÏiÇB…TVÆR´BúFPkÉ‘ñP‚xNT(@‚- ´A\"„À‹j&PlJgÛÆîÈtÞNQ«»*ÊÍ«9ÊÅ\0”»k6Š‹±JMæ€Æb\\\"Q5Ë w4üƒŠÏ‚RvˆãÊàgÅº>qµÆM…/¹lé.‹¾»»‡^MêíÕæüºË‹;æ@ñ]¤çw!k¸¼Í\"V<×¯ã£˜Åºƒ9Òl ìÑ.!½'iN«Œ ’‘wpZ3G€‚µX2™y£D(_Jt8UìˆÉÎ'wî©¢æš½I¥G0F()†ôÌ‚&ñ™0ÊkÃ»Ð‘‡&ïE¼êa´ ÃáÃK/ÇÁ•lšÐÊÉ¢ä_Œ%œ‹p)=Á_¥Ãfƒš­Ã©uhb+¢áà×ýÂ¸|–’“2Ml±8³”ê57„—k]¸dîâM\r2	£¦^ÙE	²DÀë;¦ˆÔ¢‘óé„K“Õf·æ~5S ÑåU?ŽuÖ¸Ûú™L2gLœ*† UA¤ÙWU,iƒ}6áÂÄeÉâ“Jdr„±´„ôÓmLàð@Ã,±ïq6ì½¦2ö‰ÉIïkh0RðCvÔsíA£´Â-Ât(3ÀÉ—–B‡YgI´…“âå·î±—o\\¡UwÏ@Œe¶’HD/& ¸ÁÃ+¸8Fäá{Jjn® Âa„%ã.PË)(w#˜v…¡’}ùa*‚Hj«Þ#øcÊ „§L„ÐTÜ§C8m.˜‹nKŒžº\$§„»´4Œ2SC|¨GlM™ÈØdÞŠ3”.»·eºû¬PÜ’6Ã¨åÉžöçšñ\\cPðšôûfÁ‰'Ë¸—#öÖ»Î(ÓOM.Žÿ…zAw¥\rFA<úo\0¹xó	àµmü‹.ÇË ;dÀ|ã·ÙyŸë–uú>çÏÅ´¶d‹dJb…·³wêCìk£óÞ§ÛÝ_Qé’Ÿ¿âÝÂ5ŸüÝànQYE9Ÿ4£[hÅ\0(·Œ£\\a¥öïUñ—Òÿßg5~/‹`¥æúŸÉNÖIÌ]Òå{Ð§Šó=™½àï€¯‡‘_Ò÷úýë¼üòønêñ«pÊäq4pÐÿNøø£ùdšCl†ƒiŽü§:D1!}ÍÖ]\rÜÃŽÆMMä.L,P»*LƒŽÏðVìvïòGò„2õha/O1_pÐ\rK\$ð)ëœ!¯ü?ìä™„Îƒêb>/¡PŒ®xd%è0l6âŽf²EÜ*°¥\nˆÀ10®ç‚\0Hir?Ž™ŽÙÐŽþÐœÎÄvþç\0ªëp‚†\nýB\n\$<l6/pËf&œ+¸çpƒdcPo-Í`ì,ìÏÏMo¯žBpòo-¡lïPUeß\0ë÷ëgˆ©Ð2ÌAm\$Ëìª@áWoöø­M0{p2Ñ`yð:n°ëKôuÐ3ìjk¥ì\"n¼u‹”ŠæÀM&n£ Ý‚‚Š®Ã²ñnì(06:á\rQz]º ñECÅB¶Ôq¿Qh0-ç(ÓútÃ%QqñÝÑ‚ÕÄkøº/”ðÉž^ñ³\0eÐD‹«ÑËƒ©!Þ‡ŒØPrÞqyR#\$Œþp3\"±õ\0L›\0Œ\$E\$0Dï•\"ðj!rP%QöóO“%Ò@ûm\nj!_0PmKÒK‚ƒ'd>øƒ§(	¡Ï(LGÇ¼‚&Æ²\$)°EŽ'VpÒ¤Kò{\$Õ*â„¯Þ*¦+a²-öàæ9Cçð>Àñü<0ì<ŠÉ#ck‰îž,&@­°ê‡g¦/RèÑŒÂ@ñ¨ïÆ¢`ðF?ðJƒâ“.à`è@Øj^\r Æ\r`@W*êe¦^f)X\r¥°\r Ì{¥Â&`Œ¯©PªDI`®\0ª\n€Œ pbˆ*(=oÌ/ÍÔÝæ¾#¦ 0âFìkä¬Ï6Ì¤J	³C4lÂm¦F]²%p\"Ú\"{C Ò`@R„WcÉk¦ŠëÒäØø#ù\"Š%)ÞF¨D Ãì	Šæ%Z4£r8.K=è DË:a/ÖiN] ‚r»GùoAÏ âË”©ÓŽ(\nû#Â”ÇntðRñÄ&Ç®8C^6cD4€A5ŠZ\ràà€ÒU)@‹™	¢‚\\‚·fhm›AæôÂô‚ &‹{ÊrqBBŸG1Ö˜£þ˜iÞ]H^îÉ7À\nÀÂ`ê Ú_¢lD1½J‰pD£Ž&Æ¶Ó¤2ç@]@ç\n1‚| úo¯àühDÃ«¡L”µ/!\\F²Æµdç,Ši¢‹ùäh	\0@š	 t\n`¦";break;case"bg":$f="ÐP´\r›EÑ@4°!Awh Z(&‚Ô~\n‹†faÌÐNÅ`Ñ‚þDˆ…4ÐÕü\"Ð]4\r;Ae2”­a°µ€¢„œ.aÂèúrpº’@×“ˆ|.W.X4òå«FPµ”Ìâ“Ø\$ªhRàsÉÜÊ}@¨Ð—pÙÐ”æB¢4”sE²Î¢7fŠ&EŠ, Ói•X\nFC1 Ôl7còØMEo)_G×ÒèÎ_<‡GÓ­}†Íœ,kë†ŠqPX”}F³+9¤¬7i†£Zè´šiíQ¡³_a·–—ZŠË*¨n^¹ÉÕS¦Ü9¾ÿ£YŸVÚ¨~³]ÐX\\Ró‰6±õÔ}±jâ}	¬lê4v±ø=ˆè†3	´\0ù@D|ÜÂ¤‰³[€’ª’^]#ðs.Õ3dŠ¯m XúÂÉ3’‡²îé \\µ	Òá¦.L\\ÍOºp©¥\r²À…¿ÍBz·.+šÒ¯«‰ºªš¯H’î¿*¬¶A·Îb^Ë¹23r—¹¢J•BÃÇ\"ŠÃÊ”ðLˆ’‰”|ú§Éªf÷šJnäµ‰¬x¢¸Å²d’k’¥ª¤8Ò#èç%5¨Å®%\n¾!,ïü¹AKÍSY0´4¬Ô„ÄóÙ HÆë3Žœ!s¹ I\$*¼Z@òÚ£@B\r,U	‡ƒ@4C(Ì„C@è:˜t…ã½”# Ú4Ã(ä\rãÎŒ£u°<–Èæ4öÐDƒ\r¬2Ž–\0¾1\rƒÜ5„Að’6Ž`Ê6Û# xŒ!ð@·Àè4\rã%È7„¨æ2„˜¢&\r6êãK9)‹-	;ë%NïUEºÁ©Ê£äú]?¸xÖ4²ìòüä¹;vÒåM;Äò@O;D¯Kb¾¬PyŒ`ÒúÒ‰!.ŠÕhêÚ>MD\nòy+ u¡¨OñÜ|„#äƒ¶Šk.„êÌ'Ò„ŒÕ¦‰ÅnŠÑûVÌ/q¬¶•în;§\rÀM¼'Obµ.Öà®Lþ%åÅE0ŠD “)ÛŠ>QR	\"±½´\$Ò©CgÀ 0ëjéò’[W´‹êT¶/Îy¶À¤0BÁIÉºÀdÜBš•'ÐV,”ÇNô\\²GÒûËD½\0V&!±‹ˆ”¿Lš½ßÅ5GXëKovcPfo½¦BÊãô”ÕY7¸^e57ˆ‰UÚÕ§ \rã/ñïë+‹ö,}ö¸Ÿ²ø²kco‘E)S¦wPÉ¦DÄ ‰¡B`I X€¯ÅÄ?6Ôõž65-¡4gÂC_©€¬yþ?¦êõÁÁ\rÐ95C¢ÜNù›(=!‹Òâ†ÉjÏ™×”Ävï\r1Ú3ÍÐà4IŠ©(G„4äŸ2(} ùÛUÐé•èœPQi,(îõŸœuþÑK/ ål\0˜—û/l‘¯D2ó’ÜIx1ì›Sª©ŒS8ñV&¦°˜bÑû‹‘¨ZEòEé#‰éH¬\"£Ê©Ü™>G\$ý™ÒúóK¨Ž&€¸†±BJoÚ;ñA–Ió*‹bÉ?K„%ô%B#Ê„L5i9Ãt-#ÞÄEl±²ÁNf\n T\r¸5‡0@–«	[á¸3‚\0‚³–‚ÒDap­ðÈ´¹Wjõ_‚\"Ü¼C\"á!Ñhuö¿K‰I¨\nX¹xè”á1†€îC¢DCI¼j*rK YjŸ!„'“7¹\r'Á\"I¼à ¹lÉäœ›Jñ_,„±2ÈYAÝfM¢´Öª×[+mn†å¾¸Azã\\«t‚%Ö»WzñA¨XÕSð‹g:þ`šQEHîø8~Òš©³¿Òq›f…e‰ªöíœBzbÐ	õ—÷\nx`a¥5Gv*bômÊ7*õ0áãOX\n³y‡îÝ7œŒËÃu6bÑH\rôwª1:\n (#c-ZQÓ“€€àR^hd>le:FPä±Ûš],\niF¢|!À.%ý”—žîÏóÿfBæ-*DWq”,Ú´¹984\n2'žæ\r³¼t‘R]7±¤ä])mSb5g…RÅ­é\\µE`[Ìê=4©ù¨NeRTž#.}›‹ g&™{‚£bY\$¹G4ÃöèRâ@³(ò×’g¥3Kï¸®1«×­ýÃ¶…‚Û)\0ÀÁ0’¼ß:cÑWl‰éEœ”õ|jíã!5¹5ZòCbu9Ì5‡–rèZÉ¡Æ¹¡*WÛ0©£q/)pEÏÊyøíuREA‰œk¾E	‹†·j%[’öÐ%ªe,Xd	HƒÔÁ/oð%@?ìvCÎM~;&½ê\ntÕ¢‚Rj‰>ÚcLXÕž“çö¦“°ÚŸL~ñtÙÉarMºPb¡Ä2©œ)ä0~¥eSÛ!ž{£Éd‚ÕØ¥NÆ ¦¾âà¸ªF/…à\"ŠÅÒªì\$þI®ÊF¾î¥ô;“´M@cù@<÷¢.¢€˜éC(Ç.éÒT\n&uã¨xÖlvÎT§€Û)ÚFˆ(ÿ¥ÿ1ª%Ìî¾·{\0q‘áÑ-Î=×’1il‘X²Šp]ìm¦43Ùg‡r4ú\\J¢uÅEœh—bìˆTPãL	 ÐÑãt5*íHdn†¢ü_CÔ€o}ñ!H‘–æÍ:Ë–ÔÝsy½\r«±2C{Ì¯‹‡aaÃ`m;E\rM8ËÝjiÄ¯>RóV²,ßºÔ\"g©¶eå¹£˜?ë\$gI”bšõô±«—Qƒu€©Êæ¶ÐË”«8O[ëFìÈõ#ˆÛs±Ùj=Y©_¦tÊÊ\\ãu´Ä‚T\n!„€@CªÒ\r!–c.fƒxt#¡Ô8ª·C!qwP”1iñtnESiÍ(ð@Ñ±ùi,ã= |w'Š«Ü2O»¢rVQŒò³¾\0 ¢°g²”eòé«Ä¾ÿ6”üé_¡¤óÐùD¼–R4\\+ž”°z]£++ýÇg?‹\\eMp%ŸÚ'/È>3ëþGžöfÉøÓvQ\\ú>ÊµËk½ò~lo&}íÝ]ñÈ×%´êsNZx»ýuLš·óQo/ð-_§Ò›´°A|.!</öËlfR†=\0Êê’)THbÖÛíò%¯¤­f2ýì>QcæoJŽ3Œ0ðŽj“ÈP~«Ä4ÏñªÄ7ªò#áJfC´Êº?Ëºm#ÜÎg„égT³¨žÿìœrÄ&¬rÈÔh)Ëæµ®çâ&.\$+&µŠkÎv–„w	Mã	¢§m(–\r,¡'ÐÕâ²6¢âÝgŒ»l¢®æKètm6=.%mÝ°Ÿêˆ×”»‡ZƒgŽ<è+zìpsjÈ¦lªx†nâŒŠ)(`¾†Ú+Â„q¤œŠL´ªžT«)G\0006&/8ìéq2¿Ž@§ÎT±4TF<mÑK‘\">Ò²tm/Â.#tj¬œÌ\\¼MÌT,¢,ÀPnÏ<OLÀ\0RÉ‡XÑÏé~µ#ŒÐ-4õÐØTmR€Q›Ð6KÂ”kFÌzÑ«H‡¬‰q´I0ü*1\0¢\"?Q¨Â-WÈåÎ‡ë¨HÓáðÐêq¦=	ÒtpÓ	Ñù\0¤,|q×Ñó eM‘è+Ð„‡ñª‡‚†‚»±­ne\"¢¼Áì¬dî¬®Ž°jò(¼;ïxôð¾OTT’4¨’8ÁÒ\$æC65Ãò\$c+\$¯*ÿ‹Äº/L+­6øÎæb 54+’±¥%pì‡‚°æ’P ÈJy²&ÆÒŠÇßìb‚¨!1ªk¿í eîäd.MŽ¬Ä08j¶ÑNTÌ`6Løs\"l¡&ªDf>«C|Â\$H9äI®.ÉÇÄx‹2`ÓHM†7/èð7†Ï!( ÑljKÒ ÝPñ’71D.å'ÐÈ‡dÌâ¢åâs0†£ìŠ¦n’ç*¯fûÂ»5’‘5Î)oRáìÙ5²5 È-P¦pò‚ç…\$,â`‚„¾¨Çnþò¥Snß²™\0003„ësš—r¹5ò#\0ëHý:è)3}+ëÍ2² }+êàƒy:ÇY3‡4nÄ}s×;çX½ÆÒ*, iã¦#rrPPV*\nBÐDAI§ã¶RjÒÐn«&Î¯+3y*q£:P×<Òj6Rq+r“;Qí4BÒGr\nISÞ’8fS>ãoÞpH?¥	(n4f±g\$4/53Ý7èRçÁ	EG	•FÏÝF4\$B¡ÄéÂ¶ê‘U7l|:ÄnD_:\"gä|©£7@’éIk+IÄ! “{DTm,¬ÞÔ²À­¹K…KÔ!«ô(åGÔTÊ‘ITÍ‚tjÔÓãNT“5”µLôîêo1³²‰]7ßË6´¿4H†Ó==vK…GÔöHµ(æÌ&+®sQ”×PÕQ'æîƒAó¡DÔ7R4%îp–2¹<r84]NÒ8¬’è\nmR´õ8£Àçõ8k…WB'9>s˜uŽ†É-´¿59ñ·T©%†Jì…3YI_Y’•eXîËZƒIZÒ»DqÖ.!J—ç‚!N3FRF#ðØ‚	'\rÉ#\"Šø„&ñæÖ„C.Žs\"Hõ/«^òm'­õTä¼‚øAR‚.&¡0ÊÕµí†ÆF,ñ_„ÉuíI¬âhU¼ùÒ~÷Â´Œ¶/\n§'m*TÒS(~(€†…€Øbú:bbÏfz×¦ßP\$|Š£­/Õ»CK¯\$‚Ãæl«\$¾«•I @\n ¨ÀZ	0‡JÔÇÆ,(Döö7¬Y&õdm.’‘d¯´IVÅ§­(N\0Ž‰H€DË“@U.¸Ž'1©R3@õsà=ÏËJãjRv³´X?óTn¤PAdX\0EotV…ÆŠ2©Dôa\r\$E²É*ðy¥JóvrdO-#«”ý&ÒEÍs\$¼OK2p\$‹¡{\$Îš.´ŽêÄÝ¥½è\$4©rÓïmë·vVÒìã+5\r·aE‰ù0¶Çp3lpÃ3-Ýw‘e)T%e7„â—xèš6¬¾BÕÊ½—§n	Hó“Ç•GA‡½6g·¼E¥e8„Íá	‘ŠÉÍ}¡~-1~g½N/ÃÌöœ)Étª“Hpu’Ä‘\$T&«a¤ÌBZÁhÂºïþ·C@—omn9B\\éFøé\rÓ5(qv¶Ù#œÏ'jìFz©ã3ÓjbíTÒMøÎCÜ¦®ŠØ3XÔûL©-PUo-Mò@þ¸lT\rV0\0Ÿ„#ã€";break;case"bn":$f="àS)\nt]\0_ˆ 	XD)L¨„@Ð4l5€ÁBQpÌÌ 9‚ \n¸ú\0‡€,¡ÈhªSEÀ0èb™a%‡. ÑH¶\0¬‡.bÓÅ2n‡‡DÒe*’D¦M¨ŠÉ,OJÃ°„v§˜©”Ñ…\$:IK“Êg5U4¡Lœ	Nd!u>Ï&¶ËÔöå„Òa\\­@'Jx¬ÉS¤Ñí4ÐP²D§±©êêzê¦.SÉõE<ùOS«éékbÊOÌafêhb\0§Bïðør¦ª)—öªå²QŒÁWð²ëE‹{K§ÔPP~Í9\\§ël*‹_W	ãÞ7ôâÉ¼ê 4NÆQ¸Þ 8'cI°Êg2œÄO9Ôàd0<‡CA§ä:#Üº¸%3–©5Š!n€nJµmk”Åü©,qŸÁî«@á­‹œ(n+LÝ9ˆx£¡ÎkŠIÁÐ2ÁL\0I¡Î#VÜ¦ì#`¬æ¬ž‡B›Ä4Ã:žÐ ª,X‘¶í2À§§Î,(_)ìã7*¬è¶n¢\rÁ%3l¥ÃM”|¨ \r²öã¢m¢ä‡KÑKp€LKÂúÙC	‹€S.ëIL•FsÔW9ÊSÁ°³“TŒJzÜDÈËdz¾6­ò[Àí\$ßK‘û¬ŒÓl÷CÔT»ODu;t§««tÖIÑTÒˆJ©î}F¶ ñC\rYÔËÄNÝÍ5,áaR‹nWF3ò‰,ÏÔ²L-õÕ?Ö+Å –­ŠpSÍv”ÞP©å\nÙrÃ”a8§Ää½TAÓyJªÜ’xÞ`Px0¼Ê3¡Ð:ƒ€æáxï‡…ÃÈ6Éƒ(ä\rãÎŒ£v8<?Cpæ4øðDùŒ8ÐÊ:`¢ü0ÃXD	#hà÷\r¸èèã|¸¾YËø7Œ›ê9¼‚˜¢&\r/Ô	aÞõaG¬+r¼\"í¥‘j}äS³F4‘|°Œ5lÞâ/”_BúâŸ9-ÍÍ‘DYpýÀâíÉ-i«ÚÕWdAwÍWf°È\"7¢ÃŽ-l„¼eVíYÛÊ—3%`nuU'·³z=Ôw®­\\ÆPLÞëÑSÂ×ìl*¯Yˆ˜Â:ƒ @;#`ê2ïú¢¦¶k7¤¨âÀó¬ÍËüÇAF/üsDØV\nñ Ã(ÝñJö¿H¼{¸µ­£Lü©„ÉÕ§e2…ö8¥Åê@}¶Vé70ª¤€2\$E›ÄÁD4Oáê,„\\ŠÎ@Fw±” #ÈÃ0I-,¦âb¾Uú§â\0Ñ›4N²ŽSÔBD\n=LºŽ*ìt…¸¸ Vô)›cü;.™@,‡¬ôÐBÈG…Ñ¼²jÜŽ\no&°Ù8—ü†[}DÉu–Ã9\\B#XÔGX)’Ëw6êø·?%°LÁaj©Ä§¦ˆF²ãÿR.uF7cyŸüIM1ÄÓ‹Ò44M1äu‘Üš%^Žä9\0£ºwÙIä\rá˜3Æ*Ó×à¦%‚™l	ðyç\r¬À<‚\0êÈƒ¨cgÄ9†gp`oé09‚Ãæ¤èaá…&	jäA\rÁÔý€æ\nZy[t‘S‚\0†ÂFS¯„Ö–â SK4j Ä­Æ§èp^\n/\nHÉ9*Ú‘#Mï-÷¿uvä¹áf'È31™<ÈÒh ,MŠ‡)\\Ù+#ŒX/öÀØ)rfa‘’Ÿ”˜Ùã>iæ·'Rð­Q™4º¢DÔ`·(*åFb÷+ˆ“jôD—Šf¿3›‰J3<§ÐÂÏÐr=¼9‡v2ÑC(x¥@]?X\0h`Lƒ0†ÃsbRé‹1†4Çõ9d,’‚öN€S,L¸63dÍ³8gT%Ÿ§v„#F—!„5žFšz´›\rÌê…›w”«PÁ…|,¨Æx¯éJl¤.6Œ%ód Î“bŒÅýr•C›o\$ï¬é‚\0 …x‘dTÏ\\æ±æ\0 S5Ñ¹\\¨µ|?µºbÍŒX¥Q¾¬µÇ\n¤êPs®¥@XQš+	+RggÉ±ÕŒS;5VP*¡€Qa:;Ÿ¦œJ{äyQÓ4¼¶tšì>åÀóf’«+)Ýv»\"ìˆmÚ¥sl§’>Nð ¥¢žgtÒsE?‡ø0 âïé€ ÁÈ7†Ùå=+2?Œt9RÒ™ý>AÂYVž¨’‰@q° ^Y`žÂ¡…DªÞë\nb,!uHLŒ“aJPÍá ‘«´.R‹:Èkëš†Ù1 \ruÆº&ûŽì‡Â¬ÂO3pÞÄ\0A¤3‚”0Qí<‡±€`©fYƒE\r,ÙŒ»ªß‚ði bÇ‹—gÿJtP	X°ÌÒ\$t1Ó‚’gu(É- ^\\(‹KC¦˜>WÔáÙ ÑV­#Š°VE¸6ërÉ\ne¾Øâ<€€.—@œG”¨ñaHïJ7µ7kÑlÓ¥tÂº1`ßàÙC»iÁ{k-|è‘™O˜G¨éhLg’‹xÅnT¼G…² öZj‰Ñn9tùD¯)	QFAú6)¨­ÞQÖÇhÂ­UŒxgâåÓ¶l[!ÄSê¥ž¼‹»ÌÒ•†ü‰Q95*&çD#tñƒñlðiü˜äš®Nö^ÌÜˆÏcTe£œZGOhC®\rª(älù'Â1±WnÛsw’”ø®f”šŒÎk>&ìŠ’tm#ŸígÜ’CHzx‡	xð˜e=ÁŒýGž”vÔÑÛ±,SL#915„5~·ÐRêb]ïA­öPïÂÖ@‰×¯TEõËÌàºó·¤\r«ztàom¶­r#Œð´/£_m[ì}P™Ý±ØåŒ’&ªñ¯ý®óó”Ôlò÷qM\$-Rú!÷”O¼nä±Ðy)óyÊ™„££ctâ°Ü)ÿúò0R¹ïxs*ÏLâˆšýÏsÜ»ü¼êÕ²u·æõŽ;¸ …@¨BH‹“ã–Xå\r÷üûÛØÚ}‰ƒÍs?GÊ¶Do’{k®K€^YÕÒÂýÈ9.Q[WsüJI=~^ô†BlIÊ6í´âOìWCtzgàZ‡¸NLƒÜý‚š(,äM*ùnîœ.øpPÜA\0Ïä€°ß0ploéÍKb÷04†G‡ï:}«<uK*ËÒÉ\"\$jg(1Œ¾‚°iÏÉ–,äO¨žÿãˆÖÐ\"(ïêËÈ)¯Æÿ¨âîç0:°ˆ'­¦×pXop•˜ \r´ðÂˆñ&P i†(wLâBxç(Pé©\06|%Ño\r/BÂ¸íÒ„…v¼¨EKnœî¸@¥Ì0°J[†¢-Éš)ën6ãrþé«‡\"T.LìqÈÞk%Œ-„`pböÐ¼âÜJÎUí µ†ÌÏç2k|-è5O“§*;Æ-ÆÊ/Fø«¬äÏhYbðmÜ@¢jo»6mñÁLp¤×¨x¥M°p.¢Û‘Rˆ°;	­ÆUå…Gq\rè0æÐƒnµÐ`°KÍÄ»ëbö1Äpñªp/‚Úë¢óïŽô\$ÑÛ1àípä¡ív3Q·‘» ÉÐç.Ø¸‘\0%»ª7ÑPiÌö&ðÞìƒr)	 2 pêã:Óï|MäŽY\rXÑGŽ¸¤âÛÊŠ®,þpEH¤Ž:8£&öj'&‘&ÁLÔîö½\$ÖY”ÓptÒn¶V1îçè‚î®ã)ás\"&ø;2?òCò¢×AÇf5hM%€\0PÉ²:0­FKàRx%¼ÝîÞ%Ýî Joêr2.Üàå%2[f§¬ŒÒè”B²³!r÷.XŽíäp:ŽQ×ÓSÙ’ü-ò­¨‹22+ ¸×ƒ\nˆgë.’êR2J9Ò4µ'qý#E0³PÜU+sVqE5Ó3Ñ6M¾Ü3U-åËÇ(ðÎo9\$=s/ñ,îäO‹N¼ðHÚe…s'(CM%„/9©5-\0¢ârR9Ã¯,Ð­:PFzŒ,“;6Ó„,å6òr<+òë ä«’õ2‡>°^_P3(£\"s}9S‚Psè±ÇÀŽS`‰?²D×ˆÄ±…T7!S²j¼\r;å.Ë-¬TÞ5!T!ÏHP\rèåDÄ‰ê@ÚT6»¥mCÓ	:1ÚåTC<òºÎàŽDÑC@\nCRá¨ODm\r/ŒØ‚ˆ³…MTRY0æ7+\nOBAO@2<s´c)—!æï&ˆ®‡m€ç\r,±ó6‡ÂÕnÐZów@³zŽsù<t&‹4Ý?KJK<S=5tì’“1ô#N“?OæÓ1Ð…®÷‹÷óHœóMOsãÓ„-Ïzt%#MïÓ“+U(Pu-Q¤ÞµÔG³!<5'A+cT.3QÔ“y3oEQ•[TuQ5g(kÆG¡ƒŠÆÅ†íðz‘j{Ñ!WÂñX°µ3hÈšÍ\\óÄŒä)ˆéW’„yrRôåtù>E[a;Õ_Ô\rNRóP“W\\SŒpUK@UÑ[õ>¶4†y&ÅuÍN5ò°\0~¢Y\\Åp¹5Ë\"UõW5ë&ç—]óïNU_­ó_è˜XV[–TðÐ€³,¯&Ä…BÜsí¼jü».;í!%S!“„¼Gdm=Vïñ@ëÍY¥UM„t\$£f]SR±f„Åesd6^¼¶{`²¯\\õ÷g)ÅgvfSÒ»UùcÂ[Qñ³.óO7ók^t¹DÖ ¾5ãkU\\cjˆ`‡Æ½({öÍDõB¤óV4å•¡d³òåVQ[ÕSe’1O8ù‘3QÙS³³3ïø‡6ÿn¶/Ptû8WŠì‡'Uñ`Õec-¤~1pán_rÑµYH¨ÈPÅ°Höë[v¯o-½AùUnüøöërv“`ñûov†ø·KIWh%3çß%—ó¹[&¼».öWGqd™ã9³¨zŠ0SÕFÁs:q )O	&7y]Ké	÷b 6áqzr©zÏc{]l7YvèÎæ´Ì*+–+âÂMa<´5XRI}mn)q{ñääQèØ	=¤=ó¯vÐÆ`è@Øl,\r Æ\r`@d¬²wgzwêÔ\r¦ˆ\r Ì“¦š. ŒÌIr¬JÜ\rÀ@\n ¨ÀZ\0@c©ð¿dš.·û\\sÐ!³¡|¢-ÈÀ6iUQ}pU{ØmPE‡\"¾s­‡‹ÏB·÷}U=gGð)MÔMë˜Ý³EcÆq\0ÓÎ»ƒx;†Ö½%yp5bñDÐåG¬lDt#ÈÖ§BãVãøÑNŠõL%vÉofL4•_s„3a{&Àø—àÝj0-Áo\r,®h¸4û#ð@bJŒ„@ï	\0BÒ^-‰ X¨!ÂŒ8±L;W6ÙA#N²Ô¢Öq«`˜¡h6·ŠW/LÞ&£‰W	57[•.w=nóO¹kSŠ9z\n„=Ãä<#ÆLÂ€Þ\0èÍnÄ§Ù}\"‘H´XUz™®‹Mv{B\0{‘ž-Á<(’VÐ_1vê«Ó-c˜ZÅbÐ±!BË[™ÝcMž\rÀ)çFj\$¿QèÏpX@¬ Æ ê\r¶˜8•Û¯Š{±¡J²K‹èMîãZˆ¢sÃBŸ”bñ”«'hšbyÙ2è¹•yZ×øå––àÌv×ÇÓL¥¹¥äÓ—6˜·«@5m>ç¶mGf³ÀAEX¢¯€@	\0t	 š@¦\n`";break;case"bs":$f="D0ˆ\r†‘Ìèe‚šLçS‘¸Ò?	EÃ34S6MÆ¨AÂt7ÁÍpˆtp@u9œ¦Ãx¸N0šŽÆV\"d7žŽÆódpÝ™ÀØˆÓLüAH¡a)Ì….€RL¦¸	ºp7Áæ£L¸X\nFC1 Ôl7AG‘„ôn7‚ç(UÂlŒ§¡ÐÂb•˜eÄ“Ñ´Ó>4‚Š¦Ó)Òy½ˆFYÁÛ\n,›Î¢A†f ¸-†“±¤Øe3™NwÓ|œáH„\r]øÅ§—Ì43®XÕÝ£w³ÏA!“D‰–6eào7ÜY>9Ž‚àqÃ\$ÑÐÝiMÆpVÅtb¨q\$«Ù¤Ö\n%Üö‡LI6xi6ˆ\r(1¦;ˆÐ@7Œ\0Âä2Ê @¦ªúB©¨óD¬¤\nâ\\**h3àþ!ÊÖ‚>ŠÃJ¼ŽJØ¨Ž¯Ê;.ˆã¼®Èjâ&²f)|0B8Ê7±ƒ¤[	›Á!\r¨¸Ê9&c”6ºpéý¸±x˜œ¨ª¢ò· *Â0ÊÂ„~ËB¢Ú5(ÍÔÏGâ42c0z\r è8aÐ^ŽóÈ\\0ŒŒ2¬9Ë˜Î¹Ô ðƒÃ˜Ò7ÁxD¾Œ#“R:Mâûn\ra|\$£ƒNÆ\rÃ xŒ!ôÕÇ£DÖ\$ãš)Š2\nÁKüŽ‚KHúFKÏpÃ;1ðê5Žˆ`ê1²4Ìp˜ÎÓŒ–E”ºY­²Wc‰Ã{,‚¯Ã´¬À£b:7\0Aq\rKõËpÜvÔpý‘J0#„7P/ÒP‚:¤kF¶½+ó~\"£0Â:ƒ @Ë^.ƒ	[.€PŒ:ÃXÆÃ¼àëOLî}xÉÇÃÏM3Z3Œˆåx¹¹‰Šä8O‰ˆêšº:Ú‡qÀˆ:Ø\n2DäY³\nc[&‡fé3÷N´ìsc[4è½býGˆÒ<¹‰Þ\"”ÀìM’_YvmÄ=3uÊý+kûˆôŒ£mŽ#.l5›¶mÀQŠPm¨Æ«Àˆü¹')Þ¢*§cÓÊ')xÂ¶94ƒx[³¾ìñÆï¼CMjÀb8L”Ì³tŠ7ŒÃ2«%Â~S4L#{Z6£CÊODŽ£ÆÕc6\rã:Š9…‹èåÙdC\nŠâÐ\\?_ƒ(P9…)pœ2²Ñ³¼‚b˜¤#jƒ \\KÊË¶Ê?Ûâà„6â:¥ÂªR2½*4	3²Ð»;ŠµPåV¨£8@SéEHï1¨Åw_Új3‰µ7”Õ4N	ùô<jR’à¬¯Å	UÊ)3 ƒYx)˜äŸõ\\„ß9-A5wöÌ˜såÍ†Pða”{ð)60TÞœSšuNéä;§¸ŸÔ\n’PŠ6(…£rRF5J©v*¦”âžm§9Q*ELSA©Ud‚0¥È>Â‰PrvYP’ãì[Oú<w¬ÌCŸåp‘é\rfmZSTÆ	qz/„á-¥`œÆóÉUij<£r\0H\nÊ7ó@Æ\$¡cdié=E~/Žñp\$ð2’ä¼Þ[cÉ\$ÎÀ5¨§`rçD¡ªJ8‚zsƒL+ôÁì@ÏÉ½;ËŒ„ ÃÊECÉš(á¥—«ƒr6FÐÉPâMS\nÈ”üÀü‘Ëèh9À€1’ÈO4Í[052˜É”ÜA€O\naQ	ÈW¿ÈùƒQ¬®öÌ—)BdÌšÌF‹L¡p ÍP7bCQ„v¬CI1C™.t‘1²XŸz!@XÇÒiˆA¥ !*I6¬”JÀraGùôÍÈü’9¹d2Æ†¦f#^¡‰\ne´;³HF™PO	À€*…\0ˆB E\0 Ñ6–€Ã™3FÉ †RªP &Z£Tê©îG’ÈÚTŠ¼âƒÑ¤j‹Ä6•já\\™mG¥µ³Á|]«\0pbì¨\"7Ùhv¤C×egY[ `@Ùe‹cÒÇ‡Ta‰zfÑÆTVô–'«~*’·7ÉŒÛš<õµÔ8v ùW9nmíÅfFÆÙdªV\npà9ÐØÝ½½cèñŒâ{EÈ¹~X¡Ìˆš´“\\S8:TèL6†òjfÂ„’’…!Ë˜¯_¡Ù!P7Ý\"›X*Ëð¯ä^¢Tc,Ç‚£PHaèè4xm®<äh¸žcÐz›³xv\\“YËÚeád.\r%ÝÍFC(wek<Ê& ŽLÑC-yiÛYhQNì­aÎ!%3LoÛJÔeÖXzvA)í?¬|3‹ oÆ‡0¦2ŒLÕ©å%&Ñ‰7>‚’ü€HÞ›±\"LLHPo¬\\—­¬`‡rÈ\nP „0&º·5T„ÉšBAXÝ1 ïy£QB‚ŒÛ?Ësð@DP)“‹®j‘ìùž—qŠ‡(“ˆpG‰­sH²T¼Íž õ!Ã¬Ü\0« ôŽ†c\$â“¨ò(NvŽÏ&RÔi&ÁŠ‰þ•ÒôÓBä=(M‹Óú…ågÕÝ¤dûj.È´¶¬A#î²=5pŽåÍœ´!ÓZ¿XééS¥v>ƒÔ»-øk\r³µ©Ï› €êÝµvnŒÛ0¨Ân#L3\nD¡ÞæŠ‘>Š’V	åZê¶hhI1ÚÝå#.n©ºIg[õ];zÂÃ(bà)e&.7æñXáiƒ …p]*µkù¹]«Ò¨Ù,8aº¶?Ž\0|Ï’g•ƒ×c%é¹&zîÁðõjíî©æk{nón`O·úÝAQƒ|³	Reï‹çºwœ®‘…ô‹šçç;§ô­\"×:;Ò-ÕÉk5\r,ÙXd-­’Æ^úSB%\n>…ŒP\"±ÛãQS–›¶\0­Ú;Q‰Ã8…Ef;ÔÈr^¯#¾.òx¼ˆ(•ø»Uþæ•ãìÿæ½1&tëIämÏK-”üåÝÎ‚ ò]/¬m“/è|Å§ê&âô\\åðæþW{IÑ½7¯À]/©zÞ©)‰ÎVedë§iå’‰þ¢ÏºãIÉÀ”¾!F\$ß	•žµ.¹Õwç¸‹ôþGÖÖºm’oµmuÝÉføÀžÓÿWÓCu:ýgëö”?Wà?‘ý”ûûtX09ÅhkB¬:†.'°^ä!ªLc6d£è8¢´ÄBüP\nL‚\nê 0¤PÄ6fâ .f|ê6 ¤ø‘¢>Žë¸æÉÈÄëZ\nl^þø ÄÐ .ºGz1˜Åªæ^EŽÊL(@¯dÿ&ZÞö®®÷\0qK:ŽðŠÉ†FŒž–dþ É°°8Ž÷Ïã\nÌô°¢Å,<’¯0¤¨‚'ÚeÌ¤(cKƒàLb.A#âŽÄX&jÜClü0–µƒ.É/ªþðÅqÿÎ²ZMO\rgtb«XðÔY«~vïøìŠQ,b†„§ÑBnC‰£(XÆVE‚>–\$B%ç5.rzQf\$ÇõÆâù\"|'Â]cˆ!Ç&¦’ç\np˜DC	ïÿq„–‘b`Š!ÃÒDêÆi˜81h“‘¸Æ¡Ñ\n žÇoûð¡Oš–Œu¢‡ð×ñÄNîc^°°æ7ãâI‚\rq¿qú6‘ÿƒ\0?qü=Ñ Ùà	\rªýã‹\0°©l1 ž+\0ôøEÍCVÐ¤>\rÅøÚ#Í§\$%ø0Lù\$Í3%@*\n<ÃÀXf64%À1FJ7åÌA&üðA\$…¸æÎt/šuù'‚üÒŠ…@†GÀØhC!Œ~ï)PBõ‚|}†\$¥Â%0©€¨ÀZ\0@9È\n‡úØÍGÍ”«I@þ,þÔŽü˜G¬ÛM2nÐ²àóÉ:Œ(æß:bÚqÅ®åâ|:T¡C©pIcæEbö’®æ6[NÎ‘òÿ%æ+;Šº1Ll[®D@\0Þ=+Br³D(“HH§n5£&l†Èî’%r‡FÃžµ³j4îüó`ÚÕíî”¬,qón^SO.3‰7³nµOi9käïÀÞè0Ò6ìÄ/:0¨Z¢d\0¯óR\$bO0Â2vÔDÆvg§&´êû=OC&ˆ%€Ä@ƒBôl‘/DÀ‚àÆ¤R°3ªs@êÅ~ jãGÂÂ8b,¥\nl„q‚ß;¦Úcû<nÄ¢¶&É5&þcô\"#Ž\\1bàXe:ã\nD¦,*\n²¬)ZE‘ð:¬";break;case"ca":$f="E9j˜€æe3NCðP”\\33AD“iÀÞs9šLFÃ(€Âd5MÇC	È@e6Æ“¡àÊr‰†´Òdš`gƒI¶hp—›L§9¡’Q*–K¤Ì5LŒ œÈS,¦W-—ˆ\rÆù<òe4ž&\"ÀPÀb2£a¸àr\n1e€£yÈÒg4›Œ&ÀQ:¸h4ˆ\rC„à ’M†¡’Xa‰› ç+âûÀàÄ\\>RñÊLK&ó®ÂvŽÖÄ±ØÓ3ÐñÃ©ÂptŽ0Y\$lË1\"Pò ƒ„ådøé\$ŒÄš`o9>UÃ^yÅ==äÎ\n)ínÔ+OoŸŠ§M|°õ)àN°S†,ê,}†ÏtÒD¢£¨â\n2\rÃ\$4ì’ 9ªŠ²’¬I¤4«ë\nb!£îÒ†\nƒHàù„\nxØ¾cªJ4²ãhÄÊnxÂ’8ÌêÈKÌN	(ðÈã+Ð2Ž‹³ &?ŠüZø«ïH¦—µÃ\"ëÄ1 ç.ÀP‡È#\n71¤´Ž©éÂ‰#pÒ1)£ƒ(hÉ†Y¼hÓ7µjÂ7;C &ƒC(3¡Ð:ƒ€æáxïE…Èúm<&¨Î»T¤\ní#0H^1	+b:P\"ú7;a|Š>£*„‘‡xÂAi¬€4\rã#fü á\0¦(‰‰c8£ƒÑ¨°ÌZ&¢òÈA¨rê1ŽˆS!d1É[e¦riÖ£M­5&ŒKË´©EU<¡µ°Ä<·\0HKu]Ü®6£jõCÏœ­¤q¼Ê1²•Xè?OBönxÊ3,V;/c¨Ë`¶{ˆÉ†ÉBÎÏ3Dß+%ì(š10ØƒŽÃzR6\rƒ~'ŽJ5ï1ŒnÖm=	†Z›gJñhÖÊ2RÜ@¸î-‘ã9…:ß Ì(Üfƒ#)]W‹¤W‰Ìvå«3Ü\0Å/Ä3ŒZ–öÁe„êSU2(ÿ\rÉ8ç·½(ñ\0[É0ìâƒZ×¡¢&Š®© \"°åÅnC.épá·Ç\\ð»âOK=\nH0ØÙ MJ’££xÌ3?“Ã€¡ŒpLñh2 Þ®'ÒãòÉYùÊ031VXÞ¼2OÄ‚<£Ã8Â¼¸Û­Þš¯/ÐÊaJcÛ\rnÐ@!ŠbæŽÈø2Ál9/HòN75É*N«.£kõãŸb7O	äéØŽL§hõÌn\rd3Upw\0AŠ<—Ÿ‡îFJ1&O†	?¨¢©’qz=¸3ªÕ^LIšl#	ÌYšbºHrEïº¾“¢™“A%©áÝ˜ÆÐ–Á&	h9‡rê­\$(2A4üÂÔ\nƒPªD¨°î£`Yy%à¹I)@Ü¥2™Šêp’%>¨UTÊ Ž0(<¬\nŠ²7JÕ[“ç²q˜@Nå<¡rö{v=„\$ÀÇ\"t**#D<ƒÂ4ƒ±†+±fsfL\$ŠDFÉHÉ€H\n7¸ä^±\0(* ¥¡B,™òˆgj²·Àø‰¼ˆ\n`œÍCÆ\\KyZ=\rlš“²zÙLØa\"¨0/öžI¡Q&!\$ˆ‡“I)U±[`im[¤(£o \$¨9ˆTˆ\rh1³s5 a60€Ù&#dxS\n„7·R|F	£Nó)PÈÄ‹\nË²€®–\0¹×ë}1Ïøö1	€ýÉY	…LŠÌ§K3Ú‘ù>¡¼¾ Ä]ÚÀL)p>Ð@‚¤›NêØž¸æ.4Ý\r©°9‚`•´Fiá»+:‘µj8P Tµ@Š-JJˆÂ2åê½Ëõ3hÆ¬’2„èI‘‹‹Ä|ÈðàÆÑhAÄ ê’“®vNrÈtè„½§ªåGžY–<&°ž™P›ûfLr¼P>8m,à	<Dö\\ &ý!fî–K™‹,K˜,ònpÖËÙÎ‘|5ŒÉ6‘p‘8a7È´€Dô‰zn¢ªXÌ ÄÛ\$ª˜„“LÉ²¢¾ßÃµÆlô¤§í1v\rÄôC·ˆÈdhTr¨lø‡¦&•È«Òb‹By³zs°½ðØRnLBj/%é¤þ]elkƒ(w´ö…9S 0Ähn(Áác­Õ¾ûÈ+>¿H„d°Âˆ>mù°1ÚÖlh	ÿ3gØ•S³ V€ib	89Vœr‰Ã8m'„PÜÌÃéÖ9§uÐÜI72§ ¤~¢•¬5„FÎä[¢¸Jˆ¢¤…@‚ÂDxbEØÙ:‰u4Í­.ŸÅQþÀg´šà{2<‚Ó6) «¹[9üÄ‹R»¼thH—3õY.#ý¸S	<Ÿ‡Ÿ™	5Á†:àšRžk+¬W7“ŒãC3¡#ÎÙ—0º\nsÚ/‘`ÃÓêVOÊÊÐ‘t˜¼ü³ ´Ön\$šþh†Ÿ´ô‡aÒS6èSe©sž§qzµÅ+Ö6xw­\$€‘#BUÊQ2á“^ê)06±D\r²”LGY\n£u:É0›¤ðŒƒÉ4i«fM&À`îC³ÓhI€äÇVŒ*}f\"n¶2MˆI|ÝÜë ÐB¶NŠn\0\$ùW€ è²HWz¾^s-V†Í=X‚h”Íf·Y‘–:ž	hM\nÑ/gõñ:Ÿx±š:d¾áñæE¸uŠà¶5Ê?2cÊtƒ_ÏõqX~.fÛŸå¦,˜Õ™€šù¨\nÒÑ'Ú†c‡qce­wpceÜzgbääHp	+êuM\0“þ³Ô™F.©‹Ïm\"ÀÉF¸þ=uòS>¿kíz/bh\nŒ%Ô2”SÈx}ßå–uÌ”>_ÍÚ“íí§{óòhåìÅtL~ÍPt^ß|…žò~=s/.šüÏ…–\\ßˆ;Û\\ãpò†œÛRO½_m\\ÍfzølÜ±—œ`ËMŒp^´^`3ùç˜û4_Ÿ¹O»6íô9{ðÃðsÂ,öK|:z35élg½œ¬7\nÂ¢õì~/Ôo¿lÒÀ_½Í¼¯­ËSó'xl5}V^ÆÈº—w´`S¦™ºÈB²«b|7\n=„>cðËä}/ògÈLP‹§š¿là0+²LÀ­c(ØÄÒ°kÄ& (RBïØÂËê~k\"Y¬CØÈŒ>Â'Òv.ê^î`ìæú[BHö/°âE²´/bòÏ{Ïn³l%9/N¬väfóÎ:m°“¯Õ	Î*m+þY’JÐ„ÚP®»´ÅL.0¦Æ‘\"p¸\r¸}ÉÈ¹¢8‹°ŠðOzù¨6ýs„×\rÄm\n%\r¯œ½\r\"o§FG\n†Ö(ëFg#`P°rK9ª„Èv5i»Šú9Ä;\0¬Àè‡ÐEðÖåoz àâ;†5qæû‘=büäáàË¡yñCO=±[ñCç&M‘]c/Lñcíðìòâ\0ƒçOŒ—1ŒÍ³0Ï²mŽ2ÃB>.±U	‘¤Ùì9p›lH¦ñ\0ZäGÑªÜñÄ1ÈÃ„8UEqp®å0	¤J~8ü&ÁD§“\n1æ.Âb	´œ`È¹œ@ŽûÌm	\0Þ{/8Eå¤`gŸb˜A€áÆë!ÈU\"mkJÒnòËh€n®ˆ\$‚ø-Ò>oÎfyåÌÔò*ì¯§â ˆ(Ç‚béÂ\nÄ †H ØiÊLçÔÄ& èî“%Hdf2np‚j>fB:y€ª\n€Œ p}gb1È8ö*Zq/.Îí42^±2¶qòºÑ†E‰–qFjX&6}Î€¾ÌZ ò¹Pº¬ŸÃ=Cö?«pÄãÅD£/MŽŽRb0¢L)´aâ÷Î®1fn\$£(…Bd£…lÒ®6ä‡2Ã¼RF@i\\EŒ´ú¯\0ÚGì0Ð¼ã£d\\O\r4­š>¬Rï?5k¦úÄî¸ˆQ6cy6¯Vn±â Sv1SZºKV4ÃPl@Ê{I:=‚l½Ç¯6¤cÅäd¥Š°l¯6“„¿±-2®ôhŽ~ g4	†„ïfŠ@.âínæ wƒø!F&Úä´æB¥êj€á9ƒúc¢ô?€è=ëN½e¿.Î 2\0003¼ÁaÒ‚…ÇFÝOB³,z(t6D¬à3rN1w\0ÒC`Fdª1ÒD%ˆO@	\0t	 š@¦\n`";break;case"cs":$f="O8Œ'c!Ô~\n‹†faÌN2œ\ræC2i6á¦Q¸Âh90Ô'Hi¼êb7œ…À¢i„ði6È†æ´A;Í†Y¢„@v2›\r&³yÎHs“JGQª8%9¥e:L¦:e2ËèÇZt¬@\nFC1 Ôl7APèÉ4TÚØªùÍ¾j\nb¯dWeH€èa1M†³Ì¬«šN€¢´eŠ¾Å^/Jà‚-{ÂJâpßlPÌDÜÒle2bçcèu:F¯ø×\rŽÈbÊ»ŒP€Ã77šàLDn¯[?j1F¤»7ã÷»ó¶òI61T7r©¬Ù{‘FÁE3i„õ­¼Ç“^0òbbÊ*,ÔÛÀ:ôGHå:Þ¦Aˆ7mXÊ5„\n‚¦ªŽNJ´×««Á02Ž ô1Œ®{¤Ö?ƒ`æ5˜kèè<ŽÈb‰¨æ6 PˆÖŽ¯»~â(p„4§£“Lñ¦¦)Jã(Þ6ÂƒÓŠc(ô\r±0¦<¨ÑÚñŒ£’€9CL„8 B@ËñsZÀ-°È ‹\r#C¾PŽmèçŠ’°Âï¯£„Ñ5\$NÒx»¾hÔì‹ÏôÓ@A\0¦(‰ŒR87é\0Ê3¡Ð:ƒ€æáxïM…ÃÈ6Ç¨\\”ŒáxÆ9…êËø7M£xÜ„KðÂ9ð¥\"/ŒQ`Ü5„Aò`8'r Ý?à^0‡ÁˆØ °Hæ•ŠÑ æã¢‹ø-\rïƒÍ7ŠXÖ×©`P 7CkH77¨”ÔÔ\\W%ÌÒ·­›5Ž¨{Vð¢MÀ×„£ @1/Ø~ßøGßØö¹¼hÈê8£*D€P—!§ƒ¤òLB`	0 ä2ØLX¬a—£Ñr&¡V·öµ£K=0ë]ÃèÏ‘Œîd3hÝv¨5Œ:t4ŽÒ¢-O23z¶84dØDÔX‰°mûø<˜`‚5ç/šç•\"a1:VM£ñÑ	».VßcÐ˜Œ£¶ÞÅ°N‹svÜ·;{jÌ…ôç\\{íà£åR”[hŽ‰ÌÑÄ\rSÇÄ•/(AÀS(€\$-£‰#j\$91b(ñÑäÃÏè¢ísyÞ¼Ç4)ò(;ZO@Ùn½*3<3ÊÜ2¥bxÉ@Í¯–Þ¡;VPÜ7ånè9®aý;Ítj×¦þ/ÈÔ–ÕÀ\rþ	P\rÍƒlÌäÊkæ'ÃoŸè¢^Ÿ«ëÐÉC=•¾ç¼]óá{¯<;>T¿ŸA°0¯±å†—šüž‚~80û¶çòž_Ù¦Ï|ŽùëæàØ¢\"‹¡4¯„5“À@Â˜RÀ¸<`Êv‰ÛàÄ¤6˜&7à+Åxïéþsè\"j#AØàs(½	[WnæŸƒ¤Æ‰°ASê„¥¿ãXcßŒeÌH\" ¯Sú* µŒ²\nš_U¡¸Ÿ¢@äž‘cÜOé¥§À›â1õ§ÝñÄÅ\nyFeÈ°ÑW¢ú,Ž¤<i”teRjUK©•6Ôì[xd©R*ePª‰äsV\nÉZ+`D®Ò¼Î…`2F2W*ÇY+,‰”Â ÷TX´Œ¤¢(IÜqqÎ@®ðÜ\\T\0e®d^’BpN“Ø©%eä½ÍèŽÒ=/ð‡ÄPÈQM{PD&X_MÙÖ€Hdtg2 @@P~pŠÒ-AAP0šaÂ™×ÓQ'1²Ñ†.ˆ¢Aä6Ad}\$.<¤¼Î6[5ÉÜ*8fk¢k\rÓ¸Äp€È#î‚—jô_Áª\0ª¸<DŒzž h«‘\$VœÃKÝiô%PÂ÷ú5ðx£9Õvù[´ã?„­ö¾øOŠƒ<!@'…0¨åÓ(XIéð8®Jí*3¬¸‰¼ó^€•pf\r!œ:œ1¡\rK#[í\"*S\0¬PQ+Pá0’’r¬K™B„pEICho¡¤Ø#IôoÕù)6(r¶=Ò8›Ò²U6À(!†ôËNñ5£%¬”š²z‰;}µÃ5Äšiå´â…„äËg6ùÁ7Rn¬Ã\nË\\-\\Tµ“Nƒ&¶kV°“¶+m¼ãlÜ“KJW«íK÷pØ9rtÃ!²Ú1d@9š	O•ÅŠ)ÌÜUÿE\"¡©¡…Ï˜SÝz«³-§9Æ8ç[€\\ƒJ‰.äÈ0õzâ>“8¸2þÒkørE=K¬ê,ç¼ùŸk’~ÏõT.Ì|ƒ¸5ˆ–s›PÈ®3é{í…¼.áQ×˜4M_ÊD(ÇŒ‰Bj_ÌXOÁ”g\n¼köº/Z_½Ó@9»Y,K\rjU\r5\0=OFPp\níÌ8ñµ\"ÖBÑCÅÒ]Íø’#ŒÐ‰‚Ðd>ªÒ>õ¯3±ªhº‡6Ó“kR+N#HÁZ‡+¥žŽ:Ý®zAÃ¿\nÈ›q1Œ¡§€ ,~²F¢ºÅC~™»`C!T2)Ðs‘{2uXÞŸ”µ–IÚ.f'®¡…@¨BH*ôÐ“	åkMap%a4ó©y‹øz^¬•ö	š(kaY÷Dðó´ö€ka•U¸iÚj9ãj†Eè÷.¶«ž½ÒÚ“t}ÛvxDx“Ebfä3×t_‡»3—=}_Öï\$Ýã·ŽßÞûÖo½úFwúç\\äi‚pD˜\\æÙ“2±§zEDî±¤ä!qÎKwâß<6'¾¶	Éµ§(ÞñS•íž]É[{qz¼Ëpñk¹b†š¶§!µC{´9#õ9–”‹¸BwK\$XåBtâ”õ^„¤ð7’°µgÒªW^¥S§áâ<¸e%ûÚÅ‘ \0tMÈ1k£\\.ºmÃ*=æ‘k­’àé(uÃm›bÝºJ1)Hç¸âxŽänŒ@v7­Ùý®Õôo÷I¿vêØåuÇåï¼’ÅÆ¿./{yç‰Óz_eCÐCpO2¾d^~bŠûô·oâçö8õ}úÞ\"i}Ñ+öMgß;‡W‰²½ÄÃq1ycàCÍä~ïŒ”²¼û[‚#AIrCHP©(dÖ/RŠÐØ‰¾UÆ\"”6/P‘[YŠ&Ìåf*n˜©ºÍ-þbÀfâ²ìfb\0Æ\0PÔ«š_`R!ë~LL¾Ï2zÀÈÉïƒŒ#OàÊ\rE„ôÂ<¾pðpøÌö=¯|ÿ:rg\"r¯hân G>ë°TqOB‰mVuŽ¸*l­¯.¼ bt=úC\n POÖ#Î­Øâ­Þ¹.>ˆ®°Z7ãÎ'0’¨ïBþî\0ÿ-ÚâË’p†Óð®¤ÏNáçÅ§Ÿðž±^ØkLµ¾Ðô0!CKO®Ïã‰QèµPîÝ(êøéÆ\rÎ¼Î@Þ\rEî/£~²b2èb\0\$0š æe¢b¢Ž?€Ô¤Eª^èVD`à{‚<_Ñ%EA¢L›	¦e®Qäqú\rÌÐ7Ð n,¼¾ÇNAãŒ‘ÏÐêÐ †}ïLm/fÎìØÅ+¨¸0ÌBva*)	÷ƒQ^÷1²\\fƒE=Ñ]'¡£žÔ©}§>ÊíHÔÉÐÙQØ#1êö±pRp¬ð\$€ë)ÑÍY RÈ`´,Œ3£Úbç†b@–\"¡|Ô¯ª]«Ì@l˜e£Îl„8ÓP§±ù'p‹\n±±ð¥’QoëÒ\r@gœRb¥²B^¬\nuƒ{&fÀÀnqì…ê¸€ì>1D/Æ*I Ö(	ÒG/q(ã)¢yðC(1Êò™)Ò±PõjMÄ+Òâ,²®9Ï÷’¥ÎøDIR´'Š¨Íg)@á Òx5Æ*N-J²ÝQË0\r	0Q\r-0\$Ò]2`Í‚üÐm'r„ÑSKPF±×ƒtCma0r§.\$²iC10Ø0Ó@C²éìî Ð¡L¼.2M\n…Û#!d@pCÐ¢j*²4¨\\åòVYà7È©8\\ÉŽ(`æs|#S”4s…\r³ˆÓl %`–#(=lèZJc»9a23|zÃªi?\rÇÞŽßÃV(CDà3Øà³ ¢‚5>3Ôâsêâðâ´…º\r€V;Â†j'Àìåó‚ˆ{…¾J©ÖeD0|ÇƒÆA‘€_ñd9@iÎê†Z\n ¨ÀZW<ë2t‘m	ÓÛ\nÞüïútK5“›\rE¢5Dë6¶.(àpÞã	Êž\"*\"î pf‡\\mEë&Ñž\nÀô/íŠF O\$1`–#ð/ÄBƒÆ^­É„\$Ãô|\r\"ÛÔ¢14(\neº¶%öµ„V5zêBFº©úÁ”±ÃB<\$ÞFÎËë`´ÖÚ&&÷êßÔŠs¢Ü¿¯…P¶ÃænUmUEÇ¼3âjÆëbÿUþÐó4oóQ¥çQëòä<¢„Ë®©RÕEÕ¬~&‚Z‘~ùx\$FTùá4ú\"Fúb‚(qÜhLWIÿÀða€¬'I¡oBC1X@òñ¢Œ2\"T/K#à‚#ÏÏTƒÐD[¯S#ç9LƒÜ4\nÏ+´¼ƒ®#@ÔG	Ö¾,6»+Æyã`Zâˆ'd©*Òžëb1ŠÀ¤Dh!Ç†";break;case"da":$f="E9‡QÌÒk5™NCðP”\\33AAD³©¸ÜeAá\"©ÀØo0™#cI°\\\n&˜MpciÔÚ :IM’¤ŽJs:0×#‘”ØsŒB„S™\nNF’™MÂ,¬Ó8…P£FY8€0Œ†cA¨Øn8‚Ž†óh(Þr4™Í&ã	°I7éS	Š|l…IÊFS%¦o7l51Ór¥œ°‹È(‰6˜n7ˆôé13š/”)‰°@a:0˜ì\n•º]—ƒtœŽe²ëåæó8€Íg:`ð¢	íöåh¸‚¶B\r¤gºÐ›°•ÀÛ)Þ0Å3Ëh\n!Ž¦~Çkjv¥-3Še,Ã’k\$SøV¢‰G¤Òä˜)ÎNS:On&^ïn:#‚þ'%ÎxäÇ4{ˆÚ¦##°µ°8œ2Žƒ´\"5¹«\$(´BbžšÀâ˜ò¨,¢šð@îËü9-ƒ°Ü‰éÏê0¨ëŠµÁÂ‚È¢ãsB­Qxx0„Bz3¡ÐËŽ˜t…ã¼¬\$#jÖ¼¬ã8^¥KãÂj7 ÃxÜ„K ä¹’h¾1&cpÖÂHÚ6\nPèã|¡Žaž:\rŠaª\0@)Š0òj“ŠÌ ØÚŒ‘°+)è+ò:c ë˜d3HŒÃHÊ;U\rFÔ§ÀPœ<´-‚.†Œ\0ÅX HKZÖé¨ç#è³ø*@/à–²9òÂžÀâê±„€ÆžÙ,0ˆ2ŒÃê64#²Ú:¿”‰MIB2+N33 0¶M²:\rË[¸)§NàÐ;,ãšÈÍ'î›p¿Û#bDúC£L´Ã\nŠjp64c:D	Èñ876V\rhæ1²@U&£]‘‰\rõI\n»Eí•SQ-*:FñÍU–£šÈB{«\n ¹¸ÃfpúçÀP ´T«ÂÔ¿ÎÃ…ÿˆ©^œ90ÙÓ-ŒY~bþ\nz-1_Û8²7 –Z07ŒÃ6(ªGM¨ë\nƒ| (äÈ:Œcê9ŒÖØA\"-c˜X˜[¨Â3Œ+[Œ¡Ö²ÐÝgŒ¡@æ¤â¨Î<àKKB!ŠbŒ¬hJ–„\r}âã©U«n9Y)8˜â¼áÀÕ,`è“ŠƒC\$•¶Ë:8ƒ.!\0‚2qÈW1ÌÈ2D€ÈòL—&¨“ É34”ù?>ûÝÓ ©ˆß†³CÒuîûÂñ´1â2Ä\$éJ 9d1ˆËçŠ¾|ApAæÉVÄš“Ã¢QJiU+¥”¶r]Kéœ2¦\"”™S:if	­\n&äàîÓ£M/T…=tþ\\Ôòw¤¢B3>hC9:eÌñ:Ã\$žžÈs‚Žµ3BÍ‹k²B,Õ†\nVxgI9p1p2*SÖŽbsv\$‰»<²pNŒ¹›@\$\0ZÛâ1>(@R÷I%…\"˜ýž\"äå\\»™.Mý˜ˆG‘§7ï´•Â\\gÖQžÄùx\\ÙÑC67¬ñÒ/WdùÃ9ä=å¼ˆ‡–È@ƒJµ\rÁ¾º’`É=+€òc¬KÞÅ *¹†2>¢”\"™¶—xxS\n„	F\0ß C\\ƒvà€½6ô@Ck\r`f|ˆµ¢˜jÊ†‰äìžžÂ–Tñ\rÄ3©÷ªºiŽ ¬ÉÂ<H\"as'ù‚ÓÒìƒJHÁP( ²2Úy˜ry\$E´PRŠ:Ô9áå€Îe\0Rúj„)y3œ¨P*Z E	†¬Ìcò/\n-v!CÛFPìÂ\\%´îÃƒ	( 9B˜æ`Ø¬#zå¥ç\$¾.PÔ{@S–súZ4†IÑ­>( ¡'\0Êx!¹Ò&®ÝK©%(š9jÌñ­UøÑÃ{zgˆæe—:j2!f\ny_ÂYöÁÒ€	\"*Eh±\$bÑ(µ6ej¾ƒmi®n™0ÊX˜I+7->‚…Bê]Î€iGð!–@àä½\$ZÇX8S˜Òo¡»>Žˆ‚tž+­U*§Rê™TXcT`	+/ìÌÒ£Æ_ÂY%aá4aŠRÝk%Äè5iô_'ìÿXe 3›ûr-Ø¸·§ä´›öŒázBoå­°æ¶ëå,æDÃ%ŸØ£ˆåþ ³ú¦hCÞ/ô0*†› ‡ÔÏšY'\ráªÿ…2†£=4Yõ¨¹ÅhyVWfðÅ•t­LP¦1ˆ%–ÕjÛîKT<%¸<„L` Àb•R‡\"íÀNbøb9‡°†\r(Xâx‚~Ê[\"]¬¡‰†[f›˜¬2aœ\\Ávä\\[†òA…Lƒ›ÀÞÕùH3Ät’ËJräàŒnÚ³Éé>gª'/á\\2†)ìB§5)®a.bJÇ‹pîªþ–æ¿’È©¶Ï¬A–r`	Ñe—¥ø€–Òð‚(m\"êÄ€Õ´)RÉ>‘ÒrØ82ò£S4Ðe„¥9ãäxî,<È)z’¥!MPjd`¼F[WØV@C{;Š52ÓäZ‹Ãl”,ùá‰,¸Š„Ké£mP4“ÍžÚ2Ë&;8‹ }—´ÞØs×õ4S-’Ë…©‹u€ë=]jR\0@TYa\0Q_‹‰\"*º^Z­­Õ±x©VÔÍìÐÊ[º 6îša¯êPàpËi†€Ö÷Ææ©tØë¥wé÷gÜ^7ðÝÏÅâDŸ ë¼L^ãöÉÄì:c„ˆÞ4\r8›W\0žN–÷Æ,åœ»’Ì¹¥LÖþ~/]c«4¾çèg:àtbç2c#4è]àô}q®¸u±`A•ÒYƒm™ÁÚ¬ö»£ÀAWaÏ§¦b¸7—ÙòÛ¥gŸGyˆÔµc=†‹”§qf5x7‹`¨“Õg{L)Ï½¶tµÛÓgö¶–Ù ªÛq`-Õ¼Éa¿±.IÈºŽ´´jŸŽimv¤<þ”ã½&¦*õ»i/Q®;ãÓpà‘x½ž²ô;ŸÛû)Ã=a'·	'Ü`kÏñ=ò9?IÅžÄB—/†Ùmò¹š¢‹²Þ@üß”ñ‚¾çOÜ¾î¦~ñ®xõLømõ9mFVªÎ­Y/Š|þ|Øº39×Xˆë7¢'¯ÀB…>ÝF¸)£ÀLÄß¾DÀ×\0ê†øNcÐðäoÞf‚dÈÿF®(ë\0X¯hã0B@OÎë\rÎøp	ˆ~X«\0¸‹o¾\n`*.\"ü‡q£õPuƒB¹‹Š/à¨’/b>ŒEPcP#	Pl4Pp?°–ý¾b æ3Kº»åfàÒÏù¢’idƒŒ ØhBäÀïâ«Iˆ«ežÓ•\rföÇ Í\rÐ\"	e‚ÀâÆfÜ0êùÃÁed#€ÆÌ•n~¶¬jÜà†? Ø`Ö<@ÖÄKj<¨tÛ¢ú„Ì|ÜÃL›,´œL‡ëZ¡\0¨Àpt\0ÊääF%ä\$ì>ÆHÀ`ÈlÓì“î`(B¤ž\nôL*™ìBîE&#*ÕP/\0ö&m¨/ãzÑ¤ðc|Î)gV„ð UfÝ®äÛÀÒ>êà )\"9Â¯Å@ÉäRÑÂ9bþ_‚0ðË°4(°\rR2Èß*ŽgƒÎdJ×‘â=¢‚ *ŒßfÔV×©E‘ûöd@àTÆ¨Ö²ojÜò	Ræx×\"b2*¹‘àÖ„8«BË<ÉŒš† \0šØD¼­àaÃøÜ&%¦èi kOÀ\$# '!pË®;†u#\"Ú)ëÖ-Š^‹k\0¦ëª©VY€Ñð0Ê\\¦bBæª¦†¦E`F:5(ÐŠ0B<c ¡¢ÔèÂAÂ.\r@";break;case"de":$f="S4›Œ‚”@s4˜ÍSü%ÌÐpQ ß\n6L†Sp€ìoŽ‘'C)¤@f2š\r†s)Î0a–…À¢i„ði6˜M‚ddêb’\$RCIœäÃ[0ÓðcIÌè œÈS:–y7§a”ót\$Ðt™ˆCˆÈf4†ãÈ(Øe†‰ç*,t\n%ÉMÐb¡„Äe6[æ@¢”Âr¿šd†àQfa¯&7‹Ôªn9°Ô‡CÑ–g/ÑÁ¯* )aRA`€êm+G;æ=DYÐë:¦ÖŽQÌùÂK\n†c\n|j÷']ä²C‚ÿ‡ÄâÁ\\¾<,å:ô\rÙ¨U;IzÈd£¾g#‡7%ÿ_,äaäa#‡\\ç„ÎÂ1J*Ž£nªªÅ.2:¨ºÏÛ8âP:®¦ŽŽž—\r	f-;¨ãL:;L(Üþ3£’63 0²ù½bÐÂ•=j^ç pã\0<e ä	Ã+8éCX#Œ£xÛ.ƒ(&B‘ŠFŽCÜ5 ƒËÌ6»h`ì¸ÄQ\"â(#˜æ;ãéÉãt£)ÉcxÎ€SÅ2LÈ;Úï1àÂÐ¸c0z+ã à9‡Ax^;Ñr46 (`]2Œáz9IZá@:0é`é?‹ã3)„Að’6Ž|Žø‡xÂ*˜A#ŽÊ:\rísh‚\n2bHªM-Øë1³Qƒ”:C«z:º²“:¢½b²´;„ÒäKêþÛÚ¥%®ïÇƒ(ê†(SHæ‘Hz!) ÝwjZö'I%³¯5WNGbø7…¢L¦áß`P­H4rž”)Ë{&Ë„zb\$\0PŒð·£J@õˆ#:Œ2Œé4½¹C«Æ[jÐÄ¢®Q6H/Ï5 ?XøÜÜÏø¨2Ò£e¬–B3Šâì\r6¿-è8Ç);uèZ%ßRÈ7æºK‡ÉãLÐÅÍr¥­¹NBsnÛû\n±¡3nÆ2úì02§ SRÕÉU8á2Â¨cÖ\"¼Ìá=vÓ¤í)&×­Ê”„)ìC‰=ceí«H:ã0Ì6Q©˜‚1Hãb6ÆMÐì­pƒÌ7¥c`ß]‰“rŠÛNL……Á\0…\0 Ã€ä7å{Ò:Ð%¡¨ bjþ Ãr.4'ˆ\nr6ÀOJu2Õõ½z\rØÍãwiÛ9Ïww½ÿ‚áø|¯‹ãÞ•±aœ…z#w¦™ˆb˜¤\0T\ræ˜ð3“\"äŠ+æw†ÅÊ„dÊC©DËä®\"žÌHQ	€ŽyÐ\0È‰ãªuŒ|¯0¨h’š²ugUaÎdQ…ì9ÐÆHB	é>TüŠŠ¥ja¹‘3•Z«ÌùŠgœ9†@Â¸Öhb%„ø”ãZÊßD!/gðÝ¿¨<„	²&§˜9Ôä˜ÛÃÆ)Æî)Ÿ]Ì;Oa¡>§õ Ô*‡Q*-F‡%”‰RŠY‘©– ò TN)R·eTGËìˆêÀÐ\"ƒj>VÁ”Ö£7Šqƒ‘9d…<Ü«3ðBÌU>.ÈÄ²NdN¨P	@…2Z¥ÌÂ³XjÈÞ!WNVÈ9z&eåF‚\0ŠŽ‘Š!‡øÒœNœá[2“¨SŒ‰œ~²ÊZLy’u&aDÆ¢žGÃ”(tdÎUx…Id0‹Îˆ2°Ý\nÉÊcf\"9RrMÞœ!'Å\0ƒn‹ÉÜ:Ñ|ê¡Eª/ørCÑô'uÐa\r\"T0®Gi’Êîƒcï<Jé«b„vÃ5ÈK\r¢×)æˆ¿Åf”JŠÑJ4’TÙim2‰˜P	áL*Ö B„¥(Á¼¥;“SÃÓ€¤00ƒrŽRJX \rðé-È\n¯NŽùr®ŒQôêƒ<:jÜ¢¬ÆD†œ¡\re 72GòAª]:W2£5A(\0F\n@Ð¼ò3Y	‰ÕÕŠ	lªëÆU\râ©0ŒÁ\"gÂñ1ò`kyŒ	á8P T¥ÊÒ@Š-ª^ŽJŽ-µ\"x©€û«FÒ’ÙúJ	áÂ}2ð@MÉé2a:SÕªknÄÖogÄù²öÚâŽ|î 3¬¸â wY•’H]RÀâUØ‰ëR,kÐ×aj0IÅß™ÔÄç30á¥¤U8oƒ›m,Xƒ¥b¬ÌP ›€¶o9–ÎU‹Ag-Â/ÁpØ¡0‹B7Ç\0„<+>Fn*Ù6×Î«ŠtƒY:\rpF©4†KºÅ¶‡ÀùAVÌÜÝ)+à‚í]ÂfMN¥üs†tËðîÁ–ž\"[e¼0#e}²i\r7Ù²6\0h“¾?À(-:€0Ä#ebÖbÍ:NÃEÈ·)À—F<\\B¦n%‡W4³|ÖdZÄP4A˜ê˜›&9,Ew\0ÀéBHÛo?Š4ÆLv¯¡\r¥è?OÑß\r|íHT!\$\0ã\r™»8oØ7¡pêñ\$–X”–ú SiÎ~“”üAyb~&]s™ÅÞ@õášAí1kYãzÉaéŽÐÖëµÌºjÈs1ÀëJNA¶D>2;/fìÍ°ŒîÑwîiLB:Ôl¢jlRtµ\$!¬«æÖÖÐ…îBGñ¶vRfz¯ÇxÝäÄÞÜ#8eya=“¶÷Ö.{å')mÀA‹û63­²¿S‹[µ”xT­r”CH_©\n^¨ø™°{–‹FÒÈ.D\$T\\A&½|0ÆRMBÑ‚Í\rÆŠÚÀœ³,­\\‹9«ž»ŽS“(y¸Ù·˜À‚·¹ˆÁÜQKmÄ‰«Á€)bóëÎ­xúË_+wxŽkÐôƒ:¹<É^w·;KÚº‡'·b2\rÜqàeì\\'·´žðá\\ç¹‰Ø®Nú’ŽáÍŒ¡œ¨ÖÂû\n Ì0:0ã×o­ÅªF¹,yƒÈÏ_ƒ·RÄÃù–F«2öÉÙMâ’Î÷yòs<¡Q|¾F@L¸ ¦Ü[{®”Î`'ÌïõÔÓ|;Á¯¦©HøöKÓð;ýÒÿïý…ë–ò¼î1³§¾ñúÙ«3î7àõ-àÝü½«ì-ûÎ¿©6k=aKE!R÷úöÆ/ÛBón<Ž:ì­ /í¤Ü‚d/èÑoîï\rðá\r˜ÿÍ‚3mÃ\0MÆŽÆn2#Ì6‚vïïˆù°*\r°.%P20ðï/^²ÌÉ9PJð¼à¢\\c¤hº0\0æF# Ûb:#ã`âÞ9¢BM èA)‚ #Zx¨ LCžÏªÉì/Nz @ö ðBb²ãkª€@O§„ª\"¶4†!°V<â°’\$ ²ð,Ì°Î\rŒ¸u8Éd”ÌÄöËh4,ÔÍƒZ@ÊZ¾ïO²ìl‘ð[«ÏÑ\0øP\\rNJZoÎpí(­	ìjø¢g`Ï±ãàq6)°ZúOÑíNöÑ±A±¿ÏJ>6@”±b¹‡ð‡Eüán„\n5mï‘&pþÑ‚üÏÚûQˆþ©Šú+ä¼æ.JkŠÊ¥°\nëŽ&,c§£ÀÞÈŽÅî\nV@¤2 Æ\rfBò0ÆÀ)lÓâ8PJü˜üD³Foqž3àËQé±á1â\\q÷Rq\"¾oiÑgÑî+èM	œúr'Ñµ!²Í¢ŠÎq,¼ÈLÎEÉ OÝ\$2;\$q_\$ÌÞ:²3\$C«„lPQ¹Ñ()­&KÃ«‘/ÄºAòvúñ\$²s(ù\"Â*L\"‘Ñ> cÖ\nàÒ@¥’Š¥ÔÁQ¯	Ê`W\rP,\r+Â–î²éº˜g\\eçâ™Ê`¶ÄÎ Îx;Gâ&þ4ÂwM¦B\0†Y\0Ø`–s‘Öb\$f0£°êqÎ¬±Þ*‡*BPšV@ª\n€Œ p4ª¶BÐ’0mœê£9®,ãMõ+ðAïð#³6oñ	 î¡\n:¯\$íZä\"TÖÃÌ¬5,@ôP0Î¤™NjAÎ&¬Kt#¬þJƒr67'ê¤gŠõ\"[É”-Ä|Eì“(èÿâ:°ãÖ	‚4IDˆ\\àÚ:ÐŒ”pkÂì:ŠbàN PYÂibH(LîÐ~m\"x ðâ:î\":\r`Þ-=ðé>óÈørz)àP‡~Ý<&×4*´¸‚q?´0PkQàvâ˜#³ì=„:ño/kÐ(ÌL)l¢#`ñD\n°IPØ8GtoB¼½3”\nÃð£^.TQŒ< ÂtJÌ[Ã#*ÃSD’}„—<ãI=%’\rÓØ¯x`Hº@£,øë°«¤0eE£>LÒ«žjøÃÒjÇH:eRi‡JçBXÐB84’fBö  ";break;case"el":$f="ÎJ³•ìô=ÎZˆ &rÍœ¿g¡Yè{=;	EÃ30€æ\ng%!åè‚F¯’3–,åÌ™i”¬`Ìôd’L½•I¥s…«9e'…A×ó¨›='‡‹¤\nH|™xÎVÃeH56Ï@TÐ‘:ºhÎ§Ïg;B¥=\\EPTD\r‘d‡.g2©MF2AÙV2iì¢q+–‰Nd*S:™d™[h÷Ú²ÒG%ˆÖÊÊ..YJ¥#!˜Ðj6Ž2Ö>h\n¬QQ34dÎ%Y_Èìý\\RkÉ_®šU¬[\n•ÉOWÕx¤:ñXÈ +˜\\­g´©+¶[JæÞyžó\"ŠÝô‚Eb“w1uXK;rÒÊàh›ÔÞs3ŠD6%ü±œ®…ï`þY”J¶F((zlÜ¦&sÒÂ’/¡œ´•Ð2®‰/%ºA¶[ï7°œ[¤ÏJXë¦	ÃÄ‘®KÚº‘¸mëŠ•!iBdABpT20Œ:º%±#š†ºq\\¾5)ªÂ”¢*@I¡‰âªÀ\$Ð¤·‘¬6ï>Îr¸™Ï¼Žgfyª/.JŒ®?Š@PEˆ¢WK¤rC«…º¹)ï”¹/ª£ö§Jª\"½\0*®b×§¥ÒªÊ;\nšÖÁ0¬:Ø·1Š\"¬²ŒTHÂ“JD†±©fy%³)2ª°‘¢‹’Ó: I.²ÅPž[¥1to&KÒ»¼˜%o<Ó¤(e­¨|¶Þ½‹àä\$Ú=*ñœQÓÖ…h§¹6K>ª{˜‚ ïÅ¤š¬oiœÙÔv²@M:õÖÚD\\“;ï5d³®zZ„jRÇ7³1œN+éÄé\r¤×íþ«ÌÁàÂ\rÊ3¡Ð:ƒ€æáxï…ÃÈ6#pÊ9Ãxä3…ã(Ý–¦\\9#~^ Ã•Œ£¦*/ŒC`Â7\ra|\$£€Ø2¹pèã|0Aš:\rxÉœá\0ê9Œ¡\0¦(‰ƒNdß²K‘v³Ï\"\\‘±Öíð•LêãêŸ¾»\\{nW:ø¾RQ9FÍKâŸ@[Ò-¿¢¯œ+Á¡pä¿ÁÖÉ:³DÉêçÍF|²éºØÄ<æ@OBty’?iª°n×S–«çiZ“‚kµ®MNÈ¿ëÕJ¶!•\\7Èî¼;z¬íI§ª)Ç\$ƒàî’´Ë}fÇJ#¥\rí¥,—²¦¼Ûœ\n[>õ/ˆÉ'jª F©k£†¹_2‡Ð³u\"¹©ZªV3Bæ”ˆ(3x}žbD\"'(º•Âv[ ÎM(Š'#p^T©Ôp¯ ”ŠÅ~{Ù\0\$¹ê£öÆ	\\¥ÉåÁd…R‚x†»8ýØ@Î^D…FÃW€œƒ… ¥­‡ÜâÖ\n×>Ïñîø†…â3Úv…º\"—8v%( |OÔ²¢X·Ë¡Ï=^4­ÒÔI‹¤T‰DÒöBŠÉºMpDY/5ìO[‰ey«é~EBôH9ömgÕë†Àè‰\0’:¤-(®_ùÿ\"È†\0äNë»>dJÇxfp\nÉ;CoV%@”” å9‹H,ópWœRˆZ=é(ÂØÃ@±·ŸSJÁÔCnÑšyÕ^«Ç5€¸½9BJU£¯,²™h“¢S*t­:ÎŠË#'-´¶*’vK¡-/â˜@òÌBp+&1	™\r®eqXaRÊ†¥Z)6\n‡ÂS\nA;-CöCê{wîxšÅ°I§q“A‚¬Y,Há‰2OjÁ <‰²QÑqJ\n¡¡†°æ3*kÌÐ7p@Y%dòð1³fh8 aÌA‰1@D`š0dfÁ„:2PÎÔ‘…è‚‹7ª\\ÊŒÒE2ñö%w*—õL—€Ñº#=É\0ˆ™'Ù’bÈ»ü\0€¤™vÅÝCDó§lE‰±V.ÆXÛcáÝÓLÊS,eÌÁ™æhÍ{8gLñŸ&€Ðš#F„I)§cê\\•!û©\rMßÇ¤,}[‹T¤åIžâ÷		*…E^‹ÉþÁÅüY+‡p¬›M\$#’1ç©Ycížl9rF¾nºÒ¸\\Ž’¢³\\ó\\t¼I)³6²¸“JF°Ì™ùQK¬ºõl‹úPD*â	œ \0¶+ênj¨I#vTMã\n (\0P`Ko<!Ê#•|JËIÜ/,[¶‚\n–I[kšˆ˜‘\"VÓ;ãé€ÄÂŠS\$w¡wr)ð¨— ‘héZ+“)û(ØðQe}ñÁ¸,øA“A‰7eÑ6”EŠpìÌÇh ›GtAAÉCk£R=âh€LBÏ ñ)BüŽû©}~¦e†Ñ³K=|Ž?˜EÐµÚÉAŽÂ‰Ä½YáçN@'…0©„á'ƒM¹%âÅbž%&\$™½ŸÙ†úrÒV†B'Ÿ£ìirém_Ï\n0!ÅH!ó\"‰æ—ù¬OBˆµ™à¢d†C ôƒQæX”8O‡\n ‰*_Z®Žt¶PGP`³Ì,œ \no[p.­\\oóù‰T¶{K ì°\\•ð¬TÔ64*ŠÍ®à‘0Êœ“Å^'RhÎYË;i\$/´v˜‘Ú£:¥¬2©ÆrH;¡üíñœ¹½§‘Îº]?äˆ{jªjK-\"éZŽSÔeHî-(µ,P²\r4¨p®Þ»w¿`†ŽféÂ0‰¹Zóª'…FÓq\$Å0ß’|dÒ™B¶\"QŽYúNÏ—·b¹…öë˜ë¨ÂW¢YVˆx^¶ˆ8ÚÊ‹m£|Å*D§sËÈußè›k,ñ•|¬N2s¹ð‡8ñâ~ëÊ¯»™`sŽ„¦AQ4­ÅÈƒ«Eª.ªDý‰%É‚×|ï©‚µ5€p—+\rZ‹u{IÊ\"(4”ÂoÙµš†ìÉnRŠÒÎ8vŒp…¯ÃÏ’¸p~ò¶\$Á¼ÝÎ¹òAË§Ú’‰ñW1ø÷«o‹•ÀšÁñ7ˆJñP®o^ž˜½IEØ{Î2Ë8(qÃ;©è&b8’fEi(5\r(ðÞChïý…æîÜ.HFb‹’üÎ ØÈ‘{twádÑbŸ|ˆ³¯}xf&&_‰ßE-!kñT“u“‘†¤“ˆª?ÕòÀ\" -¯<ÍÖ‚7OvÝ/0>§êöìZnM:è¨Ö‰‚¤»åÐÐJ@‚\n€¨ †	\0@ êdàÒªNgfÂ\rÀÞ‚< àTf@È0¥¨K-Bß	,„TW/°|§Nà@#&¶»C´2gM+â¶hQÃ‰IF¡ë®<‡ªÀM†7‚Læa4	°-­&¾¦˜ðŒGB(žé›	PrKðv.e\n€ZÄ1\n¡\nìB;LG°ç†©ã³	\nâJƒÀRk²RËl4Â„„«o	êž‰Ø E*ÐÊØjtñ\$pÖ¼ðÚÐ¬™¦s\"‹Ðšü‚sÓâ¡\ríÐÞØ°ÿirTÄÐÎâ*€\\^	â*bÚøˆBï‚ÌÃOÆÉ£*-èÁ•¤r…ëvêNéF-\"úÉ\r/\$YmFÎL^F+Âû¬fnE¾u¤c(iÖîlŽq°×À@àÊH)’ÃdÒ›HØJwìº5®¼@kˆƒ#,T,›ì‚'.s\"ÀsÂè'P}Iku\$ˆ@-å PjŠ(\",>¸å~Ž¶BÌdŒb‰¬8Kxê\"òVÂ¾K¨@UÉ sd¯ Fö¿äy2çb©RO%¤Xsé yÅad-&k&O0s’j>é‘\"ò?Ž-,\n\$>ÅE…%’€ç)F7Že)k)Ì¨p~²ä/)1*§&Æd^mîŒˆ+²§&-ì\\ª,(æ[%f-ÉDzN@IT¬hZ¸)Äz\röZB˜VoÛãêˆ(r”M”Úbžô„—-mâÜs0/˜ÚfëQL¿Â÷NF+rµ0CìA²¼çˆzSçf¿E…çX\\)H¾ÂÊáBÔ3nE²Ü®kÄ­%Îu+å\\ŽÓfYQ-é-2{\$ÈtÈy,\"éÑ'’|æ­øùÒ¹3ÓoDÐ*q%ópÚs¦ˆ…Ì1ÒËD}'s²QÂ©;’Û3ST“;\"Q`J–†£üI0Ð½â{pº°°Áð´\$n»8ïp‡MÈ!G>hä’u\n1H!ö£Óú'³ÿ&w@0…S¤ú±Ûë‚,Œ®ûƒñÃ&’¥9Gã\r‚úñ;C¤nØåíDS›+s;<R©Dô4ØT9!o¶‚C8Å½,ÄW:M2¬~Bñ‚ê+/Ž>ånCì OO”)©¸¶„I¤FH¤7¢LÌ(–Ê“D!ê¨–F¶«tÖ1ï±î¯r}TÉtŠÞ‹”5‚ÝCÄp¶ðýØÇ²=GVÏlÐ,Ø¬-´r,t[DZ‚Sé-ïäù#ZùhÚFÖÈC¢üÂòýÞ”ˆ‘>4ÄnìÊË³Ð÷¤*³i-T\nâço4™6”I;kTõ;U1^Ó¿9…;\"EV©öé#ßV/d}2ü*È·¨GUY*5]TÐ•Xb ñeF39T“?YU…5ŠþS½8õw=u^v36·Óá•˜@PýÈÕGóÀ9M\\uœˆå¤¬Bþ+‹’{^pÞ›ñ”ëeÐL{UI|„£U‹þ¸È*?2M>B«A5:óoUóã@öÏu õ¹TÖ,ÐOÕ³]mT³‚†•¾÷Î*áŽˆõ¶EÐ’‡Ó9\\4F]Ñž9WRÎ»å'µdò9gM%–\\8öPZK­3Ð7¡áÌLã·Kó\"Ü¬”N2*@.s­6Ó£8VžšIjUÕV•µ,õoaÉ­RiGkb%jkOT3Fu§cõ½=(odvÇjÌ-ÖƒgH—9¿k6Ë,ÖÐ‰–&v™[«U¶T×ig)ñ:èõ·l5•eUÀ÷ô¼p\$\\öóg—*>w/	M:JS«pµ‘pöÜ*×>CSÏrSÕrJ,—N!wCfTƒcÈ{d6ãÔZ±w]ÖñqÖg>µâý’!2!WPsUÈò±,\$Ð*Ç(-DwGj÷–\\äÈZÓ3uUGb¶?)w¨]+Ïp—d:7h]eÚÐõ£{BA\0l\"ŽLÈÆBdN¿`¦=CöF~%c\"íŸ,ö€%Q0)—ó×÷´+ÉÃ€ZZ%0ôèväÌtâ¨©µT='\nÒ5yV†(°·BpÛ¥(°>ñ1ƒô#7ô(&ØI%;p÷QBå\nDöi\r€V`Ø\r Æ\riâO‹JP3W]dûbO°2ÕFK0?#ÉC1ÚÔ”¥LT©-ŠDqPÊÝ|×'n@ª\n€Œ p)@Ih2i Œ'i™‚Ž;oå(‡Ó(èp'c\n^«R1‹ú%ÄCÆöý.zÔ™-Ç*ù´e\\.ç<­6L¤tZI#Ñ€%³®*¶V‘˜œiqv8,ÿ’8DÂâ.mc‰wÏ‘!-‡‰H…ùBÌCQD3!\\\$L¡µïî—âM²HÇ®ëPðœ/þøk˜#Pvô¤×+À\"¯õqw)TœŽ2®œKk\"…Þ50ë nešõF…7’‚ÃKŽÙ¬T9°rÒø‰z8Zç¹ÖÅ‡èÆimav­žyÃ™Çç>å\"w³rÕQR›Ÿ\$<G2ëSÕU2‘p%gÐ?—`PØ…õH§ø•ùþZ-üNB.mý5ŠÖX(ð^è÷\$¨¤ä÷ÞTÅë˜:º±ÖÑkx[!Ge\"âÓ#7ayA%ZöD†wè«4TÊÄËŸR„zƒÏ—D—ŒÉÉú+'¤ê®ÚK/ÿó—çªuâLéz´ëÒ«³ï™ã%0RVéoÅ˜‚GÅ„É§ƒš~^_•UbCÂÓ«²4ne\$NÚÞcJ!r";break;case"es":$f="Â_‘NgF„@s2™Î§#xü%ÌÐpQ8Þ 2œÄyÌÒb6D“lpät0œ£Á¤Æh4âàQY(6˜Xk¹¶\nx’EÌ’)tÂe	Nd)¤\nˆr—Ìbæè¹–2Í\0¡€Äd3\rFÃqÀän4›¡U@Q¼äi3ÚL&È­V®t2›„‰„ç4&›Ì†“1¤Ç)Lç(N\"-»ÞDËŒMçQ Âv‘U#vó±¦BgŒÞâçSÃx½Ì#WÉÐŽu”ëŽ@­¾æR <ˆfóqÒÓ¸•prƒqß¼än£3t\"O¿B7›À(§Ÿ´™æ¦É%ËvIÁ›ç ¢©ÏP·Ùûp°@u„}ÍÆ@6/Ì‚ðê.#R¥)¯ÊŠ©8â¬4«	 †0¨oØ*\r(â4¡°«Cœ\$É[î9¹**a—ChÊËB0Ê—¿ŽÐ· P„óDÂ“”Þ¯PÊ:F[‰‚P9Lèø¿Ãü‘?Ít—\$\nq[Jç7olJçˆn\$'§q¨…'¿²ƒ^ŽB`Þ¸Îƒ|•8n(å01¨xþ\r`Ì„C@è:˜t…ã½BƒjÓ…ËpÎ¯4€ñ£Î ^/iKP:O‚úú7\ra|\$¤©Tâ‡xÂ\nPA‘˜ÈÕDi¦(È«Âh+B\rÃÈ=7óŒ4¹ÒJ;/¹,°ê1Žˆ\\jÀ°l+•4¨žÁ0Œ3~ÚF¢pê2¨ñÓ+ 9á-f1+ÀsBñ\$K£`ê6ÂÐÂ8Kµ:P·¹âHÜ1±—Ò.0Ž²Z|P¸Î\"¯˜ê6\0ì¹Ûö3,ÄÃ­ÿÈËÅ±°ýðâ0cÒa–skœæ¤HDj'ŽP«¡ŽcòÁ»ƒ,Òò»³RÔ4Ùµ›ü¼Rnx‚1äÙDÛŒ‰¸Âe¬<Û|Œ.j/[‰€PÛcÎmÜ™XÖ´•LoÌ£3É…³i©¾õˆlc~ŒíÃ+Ön©ÌËvÌ›<¦\n\r#L„À²EH“_i¨ñÄ1ˆËméð\0'lÓ6ÿ¼mñ«)#E˜ƒvÍ3‰JD7ŒÃ3ÉŽÂQ^ºƒ£9>SéîªàãQ&ŒŽc6ÿÍkHæûHÂ3Œ+K©VÖtPÝ‚Œ¡@æ¦‚ Þ5²B¦)Î ì‚¼Žp\\\nÖøÙ‰¥¨ÀÜÒ·ãb:þí*X3-Ãn”À©¤ªiO’å_Âäâ©(	-è™å@FŸ*?„Èò‘YöN\$x¡’¤îgSÒ|)J‰•šóÂªU[öu¯äÃ†E–ÿO²!>dÉd°>!Â@½¼µÀLÒI~/¨8àæËr³*ÁÀ4˜ÀÈ÷àºya©ñ?(¡0wQ=E‡%”z‘*ÊQŽ)u3úSê…QªVìw!¬UÊÁY+Brõ	¬œ±ÓŠM`b2De}™Öžišý#H\0…*ÇLÁ3Ç-——ðëÂqácGðÿHD#˜á©\n (pÞã\rq(”‚AŒs#…¡¨D´ý¸yä\\1Ã4 Q¸s\"å¤á‡#³	MØÁšãþÿš©Æ5Ï\$Ÿ’I(HŒ9%}qÌ9(©”G^ùð%P¬ø°EôH@\n	\$L<™³ú±Tb\$ æ› dÃ+u gÈ†Øé*V&JZ‘ÒD¬g|=5Ð(ð¦a(L¤ä!B.bÚ©C{èê£ˆ‰Á:'€¯6s1ç<¿8Ïÿ'\nB“›Ie*´Ì:„ÕO¸p}HQò†\"àÃú\$,H4ŸÀŒ\$í\$sH“Çèz`r4Y|Kb5#C‘ûI\r\0R¤ÚBd\raP*Õ€’‚R15d!ð¤«	u\r¡ˆÆ7º¨¼Ð±­u´ÿRAUM'¸´Ãƒ&@É ÅC`jY-—Ð½cX–žCQÏ&Ç”ý›¶Ë-èKë—…º‘Ll“ÐÛ–}a”ò<©‰Hc†þË·´¤šu¬o¶‰\$\$U¬ÞÃfÒé\$gèäXñ%+\"¹^ŠP:¥•/½±Shi@æºÉÊY^ÈS9Çõû”R€R:Æ1š¸ÐßU]rm\nŽD¿àÒ™Òù0ïZD^^!ã²†!Ì7cøZ^Ø¡{°à&šôWOUùÊ§”;€¥xµ½ìCFœÓÇ›RÒ7é[ºþ[ÍBma„´œü2ØØý†NÚKÕj„=NiaXSJ¥N2¡Æì\"†êªH¦¤ug'x¹¬DjŸŠgpèåS¸š) 8© \"6…ðÜ‰T¯_†\$*@‚Â@ n¥¼Ôº)ÒçY¬q(¦ËéºK(jEì`œDHÄªìåmv9³,×Z³ÏË‘xgfB³Žs¸a„ûg×	ŸÉhf¾ô8\0”ºut:ÎA:í ´~„Ò:M“CjPÑ§z'NGÒÐZ‘Az8qÕïõg;&?”çVi×ýg4œßÒ«³\\tFµæ›×Äj^ÙÝ„MvS‰H³XÉ†ðîáª\$}kë÷l†¬ÞöÝ¡fxH\rÉþ:É\\·’ QŠ-JËø‡pÊ®¸EÚ&ü îò¤à	KsÖEûx‘ŒÜnÌ%Ré\0MþC/ \n		”öoµÖ<9klÁ&…Äç\n­¥.Z×é¶Ø¡,8ä«‘W;äWpáÅë/¤®ýšç£{zØÃ\\Ûó6v¬õr­–a\0)’úÖ³Fí·Ïªò3”ã§#MØ“˜kW7oTa2e\$t*é	O[iX8¹–æ=…0îeYŠú÷Ðã0½¸.d·Æó×ø\nS?h ¦µt;>ålÍOäGïžZÖüúÌaT®oôšxkhp›—…¶~œòMC›yAÞJy5ä.Ô8¿­ë“¶¿:8mæÓàŒo½<ò'‚ã!šŽ`=í-¡½f½ÑzØò4t—µ›4Ï’* ~ù¥¦ç|sùéyÝžùŸüŽåÂb­ëÑ\0ŸâÜ\\‘Áf‡Ñ8ô^Ž³îUèA­—´2Ï·æøÅÞ\"Ÿ¨\0+{KæHŠK}º¤ýOÆÄ£€DMödôEmŒ§«¶þC HÏê'\nl€ ÜBOšRdV^®pJ(øÄ¦ÂôÃvÆÇˆNêûŒHÏžçE´çŒÑ9PLô.¶%©ÂjÊD–ù.¤)°l'°På0tÉð`Ö¬NmŒ¢Éì®qâU¬¦œBÐ°DZ-%ð£%f¦D~7èê@dVÉ`Þ˜ŒœÊppðˆpp0ºÉ¥¡0ÆÉƒðÀúð…£~wF6ìp†7ës°Ú;p—CäcJ­ðñ\r¾Id.ýæöbn™'Ä%êÓónj³Ä«6Ï#Œç/*ôÎyîq/QCÍâ9/:î‚ÀäŸOßÜ^ì`•NKTÖ±jÇQq\r0|alcãã\\òÂUq…æA AfÝ¤0nÅï	QËD(qÐxòÍkQZ&€/ÀÐ¼&\n.FF_îž<âJÉ£v]ò·mâXomÌ˜·„ËO†ùƒˆ1Ø2D–%èaµ¨„TÐ€ø\rH&m%hÎÊo~ø.`3\0†H\0Øij0É<èdECâÇB0ã`ä}BhÇUãðb(ôxàª\n€Œ p|Ã†0bÔ&öIvÛ±æÔl#BH”†Ôä@#­TÞKR°K*¤¹ Ì+Â´¼ëŽ‘ÃØ8ÃÈfÄD/,~olšÛò<nGøN\0Â­g\n ‚\nM„jE (*ö¦†¶®ƒ^H€ÞBƒÂKÈÓ+·\n¢CÏ²6kØ#H íèbRž´ëêç#JEcˆ˜òø/®ß/«¸ˆ“æI,´‘'1¦¡/Ï¨C\$“ãŒQKàˆîz’Ã‚Z¤ŽFÃðm‹^©âô[†Òé#vgÊú¦„¶ŠöïSdonäÂï0‡«?â>1’›'nÈÓ…æ¯àá3®Ûã÷+æF\$¢IÃvGLt7n0§®\rë£„¾o5+d»2w¥¿ëÄ#\\&¢ô´Žr`C¨dªâ@@š	 t\n`¦";break;case"et":$f="K0œÄóa”È 5šMÆC)°~\n‹†faÌF0šM†‘\ry9›&!¤Û\n2ˆIIÙ†µ“cf±p(ša5œæ3#t¤ÍœÎ§S‘Ö%9¦±ˆÔpË‚šN‡S\$ÔX\nFC1 Ôl7AGHñ Ò\n7œ&xTŒØ\n*LPÚ|ž ¨Ôê³jÂ\n)šNfS™Òÿ9àÍf\\U}:¤“RÉ¼ê 4NÒ“q¾Uj;FŒ¦| €éž:œ/ÇIIÒÍÃ ³RœË7…Ãí°˜a¨Ã½a©˜±¶†t“áp­Æ÷Aßš¸'#<ž{ËÐ›Œà¢]§†îa½È	×ÀP™MÐ.òÊt¼FL°¾öìAH¥Ð7§SüÊœ°M`ÊµI¨¨ÿ°£HÈò(L3|²ˆðÅBpê6ŒKR‚ƒ;ŠààŒ£³œ„!©ÂÑBÚ0Ž@P¬—ŽCX@'£ î´aH#Œ£xÚñ‹Rþ&@0 ‚…Çïê“\rã{OŠp7 hÂß\rÉ2ÎôRjß#Œ’JF‹	ƒzØŠ°L%8-ã¬ƒÇèjøÐ9£0z\r è8aÐ^Žô(\\’:Ð\\´Œá{çG\r`Ü\rãp^4ÑcH:ObûdÆ\ra|\$£‚Ã xŒ!óîGípÞƒ´áŒ”ŠbŒˆÖ&¢²FÞ1“\në\n¸*“~Â¨£Z¦¢,âjúß²I Êø°’\"ŠñÕœª7íŠŽY­”¡­@Tˆ9·èHä5¨‚þª@HKw£#¢Î+<N¢à#Ãƒ¹U4X/4}_°ccà¡(œB“ÈÂ:áA\$6·kºÉ\"ïU•JR°¤ˆ©Q Pž:'@S\$4ZiRXÀ-0ÊÅ³)î.:B€Ò4ŽKüœÞÉPÒ5j2àÑÄ:0Š\r”Ëd”ŽcÀWAh é¡NØÝb·Î&Á­HµÐ66íâ~¦Ëý¶¿Å%¯–â+ ÜV]Ë2³×\rÆ¢`’@Ë%'H¨Öñ\r Q†J­u¼R%c’J©ÏÇï²§<{vÿ1°¦÷è¸æ²¬¼X”ã0Ì§©¬Ë3¥Å Øß.kŠÆ5µ&:Œc9ŒØ¢ñ3!C˜XÓ]ÈÂ3£/ZûÎSÌ2…˜RÚ\rð˜Ú0ªa\0†)ŠB7Ž8=/ZW°Í&,´¼³v4×®f™x”J:ZÉë\n£@Ùªr1iVÄèí\0‚˜I@rxáJ“¢u3	á=\"¨ƒ\"•{eUªÓhïÃJM=jU¶š3ÔUåxe±õ7ÞšHe&¤ÜÂ 2T@Cš7qÀ€2‡€àÏ0.‚)Ú\n'´úŸÔ\nƒP¡ÝCÀ‚z”YÔQÊZ©%(¥”Á†:‹MN©ðÜ¨U¥TçÍU*Å\\R*Ó\r\nÌÓç¶àÁR%H\rí“ÕSÌL!d\$8S4I§9çñîBjJO/GÄ4Ÿ0ÈwŒR@f	—R:/é£#†iÈR@P‘’8ú˜TfR»?¡¬´§†>cœÑ{&èí“ÂZüñm¡Éâ\na‹ÔB=`õ°ÄðBÞY)?\0(\$‘@òe% æu…ÈãLkÁx,fSdºû`:‰‚¸ù‚\0ÆyƒšòQòBjxS\n€µÍÇnŸHë#a¤™0µÉ0¡S±e“!õ9¤Å‰zà\\’:dªòT€-0kH:I ÔY©\0ß¡0ÎÈL€‰‹OÀ@‚¤¢X1ÅR³â|&ò>\"²J(\"â^Œ	pµ98@ðZÏ[ƒ(è²\nFX·‹xO	À€*…\0ˆB EdÕ,\"P˜jŠ._&],’vr‹\nqH\$r®¥¶†ÑH²¾&eQs#¢tÎ©(­®\$÷óJÙ{#ç˜ß“\"E^+¯l6âàz“…m­ùÀTÀÛàtù‡’<Å±ZÐwäò½&DqÍ8ÌíŠ³®p(%ÖQ%Õ]?ìñfœpë.\\ê¿hÑ¡)²\0Ü•{Ç1iZEÊ	DRl\r–à¤ÒJgAl/W‹V32ÝF“¥Ì·—¨…z]¡\r§\$H(c5ˆ,î¿³ÀÞÉ1{¡ÍÁØ0ÃÞä“³whƒšÊÑr¿gÅÈñ„“€[k7ä(†•†Ca3 7>ÊÄúÜl2çZÜZËÂ^½™ÉÁ8(%¢pQXÃ9¤Hë	¬4)0â3\nH\$„pŽB’:jâð:À×Mj±]ö+ösiŒYˆ,)‘äâ‘˜E\nÁ'@¦Ž¬zr¶„ö%giT Aa M¹&i]8 š„TÔ¸ÛÇ;ÚÁÚræ”#Bóp àƒ8–«ÕÅ!j€¤½ü›²ŒñÃi/ÇSOM”n!{	xm]â¨	ªóÄÙå¬Ù5Å?HBÅ43C/(ùškÙð Ú^Ëi¥0Næ¦<	“ŸºÈ±L#r\\\"bJÉu’\n%2øÂkd´Ol•í\$Z¡(ËÉ&rµ•3ØÍ†æj‘HtÙ¿lå¼(Gâô´#ô<€–Á66´ÍõÚÛ#æ1^ÙÈu3&ã.šBPíæ¬\$¡ûç×öÉ­Î¡Û>?¢§¾ã<]‘¢j;*|†¨ºÄ6Épm1eëç\n¿šÎXðÛ)¦1TZr¸q>-©8EÁãœ/YÖPhÒ]ÀIÅ¦ü´4´à]‰Óßèq./fQ’Í_\\ÚÛ!NjT¹îbKXã™8©™ÉÔöâ¼‹±X]25EþÀ®/Ú´€èø(‡í£# Ðò‹€ãü„î#Ç;\ncìz`!ˆmj´á{í\$µ±YÐ¬ûEŒLkÏ7b9ÓËöüùþ9Õ’Ý»©ðâÄÚwÕÉâ^x/aOÇO!ÆHf¨Ñ{?hãô|}E×M‡0­ »9ÎÚ!è?kN0¹éœƒ²ï-P‹ý~§4îÅ¬\"ìû'˜ãeïÜ{+ì_¥ä>I×2Q:O¦m•HçË²\0†²Mí¢6÷WGÝž«ð^C÷ôƒ§Ô:œi¦ÇÒå oqÅÄìöEàDÐ )¡AZŠþã\$û\"tûbÔ{o\\øÌ00\$úªÝªÚ],_#¶WÅ¤Fe¬[\0Ròâúøk5eªZå²ò³+ó+ï€Óî‘âöÊg.Z)u°,0ŒL'/ë,ìÏAxÈéÔéo’é£àðDÈ°w‚Ï—HfYâ+c¦üdK@ràç	Ç.”É€¨Ê0Ý€˜%èú<\0’Î¾°ÂÞf8„Xð¬´L0<´ì„‚ö«0ÕJóíFYzGïïhøPðÈ÷‘\0ìRãŒ€<æèDµ¦ä	bÏ‚x(¿Å*³ãPrñ%Pæã§˜Þîªü¤Ö\$ƒ°BÕ\0•!\"÷¦Ù±P˜—\$†vÑp_d\"ü°AD\nÈ^äIe	‘J‡ñ84Ñ†Ã!HÃeìFQUðÄì8tÆýí,ì„Õœ D?ìQ1ŠùÚÒq hq°XP¥±ÁÑÈVÅ¬^Æ&E‰„¯ƒ}ïlã„«Šû00ãO4=¤¯1\nÜÕ\0ÃbÌ‘`P	e€ÈÆQ&\\†úm+°ŒïƒòÜî)O\"à\\*Ô*O­ëN,<^p/²G@–îàÜ_î¸Ñ&rÚÆÔõH]EØAM~1Äçen8£Ž9/îd‚\r€V\rbf\\J!¢–¤ž>æŽ#Ö\n ¨ÀZx\rÈ\$£´&§-\"Jh-\$ÎËÞã«®bË6~Ç6ß¬ü\"ÀšV`ÒÀò’)ÒC0/ä_(®g)Í)Gþ·jù0ƒ0Ll~Ì¦X\ri|;oôŽ¥ÚL©\0¸ðš'¹\"Hk+¢‘ªÖV†(°n%0Ts7O•‰0]Ž ã’R‘j ðêŸmC.'6Ò²ÀÞ©&öë76“w5ÏR@Âä\$03BR.iË7åì\$ëé9K® ñúZ+ÆdÎn!Ík @)˜ŒKŒ‡¸¶ÆúXIìëjÐèî¦#“ØhÅ|?©²(j¼\nM¿ Ç>ÆL¦_\"ÎHâdü†R	e*H\"#ntX&|,³`Â&w7#L)ð XG´\"¯…ÿ8ËI\0z ÊËÒÄ0Œ 7Ãc„Ž‘r¨ç-à	\0t	 š@¦\n`";break;case"fa":$f="ÙB¶ðÂ™²†6Pí…›aTÛF6í„ø(J.™„0SeØSÄ›aQ\n’ª\$6ÔMa+XÄ!(A²„„¡¢Ètí^.§2•[\"S¶•-…\\ŽJ§ƒÒ)Cfh§›!(iª2o	D6›\n¾sRXÄ¨\0Sm`Û˜¬›k6ÚÑ¶µm­›kvÚá¶¹6Ò	¼C!ZáQ˜dJÉŠ°X¬‘+<NCiWÇQ»Mb\"´ÀÄí*Ì5o#™dìv\\¬Â%ZAôüö#—°g+­…¥>m±c‘ùƒ[—ŸPõvræsö\r¦ZUÍÄs³½/ÒêH´r–Âæ%†)˜NÆ“qŸGXU°+)6\r‡ž*«’>n?a ¥&IYd„—ÈcC1È[fâÁê„U6©	Pœ¶H*|¡jÚ®¬¡\$+TÉ¬ÉZU9KIh‡*°sƒ²i	r)MrTX¿3,×¡É‚vW<*¢	41\"Èˆ0ÍâL¥?Ä:¢‰–oñÄèR@ÒÊ‘a\nÒ¤lœp¨ª,h¥²ïªbÅÉ„#®é¼©4¼ŽÁ,òZÂM‘ÛúC³RêË<–1\"K ÒØx0„@ä2ŒÁèD4ƒ à9‡Ax^;ÒpÂ2\r¯`Ê9Ãxä3…ã(ÝP¥D9#}F ÃOŒ£¥/ŒC`Â7\ra|\$£€Ø2µèã}è4\rã%Z7„¨æ2„˜¢&\r53•	G¬-?¥sº:C6NâJ†¤,(Ë½îZ­Hnã4Ý3ÍâJÆ¿®À”IÛõ18%z|‹YÏ­êU!.\n•`òãôá¾ñ‚ÂÀE‹\nôˆ•±zhú^­ëF·c®Çi!²_\\ÊâÒ[Eðœ*“08zV•b¢Æ€âŒlNÉêXÆ¬iNŽ +L)Æ¬Âqªl|¦Å Š=òó¢%SßQXû¼®¾ž•êÑ4˜„d:õîá&íó/Z¶»†*zK®:.ÓüìÂLãºÓ­Ã»Þ—2ytÇ·cw¡2œku¤rç	ÆdÛÙ9ªóøç°ˆ\nÛª{ó2¬Û“û®\$9ÛÎ¬L:wÄD·Æ8+¼¢P©\\\\UÔ˜e¶îfC ØØ6I)D«?ìòÀ»‚ìˆ§ìNÕO’4ÔÁ“@£ÉOÀæÆ¤lŠ\nþI±Ùà\\›D’¿D\"VÞÆ‰ä2÷¤®¬þ³‡ì^Ó>mëß|,)?‘çÌúáNE¸¿ÈüŽH\naL)ežÕù ‡™£À§JCt,-Á>¦Â.I“c‚,½xÕI*Þ8¢°’¢·ÒZ€PT\r\nÜ5‡0@”òÑU´0¦ƒ,U*€È¦ÁƒPªD‚\"†®ƒ\"ª!Ðöuˆ±ŠÚEh´\$€¹\\?D-ðŸòUáK§MœTJl[ÃÍK¤î˜ƒ!ˆ8IIÜÚ\"xBž—±C\$¦v(¨E¢RŒQÊAI)@î¥¢8nSjuOªFU*§U*­VªðÎ¬Ušµ‡Šé““·/	1‹ëÑ;5Öðž:\\…@ UÐTà‹'INmƒt\n÷<c!Ç‘z¢sRM1P'	ÌÌC‰„”X”Lm£v|€Û!K:ÌdF6‚Ñkø\n (FTW1dÆ|2”‚†\naia5sj¼—Þ“ÖÚmƒ¦á ÁXõÍLÇ)ï”’–SI\"=GK„™•”þ#ˆ©)¸#9cr‘Rês9Ö;D<	\$h<†ðê iYÁ¸7‡B6¨–rË\r0ùC‡êC6ÁÈ7†Ø‹&b‚Ëƒ!Œ6õ¦«CE;À0Êzd˜vvi•tGônÜQ,E¬K´˜Ó¢öA¨l²FƒŒÈËBÈ¤®V¹2–ZI:}%<®1ÇáY±Ho\"y³\$%[ù^'X&VJW˜Œ@Ä”Ó¦w²‚¤íŽM\0‰±ÃQDD\0‘iyÔúXY1atÀ®ÁÒO’±ž†&ºÇ³IŸ0\n	á8P T¶êÞ@Š-Âi‰…s±V—6ÓÂL©…£„\0¾Âê•È@‡1©èÏ\":I+pýù¤J]œñŽæò˜IIã£’7ë´øˆ`œ›íf—B…#r¶ä”tzsÎ­&Ãà»ç¥z[eE\nC\$/t K•¿NazºÈË~¦O(ü“3Š¿Jõzhˆô]\$®dÅ±å_Í0†ŠâQ\"ÕrfPœª²‰æRHEuCDÖ&äØ.X‘öÆ%\r·Ë8*J4ù ¯#ÚR.{Õc”x?|/c/BóÑ<e;êãœY0ƒLân’8Â¹JôtHmQqæƒy“×Ëi+©=¥]iËÿÎuë:ÛˆTY£>1×Û<³?wŠ¡exö½æ[4Ëmn¬	„©^’è–æû,üÔ?\r@Veó¤FÀ÷ÚDM,üž‰óÊXÕ,ÈN,Þ¸!P „0)ò›\r5\0*õ©M)°s¡À8)åLQƒ4è=õ¤ÂÂ)¬û\0¼¶@ByeXK4Î7g[>mm’†Ð‡kmº\"…1)Ú­`å%+·Ó3ø%{†·Ï¤ü“ÍsÍ€›wh&}ÁI7øÞ\r¨œ&©2ö¼sÒ‘9’ó‘lNrá„¹O=ÒSŠäÑ8•Š€½ÛL›äQûDO-ñûQÀ³ÎxËîç>qy(§@»+¿Âk)9µÙzÈ#ûîR·[s^ghÝ¿œˆ²î KU’úÃXp6:RÿæMî–šºN§Ÿ¤}D€.ÇGóƒNé˜#€°Å¡z/NN¹¬¸z)Ø.ƒgÎ+ìë–d—ÑæàîE”“FW‘L+¯-Qö3Mà(âO&ÙÝêõÓëàsÿz†÷YãgÂ—·«ÏPÚ€fÖ&o±	Î¬9‚\0QuÉ¸)¹dûáÑª»/î6èàòí%°Øâä‘Ñ_÷cíð/ 8'óµ{ì1„½ÄtoµvY~íè&£ø¹ƒèAçWÛþq+ú¶§Í|Þž-JA%>ŽŒÀÚ{Ý‡F.µSËµ>+›eZÓŒ¢êR¾Ê¾Ò1ý’÷p–LsBVþnÀÑ‡†CF@¯¥\0aRÃ„K\0ÂÄ5/–í0†iŽúïˆì’kBT2Ã¨®ÀD¤ªbb™„²snœÉ„ZñÇ”ó°	«hI.Øþâ?­HÝ;MHÃkžîÒírà'ãP€ç,*ûŸ	o‰¦:ü¬ðNÏbúmPyŠ)Gì®e3	Ç\"ç0ºvZøg¤ì_t@ÏZ&\"èç0D˜¤@{Ãöp™n2üäL»¯ìPŽéïÌ¼ð´óqÿIîšÐÆpGÐ1­Bäè„nº)#Ëì,˜,K¯hsnš‚IçŽÈ&(1/ehõ…îË&cÐÄû¦=‘<íñuPªöc&£ÑúqjC'pž\\‘ŽÒ'ÔQ\\9D(Lé¨7.‰nŸ-%0˜y±‹4íÐ3šºÄ„>Ð¤%ÂM`¯œ]Ïdà1ÖLÑ¨Ï%íÈny±âFñµ.Ê¾èéGäXË¯Ìsf–%cÌÙb:}Át­©j>èÿ@Iïâ1î]\nÐè¡ã8(,|²†ØM/Ü¾…ß\"C~5í¬ë‹£\0C\0MÆÛ'„_Îº äQúå1»P®…¦HÌ@Æ€ä\r€V©€Ò`ÖLiäšÎý&NUæC`ª\n€Œ p™ƒx‚-Ê¶ëRß/é*ïàŽ£1\$Qü>Çt[îÌk2Ž™Ç˜èqè;§P%BÀLOí²c î&òm.ŠÔò²t®0þ?B®¬èTyƒ•ðé#jLìŠ2äæ³Íü%i!ÀÉ†q£Ä¬‹Î³sâ¦|MbÎ]gVì%õ¤Ì¶ØóŒ4‚o4ËÈ#Ðüø,éðfÊ#ŒIŒlíO;,óZAÑ5ShÊL¾~vs€ís…7ÊÛ\ní(gDz5d6G×7ŽèDNìMïPMY;o@Î.mI^6‹´s“ÿÌüºN€qQ*mâ8©`{Œ“žâCŠêÓæÈíMº]bQ!ëÙ67Ä,.õÇ,¬æ©ó^¼ÆÓ7R®î„hÊQÊ[}#æ6QRgæ;ã´";break;case"fi":$f="O6N†³x€ìa9L#ðP”\\33`¢¡¤Êd7œÎ†ó€ÊiƒÍ&Hé°Ã\$:GNaØÊl4›eðp(¦u:œ&è”²`t:DH´b4o‚Aùà”æBšÅbñ˜Üv?Kš…€¡€Äd3\rFÃqÀät<š\rL5 *Xk:œ§+dìÊnd“©°êj0ÍI§ZA¬Âa\r';e²ó K­jI©Nw}“G¤ø\r,Òk2h«©ØÓ@Æ©(vÃ¥²†a¾p1IõÜÝˆ*mMÛqzaÇM¸C^ÂmÅÊv†Èî;¾˜cšãž„å‡ƒòù¦èðP‘F±¸´ÀK¶u¶ßB“Õ®5å3±8[&0š¶ÇSYÏ’ÙªJ26¥§ŒàÊ…c›f&®n(ÒøÏ“Îôµ#&ž-ÈàÓBpê™P Ò½#›~,û!'mJtî/´‚B8Ê7¦C¢tÄ	ƒª:%ð”¶OÒ4—¬p –%É‚ðö½O\\.˜)²X0ÁMº(‹#l0Üå<’+`2 P–6Iàà<ŽcË\\53D:»‹»#£@ä2ŒÁèD4(€æáxïC…É;îApÞ9ázïI\0Üÿ)xD×Òü/ŒI0Ü5„Að’6Ž\ne/‡xÂ>±4r4\rã\"†‚Ž®¨@)Š,T€šŠÉcO]%@\n5Î»@ÝŒ SÑ#£rØ52K¦¶ÙéK^Ø±­r½Ë‘ò[%#°ê„· Ãs1š0´ ó\rCo<qU¨ƒ  ´QÃ .Éã£H\\¡°ÞX)ûªÓ Ö¢BBÎ3Ïc=þ4ÂS=šÃ3ó‚Xå	ËO  +sš2 èÔª)?-ÀÊþ¨“SNœ\"b¢EUÃc%š%©*ø¿`Kd65½2ü«^	j	|aw[³·RÕ²Ž¨ˆ0Ëúž®8È<xÂlÃq.kzîÂÄ	ìûCŸ_B£	¥aˆ¶éèM‚ü³íôÁ³H>f‘Ö\n€ŽŠXÌ3IÃ(Z¢\$ÐKg0°¬È/¨Ë4:à@6©–ÐÊ8-Š`ÜäÎ´ÿ:KeG8òª‘6§KB4¶›³©Æ|ñs×O>Ë´O¢à¿(\r\\±\\êyÐk¨÷HRtÝ@ÝÕ#½cS×Î]“<ö³c×Ü©=àËÌrÃ/€¦ÖÔZqšì\r’ÙŠÓˆÐ2¦x@!ŠbŒYi)D8\0˜[¹ë±ÐÏŽcø\rÄÔ*ÀÀæœêOTPÒTCC\\? €3(÷0ƒpg2(²æîCL?Ìø9ðÒ|OÅ9R‘ƒnÍC:­UäÔ\$ÁÔ¾AH8n~é}Ô‡GÈìBwÄÎ	\$°-ANE®c6gK¹©\$\$Å, ¨\ráÊ}OêA¨UÔL-.Ê5G©&T©wS¹M)ÀÎ§ TJ3¤€´\"°>ÈåZ’ª†š1lÌÿÖ›C²Ó?Ñ#²‚œ!X\\¦‘kœÂØMKÔ0çèÝ«“”M;Û(hø Ÿð@@P>ò¬ýŸÙl\n\np)3Eaó´ƒÜ©¦A2º‡'îþN«‰ƒÆ\r2â¦	¨K.ì\0»“Ó˜ÉÊw&+XÅ­dˆkƒÉ?Gáæ„´°AÖÓ	#ŠÄš„£8â \\Gî¸õ±Hµ¤²óKã[B¸ä£û¹eôýOê\0—15y®z…“’@xS\n€µbÎaH]¤·nÆØ×,V°Š[(sžvyÒœîƒpf\r!œœ’&”ÖPŒÌ0‘8’L±H‘8Odñ¦8òŠU\n` ÁP(¢xažÂ'(*ÕìÍÓüP&é+%¤¼˜’òR°±×8 ƒÕÕôAcaa<'\0ª A\n‚ÖÐˆB`E®iYe	ºéÎ@\nIg]¢ðA`¨Pfêå}Íù4\\Û­5GTœ¸,œi\0 4‰ÙpåfR¹<ý-µ¦ý›/%h¾µÈ(Cá™`, è®šÊ]kŒ‘²[–Òr‚‚!:¨\$4^ûÊ	€n7ÄRò\\”À:V2Þ\\Ë³ó/N­iV.6 œÞ¼ÒB‰I×Ë¤S¦jpvç²{Ö£hü—²4d°]f°Ön¾­â<íšaš\0Ùjâ´Xs§FžÄÛ´Ö©ŽXâ‘j-kÞÞÂHngÒù}5òw„Î©“10!Ÿ/`Ñ‡Z½‘ŒF˜¹¥ŠÈŠKÃÍ%f.³b%¯Üæ+…	6™2j’r\"Žd‰˜3äÂÂ“Å'hpÜ’µ\0‡Î\0\n‡±YŒ”Kf®AP „0Š>'O©'»|ªp¶!É JÁ3¦*l%é°é.0@Án2!¥t+læc‚^j\rå:x:_ oÃî <,æNÞ^y»9òK] óùõÎÁ¤Óhƒîš¾¡j<Ó£ö¤mÉ«ÂZš/>èG—¨³Òn5Z6SíLC0>&œŽç:=Hr©&+™,“*á2‚6–œÊÉTJN;ú«I6®ÁBú­œìaˆÌ7ì½‚LÈì,…Ñe/)‡%19C¨åi‡#‹µvN§\"í“}8¶^\n	³gÃMšTC« ÕVRy½æzú	'N‚Ó+’Ø8‡²²;iJç¶'%¹È'Äô–4ºu€ib¥Äi{œw‹›“cl-’?¥E½)BpÍ*åœž¤—ãåÊðzt°éP:äFÉÕÜ(((90¥ôÔÁ žU¥‚©ŽùÝ=	a0LŸ/}üÈui(i×žbik¾„6PUÈ)C¼óÛò;RxšGy%FÖ½“`'\\Š…ßºZkwÛØ„¶œC·x?ÖûûjR[”òI³9±DÒÓ¹©/ä¸¸K4T/Xä'Nüm»ªº<2hM\$4<9Ìáè^O¤ôÚJqjÁ‰Q3R>ÃÆø7ëî'Žþ[U'˜[>qïÎ¿¹ßÒ‡Èóˆ)0ûŽDäèôEàh	Ý(\$óÞÒzBšÃhC=‰Ü;¯«Ù>Áþ>Ÿmüƒ3…úú'¤Îäø«Mþç	NÈ\rÎäõž¥æýÇè¬,L÷DžÐFàå¥œ}äx1hÄúÅâÁlŒOˆòîqÕdÔ÷°*Á\n\0æ¯ùÆÈá0\"-¬Š,Ž!NPâ°N0î´æ0V,ŒvOù£C_lÉ°sÐh_hfâ&	ª`â&žÃ&ÂêÏgÆ~-þ%‡fOXâÃ70Tðp¦Èoø®¹/?Îoå „†\$b‹`à¸B.¨NoÈTf(1&É\r\"3\rj,°D®Nb4ì%ê\nff%Å.’¯y\nîqÀ×ˆù>2°þCü5Ð'kã«ñ\r#\rÑ+ü^Eè\$â¶omÎÄof¾üd7+{„ªÅDR…RîOXîÇŸŠ\$Æ1b÷o0b`\r,d'kx ±‡¢ð\$T6t!D&˜ëÈ5QBâ¯&¼l¢ŒP¸ñÑ¢Ê,5Ï#dÎgî¤óÄª	¤ÜÃvÏÊ\rƒxPè¸i*‚äøÍNVÑæ}Cü\$°‹	²‚˜jmDE\$;ÃãÇ\0Ïf\\…Âªï€h\r –¯N·\$|ß.ø@†G@ØcnPC`ž.¨òÇ°^†ƒíˆ×iüÿÍ»@ª\n‡þ\0Z8ej§CföƒL–cäöÌêõj5Ê¦óf/ËPaFn Ël1B&å\0õ&ÃŠjd R¤8Ãî'd5ÏŠÙú}Bö5ƒ\\¥£*Ò„ÊÒ¢d`#É‚KŒ^¤ÒÖ¤Âð)&„ÇŽrØÇ´‡\n ‰B-Ô6É×(£D”/Ô³óç'©\"Cl0C}qhçLy	BÚ¢ˆto0G7ÐEî'Î¤Å¶/ËH	 Þçí8ÉL˜fÎÐ\"n¼—ÓXgP\\r\rc(\"Ú²æm€á2âD_cnÏ`ç7ãrÜËHhÄàÒÿ³rs‹?(CÂ‚MÄïÆºk‚m9Ê@^Óiq\$9ƒhdÊãâÐá\$PED´#à";break;case"fr":$f="ÃE§1iØÞu9ˆfS‘ÐÂi7\n¢‘\0ü%ÌÂ˜(’m8Îg3IˆØeæ™¾IÄcIŒÐi†DÃ‚i6L¦Ä°Ã22@æsY¼2:JeS™\ntL”M&Óƒ‚  ˆPs±†LeCˆÈf4†ãÈ(ìi¤‚¥Æ“<BŽ\n LgSt¢gMæCLÒ7Øj“–?ƒ7Y3™ÔÙ:NŠÐxI¸Na;OB†'„™,f“¤&Bu®›L§K¡†  õØ^ó\rf“Îˆ¦ì­ôç½9¹g!uz¢c7›Ž‘¬Ã'Œíöz\\Î®îÁ‘Éåk§ÚnñóM<ü®ëµÒ3Œ0¾ŒðÜ3» Pªí›+£ª€“µc¬	+£`NÂ%\nJž< LˆÒì¡*¢®¬©Šâ¼¢¹ë@!	†W0¨è¨<Ž\nT >c\nÜBpÞ6ŒLª:\"FÉCÌ4A,¨!/ÃL|\nLàÊ0Ž PŽÉÇlšÄœ'ošŽŠcËža•\rÐ)¡LqÆƒœƒ1JŠ’Ö5Ã˜Ë#µÐ¬*ìÌšÀAÒ#´Æ¦±´6ø0#¤üí«T²Ö!Š\níNaâz42£0z\r\ràà9‡Ax^;ÔpÂ2\r¨‚r—áxÊ7UPÅV’;!xDŸ#ÎÝÒâúL0ÃXD#ã‚Nûà^0‡Á¨7T3Ÿ\rá”\nbˆ˜ÚDÂò¦&\r‚S<OHí´­HŠzú0C£q9±Lc®Â\0í\0Ý´ºž°é<r²£`@ÉŒˆ‹Œ\0Þ1 C à¸>ŽˆcxÙ<Nq|cÇv\"#	#pÆÍ•6 A(‘Ý8À\"²\"Î\nèÈÉ¿PtÇ€¸EÂº\"3³›CŒ\0ÏôSà)f·*lÇ´ÉbB—àÆr\nƒ’¸eåN>7¾sSïkÔ¨vìÀ`È:§Ã-\\Àg€¦1×Š•¡%eðäNz&Pa•HAj‰‹Ðê;jNVù>Œ}ëw¦)èÅ:íÃ%ÀTÏ|<D™i¶0Äù`Â#œ¶CÌmcG/·nA9q¼|ö(jK¾TVèí‚— NˆŠ<i}¯3=^-h³]<íoÓÏ!.sÊ9\$ø@Ïº-ï*PÐ—5ëã\nŒ›±âìÔ ±Žw¾Â¨°åÿ«zã­Â+ÉÂ<µWû€7_’‚S^C¸-J›€.-D7¾TÞùßê{Ïµ÷¿Ôý\rY¿á¿¤öÈâÊÇq-“ ¨ÃZ«)… ŒyË*)'U ¢‚ýL¨n ÏÑ•’\\Ló[-Êd”PE*ô„†b\\´‰!ÿR*`äüù\$)%uI(T°\"*ŠýÇåÖ2È'I‘¨4FRz~	™¿RôÙ\"‡^Åv	ACR”úÌ\ré¸”ÒFJ	ëf€êÅX¯TÈtSjuOªFÿÕ:¶UJ±³!•`«™VÊà+¦ä¯UúÁ`,…U õVK¥\r©Yë¦õ–I¡™MäÊ›(ú£Uä¥4H&6š³övÍL5!)Ê2¡Ã”«Ò‹,%¿·Døf²’Ê„…\0àuåp‚\0PU¡¦+æ09’ÜINJ|PÒ•@6ÃÂf`YOQåü#Ã*³\n!,¡µó\"’@SÎy)2qøÉ\n˜Y/!|¾¡b<˜ÃJò4LÓš“WŠô2\ráäÉ£vÞŒ«wz¥H8 ¢\$„OdlL9DUýN+z5ªÝî:©ªÂ˜T'Ï3õx…ŽªM-·JOáyR64Ùƒ6D¡C%+õt°¥±3c]+ß&ˆ\094&Ý5‚¢¢fÞ‹-%„Õ›3,ü‘²¶Lã-*MƒÌ«ÐSzBM)Ú“IO™1%	È9&c¨‰å	JÕtÿ¦–XH`cnQý„ðœ¨P*Pe\0D¡0\"ÙÕ÷?%™=;MðZrRÙ\rm]•b ÞµóþwQÀO½q&á\rMaíE\$@=ÑR°Ù0˜&¼”\"–eq®Aü^E:Á:c\\~ÑüNŽ¡7Å×ŒRˆ„)/˜¬—„lS»Å›§d¨¥j:gfÛR•o1³FÒÎMÖ»—¦ï±4ïICÂu7©ã¥”KR® ftŽ²¦¤Ýá fH\"–Æi\\BAÒÊ!%Üž¡)*«ã5`ÃSª9J;ˆqÚ ”a’¨“%…]Eelè±×kd“ˆe`aS5Ñ9G0a±™Š—›;îø(`¥1Í£ØK{¡tw„£Þ3DwgÀt=!§*ÐTæ<xt¤‡€ä–íà\rÙ•1œ2‰çBì1qÌÀ[çj´õ’£¶-^{œî5’UmÜ[ÒÜãUÐLy\"#…¯‘ˆrQÒ—6Ô°Î´’6IšSÑ†\"C²`0«ÓgväêÒAé©8C	¬îµ\"”­ICø*7ÁÜ†PÈrƒ‘•7ìÈßšBûž«\0¼l¤\nÌ+`»=¤ÀËH›Óf{È9=23RæÈci€9¿L^Ñ(\r¹Ï9Ý¶FÙo-9\r¼Íwã–\rn R·Zî\r+„uâvjŽMðKm5k~N·>ÇoËzmÓQ¾îâÜˆí}âR¸iƒÞºßoïž6t·ŸwMqlL-ýµ]™/Õ+‘©„ÂVKHm^MüÐ˜N39/ÃN¡Ý×2Ø˜G*EAÐãbÙ,%†\\2†.Q½3Mn)º»`ñ>zf[a±ä3avWH3ØêRØ\"Ÿ°R)		h½âË±rNŒAÑëþlÀm'·¸TÍ›âK™WþRb¯*w¯|P\$ø¼àNÔ¯}~DˆPYNÛ™gd~oŸ“÷<ý¿&^?Èð'ÐÉçª“Â±ó'êÕ¨n>…}n½Z™Q'ÐµÉª³è‚‚µ;y ˜[‘ò¤ÔµÖ¥–ü·Åð{‰Ì¾Kv‡8<Œ©+Ím™ŒZÇ|\n-ca73Üúœwjg¬½ù:ùzcûïäÝþ^±ŸìqGþÖïh!F@ÿëôxk¼ÿP\nõÍÚ¼‹y\"zÿoÉëæ'*tG>ôo	\0Ïn Âw04(p8ò\n;Î\0‚›eúïÂz™ƒ¶wÐ(ä-¸r\rÌÚmÒûR-\0ö0`TÐJò0häpnåî\0ÝvûÏRÏO\nÏ‹	ïoLÜo`µIFókÏÐ öp;	°Ï¬ÿ*:öÁRþÂ”µf(½8ÍÄ„Š•.tkRÅN&žæÆY†ð7B|üà(¾6€@-¼k\rR\"¶3®]\rGÁ\r„-IÞ:ÎÜx‹ú3F`=-›§è.Ú|\$J°à‡\nðDŒÌBd.ì¼Ìð2Ìì­BQƒ\nõ%çLð°½\n¥äË¤»0pÈö°è`†¿ìð%fò£&Ô!PÔo\0­xþ°@ïáSQ˜ñÐ	)Q¨í‘­°ÌòŒÐÕ1’ÔQ¸øñ†wŒð}q¶`kŒ(nàï%‰ÄNE.ìb#\"é\"ºe\n~!DvXOõ0Qœþ[Ó’Ñ‚DÑÂ¿(ŒcÉßNú\\Ì\n†ÆHÑÎÕŠ&fw\"²;Ò2;åÖjÀmÃ*d­\\ã&Å†=!æðëæ¼’\\2`!qÐÏ\n'2eÒ\"W#~;²bÔòI(íNb±¤c'qŸ ¨ò’S‘¿\"&R¬bòFÕ2»)Ä*{ÂNÑ†Y’§ðB F­,­+°)èòÑRÜÑ²á\0²²12‹2èÐrìÎ­­RØÑrÞjtS`ÓñÖÒŽlFd\nÕ’Ï\0¨±‘¢BmVMrï²ñSF­['rò@?p4Ódg Ž±Žh‚„-”=Œ\$há\0¥j3fòñ-¥#,zkÙ6Ž»6áS	QB;#Üçôd¢È€ƒ7çtÜïdRã3ss9éJ!3{3N3‚tbÄ\r€V²@ÒÅƒWR>ª†6ò1s(Šéª[0ê½¦òží1c8£+0\n€Œ pâpßòv¯‚žsrÚ‚•:ñj,päp”vhÊôDÞ ¬ŽfåîöR,¦„ÚÆä·€=C¢MªFâ'2T<VsÑB`¦1Œecp'O’Væ¨!‰ÎÏñæV¥n=`Øzp¿´n“fd:3äl£#¶ïÂ”_4Ô,C²nëé=e:Ô˜ò&ªº.	JT•J‹ÛA#°²¼´¦`Ôªô³( d>!4·L‚¢TI\0¨\n;eJËÐ•Î@*1f#¦ˆhàåOˆ¹”ÔÇ¤Úé@˜lpeÂ•lP«nª¢büLØ©Ê¹#Ï3ª\nK-þÁ«Æ³ëv%„ 0¼\r„¼@ì¶]ä˜ mpï\"Æ\rÌX:+ nK¤¹r>d‰îÿ(\\+Š u`1æ\"£%ò!nä%Èu1!-ÖdCØ{ÃæGð\rÀ";break;case"gl":$f="E9jÌÊg:œãðP”\\33AADãy¸@ÃTˆó™¤Äl2ˆ\r&ØÙÈèa9\râ1¤Æh2šaBàQ<A'6˜XkY¶x‘ÊÌ’l¾c\nNFÓIÐÒd•Æ1\0”æBšM¨³	”¬Ýh,Ð@\nFC1 Ôl7AF#‚º\n7œ4uÖ&e7B\rÆƒÞb7˜f„S%6P\n\$› ×£•ÿÃ]EŽFS™ÔÙ'¨M\"‘c¦r5z;däjQ…0˜Î‡[©¤õ(°Àp°% Â\n#Ê˜þ	Ë‡)ƒA`çY•‡'7T8N6âBiÉR¹°hGcKÀáz&ðQ\nòrÇ“;ùTç(^e†·ÈëÉ:àð¼3„ðÒ²CI†Y²J¨æ¬¥‰r¸¤*Ä4¬‰ †0¨mø¨4£oê†–Ê{Z‰[îê\r/ œÌ\rªR8ƒ\nN°„BòßˆNÂQBÊ¡BÀÊ7Å# äa•­ûÔÝ`P§4©Ì”¥5*ƒ*÷D †ŠÈC\n:¾,´ªŽéÊãpÊÙ>\nRs3jP@1¢³;@òŒ(ÐÍŒÁèD4ƒ à9‡Ax^;Ðt(¦LÃ\\¼Œá{G?ì:Š…án”ã(é=èûÄ5„Að’’\$HÜ:xÂ@Áƒ‰¼DäŠb‹ÔÒ¦‚˜ÊcJ¾¥3V ¨ã¬€ŽC«d„·âhÞÆ¨­ÃRÝVu —7\rã|‰ïªÃR°XŒCËJ„·%ÌÎR¸Ø:«è£wlpÆï#\"1³u4Æ#¬ÆŸ*tà\nË«ä’ªc(Í9<•Õy_\"¬xŒü×Ð\$#;63Â‘X„ûŒlz*ª Ðjjã0z†9Í®Â2Bdˆ¦;âb* 6uŠ ›¬Wƒ^ÀP €d³2W8T”Ò„Ý°ìMí5çõ¨˜#(d«+k\r6ŠR!Køj§E{ÄÜŽ#¨Ë'lÝ¶ííúº';2èäÌ;D’(5\rTÔi*NÊˆ£ÇÇî#-³¨·ûÜÁ0oÚ8ç¼7è6'_·ìû*Ñèìá3(Ð(Lì#Îh£tYº£¹úï\\-j©ÑÁøÐX‘T÷Â„«öó\0ªÖ4F7\"'`4ö]ä1ÃIqÒÀßiSŒ=øAà¥~ÓW;<’*\rã_†!ŠbÞÈÙÁ\0Š7}¥o'íÛ©_m¿*iXÌ^Ciž_\$ÑÔðÞ}É	… Äu&òÀFào&PÂàÖ_ù)>ç¬È¢\nS»tdt¡’”êŒSÂz*Ê„¨Òœ`UJ«BHQe@v\0r cÕ#GÈ3CälSiÃlÏq:4²–Ë©§;\nø8D–J!¨u~0;°äôŸò€PJ;¨h>v\nR‹J5G´\$¯Ôª—ŒjiN)è,¨\\*à{ÅVÒ0˜ÙùV5Ç ù¦ÔBRJYâfdÐ ŸØë^ˆbxfqÃ£²jŒqü4E\0ä]pN=gäÂ6sû?¡@\$\nÜYü\0 «“ro\nš#dì\$fÊnWÁ…J´F¾K/†ÑôD€Ù+ŽÃí/¼¨ vŽ\"	O0¥y\"¥\\OÊfd¤‘¦¢š‡8 >\$¦ŸRRÀWñ!*Êåà\0jM‰0“æè¤°gZÃY‘*ƒ±}D–OCƒ©AÓÐ8M…ä‹^„â	áL*0ÒrìYû<L½ø£¨ mÉRÚt38ncLÙ²\r!Øý½\"*KHAèc(@EžiŒèb9§å”bº³f¢F0“’vJß©…ÁRSy¸I˜Tø*„¬É¥ò»L v4Ñ˜9Ô’xg{L–•S6ABp\r±+ðRÇ	°AaP*„˜BÐA\nR¬'„à@B€D!P\"Öp‚M‚O\nAJ¹WJì(Lµò³‘DRÙàrï^&þÇ?p JA!LÕ”Ðêxp¥lmù²\n@rŽë½Z«u7‚ô]-]RœåÐ½ž@ŠûÔAlñÊP˜–yÓ‘Šhöàì2vXýrOE³½	ØæØ«cl­õè.Öåt­åÍEi•@àB“hsEl\$½5’@’Hsa*L `t«MÙè}¢¦IhÏJ¤¤”ÅY{&Äç–-ï¿ˆè3Uú¸jÍ[5æÈ¥jÂëe\"µœ*9ÇOIÑ<]¥Ô1À#*Ä“=£¸d8‡.Û›ÌÉ}ÏÁ„\$Ã\nNjóÌ}æÜáâÕ©…MëRb4è’åØÚ–Á)H˜öð²²öÍQ;“ `{J…i/>„†ªPydkÒ’ìÉöœÆ‡8šz“5\r,€=PÕ ­PS6¸Ô#@ÐŽX6½IS¢º™.½w3«åŽ@©Z‚@ n…èÓ‰Ú(u˜°äRì2Fx“®0@ÁèV:cKÚÉ¦MdI)”Î™ô;B…Ý½ý<lzh8`¸êM)©õI ÕP¥¦¬uÔÎt4à\n&‡Íyþ×\$ š=øG­öV×P;GÜÓ­6qÔ¤žOê¥ªÝÀM^gì³*z™Á¸Õé%Â—™VÊ:ú¨äžÑ¶màW^ˆs0„~Hk¢i’jYÊU8Ê„d¼[5MCÄ¤;†PÄ·.ßœœ»ÙsÐJ^%¼M˜¥Yµˆ±ŽB,:=„„˜€ËÓl…Û‹´sž¶V}¶¸…~O¥vÛÝ©4É°ä½Øä˜É¡‘2išóîqg^#Qò˜lsp¹ß5j>[£þ¥Óô“±ñ	m5%Š˜Ì«	D5|Ó£µ57‹ìÍtä¢{]vex´ö”Ks­˜^âKkaU}Žò•q¶Ñ!5¹ÆÞ&†×„ÇËÚÉiPˆCs<³á–Æ¯~•’ú»’lË\ng#¢¾Šzd7óWPŽu_Ba}½ô¶­k§3týTÎ¶ø“šsÖÙŠ.ô/w·^t³Û	.÷~ßßU0eB„X¼Ô‚“õÞ®5ZÂàë=kò½ÍùèÛV«×¯þªZ1|ÏÓ¦ú£•Uê\0¢þ\\¥T¯·êôÝ_÷þŠ¼_d&áñºú¥—­PF^…ç~‘B,2gúUÃ8X¢nñv(i?Ä˜¦b,ñDÚ{m|¬EàªÏ6‘Œ–Fö¡\$ðÁ©ty‰ša°	”QOŒþª7îº¤¦ÉB¾Ã`Ú¦CËl¢Â2Y¯ØøN®ZbNüohü°€÷#7Œ\\ê¥¤ÅÏ.ö¯,,èèXø/\\öÀË\n(\$ºÎ­\nÐ°÷ïZ7\0‹µÄ2.ð<ŽuÄ&Æ ‚id€@‘¤Ö«Ðšøk¾\rè‚èð¤.ü!NŠ4ððìÅý/uðï1Ð¨7/gLÉ£qñv°Æœ†0ï'+Álê^olÊHìf>£>æP†êâÃ£\0—oæ9(Õ1Vy‘Z/Ë&Ýo×çWQq£•‰v½Éâœ#q[	ñ‹1 %1“Ñšön—ìºËæCN¢öÑ¦Ëóéõ,Áp¦m`ˆÊñ¾ùól½C*\n†Þ^°Ã‘ ól—âõP{\n°Ÿ„K…fJ¢h	´&\0ÈÎ ¿°ò2¤t>¬{ñ\$ãgþØ¢†)ÃBÔ5¨2,\"œ\$ò{ç†LbNK§•’<çâV-€d-°V.ocû%ªõ`†H@Ø`Æ}àÆ”æµ	ñBam’GcD\$Þâ’¦è•ãpN¾gçF®à¨ÀZ\r:úbDÞmW%mzvr¬’E¸\"â2C)j\$'4Ä'8œî°jQ–G%v6#°I2€pà=Îš}ìÈ¿¨ð©ï…]åŽ4 A'°T\n\n7ã03â‚ÃhÆ7—¯91@<`«ío)ß#ÈåbŽð×Ð^™Åœ¾kÃû3¤\$•3B3FÂÐ„Q54RÎüBjœ)ŒË5¹3bI3:FŠI&Ffpó‰ý7kVì8ò+<L/c9/%9‚.¬ˆf‚\0‰ ô(Id\réh#æhàÍDKÎX1ëC6£l1à‚K“ÊùÞ!Bé!\0Ëƒ+3d1ó>µ¢T`Høõ+´I3ë=@àyŒ?pI ‚Õ¢²‚VI¢6w\nd +àÜ";break;case"he":$f="×J5Ò\rtè‚×U@ Éºa®•k¥Çà¡(¸ffÁPº‰®œƒª Ð<=¯RÁ”\rtÛ]S€FÒRdœ~žkÉT-tË^q ¦`Òz\0§2nI&”A¨-yZV\r%žÏS ¡`(`1ÆƒQ°Üp9ª'“˜ÜâKµ&cu4ü£ÄQ¸õª š§K*u\rÎ×u—I¯ÐŒ4÷ MHã–©|õ’œBjsŒ¼Â=5–â.ó¤-ËóuF¦}ŠƒD 3‰~G=¬“`1:µFÆ9´kí¨˜)\\÷‰ˆN5ºô½³¤˜Ç%ð¤n’Ëô½(F½SƒóRsxä&!;èV©Q©ÍA¯)öÖ`–ØŽâ!§½Fçq	¼î¸\nÓèô7º®.|—£Ä£¬µ¥pBx´±+Ù®þ îJº,¢ÖÕÂÉÂúÁBÉzÕ #¦ï?KZvœAÍzvñ°o3 (Kš†1p´rúÇŠ®S5éìl½‡ƒ@4C(Ì„C@è:˜t…ã¼´# Ú4Ã(ä\rãÎŒ£tÐ<“Hæ4óPDƒÌ2Ž’€¾1\rƒÜ5„AóÊö“áà^0‡Ê’ƒFÉÙF\nbˆ˜4Í¯^†'¤ä…Çmdæ·±ªLâ¾lší§bW¥õ]!¤ÉXÁ»mˆºI0ƒ<Ir(2<L5i¬býÂìG )šj¢QH‚\r!Ò2øÜ6Ñâ×¼•é9OÓÆ» ˆ%i,ˆž¿5…0ÜF.k TÁém4×­õ*pùñjkP 7‚À¦kÃ¸AHâ!µÂ:“\$Jw¤µªNÒ<Š=f©¤JEH‰˜Tt×7u]ñ¢WTŠÛ‘§il`È‹‚\r–µö;Ì¼‘šTîÜ‹^U\\­h‚!LÂúµ¡„‚6žÈšUa™CkÃ¢œgU{f™~'PCè60)êVá O%êˆ_4Nç]íC{ä©ævíª­âEÈS–¥øhYEB;žô\"K`n7¬-¾&Øš†!ÎjE«Fè&þÄ¤ºì“:\n—¢‹Nbqë%\"\$	ë›ÆÖ7>î:‰rË²üÂ9p+zÓRL—&Éá—@¦KNÐÔ@\\¡()®Ó§B~áj'.ð4;Pô	<Zã5ü›fƒ§huBèVA}&IÒ„¥*JÒÄ´;Ë’ôÁ1L“4Ñ5³dÜœ’tNÁ<'¤øŸ”‚Gä”Ä(Ñ®(ÞJ‰ Åò2u6¸ÊŠrfœí±”ŠÜK‘õt-èá<¦U{p%§l†²^ÚK¢¯<ð<×”xP	@‚–\nM4m-j™\$téI3“%äÍ¡³æ\0ÂÜ™ ja~’jg_jS\0¸ðƒvÖkq^d‘³óŠoMôú¹8¼vŠ-/ÙÛ™&ÄÁIé-\"Ì¸˜ká0m·j(ˆ2Îa‡ž“SüJãcš\$à´(ð¦\"á\$¤8ÄFH4f\\‡2D@H)Ædù‘N˜€ØÌåHIz±\$«±5ÎŠd˜F\nð“1,ŽZ'uç#‰Ï¡ÐˆætÓ –Tïl·F\$098NÜcÐ×m3Q»“ƒšOX‰®yËš^óž¡j'™­ƒ»Ï³FGÄ™G&’`M<¿&ˆÒO‡Ÿ0ÚÌ0‹†)²fxå^tK\$Ð†‚™&ÖÕåÁ\"°ÝÅ@ÎY+;e9§ÈIA¨ÚCÄõœÒêL8%”¢Ò´Ì!r\$Ü±(RJY_lu%|Þ=Ê„MÓƒØZˆñ+m3As´b­ËGë<Íó÷ŒCŒ¨€ÑDZË£[E‰®²Ž“7&Ü\rYß0)Iº ŒJ™+&¬!*Öõ\\\\M¥G´¸4¶\$ÙÑ¢T\rGšù”Db	Ë'˜µÒŠ¹= {›A\$Ìå•Š®¨VAéaD€L0¦	:Ð¢ÒB\$ÆÏ®Ê¨}fÀÿ»àbXÁÝ\$A*@‚ÂBŠŽçmµ“‚ZŠÁ…–ÂÆÒe~x ¸ö^ÒËbBnHˆ4ƒB²a\nÛû‡uì,b_c©&œ4ÒAŽ‚õŠíÜá–¤ˆƒ®ÕÄh‰ð]&U˜™uÖ¡KËÅÛž3Ì£7¥êJQ0“Ç´†KyŠÄí>ˆ™£àsÞd°¤e=„ÿKXGØ[1£Ór%4R{pŒ	j¸N¾àËF&He€#‚˜ ”b¹NŠ#˜Dqy€OUÝä>¢Ÿ!Ì‚á&ÄÚÈªèõÊ7Ÿ6ú&¬ÀÖü!^UÅõ…žÝ´Ô­á&H…©YÎ†£?M{vK\\µÓü¶‰êÜ9‘ˆúUlE5Îm2æÎuºZï~l¥*”€×Šç^¥ÃÝ*¨´þ[£¡Î<äp¤(UÔ&Lâ@tdŽZ–S•ÉºÏÔ~‡P}?UÕ^›F„O3æw}¬UÕnSSè«@ë`»×_[µ–ôÝ³½fùqQ#KŠ±I&ZªÑìuOv\\CÝ•–ïßsbÎì’ 37P\r¯Ñ’Ûš£[íÂG7À\\0Q…¬\\\\ø×ª¡6E¬ÏÁvÛYê‰æsdõ9íhÏœ¹Í„gl—“ÒÁ´ur=»únnçÅ½4å7ò„ŽÊ5«ªuN–§É•nk“Î]PrdôÏØì.’n4„â'Ó¹2òƒåÍëjkÎYYuþb]–­¨rÕc­Ê™‹‘s‰mâ9ÐI7CÖÔ¤‡ºŽ]v;}4ŽóÊ=Õ3[ÚÍ\rÐ“2¬zÄæ«3hÔ\$××ÕMh­ÞÝ0W÷eZ>¨î7gC}¤Áë	Í³ Ã=©¼“^‰â‘/^dêÏŸ¸w³£ˆ¼!‹ð(è¬%ÖÁä\"6f˜f»;VY#ž_2jõaà¼Ûqó¼Ã»²ÏEáígœØZ7¢9…ÿè}gPï´þx>ÅíX2²¨ÝÌZýÞä ^üžüdÊÛ×Äh§/ÄY/€¸^†J ùÇ¤íôVm=çÖ@Ëá}«]ç³kƒ¦xì¿ÈQLDõÑîåÝaxÇ l4×Ó ·ïŒ-`¤¯œÒvÿÇîæ¢-v¼Ä>¢R`è@Ø\0VHLìnâ<%¤‚6ã6ÄF6È8Zåæ)ì>ÞÌ\\‹É&€@ èÀZ–ÚL\\m¦’5¶[fî÷Ì¶Ì'Væã;*¶ÐBþ0/®ûD²ã\$Doà¸e.±¤„®Ã:ÁoÐÒå®X£TLm\"#ÃÕ£Ôîª=%J¦°#eäˆÎt2ÆŒÀÃÏ>Öì¬õ¢<[O‡¬œš£Û0Òõ¬±\rŒ·É¬‰ñÃ Ùfà4é¤­ÐöÅÂôçÒ]Ï¸Î*bj¡ƒèÍIÚÒê4î\rÑ,úmáb7Ip˜#ê-Iœ†¬#f„ åêeNH#ñ>Û\$½oÔ!(#jš9oÑ¨¤ÖQ.¢œ f¸#Þ\\/Ñ…õãºú&Ò\$Òˆ'£¯¤(\0";break;case"hu":$f="B4žŽ†ó˜€Äe7Œ£ðP”\\33\r¬5	ÌÞd8NF0Q8Êm¦C|€Ìe6kiL Ò 0ˆÑCT¤\\\n ÄŒ'ƒLMBl4Áfj¬MRr2X)\no9¡ÍD©±†©:OF“\\Ü@\nFC1 Ôl7AL5å æ\nL”“LtÒn1ÁeJ°Ã7)ž£F³)Î\n!aOL5ÑÊíx‚›L¦sT¢ÃV\r–*DAq2QÇ™¹dÞu'c-LÞ 8'cI³'…ëÎ§!†³!4Pd&é–nM„J•6þA»•«ÁpØ<W>do6N›è¡ÌÂ\næõº\"a«}Åc1Å=]ÜÎ\n*JÎUn\\tó(;‰1º(6?Oàôÿ'ï2`AJ–‚cJ²92¬3ž:)é’h6¢²­« S•µxŒ”5Oëþa–izTVŽªß”#h\"\"‰@ñ##:Ä.è£d·‰9f=7ÀPŽ2¤ªKdï‰Š¶œ7£ ÄŠ+q{95ŒtF6D°„	IC\rJ\rô¦PÊ¬BP«Žˆ\"¯£=A\0äŠFAâb4)0z\r è8aÐ^ŽôH\\0´+º4\rãÎ¡ ð¬Ã˜Ò7ÁxDáÒJLþ/¯£Ü5„Að’6Ž\r³\$çxÂAh’’4\"íÈA5¢˜£&«)¸¨0ŽNØØ’ÃÃ ä:iSï‰Ê»¥\"ešH9³Û¼ø\"•*%ZöËºï˜dÐÔªêÌ\0Œˆ2h:7eÜ¢^”Î5€PžÃXã…¹EÏ&ÊŒãËúˆ#ª6·Êä\\©Ä[ê\"£0Â:¥!\0ì0ƒ¨Ê	m›ÿ[@PŒ:ÔãÓ\riÀÎ3©<NŠä°úÌã•q\0\ntˆÄ˜©rçƒ­ëÊV5°ƒtv5Ò*±C|Ãå´BÔ Œ3Àb–-cm|äãd0í¸¡\0æ1ÔÐõ~ØX•2ò2C;GmŽLË)JŽ«p³7<«á–ý¬‚\\H«¾)ï‰Œ4¤W_¹Ìò®ÅÂBƒdÚ>ƒ8Ò:£~[UŽŠ÷§-â(ñÎØ¶âø¿C7O7ñVÝ3n±!ŽÙ\$îIKÓ5#Z7ŒÃ2€…&ùé6¾¢ Þ×áwLŽ£ÆÂŽc61üµ2\$#ò˜ã\nî|wÚ»áC(P9…)¹†DË\n»Gu!\0†)ŠB2`=Sœò,Áp 	e°6EÚyC‘1)Õ¬0ÂçP¢+ŒØ ×ŽtVªTå	H«µ4ƒ8 *4…'¸Ôâš.aÈ'£RŸSùLU\$70Ø@¬U™Çe¬0ªò’†C(jGÁÑîSls“šu ç]¨qÏâmÌ9‡u\"»C+£\r% 2@\\ŸªP*\rB¨uÔ\\\$QêEI©X²¦ÒœSÊ€3ª D©ò§U.qW˜p­\nb¶3Jä“£ù\nQO4ä¡PÛáé)!”5 Ö[ÔSa¹ˆê\n¹Ù+F²\n’„1Ãpi8Æ<¼ÁTF‰MÁ8»ÊÓ&÷Ø“:3†x½¹—Â@Ô \n (Jä,N°()ˆ(9‘÷Üü¨©~fX7¢æ¤q;'§ý»£:˜Ñˆo)Rä¬ÅÐ@´Z‘(]­´Ï˜#Ò&á\$ˆ‡“N\"95Å*f´#€pŠ@qcÁÌ¥`äIaj…†iú†53gù†:¬#†´—&!@'…0©5ð!~Ë`[4ƒ’×l¤P«”ƒ•Õ{çútÀR`­H9ÿ*ÍäŠÁx\$Õ7kFSpÄa\n¾	„ÈÚšÓhLB0T˜ª™v“×HRq2 ä‚f¥…‚IsŽ³T5±†×-È9¬9à*ƒ°ÞN[L1Ä¨[3£\\—Òü\ráÀ©†SXä[IFŠD*¿„†ª—ÐpeL±1èœÌëTN„QF7¤¶IÏ \n	ŒU‰&òRE±Øp%½÷¿¤v¦¥+q¥§¥VAgPoLnÖ»Ðp£¶–N.ÛgáÃ+‰²Ç`<ÃÓ|æ€PV?äÅ‹6Z0Ä^óˆ†T²VÑDñ)ra…´[ÌKÇ5—}“#úßZÂ+­%%7NEhS ,|!’TZVPñ–s–Ï@ÄZæƒòµÇŠ–xic—Ív›@ÊÈêÒ).™RÖ…d¦.aá¿7…´wÂ2‘NìÐ!ÊÀ¸ó%¬&Þ²Vb\nâR\$ qaPÙ2ò4|1¬u…˜ÂÊc%¶\r™¾iŽµÙ\$×‰>FÀ()0¢ïr,Í4Aå¹²dH€!VvIÅY[x Aa P\"5*ˆ+¾ŸmˆÝÕräMò?¦æØ5ÒÖ†tH8n!«´•õäEƒ’ñ]ºA6%#f¤¦v+GMBÜýf‹0¸!…|1·¹Ÿàí-.åeAàfó©GÎç-±A=5t‹ˆÒÓK½¦J>›)(SOèE¢õ&fÚ@«é#U¥C—Õð³MífMå¡cZ÷U/ƒTJ²Ý&@›çýLn3¦Šh„Þå\n}ªìÑ=«4;–ðŒ…É‘(®–|å±ò¡º,Æë:ÆÚ˜ÍPèmuaCÉ],‡#:€¸eGN¯BÂ¢†\nc&Þ(íáóôs‘…½“I[3\"~€Þ£F§ˆ_\$ÂŽæ3>G(…/“ã]O¥¤ÑPÁ\$®a¾í' ¬…Ñ]IXl5ˆV—ójÛÏ;º¼Ñu„Æcm§3/kzØÛ=ôNz[¨näŒA ·]EÀˆBÛNáGP…Iùs\$Çüò)(2KL¥RÓ”ahPX›Ý•)Ægl¡(°4Ø»Þû£+ËvÚ^ß†B\nu.ønJqWjOîaÛC¡'áÄV‹VÚû•ðj\\\npa'	Õ×·Kol -²é>&OLã‘¯„]Öz[^êJÁHë}wÚÚçc‡z¡6ox˜ôÞ’á>'¸YQ•õßßz˜sê§É†ƒ0~rn÷š­·ë\nÐí«tÆÄÖ;N€Ÿ²øþç×üò~=9­??Ûú¿«`êí\rø—ä‚8®±Á\\\\3ïRéÉæ¬Gê¬ Ø•¯¢újÁ\0Œ[\0â\nëOšêÃ®LF:\rHiBEúsHj£Gø\rÂ]\0[t).6Æ\n’@Ö{‚cRC7©.ñl0%°R–ðX{ƒÆOl‚±çXœB”ô°>ùB´•#Z0†½\0lXÿÐLK%Ðtã¾¹O uŽ¯08¯l¸Ç¦ô'.ÀZo€úO…\$œpõf 0Å¸‚%£\rˆ~¸„·„êâL§\0üõpîÊLpõñðÜë¬¢#ðþú+F;ñ0èu†ô	b´‹’×¦>	°lÏC\$ã*hŠäâ£:B¶æe–ûPôõNžNÌœûlQ%§Ç¨\"dæRðPÇk<ˆAC±n§…·€ÖïÏ”ug[€ÙQyñŠ¹*ÜHƒ”Nã–%îÜ*ëâR'X<ïŒßFz ño™\rãÑ»/…q®¥†þ¼æõÑ»Fô>0Kð_ï1Çé1á±Ã¿&Ëx{ªÇQå\rE• b5Ë Ll…‘dXLs!1öáÌi!uKƒ¬\$w¬æk0K¬²E2BË…!P%\$äL'òI!äc7âMè@.IB>æ‰ŽX5nìf…äËˆ¸Â”6Êtè\"þÐ²„;2ˆˆŽ3+i)R†a’Š²žß'ŠËPD±VåŽ\$š¥ØÑ®ÏnˆæÍŠýí<^NzCÎØí-oÚÿ2Ñ\n”\r€V¡Îú’å8¦æ6c£Z§2Ÿ Ì{ä&àŒ©®> ƒÐ|‰ª\n ¨ÀZ>/.=ÍªýŠ¬sÃÿ*/Â|…Y3B3“13å‹3mô#Â@\$BH\$r'æHTÂ^&.¢F£Á2³É„Ö.üNæ?rZ¦Âc7£ª<c‚cp€u©Æ0I«aR’ò&;¢(q\"n;z@;°k4\rêŠs\"Ÿ|I“¼Ÿ(@-am+Ë`‹Œ¦ZŽ@áÎ¯\nÒ\rƒ8‹+*\rô½ÂúãÄj3iDöiW?Fœ’äj'Â,çSòë=%„8ƒlÅãV5¢~ªöÞçÎ0HºëÓøÔÂ’f[BÝ°§?aB\rf~Ï@šœM	ªZÂo(Ãf¨å†ælDˆgñ(óEú¹ Â`êsBÌqD\0¥]'tˆˆñC'`”5e²ÊÓéF³î_+ ¡“þ<t+‹Tv&~-aJ’tÄâ*´Fi‹Ž¹á8+ Û'c|\"H˜\$r3¬ò-af» à\0t\r Ú";break;case"id":$f="A7\"É„Öi7ÁBQpÌÌ 9‚Š†˜¬A8N‚i”Üg:ÇÌæ@€Äe9Ì'1p(„e9˜NRiD¨ç0Çâæ“Iê*70#d@%9¥²ùL¬@tŠA¨P)l´`1ÆƒQ°Üp9Íç3||+6bUµt0ÉÍ’Òœ†¡f)šNf“…×©ÀÌS+Ô´²o:ˆ\r±”@n7ˆ#IØÒl2™æü‰Ôá:cŽ†‹Õ>ã˜ºM±“p*ó«œÅö4Sq¨ëŽ›7hAŸ]ªÖl¨7»Ý÷c'Êöû£»½'¬D…\$•óHò4ç£2éˆ\$îïÃE’ÌN˜“)¬ç¡7^èòÉtÖœs:À¤¶ë¡Ó(³	HóJ8#Ã;Ææ :T‰'03Îáºõ¥ÈC	L\">ïã(ÞŽ¿ËPˆ0ŒË€äß½ã(Ú×%lN(@°;œ€­N»ˆÙ.\0Pš•Ž£\\u\"Ð ä6§(ð c@ä2ŒÁèD4ƒ à9‡Ax^;Ër†6¡	@\\7ŽC8^LcÃà½¬¡xDÓL#(é'ãh5„Að’Õ³\rÈèã|ù£“pÐ7ŒŒà@ê±Â˜¢&\r-\nZ(2ãJJÐ9´c½ã”zõÄâ«’®\r[.ïSÊ2à¹B(Ý¤Éê…Ð£æ‰cxÙÃ#ZÏI\$Ã\\—^¾Bxé£KÐ\"Iƒê6#c³Î:Œ U ´\0PŒŒëØ ŒòZGop¸È4£‰Êê5¢­4:/ÍÈëM5®ºàˆŠ	ÈÕ©ïj\"‰ /-¬„ WEN20¥C…¬”!‚KE	€PÅ¹«ÛavÓõloJU+Ò5ÅNh„:£H†I\"5Ù[•´¹\0 Ê2ÌÀçjÎã„ÁT½ÙÔO“å88Ù‹f	¾@)åÀPáHÛ6„NÃ±)“7ŒÃ2Ò7©h—„e8¨7²2#uC¾#¨Æ1¦˜ÍgáCxÎ„abž9*F„ÀKBËƒsn2…˜R–ëù\"‚!ŠbŒ§­ˆ‚HXÒÊ\r´;h3„4À6Ùüš–”1kÞ’\ršïÅØ)¿4™º­è@ Œ›êQ¹k*ö2%ÅIrhD¤N£\"Ëd£óäüº&CYn(…F ]/Â,¢íélw¦hÈæ9Žó\n2\\–2rÜ•&IÒ„¥*JÒÀï-v2èå/Ì3Ý2ÌãLÓ5ÄÌÔÞ“ŠsN¬å<‘äöŸSùHP&B(dˆÉÉHMŠÐˆVá±fçÈÅ©¢n„ÃHf%¡÷?—`s<E'Åt\0	Á:\\á’ PRL'*Gñožã6T1\rÐü”c0¬”˜u\r§ )¢ØÔJ†.as“Ò~N\\ÒG„òÖô\nA-	\$<<˜‚v¡L‚˜#ÊÑšT–V¡ïs!Éº÷âÖ	™£#À€1«vnSÍ!7#&j¢xS\n‹ô9WJM	‹ór+Í®…(P‹‰HDžH“´–Ê,A¸3’AÏ”aMB><­ÊB\$Ò˜1G2eÌq– a*Cr¡N`#j69ÇVn‘sZ\$!t3ÌXŠ*Þ	á8P T *i‚\0ˆB`E›@('ˆ&‚¸œ³œŒÅ´@J²úA³q)– ©9˜ë74' æN@Ãˆ’ó\$'|êfŠŽ{ˆE.ƒÉsèL¹;1tG´Æ<Ìd1.elÁ±ú2ˆÑ)22QÒ\r€ ¬a‹5ÅÀõ‘¬J%JTPá\r”ý	¡t0)ýé\0Ê`Û¸:>h°‘”ÓZ­fŒö¥-¼‡¥ªÐùÔ4(°Ì3B(!Õe¬–jÍ	”<äô2¨S,CºTFÑ*…€îs!c¬è”rt‘TŠ~µ1Ó”¦aB/e™%ÀÆ«ç¸mc¨Ã*öfºŠ)’%PÖ'D¶œÙAHÛ…RcMj#G-	#¸·Â T!\$àÄÛR1á½Læ}UÉhG<ì¤¢NiÐµ¢°\0¼\\#eÝÀ]=˜ÆäÞÕmÈ‘ˆ\r©¨†_áÙ²Gý‰6CÖE—:ûNqbá¦ M•a7†Ý¬È†o­Q‰pÇ@îDB©\"(Ç ›0ò>·	¨½Ø¤B P\$)”§Ó\"xÌ	1Ñr§õø—¡	YÑ€ÑxØ†¬8x­Øt;ç0ÓV· HÊ.\"\nA¥	\\DSØh/ÅÕUºænçjªU—1ÑQ#¦ua«ÁXòˆ®y6«ƒNAD0+\"^²õ“Î0np•.ô^¬}E+kÊ·4‡U?”Ë–[Ç«‹‘¢[:Ë}KDvÁÎEGrÃ\n;Ëä9ä¼—|ñÎ¹>NÂe‹PNÍêü€¯ìÅ‘CN^qêä7Zß]jDu±}‘ðSŸY5\rÚ'Q<€K´ÑpÓ„ì‘ãS9‰É¡”{QdÒw™C¦«£µÐeÅÏ¢®»H«š¹séãé®§>¼\r:Àº2íG­òüñ\$JŒÖÙÂî¿bfFA­¾çuba	½aº•:Ýp—2æmƒs_L«¸]vÂ×šÀÌíÇ­sÃ£mi[LjîîHæ¯EU—I©]Pˆ¦ã’#Ò.T˜ï³«‰¹àytWCÜ„\$ºš6ÏC~Áò¨¶þç°GB{æxá\$¯¥t¢»ÒÍ¦ÇÑ;'—ìÎe¹kW08ûÃDlJ4Ðg7:5¡Ðs|~}:\${Ý['¤”…Ï™ ¶ƒŸ‘¾¦‘‚jÏŸõP˜u°¦›ƒIÓaùÔì^ãÌÊY»6ë{9¼nNŽK{gNç™;uÙ»;Ü¯N¶ÞYš¹fÖGÖ÷Q2eŽ²¯>ªæVâÞ´”ÂCDN€tl‚@¨¨Á–“¼³]îy_Où„ÝÌ¹÷žó]çx÷^¢î<Ï‡õ	»F^Ý–<‡®óy“y÷ÒKÁ<‡÷*Â†›Ñ²Ç½÷ý/Eü#Óý¯‚E^ùWø»ó\0PWBj¿¦ßäw>ŸF‹ì|K¯öþ¹äôÖËŠÊ\n»±w>·{œ›…ààß7Ãx [¦_®‚Ç.\r\$3¼ºÁM´@¥\\ºà†?ÀØhú÷Â,,©dZGJ4FÂPˆBn¥% Œ—8:¯4o\"‚\n ¨ÀZ¤°(#âZºŽöOHÑ	‚~oê,Pßê,hDu€Ì+6a`CðÆ¢Ì;cÈz&²âîÔ«¼G¥¿æ:Ñ¢Šâ­%£¤(¦ÄJÂ ÃHDà˜\réb\r¤À1ÆA¢†:¾t«¬áë.ä¬´ØBÄ,†¼Øa-„ifÆPäÊ„&&®ÌÚöe\$íì³‘\0\ràà*ˆ\réd T.„EÊÁI.·§+Àšy#Z_#j_‹D9±4Ò§0Ñêã @%ê:Ô¤ÀÂ°è”ž‘<âü \nÆ8ŽÆ‹ÂbìcâŽ@,bÊALæ`‚Hz £­f p£1Z\njÆ´\"Põ„2„\$heò»D\$”¬#àBƒ ";break;case"it":$f="S4˜Î§#xü%ÌÂ˜(†a9@L&Ó)¸èo¦Á˜Òl2ˆ\rÆóp‚\"u9˜Í1qp(˜aŒšb†ã™¦I!6˜NsYÌf7ÈXj\0”æB–’c‘éŠH 2ÍNgC,¶Z0Œ†cA¨Øn8‚ŽÇS|\\oˆ™Í&ã€NŒ&(Ü‚ZM7™\r1ã„Išb2“M¾¢s:Û\$Æ“9†ZY7Dƒ	ÚC#\"'j	ž¢ ‹ˆ§!†© 4NzØS¶¯ÛfÊ  1É–³®Ïc0ÚÎx-T«E%¶ šü­¬Î\n\"›&V»ñ3½NwîÔÃ0)µ¤Òln4ÑNtš]¡RÓÚ˜j	iO•Î4AECIÃÒ#ÏCvŒ­£`N:¼ª¢Þ:¢ˆˆ\"4Î\0@´/Â©\nC,#Œ£z(ûº­T€*c*r×°L°äìÁ/Ð cºÐ2AðˆÄ?BŠ·kèôó¿B`Þµ\$£ƒœÑãô&@ä2ŒÁèD4ƒ à9‡Ax^;ËpÂ2\r«[-8^ŠÌãÃÊš¤xDÖLðé)ãØ0ÃXD	#hà&c xŒ!óÔCãBòÐ#	BB)Š.²¨–ŠÍSzéCÓÀÓ0´«¶4Ê`©ŽP@è¯ËÂô¾&â§T¯+Ú\$Ö.ü',ƒ²0ÄÑàÞƒŒ\0Ä<ª€HK`Øj¢!ãbH¶?oíf\r´\r4+XÇ'ÚÐ| 0Ž£`è6C`êý\nuä~’/Â3u½\0P‚3Œò{x?B¾¬ëÜ8ÜàPž9/V‚ô”¢¨Ò- ºpP˜ÄŒïÍDÐ<–½ð]Ïh¦¥3ÂO\"1H	€PÂÍ0®ÛkXUu›J¹FîUVKê1¿18‡'ÔyÄLÙçÉî^¹Ç\0P Í³¬,ú8-“ 9éƒ–Œ©†`º¯Úcth+ó†^õÅ²’ ã0ÌéI)hŠÂ?cz1\$.;1Œl8Íp„tˆ9…\0åºŒ,jÖpö=Þ*@æ¥¢ Þ5¢¡\0†)ŠB2œ’Ü£NDÊÖÎ&»œ\r/#ì°‹’¡µCU<\"Ü)û¾òü‹)<µc2ÐÑ&£pÎ3Ä9p-ËÌA˜ÉÉòˆD£OyØÝøT\nú°òo/ÁpA(äš¦)sÜæiÒ©æŽ„e‚*Ãý'ŒŸ'J”¨•’ÂZKÝ/<d’“\"qLá¹4¦³Î›“‚rN‰Ù<'¤øŸ”<{J£(„4¢–	¡'.QÄ.4Œ’B<%¡0œ2vyÏøeWF`Ã˜\"B\\Èù+4ÅU§ÀâHzIEIç‹PœaÎù><D„òTØz\0P	@†6¢\\8((À¤˜µ~Š	-jŒ)ª6¹r\$8ãpDÏó \nŽ™RÑ\rÐb<lç¨¤°òdIŠÁ\$kŽ\"BRjÒ{\0<„t‚×‰£ t?\$”1¬ã†j\rQ™p°ð*FÈÜËÏK¤Š!<)…G@œñIî! 20¸{tÅé'¥PÒm‹Ó´\rÄx3ª…ñ\0Seä”Ñ¬ä¾	„`xl ÙD‚¤Td.!?4ØK#ñE)Œ‡“š{ßzIFå[1pž\0U\n …@ŠÀ§@D¡0\"ÎâÞ‡‰äYêÞ|I äDÐÑËaï	‰)¦…^e©ˆ“’rÂ›LUñT×Ñ']C\0T¨\rªäÂ¡`Ž#;sèÖÉr6tÞ¸i{€ó©ºJ¾Yä­hŒÈè‘SrfH#·& (+\0Ó‘¯‹\nü+(žHJ0:PòŠ&žbob™ê^Hî\"—ÓBnH¥J(ËÉz`ä´dåHì¹—UÐ¨WÊí\0ÆU¡Ñ¥\rœ“ƒ•#	°ìˆª\0ôV	œ¡ÞžX\n+*¶/á¸½¦f¬Ucˆ±„Â…4Ê’˜`v2Ý_³EYW(cÂ=.ù'˜ÂJåÉû-&yÐ°ÓC\\Œµ„¸µ†³2‘ÓÅ˜•!qe~‹A9,ÁHÈ½ƒôL´E¤†ªäZ¼‚ T!\$	DLü{qV6´Û\0Ûƒ‘•i%[]eÎàÖ\0 à‚ô–Â±–	i?-<2)~x]5×n¡<%¸{¬“ï0èD\0–ß}C­÷k˜Á_»úQo‰Œ?8¸vKb9;1.Ñj²0iOxe—¡¥'’×~±#uÏ**·ƒîo†px¤:’¹òíC®.w\r¸áâ;h˜Wë.ŸÕ­3WÎE XŒÂBÁê:%ˆÔŽ0äŠ€PW¡‹+\"¬‘T°>#É7‡ªT/w±ê‘Q¬Ò0Î–h¼VT‹‘rÑ—	Å0¶yYªtª¯é®G¤é…ë¾Í¯¦E]-·Aœ™NÄÊv!Zºmu“‘±.˜6Ù%¦k&•&mªêàE£XZw:Ÿªz³ˆ8°	@µ’³\n‹Ú’¡¥¶ÝëƒwBg¾¨~:å‹êòÐÒ¬™ÆÓ¬¶«R¥¢Ó,•­+87 P¹¨ eT@§`Ÿª=LâaÒÐ–ø–íö¶bÉãÊ{šjMÉI7ˆÓÕYö6ºT7˜Þ»ßwe=í]w–ÌÝáo\"{ˆ‚¸à¨Fÿa…\"ÛÓ 'ƒÜnOîâÂ-ˆœÄp»Žö˜Zñ\\õÀ´¡žÓ†Vë²Ù®ä\\¯–·]úêác´Ú‰\$†YvmÈÑS:˜*«²w\r¢RÎ!‹(9—¤mÎ12Ç¿+6Zö”U¼³ëjžcÐ‹d¿…¸ÖVž—£\rƒte7d·•^Ij5\röj[+¢Dã~µÖÃ®-<ë¹‚¬Ôüào—®êü!¸gš‚æ®DD_®FˆÒú0è\\˜E¼÷‘Éž+R¾ÌøÍ¡’¾!ÔÇÐäË®­úb`\\²…Çß¡		š*(¥³Ñ›‹Â|Ÿ2â¼'Àé÷Wîùç7.þ`Ž®úÇçÉš\ríä2*FÕ~/i¬~7å|Ïœ†U=_4å#\"‰Ú|/(uk§ï©¯9Ì¿\"çü˜ê‘6¿)~ñ§øìü?­@¨ò}Ô}ƒøÚ\0Ö£B4£Äÿ„”üì¦ýãw\0Oð%oõ\0ê¨AO¯î@0 @\$¹é:¶Hè÷-&µhè÷­èp<y­úóÏˆ>åè0OžjÐDEf§Í\0òÅ~\n¯ûÙßŽ\"Z	t?\$hø\\Hë6£(dùbüqOªÅî  ŒþÀ° §'»\nbÊíbÚžX'\"âä-Ã\0}é?Âþ#ƒ\\*†—CàãÎ6W…¬À¢”1ky\r§•\rë%-€Œ#Òc”\r€V’¢¶Ã8êðŽíxý…XEœíƒÜ£b¦XPà\n ¨ÀZ \rÃr` ÎÄÎ&dŠìÆ+ä8)ªjNB]*X©ëðjÍ6®Âž\$çZe‚öµ\$2NíÇY‚8m‹mÑÉV‘B¦#ÊŽâZEäˆ/ÐØ&Cª\réŽÓ©Vhb]‘@BÖ}â1\rkz,Îrjè–ç£0UãNbÆ,®Cm6…¢H#Ð…ª-¢C†9.–‡gh?ÑìÕ1Êé±Î‹\rÂå	85£>2Ž¦.‡*Ì£vL*þ.ã¢BUÐ(_jì¬Ò\0-ÂðÕ¢\\b\n\n¥Å~ n:bn° -¼S†ú\r\"èC\$ÕÀÂ D`Im\"\n\"ØS\nY‚, ‹•\r†6qÖiÊ\"\rê&pêÿJ^¢²ŒjlÊ§ï¼ýJ\n\n~=>&(š­dUèÀ:BÌ	\0@š	 t\n`¦";break;case"ja":$f="åW'Ý\nc—ƒ/ É˜2-Þ¼O‚„¢á™˜@çS¤N4UÆ‚PÇÔ‘Å\\}%QGqÈB\r[^G0e<	ƒ&ãé0S™8€r©&±Øü…#AÉPKY}t œÈQº\$‚›Iƒ+ÜªÔÃ•8¨ƒB0¤é<†Ìh5\rÇSRº9P¨:¢aKI ÐT\n\n>ŠœYgn4\nê·T:Shiê1zR‚ xL&ˆ±Îg`¢É¼ê 4NÆQ¸Þ 8'cI°Êg2œÄMyÔàd05‡CA§tt0˜¶ÂàS‘~­¦9¼þ†¦s­“=”×O¡\\‡£Ýõë• õF“qžò‰E:S*LÒ¡\0èU'¹«Õû(T#d	ƒHûE ÅqÌE”')xZœÅJA—©1Èþ Å®ƒè1@ƒ#Ð 9ªˆò¬£°D	séIUº*òÀƒ±\$ÊzKêÙ.r‘º¨S/äl˜ ÑÎ_')<E§¤©a'¤¹Js,r8H*ìAU*‰¹•dB8WÈ*Ô–EÂ>U#‰ÂŽRT™8#åÊ8D*„<‚_£ˆa˜EÉÎTÇIBý#êdÿ+Çò	lr’j¨HÎ³þA‘3Ì÷>È%Ê¨—E‚®Y§¥pîäÔ£•Eu x0µÊ3¡Ð:ƒ€æáxïa…ÃÈ6½ƒ(ä\rãÎŒ£u <8Cpæ4öDÝŒ6pÊ:W\"û”0ÃXD	#hàÛ\r¶ˆèã}„kˆ7ŒÛz9µ‚˜¢&\r.˜ŽOTY_§¥9tB8I£…,‚I(\$IÌM–‹í.À«	]ŠâøÉÒP§96WA0¹8s‚%|Êê¼ñGÓ”ÐYÍ¨æq0XaFs’²à‰[Œ#¨Ø:°Â6£.z@—1ý\$±DsIÙë'HO1HNå¡Dæ—eÙÌBóD+Eç‘‘²‘ám°‘¼rVÇqìt’¥¼@¼‘d®TÚ0Ùn9M`æ1ÜMþçdöt™g¤´@í.s¾é`”Ù?P±Š˜¶14tI~ØOd=*AuI‰O<o+Ï„áxjzT/–]Q£„í/<#ë2P>‡m˜â”IeYg~Aà´ùÏÓ½B?Ø£š¦¡©?Z8äÒ4ÁºÖ\rã0Ì6Y8\\ÕéI g‚ Þ×· ò¶°êÃ¹a™£\0ØÃ9ì`°Ý‡'öC8a=€‚	‚Uò²pu8@ 9‚“˜9ÀÂµ\rTÂ˜RÉÝ2¹39D3oçh R˜CÈ€ƒ7UZü	A~‰à*•Ênƒ2Í‹\\ö‚\0‚±ÖHrl­pÈ²³VªÝ\\•ÎÉÁ=x/& …Ù*#íøA”6pÇ‰ðŸwÈñ=\"\ncaú¡x“C­ä;(…º„ÐÂÎr69‡uš¾C(x¥[@]U hVÊá]+Å|°ÄXÐae,Åœ´”‘Z«]l‚õ¶ròàKˆ6.EÌºRì]Ñ•y•ê·ÃBø_KÔ0†³XÀM‚Ê!¹wFxÒ—ãYÄ˜Ÿ“Ì•d7‡(t@¡ùIêAÈA	„(`È1ž4³À ‚	Ah5¡&/Hxˆ*\$<™¢¢?3ÓbD¦h2Ä‰Œ\$9Us°ÑÂE	2l}ñéX*DŠ‘ÒHó™\nÂb|P\nDÈi¶U0Öx’ØÐ&#C\rÄùŒRø“QDB«,SnAHJd‚I/”2•òkšBü\rËäâ`@­ƒ‹M‘\0€3 ÞbtP™’(â-@à:ü7gÝ N`P	áL*9ÖŸQA&¢›ˆ Dr5¦U¹ë(’š …Õ5qÍÂ œ¸‹^ƒ T\nÔ‹Mi\rt3jÉÍéù\r;Œ\rÏñu†õŒù\0b\r!œ/à™U\r©¬6ŠÐ#@ ùª\\]K5¤LŠ«UÁüF­e—‘H%‡HƒxÎÄºˆQN×€åM¤'„à@B€D!P\"€«š E	ê”z¤åâ\n”^zß[ýŒ±Â¸î»SÌz!\0Š9¢á&!HPDµó¡ð–‰=R>õÝuSU½N0gDÅ…öå±ùð+¡\$Ã¥ïµ8ÿO&ì<@X¾½Œ……ë+e¥P–ªÒ a÷Âžß1f²9ÄP¶Â&bÁ“TmgD<Mchf'xPžsŽ{QÄF§ß†<*%R‰á+#P‚†dsÜk(5Êm\$p¿<ÒHzCHziÁ«‡4Ó‚˜e6ÁŒáCÞ|O™uˆ4EM„Øò]‚—?RD†–—˜C*ù6”;•F  Ø’yŽÉçVÄƒ„®ŽZAºÖ2GÛ[¡M]@(ÔÏ4µ¾¸	í±;Üíáb[#ùCEjœï«	‹Ôì8A©GVGó;LZ©X‘ñ^^D8º<Âl¼‹Ý&/2ÙXm‚&‚ŸµÖ¿ê5ƒ\$7FôqÓ\n!„€ATVPi7/™[ÐßRMðp¶š3¼‚Á¯5‹([¼T“^x Þæm4näèÁ˜¡3x.?Ótz[‚SóÀˆ!#è A9&¦'A…0æ&vï}|ñwú€à\$ˆÃ|Aˆ‰\0ä‚00Ò*°wD”ˆ¢•wŸh.%Rêgš\"rIX÷8Lé¶OÑ9óœ×&„-4(§d–Xâ“[ˆrÀ®C~mAn‘ùï^0\\/ª¦è_ØðåÑ®‘Ê YX­l|€Aï^¢Ê¿ b sŠBð9EŠS¬dsa9Dp»@5Þlƒ dŒ£#d¬žšà“çÃpk=dŒ›y	&B9„²¢äÜ‰?%ç&¡–3c”h³ØðFp\$~‡eÆ7ì8g´ó>Û/¯ˆ^—¬88AåÝI/7tg	§fŽL#Ò(åÐŽkgd_„ÊSKfýU/ö>ÔlÊOï‘ÿÃ÷æúGÑ°ìtLé4~÷^·öéNÒ™Ù¤ùoúAÏÂòR\"0\r¤`ì\"uïbÁOæøpÀ:Ò¥\"¡&ît¢¥ÎOL\0Œ<ÂO~ÄD±/ˆ¿Ð4À,ðþBøLÏ¸vo*öPP{LòÖçFÖp^uðVrP&þ0^¡\"ÊØ\"Â*ŠLvM˜×®¢ð.àÊf_.Æ1k~¸+†bp!Ð@ÔP¨Ô®\0÷\"Å	p´ÔbäM±ð¾ô1¡xÍ8#í< ª\\cæô\"´22ä–éhL Å(ŽÂôLîcD,ê÷M:ÓïaVþ¡xD#:ãhg#F\"¾äØ0þ0‘ãj^ª~¿¸\\mÔ&h\$ÍfÐÆ#\nÇKð²añ[¯,öpÎö¡Ðí€e°k1g<Íðï3Ãó0Ë\nOâ?q†j¡¦.¡jAÈC(Á^ÁÊcô Ve¡ÊÃg4:0„RðŠùg¡§§b9k!£Ùg'§¤r¦®IÍ+ç\\ Èò…\0Ç(JcñüdF¬¥SÌI \$ƒ ’fXÄáým*Lé¢`Ácì\nñ‹/[#%#pŒÀði/·#R9qaÒC%2G#C\$B?\$–0ÊÚ…\0Hdþ¢äNP[#ê^÷a~’vH‹Ø£cÈ½ñ(Â?'})2~Irg(¥)*¡'-\\Õp­±~×m_Ðu\$ÞÕAÖU)£Ï,dé-nÑ Ñé-2ÊîòrJj¢x*í Nòu*2‚Î\"9*…%‘ÿ0Í­±†		\r\r1ìV'vw¡3á\\v@Ó*wÍ*á,ðª\\GÎ%ˆòÄò:nnAÏ±®/ÒPL‡ÞmŠ,±*ÜAÓZç6°ãÇFóïCà†€ä\r€V¬\0Ò`Ö²´”iƒ†ð\r Ìf9€Œµ%êª¦IŽ³`ª\n€Œ p¢ŠŠŠ=£˜ážxxFÙ4²AŠöï|L(j,,*æ®ª,à	³³;qô9Ãï2l™çT2#&âK*„\nÇz'ó^1À˜³È.Y£X8å´DŒbò®ø¡ Á<‘JyÂM9Gúqƒ…ïŒõóú#v§GSøæî*#(í]?TwÏq,P²\nƒ’6Ãt5#V´ Ê«ÀÞ\0è\r%ÌI-FdRÝñtÞÑ)8¦¾ý´0NmçìrTòÿm\$Òà.Ë®ƒ4 ŠP@¬ Æ ê\r´:(I!¿\$xÔ`zm˜B†%gŽ:f>I\0\n€åFã‚iÄxbN‚z‡=‰°TáOGç.µCH\r\"rL’a&²96ùRáV2¤r½’ôG/@uPàt#\$";break;case"ko":$f="ìE©©dHÚ•L@Ž¥’ØŠZºÑh‡Rå?	EÃ30Ø´D¨Äc±:¼“!#Ét+­Bœu¤Ódª‚<ˆLJÐÐøŒN\$¤H¤’iBvrìZÌˆ2Xê\\,S™\n…%“É–‘å\nÑØžVAá*zc±*ŠžD‘ú°0Œ†cA¨Øn8È¡´R`ìM¤iëóµXZ:×	JÔêÓ>€Ð]¨åÃ±N‘¿ —µô,Š	v%çqU°Y7Dƒ	ØÊ 7Ä‘¤ìi6LæS˜€é²:œ†¦¼èh4ïN†æ‚ìP +ê[ÿG§bu,æÝ”#±êô“Ê^ÇhA?“IRéòÙ(êX E=i¤ÜgÌ«z	Ëú[*KŒÉXvEJôLd£ ÄÉ*é„\n`¾©J<A@p*Ä€?DY8v\"¦9ªê#@N±%ypÄCµ² QÖV2¤ñ ÐÀ'd1*ûØèAðaÚL«ùUÇËü<ø‹üPËI§YL©6Fªr\r\"P’Å-È§YTT¥ÄìdF–\nÑÚBBhj´‡ÄREÌÇa˜RluÇ±²´u”Ò‰rBo‰ÖYq3Í1D×6¡ÒyRFIyÔ[²¤í'Qk”	ØN‰rgSRôÍ-Xä2ŒÁèD4ƒ à9‡Ax^;×pÂ2\r¯°Ê9Ãxä3…ã(Ýd(Ü9#}–7Ã\rŽ2Ž•¾æŒ#pÖÂHÚ87#m”:xÂDaÌãã#|àmx¦(‰ƒKŠ sDÕ6K´ùØP–‘fZBO9f@!…êDÃÏì^†XrVÌEKÎS‘‰‰I	#7•\nÆQÒªþKÀ3’þ^’‡YRL¹4|u‘äÉØS¯ƒä\"Vê6\0ì0ƒ¨Ê¿…ÚAÌÈ9Pv'û.ƒÀÈc¤A‘1‘TT&%ªJeY“¿DCøý¬ØtgÆùBLœªÌr€ zÈŸ–«š×Žcºùß9T–”ÎOºÏÒ}'‰á«ý&vE!ÖS‘†+É \\¯/Ìvu€Àx\$º[K«ù:\\Aª1‘ÄàðNØ°ÌCJcxé'Ø`·íZQô=\"¯R|ç)ËsF•¦Z\0äÓµ!¬×ã0Ì6XWå-L,Îé6AB ÞÙ\r¶èò¶xê1Œmàæ3gá\0Ø7Œï°æ7Ã—ÖC8a>À‚‚Uä°Cpu8  9‚“ža»b@™„0¦‚1Í(@‹\0\\yÈ	\naF%ÙŽÁFJZCè…ï·À%_ä\n†±oÐÌ±ŸbÐ>à€ ¬„ŸàcZK@2,0@«r°VEQpE¤q°g]+¬çˆC*!IË—c¢ŒFAóÐ‡;ßUHn§^PBhag98ÔÃºÆ^A”<\0Ò«Ã\$‰¡W«f­Uº¹Wjõ_À…†±V:ÉYqÑg-¤Ö¡ËZëd-°Ø·Vúá\\k•sÅ5ØUrØ\rÅy®àÂÍzú6k\rô†åÏbº%IíFHUÉBI\nD‹Í0P	A óÆAT,è%1Ø.P@!(\"âÈG‹<ÀF%}\n¨%#.UM}·¡\"#ª#Å\$u”²h¡	‘7A”^â@vEáEÆÈF:ç¡ç/ªÆT=.I/T2•älZ\nõ\rËÈãœ@«Ã‹F`€3 Þaä>•Ñ´ã¬ @ßºõ7Ç Þ‡\0JP	áL*uü£“dÌJE¬V´²/M)‘¦Ï\rG”ÒžThõ‚î¢Ô,Pš\n]©ØR\$,_@¦ ²Þ=CTßƒsì\\½_½`@ƒHgÜ&QÃpkÍº­ÁRb-ÕäWÆh2ªŽÑð@½C‘®X…üL‹Ö-ŠcËkí…±„ðœ¨P*Pc\0D¡0\"ÙWG‘B€OBÀÊ°BV+n%i¤UQ@‘]	ï>%üAˆÿ~m¿Á	½Õ=7x‰±ã8êª'‰lý_—	â¦å\$å¨\n:?B€NO©´P]8q·>¤Ì×ž'e´f«¯	Æ\\[žïXó ¢QBôìe\\{L¬é5ÙmZYü”\nîŠTUäÂ˜ƒ¶]Lr¨¥g HŽÚ²^„NÔÏ-±0÷tbÏ˜iM!Ñðáš8S¦ä1œPÈ~OÝ½›³|™§–çÀTi¥¢a Ê¼¸eìÛ°WrÄD¥´\$™M©¥ú,SƒšaÇx’¼––Åýôr#²ÂØ{ç®‹¢¶lÆÃUªŸ’­Ëç¶Ù%8§…c)e±º`(¢r 	˜uŠ1P;DZ9´\"É*(»Év<G×¡ß²(C	\0‚Œ¬0Òo²¯6¾ˆœá^±¹Ïê–­NW_@ô\0¼2Aþ› —t€\"	u§â0ŸÚ‰ºÕvÃu=ÖG=ºjòk<¦©|w–¥°‹™|hõÑ¦ÔC³UU­Y¯DN¹¨7cV·P¾VA£ÁÝ2±R„Å¨ËÎà¡’rVKIy1!gÅb¸&BD¼ûÙ3m;ßÃBÓ¹Ú\0(+†PÅ3SÁ*ÛÅp2²'ežûÓâ•·*\n•K&[3\"@ïH0‘Cèy²'¼QuÓ\\dØÉ™S.^˜ÂcB×Hýí+•ÊÊ> E´¡-¼¶™A”_˜ð„.fîG.×x[ r±tî¯7ºæIˆZ­˜ ½èF›ôæHJ¢Ó4<ã—õSÄ“údæ0S¤Ùx,ÅÁðE_<&˜±Û_n0¤“¶ŽÈ±hObíI:ÃÜ¤îèëÖìW©Í¼ß²K*G\"Õ¢€R“»ÊQ¹—ç<‹¡Rº?-éZÄÓgû‡vü¶ž´*«‹Þ/Œ®ñéwgÏÞo-àXçZõ^qùëšñÓ‡ð}KÍï=¨äÜó˜Õžfêx_~ç^akË9—ãÿò}×Qù¶Ê‹œ's¾yBÊ+7|Ò¦¼µ¯>ð_KÞóŸ©•ˆ6X©WS/ý<©a¬Géòù+÷e_ã‹èYwýoÕ˜íÎ<â–¾á%b¼¢˜f†l\$â¸*ˆM„ÀÎdÞ@ÌŸ!*L‹”pAR®4#Ávµ>%Ö´úïêª0òa`™†+ÂÀ â¼°1N†ýïÐ±N¼wl¤so¶'FðLzú-pü®_Ixº/ˆé.¸èp©òö/ööo|_n*Oôx?	Vüp‹	¯;\nJ«\nÍÇ7&@ŒÁ<3ØBZ‹„dç,Q;¡\"ifq#¨ûð+pÐv0üÏ,”FLíí	Fœj¨Ì:1bq0Ò ñ!'‚`\"rÎDèIKª¤ð¢ýŠ ýÄ<±D÷/–gOÜlÄì&ò÷q^CíóÌ—1V¾0Å\r\$v@­ªÄ„H(çÎXø°ñ~O¤~µéËÁ:ål´ÝqƒÑ†Na;Ñ¬FÂ=;„é‡pÌ,¼ª\rYÁ`úl¸ÌQÑoÉc±ÎBqZ>1ÙÂžª#LÇ@I PìúÐ1ÑŽlñº=‘q Ñ™†\n	Ô\roÏ²@!Ôu<ë4&Ç#'RÅ¡niáL½kÛËàþcàAë¨#ÐÜÎ¦:šOøö‹°ðAjÅ\"?hK¡a%Ì[&0à€Ëºæb\0æÑä»\0†€ä\r€V¥\0Ò`Ö¤¬Æ†h£Œ}â\r Ì}eô( Œ­åÜª6IR¬ ª\n€Œ p”ˆJ>îtü>çÇX\\#&Î˜Âî®»Æ–¼\rƒ/Œc+rºK¡hafI®J2Ã0rìÖKSäã&Ab¼,âšÁ\0ræ²	ŠÈ€åŒ5ã†9m¯4(¢ä&ºB!e¡fŽˆêÄ-)‡ÚoÃ‹ŽšëòþD\\!‚Q0ÐvéïÄrrC63tèÎú`¨9ƒr7£X5ÊÎªL\rààŠðÆÈó9vŸÏ\nïX¨¦¬¾æ²4.ÈòP\"*OÏPNÉ3Ödä†¼ÚÀ¬ Æ ê\r¢þ)# ÍrôFAmÆš—E4`ÁjÍÊSj8†Ž'ê\0EolòpðOæk t/'<!QUe(DË^jC¤µíôÝdôCÀt°áB>\0";break;case"lt":$f="T4šÎFHü%ÌÂ˜(œe8NÇ“Y¼@ÄWšÌ¦Ã¡¤@f‚\râàQ4Âk9šM¦aÔçÅŒ‡“!¦^-	Nd)!Ba—›Œ¦S9êlt:›ÍF €0Œ†cA¨Øn8‚©Ui0‚ç#IœÒn–P!ÌD¼@l2›Ž‘³Kg\$)L†=&:\nb+ uÃÍül·F0j´²o:ˆ\r#(€Ý8YÆ›œË/:EŽ§ÝÌ@t4M´æÂHI®Ì'S9¾ÿ°Pì¶›hñ¤å§b&NqÑÊõ|‰J˜ˆPVãuµâo¢êü^<k49`¢Ÿ\$Üg,—#H(—,1XIÛ3&òì7ö4Ù»,AuPˆËdtÜº–iÈæž§ézˆ£8jJ–’\nƒ*P:-B°Â94-Ô»4ãJ\"òŠcZ¯,(ˆ0Â»~6 ò\"Ã(Ô2Â:lð¬ã\\P†ˆã(Þ6Æ\"–î9lZî(ã*Vî£”Z²!°”(Û)KP§Š_\ré¬V¤Çƒt0ôK`(IƒHÔ:»ëø  4#²\\ýL³;¾•-AàÂÉ8Ã0z\r è8aÐ^Žô(\\0ŒƒjÏ\$…ËÎ®4€ð¹ÉHÞ7áV93Ã¤ö/µ£Ü5„Að’6¿r2â:xÂ@AxÔK-;D9²¢˜¢&;#*H ŽÖâ’âãŠRË¬†X#­†b•c“¶¼¯këxÈ ô2Zn=¬â.’6à½ãª–—±C\n¸µ£ @ô»*\0vÝè Î‚^wuà:.Îâ6¢€\"(h—ÕpšÔ Ž­@\$Ã.Ž€Pˆ2¤ª9l%ƒ¨ÊXþ#MXÇ3\rèh‚3¸×¾O‰#*¸Š¯ìØæ:Ž@P¤€+óÊ•Êë`Ô•\"Ã¥²9CÀUyEBá¢ÌâÍ&Œ¨æ•¡¹ Ø65mk*9Œu¹]„¬¯6m\r+ØäëOÃž÷Z‹æ|X¸D½\0Ì —ª¸höÀ4HÎØ§gg'Â¹‚%½Þ³	.—ñr<È4³lîP†Ôã‚Ç¦B*QÏB’—\n#×\næþ Vó.Ëã\$î|\$dO*9œ±ìŒ&Êã0Ì6Quøè”ÎC:þ*\rè²V7;-*:Œc>9ŒØÒÞ7¬Ô¨XÓíá³¾ãrswQCv2…˜R’!ëšl³Þéx†)ŠB5l-@•3>M}\08>XÃk)o<Õ6à@‡¡Ë\$)hôHò@g?¦UõbRpÒ3)A†MQ’ðÌXÛ));à€ ¨•žøcRä¤2\$@“ÃOdéRžÒÐƒ:­Uä)™÷6»Ä)IÐ—¯4äÃH.^*5z}Êá–6a¨‘’TÙ\r˜(såwPð\rñzŠPà4'”öŸSúPj;¨x\\Pƒ’SŠALFe(¥”ÂšB\nq)õB¨Õ+.R!+t¬‘€hV¬8•‘£îÒIyê®\"Dd.€HŠ( !å¬vpGƒÐ8„aä´×àb¹û?¡¤4†òÖ[S¹B#ÇÐËÅƒó(QJ;C@\$ô¹þ@\0€§ÞC‘ƒ€~„xÌ¿7’Ñ [z(c|aj²\$ä¤•’Ò^\\jW,µ –\0]ÁØAÄÚ)&²jMb±¦'F¼…‡“ Þi–6Ä0¸®ãPjŽ0qcÇ‡\$w#¼65Ä2D®\r9©%äDÏ@¡\r‹Ù´Ša<)…I²ì¸ pí\0_#X®ëËŒñ\r(8Œ> äzOÒˆm´¸ÓPÜ‹*Ð l¾>£†‰%!öŸ`)ÞÑUDÙOØoQ‰w–ZTÙ*p[€`©1 	÷U~KÐÚ®RŒ9¥p±£\"qI:1R„<½Ø˜È¡h\\ÅQ1Sp°kár_Ìi€Äªr¶gÅwMd\rYÐëNûX9¡±©â\\„¤¤Hn]nL“®vNÝinUŠú¶Šâý´DhŽä®‘ƒÈnLk¨P’ÂÎa¦‹ó;éÞ˜9ú%É#ŽoNÅÉQµDŠm¼\"¶d¥ÜÒzbß’äpá­Ä‘ë{q\"d\rïX9ÎÔƒmPK¶á…E\"ãÊ ©q,2=%¼€Â•‹7ócK+<©©:LiÆœ^‡Õð¿K½43ÈÒ«ª2²A1U®7&‘Óhì8>´\\s–Íu¼Lüf•»!ŽÕ#È¼\\Ë%¶Â+¸úyº¶‹Ù\rÁ‹ŠdÐÝ\rIBCn«|ÞãvžK€PÅ²e06¬ÙÒÞg×í¶Ë9}[oÅ¦ kíž\"Ê’QL³§Àå¤+îZm#Ðv‡ºÖ(Qkk0!«´õƒ%Be&\0W3°î]›gqÓœFŽ…JQÛ!P*†\nË~›AÊÍÃƒ¤ÃD%Ê\"öÙ[:(%Å)¯@^S—¢é]aÍ|4„u.¢1‚Ì]2ÚS¹ÎÄÍORNà'¡:—€\\/›A.Ö\"¿Y˜R™õ¹G#ÚëS‚í}«öÓØº×d¢Žöe´1²Ü·k9„€[6ÀÓWt»uÝ¸v	²ÚDSZÍKº7\nÖ[°ÂÂ-ß´7&ë\r{´’mè_ÚYÙ8¡¼;µ’btÃYlx–HŸÄ0F8H—áe_JÒ€kâÍhIrÔpÔn¬OÅ­%’[oíö²ÉœpÖ\\ÖkB<gëìÒØéeeÂÌˆ&19­Ap¶CcpÇmÝ›d‰yø°Ë‹çN‘NvµG›^Höou,ÜÆn¬¶Sœ;xÉ'[ÁÝC\\bnÅ2f}ìØ6d\\k‚‹SG /†—’Wil¸Ñ\$Ë0Ðó2y9ˆtß5—G	aÜ;È9Ÿô‡á<aÿ3JÈW~ìûÇzÆØàÙMM’àM~>%\r\r%%ÿaMP(jDØÛ>ßdKVy¹îG®‘ÐÏ:eÁq÷`KÉ”•d5«÷wAÉvž±ð}•¾º>ôˆõ‚ñ!+ëÖ×|ÿ¢ú»‰ÄßAÛK?ðy7.¿wl½T-‡´ö>ÙÔ}“këÜßùVçßÿ¥wjªßóuÄQ?¿8ÿôß‡ÎÔÍ´”¾ÄÃpÊ\n®.(\".¾é‰¹\0ãÇ%‡pêÙ\"^ÊiÂû.²\$Œ„È„dj#~#¢PÃÃTÏP4	N]éT#Æ\"\":Ñ‚:sÇ¿€çËÈkïN#`òEéL,Xcˆ¯CÚ)iJ,ï8âƒ¤·©·î^(¢ŽgÎ000ÈÐJ,îºuL¶oœ<«8ÉÐP\\lÀB@Ò[p(ùÎ›ÐÐ¸Ð•Ì_ìbøÏ´›‹¦º¦9C¶0,ì5Pú‹Æêlê\"ý¢I‘rŽÔ›Ž†Zíæá,ÁçPßB0¿eBÂMhœ,#Î!±ßiÔMæä6c¡\nÎÌúkl÷/Çüÿ\r®£ÑNþÝ‚oí”#æJeã·\0æXi©oúZOÏ¢<{%G‘Šøñ‚ü‘†;`‰Ô²/H`¤CÑTú¯¶AÏ°íI;`¨í(ÿ*á1—qÄh`±³\$ô±øî›ÎlW„3Ã˜ÊÌ½°Þé±øË\rI¹ \$™:<ÑÈË¤“±\$Ë‚ÈËÑ*	„R-Q>FdœÐÎ—Î—2J¸¹Ç¡ oòß¤'#N)ÎšÈ@ÒÀä/ÌÝOÌÏ‡å\nð]eœ/åè3/È6B‚a¢'..Ô²x»ŠÞ}E‚6q€ÙÒwmó)ƒm(\$H;'EÜä&l–À(”MP+\0/ìýÏ¾Ùoê×eÖÿD× ’Á,ÍV\$€†X Øj,\r Æ\r`@Rê¨è<VÅdK2Zz#²'£82 Ú²åÞ2§È\n ¨ÀZ\0@.(dŸ\0Î\$Ô¶¥Ð#+HÝÓ*­î ´õ2®38ÄÂ#žGdîwj\\Øó@›/ÀÌ&t\"¸Ë#ŒZ¬–	ÂÆ-‚öQCŠÉE®8Îî.ò(´£Ú€s~Z£’.ú,d²‚DÆ%Ä¨Ff\nºŒŠiJ¤}Æ2£J, ™;gèFlâƒŒF4³Ôìîô]àêÆ¢+‚¶#ü4.µ5§&÷ËY>ÎÃ?~\"¨ÐLä¡>ìi=°ÿsø<#X.^2d[0ê(\räª%PÎF•?ÄM0Ð<¦bfe®ºäŽÚcäœîdfù\$0õg8ô@æj+(Fr(&Óà%ãé>Îœ¼ÊB@Æ ê\r 	ô&QSÐ=À‚-‰Hr½ƒÇI\"fà\n†Í>‹o“?b<¦£ä>Ô@ö‡Zµs<<Ô\$LÌ–ˆ¢*G¨T²ÌÊ0£\"”K¨uÃXB`";break;case"nl":$f="W2™N‚¨€ÑŒ¦³)È~\n‹†faÌO7Mæs)°Òj5ˆFS™ÐÂn2†X!ÀØo0™¦áp(ša<M§Sl¨ÞeŽ2³tŠI&”Ìç#y¼é+Nb)Ì…5!Qäò“q¦;å9¬Ô`1ÆƒQ°Üp9 &pQ¼äi3šMÐ`(¢É¤fË”ÐY;ÃM`¢¤þÃ@™ß°¹ªÈ\n,›à¦ƒ	ÚXn7ˆs±¦å©4'S’‡,:*R£	Šå5'œt)<_u¼¢ÌÄã”ÈåFÄœ¡†íöìÃ'5Æ‘¸Ã>2ããœÂžvõt+CNñþ6D©Ï¾ßÌG#©§êö{„Ÿ†o6væB)âˆ9«Ã˜tªjÂ´”(É+žŽHÉ±ˆZJÉ=oj9)C*d3/CI†U¡¯Øè<Ž	#\$“0Œˆˆ¡§ãò0ëÐÂ4Á¡8°&h°œ9/xÊ7¨î2Bb>’ÅJj0Ži ó\$£h)¡®\$(øÂã›¬0ÊB¸Â1 î¦¸ TVÁI’ ’7%ã;¶Ã£ÃR(çÈä‚6€PxëhÌ„SèÝAx^;Ñrb6¯Hh\\»ázgI?ÑÈÒ±áh9#ƒ¥\0/¶É8ÖÂHÚ—J)˜èã}b7¥-R	&„˜£#%iªÿ\rÊœš¹i\\æ1«*:=–(ê:Ž@P¬¯áè8I’mÚ£¶²OlvÐ'+Ã­ª4¥rJ”ŒCÊVÝiÝ	oÄ€ÆD’ ‡ H#rLêBë[\rÉä‚»Î³0Ê3#¨ØŽÃØ:È‚\\Ã¨ÝbâìlPÈ‹Iû–º¸˜”¦»XÌˆ‚3%ñ*PÃŒ±+•i(@ÂŒé^ŽDØËÚ6É`æ1·µÐ˜\ríhå/Ì+®\\Èé.s{3ÉuÅ¯l²\"œÁ(ºïÔ=/Î¶6ºû&GªSJ+±Œ P¤2Ì\n SBÈˆ£Æê9e6Ûo##F×Ml§¶C^/‡Ú,Ê\nê%ƒxÍ–Q©¨«tM³}“X¤ãÊ	`Ž£Æ’c6›£kÐæèÙœðÂ3Æj*ôª%4f\n•…˜RÜN¨èÈ¼¦)Éó–0:Yî:ŒË²v!º@à®Œ·7-Ì#nÜl’7ƒ8ÈšŠŒàÝš„‹Ž:À¨@ Œ²èŒk\0ãÚ\r?P\n­HC;ê±W9eª“W	^*%Lâ2ÒÈûÔ3ÏYì.b¢`Ic™2äÝ\$uÀÓÅ?é!§þ“ëP\n	B(eÔSñQ¡ÉG©Å\$”¡ÿRðáMe8@”ú¡|ê‘º%úªÕj¯*ªÄ…hOœá*\$\r™6Bö¿‰ªT\$‘X“òˆ÷Òøt\r&y’>a‹ùÂ?°é\"F’ŠP]ù@\$G\n™#hfÈ5¶“¨AUwd]Þ§†ÂêË½X@›“’vOS¢(8nøá4{ƒ£ÈyQ8 BjH y3GH4•ÂœEIšµ6EM‡(Íƒ1L'¯Áùsbpƒ/WÄÙ­‚8MB€O\naP¸C®lÊK)²eä˜¢äìÏÜN;%ðƒÊS¤’šA8’p3\"Yß¨nCh@ ÊM\\p h…Öòbµ‰ÀhÏ¤ÓÃJuÂ0TŽÅl¨ªvQßL²•ÈâPŒ]ƒ)x(¤1'€§êa b\"á8P T´L@Š-KÔ—†Ô¶”‚ÔK„†ÒtŠLÙÊD71‰cð~Ž'é¼'†Ù¸EÃkáZGˆò7s˜F#„‡˜Í¥&“VÐš`eD\rGñ¦d•Sn\rö«8RX1‘\n1Ñ›´Ž‘Ô\r+pÂ¥2Ló´K8ˆ\0002 8–¬£œuŽêZo‘`‚IÓ³¾ZÁ± J†uW)‰9‹îˆSC[+hS\r\$(/µNÀÒ\"TX„­<¼¦¼yj<…Ž-¬ƒ¶BjMÖ5k#Ä(”šPÊÖ’Ô±æ\r¹–0ðdSY2¶å«®\"ŠaÌ„ü¾×ðÝÌ’áž…†W\\Ië\nÈ.é¸†‘`©tÈáÇ¬\n±Ø¬ª Éz1n\\:õ£r›!CUŒ7º0È´0E3Ëø‹5D®…ž­Ûdtd*†®!¨k#S@@Ã™¬ovrƒ¢ìðr\$@”‚ðA…¡^¤Ê™¢Å0‘]€ŸœS¢¼L«ßin\nL€œ>C\\ñí˜‘â|8Gä¨eb¼7b_	Œ‘Âi!‘¥·…Œ‰TöÄ¦]xá=‚]\$,!³c3³‰_À8'‘WCYržUÆ‰–ò^c\"‘”b\ráÜ‹”‚'i0&G37ŒæKgvw6xÈÔ&¸ž	¨V>É6‚Ð@„8ˆ';Xlë?1–f;†¨82éâŸNAó­×£f	b2%þ=•ìæT´9R\\AÇ›^b­Âé’aÊÏ¢?¬“¡\\e¹®˜–jŒÚª§¿œMjq_%lpé&kÍˆ·uË\\Å›\$ÁÒê`£kq[9ðˆ;í¼çzÎ¤bŒZ‰c½mÀßC¥;¢š\n\\—Ž¦ß·'÷e³›'í±*_4{ÐPÎ	X)\\g=)Tõq±ª.È«­T–sªOÃmUàÕ~Àm ×¯8žõ×qe¶k=UZÕ¥:ûFôñ~9Èžû^l‰íÞ\\–s/eî¾‹+ãWi†tÅÙ9ü˜ó5Ìóç5ÄÜßÆòÎõåÊ¡70PÎ=Âj¯J¡]6çq­îÆ(GSéÜ“¤‹‚QqÒ¸¯~¯Ø»K\n+(¯<…ÀÌ~æ6úD±˜5ã¢õHÑ2eêÝhÄèõ¦óßì„*…öXÔpN?y wdŽšôBK;Œz_æ©tÊ™®!‚#¶­ÔmùINÁÚ2+N×õbK V§OªzÚØú^¹´ýjÕ¿Mâù3“kj•T&·ÉUoéµç¼_Þú2úþM¦ý«€¹3á?g¤÷\rni-Í\r7va·w)Ö>ì<¦†“¿zë'?F¼#Õð®}{Ñ®Ñã‚öþ.(ïy/IcLóå5ŽaøGïùlcùîßžýŽdý+ »ƒ˜mç˜:®ä³ ÊÀF6žÏrõ„©‡FÞ¯â‹0bå\">ånAâgnTl#¹Ð2º%ðîoÈ÷PNýäìë°V÷Ð7P_Ë®/²õPU«¨»N*ýpuïŒÙË°¿%¾þÃpxp&F\n‚tHš¾ãÜz°Rõƒà¿’ÙO\n/\\/ã8bO ¤ÁÍ°1¢&h®¶¥˜!fF^#Fý¢¦5\r(Å°Üü+|èÂJi.0 Òtm^'f5Eþ/ ¦Ò†\\ÃÐJ/€Ìµ Ú*oÔêà†Y€Ø`Ö#ÂBi#ø8MºÞ'\"'¢d!L’9\r`ò‰êV'Ø bF‚ê*\n€Œ pEÇêwäê&¬P#ïˆ„B8Çiüo‚Ù´è±rÎñvñz%oX#4(\">\$/4Ê‚ Xj¶óÀšV€ÒÌ&mâ„¦‚,\$d{O#ÇÎ\0EÃSD€›ÑE£Š6Y#¶˜^FBâAdH¬ä‹¤j˜Ñð&/¾Êbä´dÁ&Akf#£c„(\"æØk!í\"%Ñìãa!âŠlêðF’+ÏXÙäR(¯n8P¦áMˆ.B¦3ˆ&\$l„ÄQ‹XÚ’ðã†Z‚,d0ÎvBŠ©dÒÓdêÛ¨fê`gMæ„N¦u( ¬2¦ÜÇ˜Ð@ÆYä¤¦btbB¥æ:ÀØIò°_eü)‚äÐÀº¢V/ ˜2Ÿ\"cx‚¦Kk´,qöªòzyR((b,^ à+ÅŽJpH¬§&¦@àÞ¥€%D`	\0@š	 t\n`¦";break;case"no":$f="E9‡QÌÒk5™NCðP”\\33AAD³©¸ÜeAá\"a„ætŒÎ˜Òl‰¦\\Úu6ˆ’xéÒA%“ÇØkƒ‘ÈÊl9Æ!B)Ì…)#IÌ¦á–ZiÂ¨q£,¤@\nFC1 Ôl7AGCy´o9Læ“q„Ø\n\$›Œô¹‘„Å?6B¥%#)’Õ\nÌ³hÌZárºŒ&KÐ(‰6˜nW˜úmj4`éqƒ–e>¹ä¶\rKM7'Ð*\\^ëw6^MÒ’a„Ï>mvò>Œät á4Â	õúç¸ÝjÍûÞ	ÓL‹Ôw;iñËy›`N-1¬B9{Åmi²Õ¼&½@€Âvœl±”ÝçH¥S\$Ñc/ß:4;¾õ¡C ò80r`6° Â²Zd4ŒŽúØa”ÍÀœÁŽƒ²ïã*ÊÁ­-Ê :Â˜ò¨¬Ìå:ÏÄ…-£°Ü\nó:9B°pè»#Ã+rå·«dn(!LŠ.79Ãc–¶AàÂ\r	ðÌ„CBl8aÐ^Žó\\Å«bô´áz—5	\0Üƒ\rãp^.£’æ:KøÄŽÃXD	#hà¼Á’`xŒ!óìAƒ Ð7Œ‰Þª@)Š\"`Ò%/ ØÞŒxÂ\nÊ‚\0<C êë­KV;\r#(îU­R1¶xœ<¸ŒZHŒCÊ@„¶„þ¢c|œþB¤!	k-º P‚:¬‹`ÖŸZlpÊ3#¨ØçËpë!SÃ8#\"©hÕ8°˜Â6Ð·\0è7-—P¦»Ã@ì´3£k2 Œ\nÑS,ú¥±Œ\r¶É!6jœ¶C>\$2C#Ì¹]wØ×¯hæ1²L\r2v–27M0à‹HëwZUÈÅC\\H9¥l‚cPÊÈBzFË9Ãž{ŸÔqô€ èÙö€(-5‚òµ°áƒ°*[«·ú‡d\rˆ›ér§£è(æCÓ|\0002…©˜Ø	ØòÜ#z0¹C0Íª²ÎÞÛhßIÉUâ*9Ž£ÆþŽc5ÄŽIóxXÏ×°Â¶0ª%#…[(P9…)Hª3#bü¹¦)ÛˆÞ„©m/†9ùæœ0°hÈÏŸ6`Pª:IÜòCÍˆò„0iH¨4b\rÌÒR¾8‚2aHW.1Î(3€ÊR¤­,(³øÉ8Á÷ÍD¥&05¹ÖÀØŽwm¶Ï0Îôx²*,Ã\rË:’VTC-è´)†üŸ¤…*­ô°–ƒ¢\\KÉ1&DÌrhMIÈ2¦Ò–œ’tZ‰Ý<§¶ ŸÚ²„)h¡õ¨¢è£Tzd¢›ãJiÝù;5f0ç €ä’¡›í}áÑ‘BvMˆÀm8aÙ¶ŒxC\"‘€\"””—æSÂ°>eÃÅóÜ|b§‰ä‚4…\0laB„ü šàPQAIM -Éß”²æþœ§u.­ÿ?”ˆ¾H0n‡fD9®÷‚JÊy/&&I›JO×¹ï)½Erúï_¹KG¡~hºDCËz HPàÞÑ]ÂŽTÄø8®sÐƒ‘žzïf=™’˜Òr––FŠ—2iù¤lŠ‹€ÒîšCÍð”2ãñŒ\rÎ\\¼9JN‰á>>…2-ŸfPœI0gUdzG2üOŸ€iCÐÇ@Ödˆá&äˆ’I’@TÀL¤™«¦‚ PB)A5ˆ†]%ÂSšÈÀ¥”…¸ƒ n_†P#´P¾ZNT(@‚-!\"„À‹JJËIri7Åæfƒ’5Fá2l®‚Üº©ãƒBl|è’Ö \"\$u¤‘t*™õ9xN¡Õ¢¨ƒA%-*¬ÇR0ô\n{Smì	èºj»8Œí¶ÉWRP\rí09žc¤›ài.Ôp)£õTÚáì‘ÀéEÐ`A£„rŒd`¢¸\$îîX\r„±¡àOÉpTðTbg‡R\0¨]¦ê)\r!é!2Ê\n¤§ì\"Kš— ª«¬i­\" ò^5¤R*ÁY*Eb¬ìú¹0æ0–µ–jan\$Ö\"d†„ÓL[Õ©Èµ	¹Z._hÐ¸y…¼*—TÍÓ7·U\0¤’\"9’†dp¥±øã]e È°P¤¶ ú´m¬!¥3zz‘™Ö¤áP „0%­·?§¸ÕÊæŠIX… 2’r2oì'…·¬P@Ê¾1A‘b)F`Yncë`3D#œÂ[—ÄF.\0e`ˆL8¦KbÌ\\1†2ÄÆ,¡Å¼oŽbéˆ)Œ¥z2¹¼iññ<p8z{ãÐé‹Iæ/	`»‚«Šò¾?Æ¤%†¨„‰“)Î—!Ýµ””œHÈé¤º~gfb	T¨dÖzcAHR0A\\2†*&B¨±¹–!ÿ?A}’äžß*²jÃ6-á!–…b³IÙ1¶mjòŠ’RÈ…0¡×T8ó@Vª›Qê¥nKÙ‹‡ºµœäŒó­±.š¶²ëƒ7uaa†[`+†@gãDØÛ6S¦+Ë\")Gæ¥¾D`_Œ97åBG4<…w3‘«ÀënÈ÷v±äGŠÄë’}JËÖÚÍ¬úbœc³1€¤êiW	L¬¤óM]'§Ž©Q¾SLa “Un¬pi´uã¼O|³YèÙÝÛ½Øœ„”ò‰¢sŠ âµ´;Îa²¹6dÅZÆü\$½i”MþBW±kœpó@M÷Îû=Jf³Ð±9ÈÝ\$.»¯FWá	6ZÓ‡Öj,ÏèÅÙ»}3}gÞ¯Øº×Læ]zåº¦áBÔeÏœôÈ¡Å#Nô*óA•¥¬÷/;‰§Šˆd¡ÂÙrq©§îÍÍ”÷I·Ü!õ`'o•\"|h®¯v)¥>8ýØ.ÇY'äªç«‚ðÎ®•ÔÂÞ7€.‹Ê¹Â¶¬þ¿›]‹ìÕ—°Ö»Jz©[Rmâ³·ï¦uÝaðáŸdç7ëäìŸwË=AB¿mz¶˜@Ëôëë|`¡L6-†\n4äR.HØå‰Ä¥‹ºå:Ý)3|ï=?g>ä¾È½óÞÔ×ùŸÑ\$«·u£{¢#¶®búnä„­†ˆÿdúÿ¯©\0ð( É\0b0eV@Ä0\"œm®H /Þå°.„ïîú®Ø0@×”þô(0F„ðlQšYî¸öçbÿØÿâdßÐl(HKº¼Â¤ýÐdY«¼8ðJÙ‰@ãðløëŽ¼«¾:Ðv0 @@¨B€	Ž„„FBP‡Ïç	ÄÚšž†0c2¾Ïì@Ž™ã¶žB”jƒ¬»¢œ=†ä«&\"ÃÐrÎ®¯¼éø—*è(cßò	e–Wå\$’¦\n í\nÆnˆ¬L†{ïéèd\0\r€V\rcÌ!=­¾™èv‡ãPgi´?¶óO5iž\n ¨Àpn+¦O¥ _\"Sh\r*7ípË®£ñ‚E	èÅ/y\"SånÚ‚–ú0\"Î-Ê:ÃŠÔÄ<O(8ÍàHt4ƒ†ßCX\"Ã]ê*0(æ£¤NHCj=šåD:hF#.\\Jü0e›\\ájÄ0ƒÞe1„žŽØQúâ±þ9Æþ€¦ÙÒ¬.9ÆR\ré ‘ø(PÀú\n6R0áŠÆ©Bf2*ì×öÙÍ 7¯‚meö»NøÂïLØC¬	©^-TQ¼¸f'&ìüV.øÖ,ˆÛBw ê]F…\$\"Ü*\0\"Ú©”\nf|!\"e«` Œ©¨ÂÃ\$çÊÞg2®€…“\"…ã¤Þ0®€æPfJ\n†-h Bd*\"àÒ";break;case"pl":$f="C=D£)Ìèeb¦Ä)ÜÒe7ÁBQpÌÌ 9‚Šæs‘„Ý…›\r&³¨€Äyb âù”Úob¯\$Gs(¸M0šÎg“i„Øn0ˆ!ÆSa®`›b!ä29)ÒV%9¦Å	®Y 4Á¥°I°€0Œ†cA¨Øn8‚ŽX1”b2ž„£i¦<\n!GjÇC\rÀÙ6\"™'C©¨D7™8kÌä@r2ÑŽFFÌï6ÆÕŽ§éÞZÅB’³.Æj4ˆ æ­UöˆiŒ'\nÍÊév7v;=¨ƒSF7&ã®A¥<éØ‰ÞÐçrÔèñZÊ–pÜók'“¼z\n*œÎº\0Q+—5Æ&(yÈô\n(üþXƒÆ¼<Ò`zSq”Î•®OôçŒ¯rBA ©ª¨îß+Hz¸\nŒŠ7¦ ò8 O»£3ÉÂ	Ã¨Û¹#ÓúÃŒ+ã|cÐÂŒˆCJ€9Ebš¤B8Ê7Äã ä»Bb²áB“5ƒÂ€Bœ\nšOcÃûÒ\$FiHÞ¼IêÜŒcCv6\rã;Œ9.[š0®®ZøÖh(Õ7ŠÐÈÁèD4ƒ à9‡Ax^;ÑpÂ2.¯èä\rãÎ¢ ðƒÓ`Þ7á[I£¤ü/ŒCb<5„Að’6Žb\\ˆà^0‡ÐPæH#CÕ%k`Ê\nbŒŒƒªcxÖ0¦-<·\nrê5°ˆëZ¿6Òë¡p(æ†ZäÝk!í¦¢MÂt02È‰Œ‰3:!-Û'\rNãyÝì¨î	cxÙ(Ðá~H€Â÷Bê§HÜ1²;‚`êrý4cjPM§ñácYà#£pÖÓ­Â\n8ÿ9D¢=YìX3ŒƒÒ£\rŠÒ)Ò,#žÕÓ¹\n1Ëò2ê:0éHêÿâêR0€R\0áÊ<x+§ƒÎ ¡‰Kúÿ¡p0çcê®ê> ¯–£šÁ»Õý‚&Cxè;²¸Ddç=÷±'O¬ÆäÌÛÕÄ9Ì©tZðn{ªåÂ\r6)ð©èéw 6TÉ3\n¬àÃ¢³í+Ž‘µ}U^>9i*uÓé¯Y½×Ù7o“=ÀJ<ÎO÷fBº`PÙ!<¨*„„xÌ3\$Oêm¬MSÙ4OºV–Ž»üË°²£AèÃðÂ#çºãcû*Z¹¨7•qanX\\úƒ'¬«Œ¾ÏoíüÅŸ¼ø1v|‹l9>sXúRÉ FH)v¨Ö_›õ~ïaí‡¸ÿžúi|-ž¿ÐÄúÜ	Wð-÷@àèM‚qsD82%àî@Špk\"\0€!…0¤rÀƒÇ‡2ROÐfR!´:ªgcãÏ0\0¶>ÆˆI?!äØ*…N­âr>É°7p@Tb6@¯‘¢)Ò( O =†TúŠ‚©4e\0:#`Î¬•¡6JAÌ5^Öáð‚|o±è¦´Ú&H\\!‰,P˜µV›ì‚œ”¯¦¾Jãü‘0æ5ÆØÞ „PÊ Ë¨µT‚’êµK)…4§ñ|T\nˆ*ELÉ•I²\r*±W1&}¨w‡áÌ7A\n®	‰>¥AòÔ:AœÚm)D– JI©ê'­l ²òCisY;î€H\n`½ðÞ€Ýêlà(b‹µKœîžÞ®)Ò±/&\$Ì»4 Æà\$I)˜ÈÅÎ«ôØ}K“|˜ÎZ„‚ \n_ÄÞrfŒë	“±6aHe…qž+ôÆ¯âcg*h5Ÿ\$cUÁ9'mbÌrDŒCõT¿‚\0´CŽY:.H-â“_Faxw&\nl<ƒVF› EÊ0Jr:ùm\rd|Ö0ÅŒÕi[½14¹’z6ýà¬9ZÅlçÎî&X±H)PUï‡W¼ª\0™¨EÍk†êj\0f\r)¨ŽÐpÕ_ê Wõ	_ªÒFj[z¸&ð‚— îG\"J›©Ô9%Iïˆ ÁR€ZÚŒ¥Û¬ƒd<6“`–¿èdàe¹ÓÉc¸ÛK™@\rn+¶Y\$¯†àÝ[×x†î	%-Œ–C†4ˆ’yÝ°ù€«¡^ãN\n„9V’ š[Và('‡\\bœÕ£§`ÝÄxÍçíÕ7^â|\n¢2¤¤ð#ÉHmÉ>.!¦˜7ÂZS•®èù—ÂS3îbr›-`öOÇ(ßŸÛ˜uîÆ‰Hˆ*‘R;\\¥ÄÒ7ªü³á„#!]mGÕl‚Jƒì‘\$¼1Ñ2 ™àÓf Qô£c2áh›(dÄø)m\0aºtP×*â4CÊ-â¼Š”4£vŠ™nEg†ø\"HTgi!*…äaÝBsbä)v\$X1³5Å´·Ý>¼ÈçG“ò#aÑ §hQ¶|'sÐ\\ÀQgISR(™pˆCbL]€¶È7†*z®Â¦¡š>ôÂý3–P¥Y<ÓÒ‹ŒEÅ,Ž!¸sâí›öDÔ†fJÉÈ!ê1SÉ\"E—§4Št0%c°¨C	\0€8‡\\ÒAAWíUÉž àë\r)˜¡Oü·vØGîóîåy÷.•\"¹2;œ<îÌdñ)³Ûä‚œ—ŒØÜRµb¾àF«7Rê‚;È¾>½ê¦÷¼Oß\$·~ò?L7.ë2pAúpKqÁÊøáQG†\\7;Änï2†ZeSE&Îö¥Y(1Î\rÊxFÿ}Û{‚Å0ÞœÃŒ”ûOÅ©W7ç<sò®|ûæ‘+{fŒ\\™òø®Ì>»IÑ¶ýXª¯ª4P‰@‚¡yjl…¢0”Ð*#*„[M^Ïggán\n·u2¤	óÕîñ²HDžšÉÏqî\0d¸AŠ…	—í‘V:É8YD“xS‚BGR)¬#6	ƒ‡‡<<`ÖwõBê.x7QÅ¼#\\ ‚IâVŸÒ—Ø´©>\r9±Û“oC¹ñŽšâ“·ø©“JºÁÒJå‘ôå&Ð§Àô~ïàïÞïóÏËøe…Ô£ÝóÑ%Ñm4Ø68~hòCuçr~ZOËpPb§\$5H¦Ú|?[.º÷Jà:Øl»ü†Ã=¡j¦õ­HãÎyÆ7ÀÜÐK¼_¥þ\r©º\r¼&š/²»vÇ.úMFúƒÄøÊàùæ(,¢‡¶øP3\0Müù\0„L0D‚ÐH‡ãìne\"ËPQL\0šáÐNLË\\ø©8Ptq§%xú°bªP‚qÐ‰Ð<èW@Ú>FÖOƒÃí	äîãîdä/V~m^Ö êZPZø°.®pèîDâÂ4°Ç\n¯™\nàêî°Ð(ÔßÐØõeôµÍ&¶Oþ÷oM€_þÒª	coRµðêÒ-/‡ï¬ËOR­\n2­|\$^4kfM¤g\0((ˆ>‰Ž\$ãô æÀk¶l„-gÈcâ% ÜB\0è%£ôÐ\$,íÑ<(„0£YP\$\"Iåp-†ú˜ä\næÞäø@¢ °Ð	Äc’ú1{FÏí+©‹êÎ…ººPËð¸ù\0¡Lí4ôâø*qÔ¶ñÙŽ(luÆèvä!€ä[lê[Ã˜k\rvw§×¥{p~Â`ó j„\0ùÐ	 F ˆ\0{¯\0Œþì%§'b…ò:;îpF)Œiæ% Æ=C€8ÆˆËÅ~XãÄïÒ\"g:kˆœ@ÂEµk½\rð©p|øêVÖá­p§2…#d&Ò6ÖÆL9C™#c9(ÍdMÑðq@A*q+Œ7ršE¾ë\nvãTCd¢2\"haì]±ïJ@×-ãOO§’3.²Ý2ã)2 ù6N²ï0Å\$/òàMÀ¨Cp—(oPŠ“!²ùÒ¤ZåÅò?+Ó8k\r?³-2Q4ºÓCm\0˜7(•43SP#/S#m=4íA+±ôì\\jDdÅrj×ŽätDí“G!äõ «8M‰R!9”D\"­2Ã¤ö£vŠÀæWFÌý2ÊDg23±hHŒ¸\\C7;ÐpíDÔPº(RN20Á<æÌèàï\$ï?=©ã=î>!\nt0ú0ã6*£\n]‹ò<E¯\nSê\r2h8¶;ìMN\0äH#\"ö]N)An@à-Ï?`†H@Ø`Ö*ª¸(Oôi©š\$â¢c)Ãº)+\\1+V±³ýäØ\$Ãò)BØ/‚Sm¦( ª\n€Œ p&Î\"ôS,µXg¨6â”‚Ýˆª`Âµ4;'çI-à2Ò}”œültL®JWçôKÂ0éB:c2Ÿ&Ò5í@ïTÓMsDóÿ9#ð5L\$£4ãR™ÐM#ê;¯Æi¨ôª&ô‘nÿ,Nb„¹±b5P´-È^Â²Bó<;ìð(ˆG\0\rçú‘­ü›5*UÔ–·Ê•õ<Éµ.÷blu4À”¡õ-T3IT¢ýTï†ÿàà8F€öh7VU^51ùÑÆ¸¯:fŽïÅ~êbRg·Lí4LÀ¦\ro¿E¤’âê`õICoZÑt'Kx_ÉðZàÔp‚ÜHÊp(.D·„RòëÆ¼µpöF`0À‚(×?à¦…hZO²…kÉSax«”¡§4p?¤šIìÃ5þ3á6`ƒi^“eÄ¹'ˆB³¢	ê(\r¤a7£¾% ";break;case"pt":$f="T2›DŒÊr:OFø(J.™„0Q9†£7ˆj‘ÀÞs9°Õ§c)°@e7&‚2f4˜ÍSIÈÞ.&Ó	¸Ñ6°Ô'ƒI¶2d—ÌfsXÌl@%9§jTÒl 7Eã&Z!Î8†Ìh5\rÇQØÂz4›ÁFó‘¤Îi7M‘ZÔž»	&))„ç8&›Ì†™ŽX\n\$›Žpy­ò1~4× \"‘–ï^Î&ó¨€Ða’V#'¬¨Ùž2œÄHÉÔàd0ÂvfŒÎÏ¯œÎ²ÍÁÈÂâK\$ðSy¸éxáË`†\\[\rOZãôx¼»ÆNë-Ò&À¢ž¢ðgM”[Æ<“‹7ÏESž<¡tµƒ®L@:§pÙ+ˆK\$a–­ŠžÃJ¢d«##R„Ì3IÀ†0Œ‰ Âœ(óe¦pÒ¤6C‚JÚ¹ïZ¤8È±t6 èø\"7.›LºCbð¡.«¤ê®8ÊøŒ¯V	ŒËŠ1-¢[„2ÀR£q<ˆ:U\"²\$ªÿÅ#LVºK)ôs)Ëò¼d\"¹Ã“& +¤Äå ŒœÌˆ ÐÎŒÁèD4ƒ à9‡Ax^;Ñt06¯8\\ºázQI0æ¸ÁxDßC<‹?ãØža|\$£ƒ_9Áà^0‡ÐXA‰øÈÙ¶¯ð¦(É*ü²×ŒtÃ•5IˆûÄå6/ê:³pÄ±lk”•+ÐÝ Æ&6B¼9Yvl6'\rã²3³í¢[ŒCÊ„·EÔØBÞ6«Ì8^2#.,€Ü1³µch6[â¡9ãä\"¯Ðê6ÝzH\"šJ2Ø.k#^®´x.«¯¢‚‚l1ÛÎ0âá™Z\rƒ{½‰ã”2¼¸ÐÎ\0Ø Îtƒ\$ÑˆJr§©üŒ¡4ªä ãÈÄ‡¤ÌE*lpÝ|§ƒrWb`Á»àPÎíMìU°Ç%²“ý(X–~Íi%­Ž\\ùk­µ¹Ãb(ç¼KûT­+C–L4µÈÚïUòÇˆ£ÇÁ8ÛªV–êL(1MgŠo[ÀÎÜ±– ã4m*Y*\rã0ÌõÃ*p€Tfp‰¶)œ*\rêz<¿ìê1 É\0Í‡æzîÉ˜åÞ#8Â¼…ÛYºHP9…=xÞ5¥\0†)ŠB7¢”¨OZbTå%ë Û‡¥‹‹T·`]t²/¨Obö·bÝûµ&ääÓ†àÖlƒ1üRá¸3°@Èìˆ;ÉaFI²ôòi“â~*\n˜¤“Ÿr°'Yür¸	ª/%Å“öÜSk~p&˜gôGL0såÑ[ÂrjuDOl5?(¡2ˆê*¨Ðä£Ôê’S(”)sš¦”âžŠQ*ELâUY(…X•f‘U²¸Va…î=\"‰‰=ŒDà ›#&þ\"U\$„	d§Cž[a2á¡	ÅDÓ‚q(\r\0‚ 2ü¥˜ù²\n (3l]Ž@’r¼„ÌXs#Èˆ’Âp{ãg-4Œ—€ìùQa'Dáœéb”\n	C(²5*åRGÈéh(Ž`ÂbÑ#è>ä´ý.#¤€#T*œ‰“H€‘ªb)Ù[«SzgYq^?\$Ø2 å	˜n ¬ÄÿMäJó_°P	áL* \$j•Iâ—p €3¦æ´ë?Ô…’ã|ÖZ4×3AŸ9°gcü¼9¸˜64Ý+Y¢šíXÿª Þ†(pb.Íq^ÒkØ‘+*IRz­Ê+ÓŒø»@äI\"zñ4ä‘-²z§¡IaA±Qœóš‚xNT(@‚-H©A\"„À‹Tê0žÇ1z/eÁV’€P%ƒQ+CÆN¨Ar	áÁ2@ÈIŠÂ%¦°a‹2ˆQ›u8‡	¸‚ËºòËÃ, Ž`4‡„|œiÀ\noÉ¥Í¾9^(_4²±IM¸HIÏ[²…H1‹,\nä”\\Í–FNHåX·4–JÕKæ±™@\"(Ÿ‰B\$†dô­R‚±vÄd¨¥dnSt¯(|é©Xª_dœ•*	 »O¶Q­õË+0½'7\"¼åY×væÂ‘@¦˜’\nòU+-Š±pÆBC \nGåÄ¹Ðê@H\$®–g›“)uCÑÔ¥!”;Ûƒ2Ë.³C0ŠŒ1Ö‰ŠðZíÀ\nÜðjAuSÁµ¬’ð\\°ZÙ8ÕÁŒ»0‡NÒ¢ÉŸÕgL\$§ƒ‘Ã–}#|P‚„ÂŽG9˜€Öy%X­75÷’äÉ­i‹`I¬’ädÅ¤%«.“§4¹SÂ Aa 2âê‚<Ú’ÁÁÇÄÒŠ¹y¢pˆ!·¦ËÓt	(7®ÅošÍ^Nû2—æ0²áSÉÍF{60Ì‘\\.9Ï2,ìÊ\$Ì+)ù¿>gý &I‘HÿRóW`´>x§/N	èTêI1\\Îú\$æf\r\0ýtœ9ºz;j\r3¢M“\nÔÆTñ¨Ì{@\r,D›r(âdÁÊ1¥,ñìF†ÃBTúÑpN!;Ém2 íˆQö’Z˜„´;†PÄ‚õ¶¸™…T¦cÜHŽeæ0±“q-ÝoÔ“îâ(Uu.¬*æ*—bØ‰z/k“>’SØ^o§4\nÍ·­ž£M¤f;¦Rú¬tìËü²\\XÂðÅ£Ã¸ÝÜTd»lú²à\r÷E'[‚ô]Q¬HêÍ%ŠÄB+‹®i“›œúÚ¼*ÿ(ç¡¦VræbgH¦Áè(£qó¤B¢Ý˜7¥€ª†½H (Ö7‚žOdÛ]¢@œg„Y+MØŒá(H¨œvyíeØ+äÝ¹bqéUÉ¯uð³@ÛVùÜ{ïy@=7»À<>Ñ.¾tÐÚ‹DgÚ]“\$ßAê¶âõ¿7ëF:dsÿ“AžÔâ*~U¸Ç|äÞ“Óèê;²Òõx‚O,_\ny'r²QÖ®u‹*K°“Ýoå{Ç£6wš<geÙõ'’†})&§ü.–Iá‰Ö+Ïß&œ,ŠÝÎ\r>rP°gßÐÄ?JœúÏkˆýFã­³ïîþœcñ_:÷«Ø+\$¢ðd²OúµNæ°ÿÏrí…ânÂZZƒ=,Š`p\nˆ°\"(éð+ð¾Œ2mÓðrpBŒBä2\"Dc\$(¥â…L`é´N‚2¹åTÐŒÈ	Ž(°Lïnj€pp:tÈÏbáÐ|dð€Èp:†29F8++´þÉT®pŒÈPMm„c°Ÿ\nÐ¤È0‚\\Î¢#Ä¾bcðJ@é\rÖK&VaT_êUnÊ„`Ë\r0Öý:²F-PØÿð–äÐ>9C'ÑGiV\"¾+nÈï±	#	g(êQ9åðÄÂìÅy‡^Äæ_\0‰1*eïÑ(ÅÂ­ãÃ£•¬^ 	ª\n¤ÂLfã+éL›‡BqTp\"[(	\rÔ\rè>Clæ˜ñNq0€8Ç¦µ‡‚Ýcf˜Q0ÍÂ;Â@˜iFf&p\\ãTW/nn1ç¦×c6ô\r ò‘ÒRÏ\$sd,<@Ø`Æ=f\\bBAMÖC: ÐÄ®m1¦b*jNJ‡ÞœC|j–\n€Œ pû1h'öò*bØ'ÏÆ˜6qm\"Bš#„<RéJv‹<ÿBãŒÁ`ò½C\nçâ)†Ð>qfuj€Ñv9K¯‚ôBX'\0 (GŽCa†F (¢ä	Š>VâãqòœCÎsãbòëœ>0kÎD0Ç”^®Ÿ,´[…þ¾Ç²­ãe%ÒÀ\$Ü KØ–\$âÃ^6Oh0‡ºaHPËÏxr¥Fp‘l0Ç^7ä.àÊ{ ÞžQ‹ò“\nâä¥%ªd¦ä£2Xk/2×+åŠåªÐë‹KB'Î¦úÑRH&ô°#¬#\$’Ã;&O<åÆP@\n‘1¬\"óãŒ·\"êne'ãÄÒÄlªô<*øî‡6¯ë®càë\rPòÅE<kRn¯„3®ÊkàÎG\0";break;case"pt-br":$f="V7˜Øj¡ÐÊmÌ§(1èÂ?	EÃ30€æ\n'0Ôfñ\rR 8Îg6´ìe6¦ã±¤ÂrG%ç©¤ìoŠ†i„ÜhŽXjÁ¤Û2LŽSI´pá6šN†šLv>%9§\$\\Ön 7F£†Z)Î\r9†Ìh5\rÇQØÂz4›ÁFó‘¤Îi7M‘‹ªË„&)A„ç9\"™*RðQ\$Üs…šNXHÞÓfƒˆF[ý˜å\"œ–MçQ Ã'°S¯²ÓfÊs‚Ç§!†\r4gà¸½¬ä§‚»føæÎLªo7TÍÇY|«%Š7RA\\¾i”A€Ì_f³¦Ÿ·¯ÀÁDIA—›\$äóÐQTç”(_mèêÌªz7­ÂÈƒ2æjÛ„\nÂ¶®©¡\0Ô¡³Ír!Œ#\"V0§CJBÜCC3\0ª\$IPÝcª†¾¯HÉt6¡iÖß.r€9C‚¯ P¤2Ã@PŽ2¾orû	Œû‹ŠrR\nhZZ¤³o´TPÅŽÚV×BïCP\$3®ŒpÍ‰ƒzþ7DÃ’z7%h0F£CF3¡Ð:ƒ€æáxïA…ÐÊ£8Arø3…é]<Ašò7á†9ïtò/ŒCb|5„Að’6Ž\r¬`è‡xÂA­Ä`:(#s\0À˜£\$¬òÓj1Òn«z¤¢âjDòº­»Ê:Žƒ¬p#b\r3„	jHÙ–rb´ÖE•	Ãz¿´¯*ôÖCòƒ7 As È¸†7ƒ«¤ UßSŽ‘âôËmðŽ6Cæ¡ªcôö?ƒ­h°C¨Ë]µã Ê×‘†SÁM½˜ÉbøÊ.(4ã¶Í¦Œh…„bÁBxå\r0,Ü5~¶èS£‡É*ŒäÍêï Ô‚ô ã¶¦*6%,U:ïc}{>iò«[	€SñO»˜ÊY¶{«/@\rk¶º`Ûäï ‡#ìãžÓ»vÌ;Á0Lxûf4ˆòÿTi\nÊ£Ç÷ÞÛc†ÆSÀPÅ/çó€n;~²öâYˆg3mSX—»ÃxÌ3\rŒ\0Êã,Òt7¨)ðó\0²ã¨Æ…\$c6”ÍO\0X‚Ž]xÂ3õ3cÖT=2…˜RœŠƒxÖ•„¦)ÎúX¡ôªH\\L©kªŽËàÛ…%ëËb»_;Î’··[C¡L“{æ5ÃpÖÜ|)ƒþô„È¡È[»`Æ\\ª2„èkSºy+\n„¤˜¤ÕJ«8ÆÝi–7fÈawnýŸÒ`Êƒ;¨\0007-âxœ_PM1Ë<àæËâ²,ÀÍ\$·Ó°eO	é>'å\0 ”\"†tÊ%E¨Õ(ÉZ’:\nUK©è¦ÔêŸT.S'\"«\nÀ UêÅY“×žwÃ¢mMéÄã²øoÑ©˜\$lyŸ›ŒuMpbo†MíÂ8¤H€‡@Œ%´P)†R1°(€ E£3ƒ  ¬’TY¡’d„7bPNOŠq\r(‰§4R8`³Ø*„œ…¨tea(E£H¼Ó•\"%)é¸©\"DŒ¶{gä˜ÂnL\n…\n¶LPòjÐ!T61„Ì“€p',ÇìÓ‡ý\0	‚°z• `pƒƒ¿}A@'…0¨˜ŒS?'ªI1‚\0ÎŽË§ü2RLN=#“\"`¾A !©S.ÎF¢(BŽ\$ôÄNx„“ä©CzŸë¬¿¨~ÛáÞ{À€#IÔŽü±!‘‚j2,”ˆZ5Äb|¦`Á`Í ß)6Z\0U\n …@‹MÁ\0D¡0\"Óâ0‘SÏ^+Ín£\"	xÃJ¼ó3Â|Phpc¨,‹¿àÒæN¨p4å£€¥„Iæ¼>•”·RÒ?(õ¡.¹ÄÞ^´¡/fR,À@Ýœ‹c¼4ÏùÂð›¬ÂÀWw&ÚÉuŒ®ÍáÉ¤’Í+‰!‚ˆÈ+>R†IÌû”²çh+¸*«AÒ­ŸëPŠ”@cÕ§²¬\0¤Óbã(ö¦Ú„’`ƒI3k½OIâtbÌjL¸,={‡bˆ0dY–Â7\$Ÿ^eu…K<—:Pôˆi¡Üc>X®;ŒCƒFš¾Æ›*Ð\$·¹Ú2Òú¦CiëXÆ¡­dÎÆêú½&•æâ±u0YaRû©åWL•‹w…û\0  T	òqe&\0005¾±Zo@PF|Fú¸†ó¤cœ¡':(È\"7—diÊ)_K0*@‚Â@ dåõ:	—\"ƒ‡†ÎP9rÀ`)YÈquòÒºá4ë¥Ye”i×qÐÉS¤²1‘]ÞP4™\\™cÜ˜Áp	]îÇ%˜l¼bîaÊ¹ŒÓ\"PÃ™³¨¤ýôÞUg\n8ÍÌˆ÷“•Õ’XTémÄ§.èH2sò.g}9§Cå­cˆ°qÑã7Á“pÁ´‰ŠÒnSNhäÐQŠ‘¢\ráÜ‹¸ÎuI™^_tˆÅP”Ã¬Jj 6ç9ç\núai3HŽ¦_b+åWc\"B`Ã(bUº“N“¸S	¾%ë„4àæRñ<Ë\n—\r¿?·2		(a‹2úÁ­±FÐ.PëÏöËgžt\\GîÂ3ókžIÈOß9IðoÓ|u.öhßƒ2E—ÃaO™Ž»\0Þ­ùaIF¨06'Š\\…=Å÷³^ã€ƒŠ˜Þ@¿Iu‰©­áÅ˜ÐQÃ¦È³¬¨Ñ›‰Â“Û[	8.vTêÛåu&¨l+ÌËã	æâö_DþIç!Zëæ!íÀGEoNj-‚EUÃx)¨èÂ¿XÛ(‰x}†wðd­×û&ä»Fý4p•vÎËÛì'Hü³waL\"¯¼	Ê·4kÚC\rÔŽ¾ë >ÓÊ8WŒmüƒÀõ2p½q=3aKa©rþqx†‹}dlï™ÞÐ	ó˜ŸAú5èò¶u7Ÿ<˜úý\r~¥Ø\$2Á)âµûÑÀ¯sÝà¯Á¯÷vØàØ`yáñ»×)×ú}x/-0˜Ká~z\rÜ³_ÈÚûÙAUFÌ£^¬îÐÔn0û>ß<#¸S1ÞÓÏëk¦÷a)Î#žÇ}§r%ex¯ÒÜ/ÖQ/0÷/ˆÁŒ½.LlKö„ªÌ\rã\$“†¸Â,©O¬¯ËÌ´ïù.Gc\nñ€í°@3¯ïjú²ªZKÐðŒTæ/~ío{^à¯Ï/ÄãÂïo.XP&«ãª°jÅð‡£,\$¦\$Ä\"Œ^È2Y‹r>eJÌâ`¬CnJF¸žo:00b±‚õo<ò=ð¶øë\nò8ù)zbÆ0Z‹â¬+42EÿÐÖ,0Ú/PU\n°â(Ðv^Ž®.Îhr#Fæ å\r€J\"h `Ý\0000ºùJ,±Q%Ï£ÑEQ%:ðB·\rJO1&Cóñ1-ð\nŽ­°gC®'Â¦^±G\"ôàLÂ†QPe.HÁ±rùE‘nìÏ/\râal*«Ì%B'B^°‰®JÅõQyÄ°|Ñ6òÎÆ\$®E‘Œ' 1ÀÐGÐÊjHžp\$€uEÔ¬B³n@YåÍ¨³1æ\$nâG*<ê…ìeG4]Oòæ#0nŠ2…Ô*CBññR-ùÉÿ\"2cÊ\r€V›€Òdâ,\ràÄ4iñôÐ+`:àÂ¦T' Œ£(´?èÂ1‡¬§ ¨ÀZUp\$=-Înä\räÕïRÌN°r-(iÏB23¢<\$DRBN%#0Wp.F®Jq°€“`òGÃè\"/ç\n¢¦»ÇBÃgì:Ã'\n­¶‹R{†Ú7òM\0À (dÖ½atYÂŒ/DÒ¢B\$ƒz1Kl¢#\$Á æ­.*«u\nnbYƒq+-0êEäiÄ\n+sãÓ\"/Ž¢®iFöÎ*6£pøc›`Þ†Œ†32½Rê.3ó.½3D5°4¤Ù4â¦*+¾‡™3D@«„º?æœ&ò03V¹0#‹ŽŸKÅÊ¬'î®ýËÞ´IÂbâ8I ì4r½(ëÊ&D@F[7+‚kƒá#6´¢û.½%6Á“*2ŠÙ-<ï«*è]àá+±/P«¥2;\$8Øn•Ñí \$8wó8";break;case"ro":$f="S:›Ž†VBlÒ 9šLçS¡ˆƒÁBQpÌÍŽ¢	´@p:\$\"¸Üc‡œŒf˜ÒÈLšL§#©²>e„LÎÓ1p(/˜Ìæ¢i„ðiL†ÓIÌ@-	NdùéÆe9%´	‘È@n™hõ˜|ôX\nFC1 Ôl7AFsy°o9B&ã\rÙ†Ž7FÔ°É82`uøÙÎZ:LFSa–zE2`xHx(’n9ÌÌ¹Äg’IŽf;ÌÌÓ=,›ãfƒî¾oÞNÆœ©ž° :n§N,èh¦ð2YYéNû;Ò¹ÆÎê ˜AÌføìë×2ær'-KŸ£ë û!†{Ðù:<íÙ¸Î\nd& g-ð(˜¤0`P‚ÞŒ©òê7¡(*€°ËØ@†\r¨{‚0¼Œ¨@± m\0ÒƒªIê~ì¨I²Ä¦ŽŽ»5)ëò4¦‹È@Ã„	Xä0ŒoÜ\n*\r)]\$-àÒÂ¸+ËMc\"1Ic²à)	í÷\nB’M¼¢8Ê7£(èÖ¿Ñ\$\n)ÌCk¤&rœG£d~Å/\0P¡\n.£!0Œ3Å@¬ü¾Î‰ƒxÏ\n'‚f¢Ã*Î‡‰`ÐòÁèD4ƒ à9‡Ax^;Ór”¦Q#\\¼á}SÊîá”þKÔ¾1\rƒÜ5„Að’6Ž¬ºxÂ**tºãã#€á4!\0¦(¿èšÊ±«ÐÎˆ1œJõ+)¤j†NÂm’4¥ÉCÔò õE<o-ÄÌÜ®»\"É‰¨¿´\rbºœ\rÍ“:ÙC}¬:8\0A pP!Àõ³;(aråÙ\n\r#®ò&²X0¤2ãÎˆƒ(ÍŽ\rŠÐì¾Ž³©k:\"21ÁCL3¼”É…¡é\r»¯(é/hÃµo#W	N/ú˜:?ÈÎ¤4n0šŽ¹’­ 0.\\6&×œ,ÕÖÎ• 9Hä<èjÀÆägã›ÎèÝ÷ Ós0SÌ_= `VãxÛ›XÊ¢âö»ÔÜ5cFþÎŠ{ò‹ºÝh<`âÀ¢ƒtÞº~e]Ž:\"Èå¦o“Òå^€SÂîñ|øéqS³BÊåH’ÈÍŠ7B`ã0Í7Q)è’‚&9¸¨7·@ó´¨Æ«Žc˜Ì¡”à8:9AÁÐv\rP\$#(P9…)è†)ŠB5–5ÑA›\r#x´¾¤3IÀÌ¼(ª¬õxÔbiÞYX'¡PÚ+rœýÊðu!'Ø–^É›Ô;hhÃ•å{\"REI\\†C¸b‹ØgX+¤Ò†hHICdq¹ÔXbž rPD ë‡c¯Ö©‘fdÀ¯ÐêOBha+\$ÌÄ æËÂÊ,AÁáàÊ‘RjUK©•6§TüTJ‘SåPªƒJ¬UÇŒßEd­²¸WJñ_.ÈF±\n‘DKÁ¡d¬³ÚúQZPÁÉD.Å§\nCs”z¡”15RpÎ¹.P¥â@­#L…â-ŒImCI’7‡^@†2nÂŠ!2á´>zAR|)©#Àè’x!r\"Ã%k%‰Ã4«lž‘¤ˆM	±E(äyUòkQÙMs2÷!bXýÊÉ•æøDÔ^ûC¦x‹‡“d‹ÃJÊ_¥hÐ†å”qÎIäl¥`­hdG r ˆ‡ô†7¢³gAN„ßD°CQC\n<)…IpnZ‰E<À*––•È9E ä(—TbÛq—ä¼ƒKR:—¦1;„¸…£4\\tMF¡¤¡Àæl&ù+0'\rè”¨Xûƒ:Îld¹²X‚ P#“™õ+ÆƒIlï'!Èª&áˆ<¡J\$µj‚ ùò?Ä°6®5ÊÎÂbJ'ìß3vBX\naò¤TÕD³)|µ(òÇ˜\rU¦Ÿf €™k(Ä‡PÎuæ2æoEºLb¬0°¤˜Mpæ~Ñ3?©áÑ¸óFbËÛ'MÁ²§s	\\z|#„nh¦2LÍ	U@Ž1=Qt\nè\\¬u.A0•’XºXX2‰Ä+1I4eN“B\nÖ¡Š¨’XTÒÅòJQI@EB*H	ý—´¾b‘ˆa¹7L¿«ÈdÃ‚pLF«j²Ì’Ô:Hþ×¥Â@ÞB›+ a’ÈVDÆâŽ¹{;g‘ÙØ‚~äÊn]k(Ý†Pî•C*é«¬3°©zK±Ÿ0áà†3&öÜïÌæ,XTéÉi\\Ho\rê¯aƒK˜å=Mø™\\Ê¦Èªµ\rÄÁ83¼Q_—‘yõ”ƒ=•¶4H ¦¾4c¯ãê‹4© Å£dvY¸F)9C\"®0©ë ï<“³fuXE'r_·œ™kÝ×M©½   ¨C	\r‘³\"œî'‡zù“ÐŽÆÉ£\r–ÆN¶ÎDÖP/ ÔÌuöÁVTÆh¥u™ÌñËÕgAÑê0m\$¾DÄ¤®^\0,LôÀxÓFGN\"jµ.««Á¹§ÉziÈ\"WáéÇ2ôÙ=`ÚTê³´†tÕ\0·,ëý6N6‡€4¼9ÍV ¡Z†AÞÇ¯„dÝ	r ˜ÜÀ.bT¡&y\\4OD¯NÂqu‰ž¼Ãäõ“z—SIöê¤1ÅCotÓµ¶Û+{‰3°|iÁ·—DÃA-…´‰ƒz/@¦ã<VKÄ™ad0‡W6x­‰Ái‹áš¢Dfy!e¥=fl9o=È¹*Ýw=©Œ¿LÕäŽW“nˆãÍ&‰ð&ržá‡Ð-5cµztr[Íu´Ô0ÊtîTk,¾ôQAÖ´µçÕW«2•øŽÞÓZÔ^èæ3·v}¹öU^n+2¬ýr&’ÃCÜ!S2NhÎ¹1l%†ËÌÎ´CY·-He€RP(eï	µFdÃ+a×Ö»%ÐÃ‘Àt^¶yÔZ/Óæ§BœºÊZ×!Êzä0õ£œˆ2{ém¢éÄùKÏ9é½— +^¯ûgáœ_³ô\\¶ÎûöþÆý×´²ÿÖú‰£ï5¯¶*Êƒòvv¬ÈùXð®\r;«ôv¡öCRPõùWÙ”ææÜå„g÷ôn“5ÖäþMmSéA,ªA¸ëü.”ôk:j ÿER&oø=OÆÔnˆÿœÿoúù.±o â%™Â¼Kéj¨iÚÿ¢®ú¡Šâìl²óÀÊz0¬ZÃèZLK\\u% 5ÀÜ¡F:ä– 'ÔÃ@ðÞÊ­ƒ( [‹­\0* ×Ð\nÅãJÁåèîÃ¶Äl.°LnÅJ×ƒ:JÌÁ…ÚùTþÏm\nÅÔbjÔÿÎXåÐ¼ÁpÀj/g/l¶HÑìfìÄQF  N¬êNå£.Ìpê\$Bm.¤Øí«ŒËé¢)FrP`èˆ\rF<]‡¶ ËîFÜ¬\$#¤Á†@ä;&˜'åªgc¦:¤L8iíÜfç\$ý¥ÀùÎ“k;l¯±\0ðÐOºFq\\ùP	éeä\\1=Kqdfp0ÚËŽàÍc±raär(cÈ\$P/&dAVîìÆ  ÂAwo†åÑ±E‘½pÔ³±ÆZ±¶q»ñj÷«ý`A`Ç¢ÑtqíDq0þù0òÚØtnÆ6è~ÄŽ¤^DsrJ.pñ,t¬±\rî—\"‚\"Òpr4ÇdCk’=Gç\$D ìs#dÒGypèÌ \n©^ÀDà¤0Å#2l–s\"î£ÒA'²pH2\rBz	„pËéÜ3  Pçê3ÂÞ&æ@¯ÐêöT°`Ñœ¥ïÎði£+d¦1r¼û‹Rag¢¸Çd_–2\"l`*P@Oë#ã®ÓÍ`™-,2ï2Ìüä/'ÄKàØiìn`ÖÞÃp³N\"å Bh…‡‹D<@ÚB´2pr\0ª\n€Œ pBâN\\cìØE”IŒYGÖsíŽÙ3T\$ÏÜ=ê5É’¢:#âB\$g^‡#´Hxtƒ)!…Èm¬¼¤6CÂ3Fvì³‘kD%ÒƒLVvê(Âl£‚,Ã¡Vü‘òbzNfž/€&©^p¦ÊºåŠNÓÖ‡ƒîäPÜÁsÐ1Eí	E¨ðP ã‰?C+?¶Ùî©@bp–Ž®ÄI2o4®”å¯	C*)Ãh6Ã&},E=+Ø”'—\rðÌÉD„f8àKëë€bP;­Xj0Lael•ôbµ¯Z£²:Iök}¤Ò_fKzØ¸@ž<]o¬/Œ¼f2Bê¼p¬Bƒ:süãÃJ	¢BÐƒ/®täLoK…¶b(˜:1°¾1ï¤±QVf‚:åä˜W‚†ØÈ @	\0@š	 t\n`¦";break;case"ru":$f="ÐI4QbŠ\r ²h-Z(KA{‚„¢á™˜@s4°˜\$hÐX4móEÑFyAg‚ÊÚ†Š\nQBKW2)RöA@Âapz\0]NKWRi›Ay-]Ê!Ð&‚æ	­èp¤CE#©¢êµyl²Ÿ\n@N'R)û‰\0”	Nd*;AEJ’K¤–©îF°žÇ\$ÐVŠ&…'AAæ0¤@\nFC1 Ôl7c+ü&\"IšIÐ·˜ü>Ä¹Œ¤¥K,q¡Ï´Í.ÄÈu’9¢ê †ì¼LÒ¾¢,&²NsDšM‘‘˜ÞÞe!_Ìé‹Z­ÕG*„r;i¬«9Xƒàpdû‘‘÷'ËŒ6ky«}÷VÍì\nêP¤¢†Ø»N’3\0\$¤,°:)ºfó(nB>ä\$e´\n›«mz”û¸ËËÃ!0<=›–”ÁìS<¡lP…*ôEÁióä¦–°;î´(P1 W¥j¡tæ¬EŒ£\$Â˜ìÂŠ’´ƒ1ÚU	,òTúè#ìâ¶‹#Äh‘Ò¾Š²äº”‹YvŽš±j 0Œ2ÏLZjÿ¹n;†™£+»èÎ f„˜‘IÐòA­ŽãPhîÒ‚¿£\$¥ÜÊï2^\$}\"¢9	¡°¬på1Ža I¡®BÏ<»TÑ¡\0;-ö\\SqlÚ¼ÈuzŠ¢-JL¼ËÊ¢F&O}&†ª5q?CÏV2¯«)ü56d+RüCˆÉ<ç%¯NÁ‘ïGQ8!\0Ð9£0z\r è8aÐ^Ž÷È\\0ŒƒhÒ7£\\7ŽC8^2Ø8ð:a˜Ò7á!@:8(Ê:]âøÄ6#pÖÆƒ€î\$-äƒ(Gaà^0‡ÉUVÄÂKˆæ „;îäHÔ\reAØv+“„˜¢&\r8bê€È²<}e¹ÓZå:S‚l@&.#	ªuòÌ†ÄÚ––äYDÄÉ L&K< ?FƒvíÈ+©C9W¯A\\Ž˜J25iÒjï{êúýpæÝ¿f;7aD+²š_£\$Òò§íH{r¡Ì¨É Åq*~ íSóœöäMúú¹S–ÊŒ’ë•Ðì¶¬˜©òm?&„t‰·iU1H˜§ÊY¦Ö†‡6—ÌkÓ•á¦–RóYW%’T¨‘Ü=U—0ñÜf˜K“Õ½I“fräí}Ñ M©ª{£MäÉóD)q]7E[•¶ÍÍýÏâWÙ-uBsÛyý`)¡ÀZÝÏ:\$d’˜’–ÕZH)ˆÑ¡s¦ÙÛK\\‚Î	“’£„lˆ´kE:\r\"äàhÎâ˜k\$iº,\n! °GPÁÏAÂ´ `ùa„CA¦?×&€TûÍWÅ=&=Â2+NK@-PA#2dld\0?ƒE¸Â³X´O\\9Z°Ì†¹â2ZIXI°:\$ˆm”±bgˆ€Þ)cF„š9TJ'ÄÀèÊsØÂÌ½–G”:ŸZ¯ñ@3s‡! ÄªÀ–pLc™‚(/øð³UvwË„‡Ð‡ˆ3– Áp	WQÙ0´ç¯	#Ü}FÄÆ(H(Bm[ÁÈ®\$]H„¨,\$\\</29Þ2ƒ›Êd”'ãEÐ¡™2áŸQS“ÄØEÊFv¥+“Eæ>%hý+\$:–\nY«‰l´åÌB2ôª¥)‚Ý\$²<“ÆdÙ:Û™Ü#ïÑ: UT1caL)`[!šqò—+lÄÀ–ÆtL9\$¤2¤`W’ñ+Ž\$Î·‚¸•_ãN“„Æ6”ÃB¹H)G\n¡Ž†°æ3Õ‡àÎ\ný_ìš6 Ãƒ#¡u.ÅÜ‹“ Œ@0‡EþÙS,O	êZ¡©è}Ñl.()Î\"š>MŠøºf“)[žåÇ0Y9D\\.*<·!M!)\nÏˆvNRÍAÕ\\¯9OZí]ëÅy¯Uî¾Cºû¦L0FÂS\rÌ9ˆö\$Å³LiŽ1æ@Èˆk%)©>rËú’Ëa!Œ4ŒÉšLIÎWó-AÉªì–á%å‚|‹ÃþöJ	ô¬¨i\nUÒjá^!\r9êLF¸§‰åHä0¡ÔÈUg¼9ÄÄìÕä”ÐÔ©vqŠæ&(J°,Ûü#óÌ¡¡cè‡ëL6  ¹’êu]2Ý)¬õÿ:Sè¦³<P«ÏÅ’•ÏâÁ®+”U\$ILñô“½˜=‚Bü_IPŸåÒ’ÇÝq®{¥”ÑNbÏX³¤ûxrÅ²™r(Õæ%	I3‘‘*S#iŠP(ÚØrÄ_ðÑKhA¢Xv‰&À	f˜¯ë	VñüIORF`%²\nÔ‘«p­S<šMNkhŒŽõŽì\$aA\0P	áL*@xµ+ç\nL1Ú_½ƒåŠîic=ƒDEWQy‰l ½XŽb+Í­ã’^BÉV!äç5uóÉ²?âçD“‹Œ™•{!7%&îÓz“AÙaBe¤Ã— ,ÿ'%ôžK@‚ PR§]rà‰Ðäã{ö´½;3ÆvÊ@mk¦æk® Ñ×Z!›Í`œ±lEø¶µ”æ2êUÚ•>CÍ°·B x¤mh¡ýŽéoÒ®Ü„Ës#Œ‚ô9X}“¸?9Ë=O£fÀîƒ´„ŒD‰YsªÐî\rüB6TZÒë‚*¼ÁÑ\0·#8 áfÅM|8K®¼\\ëç…©šye·ëNÚJôÙÅn<Íwi15î8“ø÷%½Q8–E]È„1ÏPíX(é½|I+Ãª…÷ð)/hy“AÅLº²\0Qk:á.@é™Â„ÿ»‘ßJîxò\\£:œŽøÇP>©Ø€žpó	–F­ïºã–X€çŸ¾«‹¹ûŽÍÆÙ…¢ªÄDÙ˜Âr¼£>[7*Êt5/\\0¾.Èª×\\Ç‹K\rÒÚaD ò[\n+Ûxg6\r§Ý½#ŽïMÃzÁ‚}jŸ‰„nV\rïO``ûêJ3Ä–AÕr)§¼m\rm2\$¡¾øåQ¸[d÷qD:}ó1ò>eñÏeò„Ê³¥{.°C7éºIº§l[5‚÷dª:\\ÎX›2i¡pÄš‘‘K”o¿íóè¡ö®äjÊ!x’ÒŠAx‚\$¸UÅ\$ãïàæ…¦ßËôX‚X¿…Y  ¨\n€‚`€ì’‘ÏpH¼evÙå¼Ùbl\$á.¥¶Î#XÔÄ‚ Ê\"Føãp+¦©‚@p¬¡ÁqzWX%°D<fîá\$À®¡z«o6ö„n0	5&ò™ÇZÈŽÈP–êº+ðžÈnFÂÂŒ}	|±	kæÆúÐ¾!Ð ƒ\$nFä­\n°ÐVE½äzÑ(~@hÏþÆLH\$pÈDÐ[Üè¸Œ\nÂ#¨”¢ãÜ”0ñHZQq/j*;1(\$‘,pÐC¤<1§f“Âƒï§w}î@°ƒÁ¡\"\\&%¶ÕbªÕ§Ü\\dxá0Ž\$'&\"YPMQNuÑˆØ\"‹hF4—\"ã(dÒÕ„Ö.CÔ<HÊ§IÕæ¿rj1›´ÚnÙM°ÍB›'.ì²td¦ë‡£D’é‡NS1âˆ.GÎÞ8Cˆ»Ð,¸Cà1s#%)°³P¦.±tV2&Û)„Ú§Ý#\$\$áPµe,ôOPuÂêï'ïe¤|bþäï\"äú%¨Š’^*’b³pÇòW&È¦xc×&	†èˆžÏ/,…Ë)\rò7€ïo®OÅ)ÏV€PŽÂçadM‡jP‡n|®Ü5«TâÄPI’ÂZ2ÆúíÖ%Û)¤æ¥õ¥–Ð®\njo®m^!¯bgPéM'äþÀò;Œ!¨z> @4}¢@&ç)gpq¥ ã®Hçia(‡Þ-%NB‹t›K€Æå¥Ç“°ì|’?3³(ýä»\$²bÚ2à@‘°&Çó>Äs1P¥3…^6+3.I#Ò“c\r´[Ï&4S~OhZP¢ƒRh ©-D‚á#'Q5:sQ4l‚ÿ¦Â“Â°f‘.o\n>Es'“w#éE:óD¬3´Ý£×S¼ÑÁa<QI\$\$S(‰­9ðêJ©=’M“©6Oöè#ƒ>“íŽ|QSB-“÷/±TØ‰VØÂšùÍ’ÙaA¤×\"¥	\$(T(L°üú57KCÅ¯Bo›Dm”˜”K6*.³¼&-„,4ÍlG¤J‰8/ÞÿEDPn•ê¶zIŒ£LCÙgTÎñýÇMÑ#-ýG¯n*¶ýã\\#ñ¨Š‰…¥F¤+£“Ää~¨Z:T?4DùôZú+0“ËG»Ic\nPï&ŠR]¯‡'®ÚûpûP\$q†ÌïM%ÈÜô4³ù/ÑDô¯@ôõÝÓ]Ó5Ra}FUm²SQU*×Âó8±`WC‘61éR58Mò‰ÆrTGK?Re3uGZÒõ_;ø•S5X¸5)V`‡5xƒtk¤1(ÕjG æÕŽÎpYR”¸Ë4Ç\"Ò\"„Õª\$\$,l0üÂ«åîîD‚´ÿPÐ·>sÁ'3ÛV5'6uÐÿ”]r‡;×Q±;^»^dQgß(ÕE)4úö‘\0‡„;GÍ`k¾kÓå_†±Ysª'\r'sbY,µöžOþ…a%T#ŒC\$+ÒçA„u¼QãƒM/‚J«¦…Cu/8Sg8“*ZJÀXNÚVTžVX¿Ì&ü#¥f\"gf™[ëxgé~ò#ÝeöcDÓû55‰OÆgh‹g¶’{ö[i£%cbÖ«e®l”kkV€X–¸Dö¾qÓC’<¶õK2£GãO)Äþ.¶ø±ÜÒç!T’böìTbìúo¼Ñ]]Â£Etâôú·\r& *wW	qÂÓpõ‚Ï6ñB6û—(¶Áow+t¤y+ñWµŸUoÀò0+iOƒEög	ÔdÀ)gíKD³ÑDâvq÷u¶Ív÷1`bþÔA!“·Z½]6.V<¬H¦GÒ2+qÚTÔ\0Mp»ÑèC3ÿW	„Ã×µa®†‘S×|®&Æ£	5|×ºCÂêrBF9L{Óª9ª¦×©ÙWÄñ—«9×9\nwµ\nÓË{óD·uðå8?Õ}3EW2{|“Ç#WöÄÑbq†º#€†Œ Øa )îSæšeÈB+¬´Ò¶&R°»á´¦lq+P!«_w6ôÀ¢3ñƒzÔÄVãå4.Ôx×DöMàª\n‰ü6Öê×7ñ@yk°|—	Dm˜{—ŒÝ°îoŠi¢f™Ø¬ÚTÀC«ù}Ø¹ŠEq‰flA,¬“ÒkÔ´¾Çöm²nïgaeL –]}±FÀCg»M%Mo&×ÌvšÌ,›,2Ój»Ð”Pgj0¬W…W»;\n4wd]h„tjr™'»lmª4¥3 ’#x&HLßê!fïQ“¤÷­…\$BÉNBXcôþ¯U%¬¤P2ˆ·ox;GU/òk*¨¨äy†X.ßîS'ù”ï…ÆÃr5‰âÃšY€€U\08ØÍîU—øîäidTI“Øˆ6+‘œRƒ\0÷cURîîŒS¢˜©´OOX9N*A*™¶Š…´wŒê+ô5ŽíL¼ÎÓ©È“(ÁdDWœÔƒJóÎ\n÷y>œesc¬0‚š3/œø³'ŒuÇõžøÕâXÄyOït¾-úGÅ· ÎinŽá×¦E¤ÿÆ±i=…Møƒ¹`•î™ê¨K„|rNçŒ–”9–9KvËèî‚gmc€<SÈ)“\"lÃU–(N·M•ª& ";break;case"sk":$f="N0›ÏFPü%ÌÂ˜(¦Ã]ç(a„@n2œ\ræC	ÈÒl7ÅÌ&ƒ‘…Š¥‰¦Á¤ÚÃP›\rÑhÑØÞl2›¦±•ˆ¾5›ÎrxdB\$r:ˆ\rFQ\0”æB”Ãâ18¹”Ë-9´¹H€0Œ†cA¨Øn8‚Ž)èÉDÍ&sLêb\nb¯M&}0èa1gæ³Ì¤«k02pQZ@Å_bÔ·‹Õò0 _0’’É¾’hÄÓ\rÒY§83™Nb¤„êpŽ/ÆƒN®þbœa±ùaWw’M\ræ¹+o;I”³ÁCv˜Í\0­ñ¿!À‹·ôF\"<Âlb¨XjØv&êg¦0•ì<šñ§“—P9P¼fÙçÐÊ96JPÊ·©#Ð@ Ã4Œ£Zš9ª*2¨«¶ªÒ¸\nC*Nöc+¨È<nKdŸŽcY†TµƒÈà<F!ñŽc`Â‰‚´þ\"Î0Â†ˆKª`9.œÆã(Þ6Œ££2ô I˜Û\ncÊ³¨sþžŽ@P ÏDlDŸÀPÕ\$ ÂÛ­±›ð4b`9¸œf*NLÝ4³lÞœÁ€Px‹\$ƒ(Ì„C@è:˜t…ã½/ƒjêÿ…È˜Î§4ÀðÙ\rÓ€Þ7áXŽµ#¥/·Ü5„Að’6Ž	Ä7à^0‡ÐxA\$ƒB6Ö5Ãš˜)Š\"`ÒÙ%\"´U9A\0ÉFbÐÞú½ŽÃ%£Xèˆ)Mfà#CB~¾[ÓâˆÛ°J\0ê	ÎBv7c\\fŒ\0Ä‚€Mé{_ÍõzÞãSZ;!Ã¡ˆ](Æ\n‘P%ÈéÍ¶PË\"êÖ„L9µ˜éPCê6‰ã¾:ÃÖPáf1‚0ëUŒsè‚3ãƒ;¢½¾w|¾9@PÖ2A£z~ž¾V”•Œ=(JÐà¸XÔ–>\"`ì…äÖ*ø yŒg—\rƒeFÜ)ƒ˜ÇU!Ö(@µ¼wô¸Ž‰²<Ædn³xÉ½W3–Ø°m×-Vú‰³\r¥×en+—épÈwT½vtÏ¾”#ÔX'í…ìŒ\rÙÅ^@\0PŠ<tÿ¹8CuïƒÓÇp¼„f;YeläÆd’Ë:¤£ª`Þ3Ãe&”‰ã\$ôPÎ`¨7¤/XÜ<„xæ:Œpèæ9ŒÙ@.”èXÖ^€Â3Œ+¨Aó_tÝ‹Œ¡@æ¥\"r3‰Ñ{`\riÈ@!ŠbŒÅ:ÄÅc”ÀÌDÃk#Gà€=3’ñ2ny	ð¦°Êƒ*m\$!Ùµ—#4IHT4\n¬ÕÀr(S€nà€ †GÔÞú\nS¡¥ Dþ\nƒE9V†E>™Ï:¶WDÕ)àÜKYá;á…ï§˜\$V[)4?!ÌýÀÈII+ŠP8#°æÈšõ*áÀ4±ÀÉ\0!¼9PŠD(¥£ƒº…ÊL9)Pä¥ÔËY'1Pª8î’U:©UjµÏ«&%•ÉNWi%_/V0zßËçd¬\$9<æ%¸iSí­Ž+2tŠ Jp\"Áˆ<”BjMÉÊ'%%ä½—Ó0@	ãcŽuä€–sM5ò|s,S1Ž€ä*¡†/N”¯RÄVË3ÆAN~±ù¦yy‘ÜÅf%0ˆÄ.‰¼œA§äãJ—îzÉi/&/>ÎY&r%Cö™+ÀñÀ\0´tê×‚±N*”âRHXy3Ë:pÞÉVn‘ÆÐÕ±ÀâÊ\nÈ ÇäþBØ^EëúdaÊÚße%'àñ¼#ÂO&E@'…0¨³–„öVg†ÓB_Î	8\"P2|O¨pFÍZ@ê|30êqDhe\rTŽ-¤Bô'ð\nw`³Äs^HáÁ^ÅÌ,@™DˆùL1DX#@ phSçVM’¬z%EbWR€(!‡PÈ¥¸k'äBr–¢&r±É–€('„à@B€D!P\"ØK(L¶1vÓC3löUÊÙxºIUá%FT #0¬Ð…ô¤KDxŽÃ¼xä?©—‘ˆ¯˜å«¶„è]H|\\Z†1ù72æÈ³­M\$¤\"97\\å^x@€•’Ø(\\äª>w\r½Üæü|ÜKs»©¡Ê®µ¥C	ü-a½ë‹u'‘;1&4ÿ×‚,SÒºC¨(ŠÎ~f]±–rÜ§Z´Ùç1Á(7ç„ðÅšR[?.l˜X\$úé0„84‡¤<Ò8p}‰Xœ3d, dºÄÁÎÜIªýQ9qç®,¦sþ^Þ^¦(2‡t´ÙÒäÃÁ£64ÐÂ,o8´å—\\‘’ƒ!ù\rUÑõË“05­9aŽ»©Ÿ^…õ|¬0sRørÊÍhù˜ÿ¥£ÿ%•£öº‘·ÙŽVMx\nÐ!Z»Ø€Öâ,\n¤rŽ@Ò…àu™.f½—[\nP „0(~75GŽPjkÝ*%!4C³.Kþ ëÔ•åöfaðk_æbV˜Mg¬\n¤‚µ·N(0¯›tÔ:½û¥ž	_yyÊ¤à\\uÞ½‚Úþpì(=\nMÒ\r; œÊ”Q²ËjN0»@¶kÃÙ¯ ÎÕƒºãl“rBàvìò\r5zìËÐND«2²¹¶ng,HêUH0”Î\r‚|aþr_pûTìþ\r¶Ý§—œ.ƒŸ»¸	˜ó'Šjò|øŒj5¸ü‡r@	'l¨Inò‹®t.Ä·Š…O	‘ynRàé6'|”­*âOúë*E]0@à¼ð?‹ âˆŠÊqå‡¥—ó)ˆõTÔ°a&-JðQJ÷ëGÑ„*0ÅšKYG\n´£Iz¹ËÇ…\$”~¼e7;!äõ2íH÷sVï(Ë£¿‡f/îíÙyH«¤vMÜ©0‡äUíÞ³ž+»KÊdKKåü&ð»>M†y_?ãÏíáó–q¦AÇTPa7è”7çi‘#kÁL‘µ\"Ð)1Ë˜ZEâ´Ê`N²Ðpük€˜ªE™«Ýo¶ýÞ„(©óÐ¢¯Ð¬Ë	s@2ZEä\n}eî¹·ú-uRV,õ­Ê~ßQ•Ÿ‰&2ï9_ïoTñOè¹ïìó²ñ@¦Æoþó/âópOÜõ&äõpv'\"õÿn¨çFz?þYát\$°\" p8.ÍŒœ02~íÀÙ«ÒÙð<C°AP01.õÏ@û\r’âmêÜ+ÒÜp^ÐCpI¢aâ@Û‹²öíèxß\0ìÔlºËêöCŒôºð“\n\nï\nLÃ\n\nÐSL¼¤\npªØçi\0)Žç¬¢\ràÔ]ÄP\"É¶'ðà³:WhP/evY¬&&dL~ãb]Çî„T{âf^°æÑRPì³KÒÛiB™éH·Å.¯ô~ìœ*ê´#fÜÿDPYên\"ÉC„(+)Š\$ðÅŒÄÊ„À]ÁBll4Z'2dÖËQüL~È&s\rqv\\qzlOá	Ìðy\nÐÓgìY ò¼%ÀÈ„:(BˆõŠþOÐc¿Ã—~ô‘¸£‘®ó–\"oVíãÌ(Ší¢†2gNqC—±Èo\0Âí„Î8fSäa`–\$Á|YïnÇérA	Ê'PÈ c¤˜¦?ðcq³Ð5!Å¹QÂ¤có+1Î™ÏHÉc€{&`\r+Í©9å¸pñžÑc—\$F»\$RO#PB]o”sBJ`iŽE àJÀÖ'¤‘°ÅPôh‰'ârkÒ9%qÑ(•\rã\"b\$Å…)ƒ%Q prŸ)2`a á\nÒ#&ûÑ)‰œ¯\0ôGRaÑâ¼RxÌ‚æÌòÅ(‘²äÍ‚(ØðÃ/2é,ðÕ-L®u,ÊÌòc.×0Ä\\Gq©ÃîÑ¤BÒ}.¯5,„¶¤ºKâ0S/33%RÑî¨4Ãý&‹DKnti@´\$LÿÃàÇ£ Ê’áEê½g¬âë¦[%? ìb_st5MÆàÃ]6ÉÌã“s##Tãà–\$®1…öC Ø(\$ª\n³liS„ð#\"A¯@\$#V òss’\r\rFI@Ø`Öx@Ös¤èÉè£Œ('¾[B&Æ#¤C¤-‘TÏJÃJ\"ƒº°à¨ÀZ\0A)\"6<î\nœ\"\\t±3	mìÙÀáêÕB80w„Ÿ7‚CAêÙ3•	”8ãì†ÃB’NBª˜B:#è6v§n2`›A`ÌE€¬™aJ\$dX5îàÂ-:ôB’6F\$/vúH;3\"@1<ÜôybP`°°^JüF\$~À	€Þ«-ðÓ¦ùJô²i(TS©'iñJbô¯<jïPv‡2-ÒMg(,zgÖbo:ÃO¬ºohei›îòÒ‡2¯VÈbp5c@'¥ì*ÈŽ\rààÐÅ\$ÇTþö\n´\\1…FÀó…›JpõÏM6#¥,²z\nÊSÊltÕGïºÉµ	xRCT5¤0Ö´l,¸¤ªsðïZg ‚&o‘Wc\ndIMÜ9#sz1†TºôÝGËv¶Æ÷Câ0©k”ºuN•¡tøÂfz\nr»(\$Ô‚@Ü1«0UCÁ\$t! 	\0t	 š@¦\n`";break;case"sl":$f="S:D‘–ib#L&ãHü%ÌÂ˜(6›à¦Ñ¸Âl7±WÆ“¡¤@d0\rðY”]0šŽÆXI¨Â ™›\r&³yÌé'”ÊÌ²Ñª%9¥äJ²nnÌSé‰†^ #!˜Ðj6Ž ¨!„ôn7‚£F“9¦<l‹IŽ†”Ù/*ÁL†QZ¨v¾¤Çc”øÒc—–MçQ Ã3Ž›àg#N\0Øe3™Nb	P€êp”@s†ƒNnæbËËÊfƒ”.ù«ÖÃèé†Pl5MBÖz67Q ­†»fnœ_îT9÷n3‚‰'£QŠ¡¾Œ§©Ø(ªp]/…”ôÒmg¼Ó’e¨ææó\$Ÿé)ž„Š]6†ùªkšl—°Nã¼õ®ˆc®5®CHà¾¥Ë R˜:¨ãh„Œ(¨„·#’	¨*Eˆã(Þ6Œ£ ä„Äb›¶\r­{J€¸hL_!ƒ\\ðŒPQBž6q`Ži\0!,Ð«È4¦Ì(2B£Z5#Ìœ ÇÂ¡ânÖ£0z\r è8aÐ^Žóh\\ÛFª€ä#C8^øNãÂ7cHÞ7á9³#¤Æ/µXÖÂHÚ82ñ`Ü:xÂ?lÜX:\r£8É£š)Š\"cÜ—ºk«(¾ã¢Z\nxÖ0¤I0ô3µ£ Ä´Šh ËI\$Ï\0ÎËŒŽ%}`Pk¬”'\rïÕ|2Sh{ê1&# Úv¨ÃkÛ#RKn¥½f¸‰PØ8£«B\\Vø.c“œŒŒƒ,°É<	š2ŽÈZL#ê6'÷èØ:Ê•HÊÊB0ê7\rc¡*C ä:Ö°›¤ë¡+àÖ£Iâtâ#I,®²6Éˆß}U4j¹ÂÃxÙZË)b©€8þ6\r–K.Šh[½Y·µ ˜µˆ89µuŒ¾	5¨=W–>¢Š\rúÒ*§×íW¦kN&²6¦úœ¨ò9ã¨*ŽÃ|éí°6¸:kË’è»-:œ*Õ×ð¨Òêakæ	y1LdB¨ŒÃ2t¨%âxÉ(¤Õª7²[ Ü<³Óàê1íC˜æ3`a@¶ÏL]Ì/“hÚ[â: !@æÀ—âí(¾úZäb˜¤#Ábë·p@3#Cn„»ßˆ5£¢_'Ê)½Ct:èò^*1Øƒ7äLôú7á\0ƒh-Ø[Ò1ÏóíëðËÌj1JE2OéK¡JÒíUìMÊ2¬%°«<#ÊŸHÉé< ;„¦–œ%á5Âèsähú†PðƒËÓÁ~)ú&TÎšSZmé½ô'\$è“²xƒÉí>§õ á‚-Pê%ˆ(Å¤úðŠ`¤:äZ§O©l…’6å—ƒÓ>ˆ ÞuE\0HÉ­\\\$“\"°ÞÙX>Y%Szþ\r	ù\"ÅIÜ©ãÀÒC‘%\rÚ4¬Øªð‚@P\0 ¤’:I’Ëm7½Ú“”¢T›i%ÄÀ™A\0Nº\r\$€ûH\"ŒC#™à7\n\0«åDH„„€ÇšªÅôB–ñGj ‰‡“IÃIõ-ýQè’iÙ, Ÿ<sÊG:qafÜ†2@¨¥ n¦EžGlN’\$o?Ø=p Â˜Tx!iË£®µH‘_’M|*ÓòúÁY²:pS”„ã¹üN4gÉ¶mò´g\$È€&á*G¢}O9ë'ñ43Kô¦‰šsJ¦è“³pXè\n:¤Ø¯ò«™÷5ä:–EVuM*þ¤ª8æd	ÒE“,Ö©³ZÌY™##È£ÂzIY‰(7dy\$†PÈpLÂN#a„5›(À¼¦tK6Oà¸8â|lLÏí•&’ô˜©i’š¦P8Ã¤à)9fkmuµ*Ôq˜a#„7¹ÕÈ¯Z€nx¡ÙWü•³;„ÙLƒ¥2dÊ’à›ÍXñŠB°2‰FMœ‚x,5‘	áÌ™«PmJQ»™sˆßÒ CEaÁØ%DdeÃX¡hÇ‡\$Eä1K-²A2RàgM`>¦\0002‡uaÖ!|´‹)\n„™ls\r{V6E¹z†·\$ÜÐ\nrL54ø‚ˆÂ!÷7h`ÝÑcrBZ}=’hô¾^„E+¢µ\rˆõXDò¼nGÇN\$ÌÀË›0Ï\$”Üz\\c1Œ“«Ò_›u=I¡P‚ Aa K·f§A22ÐÏÐªŒVdáV7òf®‹ã­åaÖ˜CÐW6\$¬K˜\\vqî7¸øº£-H\0^¸e{&K\"HzCÒ’ð\0£Ü<|aÊ°	V97#LŒ‘”rP¡Ù7'ß\nó%Ü‰s?y[†]–ƒ~\\ŠÒpdœ–lÃÖ/Ì¹G3Ÿ\nÃšÉÆWmY¿-çœ‹œÊ.uÌß2¡”šŒs€8×A BLZ\$Ô&ùrBí˜Œ–^ Dð7!È	 rÍíqìj)š¦F¤ÔÄ™Öê\rŒ5^ŸÔ†ë\"Ïõ®qÖå×\\êÝw¾#æK`åÅQ­Ëã.‰§”;‘P²Õ©@%D°´íx|ªFÚ(A¯D‚þÖ£û-¼ÞÕ|”	ÚBûŒ§Åh€\nÝÈœ˜Ë#m+)&4;Žµ—4¤T®*<jÉZ2)\\Œ‘ÅLS¬ÔAqØé†A½“ò>\\&rÐE»•¿Ò€æBÞ™zS{”ðRñHÏ‡)¨Ên\"Àì_ì«Û´¹R*ÖA}ùÕÌÜ¹òïå>‚]¹â¡nˆ‡£S\"iË²TXIþÉZÀhŒ%F-iXšÐô½IÒ¬¸ý{°BgÓ•gd.ÝšÀ®·P.uÕO¤SPéöÐqÇîMís.€Çê£4 ¤˜Àì’Ònå¬aÊ²ÆJ¿Ïñç”+õíx‹—úXré¾?¡÷hÈß'Š¶¾4Õ6>“[<×@lM÷Îçß*¬h±¥ð%“©í¹Ok=å¤©t½ë¹æ”ÆùgÚåƒ‘\0}Í ÷…ßôV®U4:0ù¸ü_oò\$ŸÊ\rþ÷æ©)/Ÿþ?ÍÿX…û³îþßÌÌß:Ln_ÂaÞÙºÙ4\\„ú.}Ìhåþ‚7ÖþÏâÿKÎÿ0kÉ.ÙæÚDBL6†\$7d¥ÅÎ]'\\<\$ŠE°0ÅXŽ¨A àx ž@\"ª\$°\"‹K¨9ƒjž«¸ý°¦\0ÒŽch*B¨&Ð@‹&T¿ÄÂacàF	ÔÁïþþp»PN&î €‹¼X\n‚&-^¥åÒ¸å†¨ÏúûÏðV0–>¨ñjÊŠP¢Ü®•\0ðÂ*ÚU¢ÁCè(oìñŽ~\rÂ–‹ðÂÜˆèÐÀº°°õf®(m<ó.\rª³àÂ_bX]­Î]Nn©†Î¬J˜ÿ`Ö1€Þi¤FV,P¦ôpÊŠQ#\rJZîÑ,ùq0|O3jð»âLt b@ÔjªòQ/,%†\"J\nÂOÐ÷¢ú5­L6BJ\nà\rbf\rÆƒoIqzmPãïTFQx>‰\ro<5E¢‡qc¥E1|- ¨ï1&þðÝ á°µ\rÑBYs»ªð½Kæ'mÊ>Š®¯ñÄ¾\"Gq;\rƒáä½qÙ\0n˜ÿÆùñó‘Ìkò¾ˆ„;\rðð;ì)b¢‘Þ©Ý!ƒØG°›ð¶Aƒ!Ñ=\"^¶‚x/cb-1!†bBøqÀì¬kMJ!OŽÊ£&®£4üdþC‹vÍMj<§:ø’o&\"Ùƒê®‡:ú…Ý%ã\\ÒRe(ƒ4Y¢^ö¤þ£‚b8‘ƒv[\\C‹»ò\$ýÒ†åDZÍò¸Êm^&òvædZË2Æùò„±D\$²ÄîÐW+ÒÜSrœ»D\\\r€Vö-È.Ü§èî£~¯â^Ê\0uÎ”\\\"6€ª\n€Œ p”>ƒ /Úñ²èúF‚Õs/¬Ó,ÌØÇo¨mŠzÏÎèú-%À4Ž)SPÆçk%~ÏªE’ê*x/`Ì \nN‘ÀæÁ3¨Ì!#G8fr Eò;c K\r‚Ý9#8 2þ0ÃTEÆ„¶ŠŽ&ÆZ\réô‹\"4\$*	“¼/gÈFÔg®¼À\n¹n£4ó‚Jé¾¬ÓÜgíxXê™\"I>¬þ'ˆ@¾î>Ñ“ö.ƒ.3c2ê à\$¤j¸T1cXK’caB_p.?”2P‚ Ñ	N¨°)¡0	¤UÅÉDBw0FºÄœœÈì®Š\\+\0¬ÐBú Æ¤2@ŸA£Îoò¤» ‚-ô|déœ¢.,£*“ä2¦ª3ò0bNbèÀ\\*ßIÊšö·Gñ…F×|?BPß @C€æ¤®¾& ";break;case"sr":$f="ÐJ4‚í ¸4P-Ak	@ÁÚ6Š\r¢€h/`ãðP”\\33`¦‚†h¦¡ÐE¤¢¾†Cš©\\fÑLJâ°¦‚þe_¤‰ÙDåeh¦àRÆ‚ù ·hQæ	™”jQŸÍÐñ*µ1a1˜CV³9Ôæ%9¨P	u6ccšUãPùíº/œAèBÀPÀb2£a¸às\$_ÅàTù²úI0Œ.\"uÌZîH‘™-á0ÕƒAcYXZç5åV\$Q´4«YŒiq—ÌÂc9m:¡MçQ Âv2ˆ\rÆñÀäi;M†S9”æ :q§!„éÁ:\r<ó¡„ÅËµÉ«èx­b¾˜’xš>Dšq„M«÷|];Ù´RT‰R×Ò”=q0ø!/kVÖ è‚NÚ)\nSü)·ãHÜ3¤<Å‰ÓšÚÆ¨2EÒH•2	»è×šâš“²EâšD°ÌN·¡+1 –³¥ê§ˆ\"¬…&,ën² kBÖ€«ëÂÅ\" Š;XM ‰ò`ú&	Épµ”I‘u QÜÈ§sÖ²>èk%)+A\"ÅJ©\$†<±t¨±KVØ2Qú01ÑLêhÈHI¦JtACÉ`’)Q’ÞÿÑÒYxÿµˆÄœ‹ËÑŒÂ­,…óàÕ!ÔdW&Ë‹`Îª\n¼ÑH2\"HOÑ)Ì…Aó¾RbúÐAàÂÞŽC(Ì„C@è:˜t…ã½œ# Û	£\\7ŽC8^2ÖØðëÃ˜Ò7Û¡ 0Û#(ébîøÂ7\ra|\$£ƒ–6Ûƒ xŒ!ð@´Ã²7ŒŽƒ¤9¸\"˜¢&\r.»DÆ3¬ý+9Õkjhÿƒ#\"PL¸‹¼²Ý‹«Q?¥¯ŒÐYÁq¾NÙÆøó8Ï'ù1 ¢6Ê\\¹^TÁ.š<è`Ÿ Œþ‚ÎhyþŒœ,52“©Ê²I,Ìú{VŒÈ4Á H'ixZžÑ(Â¾Dk/@‰a#¨Ø:°Â6£,+ˆf˜œPR<¨Ô¶C&ë3þÎËokª+ïí_:Î'EæŒ’€‚e‰n0OËêCöó±ë«;V	ÜAÖé´3¾q„£Ë@Ï9Ô—-¾œa ™š;ä3Y?òÞa1lIJkT	òÖ!«›6ÅâPX…	‘|VÒÇ9°«ˆž<o+nœeé–S¢±eº+(ÅufgSQCÍVlRr­,3ÜÀpÒd^fÅGæ¥èbéŠÉ,_È@JqP*Oò½žÜà£(f,Ä¸£ìðØ‹5d‘£1Àk€VÙ;+C\$ª[ªM¬9“vAÁ\rá˜3Å¨ZÄò7QM8*óˆWxyÕp‡PÆÎpsÍ¨ÀÞÐs‡@9C ÂÃ\nI¢-0ÜN¸(`¤µ”BÆÔ\nOA!)… Œò‘à. Œh»2ÖR«QEeH„ˆGÚEK[æ\"\$øÖ!²ºøa™·(APß/ž–Ä;\\HL¤µ”Kk‘qEªòÀXK´/ È¹²ëí~–·.üˆ<5„EÙ³¢Ì|Ùp\$âÂ%¶À¬“J4•P\\Æ½„Cs:áÈâÌæÖÃ¡à8•‚#T™\ra¬UŽ²VZÍYëF+-U®¶VÚÝ™kq.@^¹Žêé]`‰v†ÅÞ¼Wšõ^ëæR/æ\0ÀƒC`Ì0†³‚ÃN*Õ‡¹|–´T‰_étPÈ¬ŠeLYT€d¨mÀER‚¥[}!Å¬Ì!ò™ìq…V ÄrŽÑ¼¼†)@¼Ô2!A\0P	B¼åZ\\Qõ.†Õ¸#/bé2Œ4š›S\0Ýùku±•TjM^c°•Š€Îc\\ÑSaïf0è¨XÓ0Ž5xF¤RŠÈ2-@¥b14rV‘€PI\$!æ†@ÒÁNla¹‚“¶qn3`äÃl‘ôb•¸Fa@íðáÃ-JOé9&JbÂ˜T¥Pd™Öj­ã‚8AO1Ý!’Åhé	3Sõ¦^)r•[‹ ²|éñ.F†±Œ•\rµÉ¼&bûÒÕ­‹ü9”#toï‡kØ7­PiàäXS”pNJ¿ÁRš.ö\nWªØm”ÃX‚DµNÖ=.&Ÿ§4¶&IÙ[‹èpPºtJŒ“×pÁ<'\0ª A\n‰lD«J5HìžYÊZ{‰P° +\0ˆB`EÁx7¸â\$ï±Q\$EÂ,6ÍÞéVø f0QF2|}Å(un›9”qÄÄ»\"òÆ 6~\$Eß³ÄŠ¥nÔä«²ÄJäÞYH29Rš»óPY1©®e`õgà­Ž4ÙñÖUNSÉM°¦ìè…ˆ5>T1R`Å˜Ù‡Â\$¢m{ù{ÐLh>ÄJû­BÐO5¾'ü­	1>Ì®]‚`ß(ËŒ™I¬L¨I+Ydd(ŽœúØb‘ŠW2^R`&Þý2¦•o6\$Ìs<·W‡Üˆ—BâSuYh\$‚{\n“'Q|àu­Ã,ÁÇ—‚˜iMÈ!Ø€áS§,1pÉº`Ch¢UJsIe„{¿ÇÊ_eª[~Ò¬ä†Pî«èdnjoÐ724äª’|ÌÁí™N\0ë5*MhSq2öPb(É.pˆ_J\\‹êõùØi’›¾\$øJ-(&†IVv§¢UÍlbTži-I¡_i.\$‚®™L‘¾Jü§JÛâ'eÌì\r×q£º%]‚‚ Aa X-Þs¡BÁ8A¾½0áz·™kn\"Š3¬ìyys##¬‚ÆlžÓIí›µ>vrã\rOa©ä<Ç²‘ŠnwN”LªÄ¶ˆÊ;œ¼ÊÇèª‚à{–·î¥Ö>˜Þõn»å`ïÌóÊœëà‹qû¬—Ã÷n ¼‹É>xö@úEï“ízÐÛø×àüÑ£†Ç	UþœóTïr£e‹R…ßéõ®ô\$[»xßJD §ð½·à¤+×þ'Œôçä{¿Qç>uµÒ¸}GÞ÷ÕòËÍ”Áø÷\na‹M¶XpîHÉ,³wTì¶½	eñ² )×	xïÉ‚P?¢¼,ÞHƒÂÎŒ´ÔæÄMÏë\0ªp`¨I¢d*01E/f2Egl4ÃâÑÏìv\râPø…ZìJ³¬Pr¸,‡&C8ÐcÞzõCòë¦0s¤¨Wd’ØdÆR\$8BÆ®ªíŠcúfbŽ§\rnú¬òDËê7\rCÍl•ïª@ãúÝ‹ç\nã¤¨Í	Íšn©fõÏu	m'\nÅjßžû‚è÷P¨4Ð½\rÃ	06Ì‡B*Ê‚Ç,‚ÀËÅ@5\n¾¯t3¥'\$xt-£ÌÆÄš·bì¢xÉÄX‚ñàø'#V´pÒc%„§Á '/n.x×\rƒù„°\"A~SñBà'D† W,¥cÚuäÅñ,Ô0Ç%Täc	¥nŠy°h,Ñ«IjèLÉù0ìÍìÔŒæ•0¥bnqQ¢q}°Ä1ÚópœÜ§™,ñpÍÐÔã`¹ˆ-qÙÂkÃY\n±¶Ê#g, Tq¡¦@\"ÄÌ>OTð’eo2ùq¨ðšô&K L… ®Î!`ö0ìðñô1‰!Îju)h_ï)\"nÞõÒ,ðÊ<.,tN0¿,ñÐÜ0˜G2TQ´¾Î3%òcb3&°ë'\\=o]á'¯Îr«Œ>ìŒ*‹ŒwŒÂª*h,ìqª Ý&šg†Lâ‰gbáÎS)ËŠ\r\\Vç¸ûcâu.r~*òÏ!„J+¥Zx¢*òÆlDsjX-ª\"ç¢bìî!2–Ï¯'ãâ¾î4C2˜uPá.mÁ\$8ânBÂLÂfÑôeŒšG°“Ïç(Ò3µ&0ÉJó@6’†Oò‹4¬`è-×/c'30ÿbPçSESXÉ&Xç.C3qÅêÀHîpðƒÏ51ß¨ò|ð;8ntèÌM*k7sˆ{Lg€ÄFÑ#þHnF\$E/0u.¢ÃêùS®p.g#ås7ÑÒÏPš-ni\"A'sÓâ¹RáóU-s“\"cî†òvŒs­àg´bŠ²Ódd‡Öæ1á4\0=¦õ+§gA­3&èM.{Cñ2Èæµ‚fQTh?6óÝ&”H)ïBŽÔ/5jƒD³Ù³;5”â-Î€ó[9ðL5Ôpj‚{DÒg(Ë•på?qµ?´L´F-ƒX¸D~T”j¡ †.Fã´³YJ‚\$ä³éï\nãt«K”‹8ôŽâŽäT¶@HÐÃÑáMIMA¡f`NâÙ6“xs DŽ‹GuJóH-tù=ÔýK´f-daO¬O8ÂeEÂH®ïCšO³ï f¥NòÜEŽ6M¡ŽÎÁô6•o‡*„l¨ÕTºÓ/ž­c>¤­ÙTô5U0\"ñCÛU¬ŽöL€§ÊÓ;FBìgÌ¿VÃÐïçZ+”mó\"ðÜðÕ‰°YUo_!/6÷ÎÛX°ŽcÐ¥\$ò0)¢„`è@ØlÁQnRò·‚ï<’Ù7êÀ\0Ë¾` ê°€ÄŸàÜÀÀ¨ÀZ\0@[‰&®Ä&÷òG45håHÃ'®Û\"o,{ç¬ØÕ—a4\$¶\nÂÃLüÌ`.\\\"mµOªÙÄþEÒâ‚@	¦\r Ì.6%µÐC‘ìtE2ÅrªåM]Nõ-g+s†vJó&çJBy3'tî{YÑ©â`äÍ¶ˆãÖŒ5G§AE<OñmDßmœAu Ì®„3¡mFj7kö'O.Áè:¢’4Ï}lRål–@É{`âç6²wö¶1“FÏvçm‚²î–Ê)Ã gÝqÿmpÏn±êó2CŠ—%sÅû/ÖfvÛEhEPýégM¬…imt¬ƒ>n¹,X?ìj3è0øñ©iŽgb&œ\nÀÂ`ê ÛSk•pp`=¶>K:Õ'à×(ç1ûp^åÔqB ÌF3câDä\n%’cR¦Í2+÷]y´ëyñ<5#KíŽÆuSÁ PîÌ®eÇË]Mjü5ÍlâH.`";break;case"ta":$f="àW* øiÀ¯FÁ\\Hd_†«•Ðô+ÁBQpÌÌ 9‚¢Ðt\\U„«¤êô@‚W¡à(<É\\±”@1	| @(:œ\r†ó	S.WA•èhtå]†R&Êùœñ\\µÌéÓI`ºD®JÉ\$Ôé:º®TÏ X’³`«*ªÉúrj1k€,êÕ…z@%9«Ò5|–Udƒß jä¦¸ˆ¯CˆÈf4†ãÍ~ùL›âg²Éù”Úp:E5ûe&­Ö@.•î¬£ƒËqu­¢»ƒW[•è¬\"¿+@ñm´î\0µ«,-ô­Ò»[Ü×‹&ó¨€Ða;Dãx€àr4&Ã)œÊs<´!„éâ:\r?¡„Äö8\nRl‰¬Êüž¬Î[zR.ì<›ªË\nú¤8N\"ÀÑ0íêä†AN¬*ÚÃ…q`½Ã	&°BÎá%0dB•‘ªBÊ³­(BÖ¶nK‚æ*Îªä9QÜÄB›À4Ã:¾ä”ÂNr\$ƒÂÅ¢¯‘)2¬ª0©\n¶Ëq\$&‚ í¹±*A\$€:S®·ºPz±Æ©k\0Ò¸Ü9#xÜ£ ÊU-¬P¼	Ju8“\r,suY©ËÔBæÀ.Š­'â˜èôI-\\µªŠÒW\"¥u,ˆÍ±‹Ÿ·(²­J!\nù€7\rê/Ö‘<›-Ë2W*ÉÃ{cQkRÄTÚPãÖ+C£+ c@Ù¥+ä-VÉìòæ·ºæ³Ô­äbã(Þ6Œ´ûTãÛíêéÜ­õŸ2AåÂœOÙÑ°P)#›î6ÔJº¬Z*ÄÊœ°ØWøÊ9<#–\r¢7­OTÕsb|\n£ž‚×hùqC\nRR¥BÍ„Áä5|BÆåhŽ3)Ö¶¬1+%’\\à«I‘m5À•NB¤I‘ÖpD!ÔSG‡ƒ¼9£0z\r è8aÐ^Žúè\\¢²F\rãÎŒ£vÑ<í3äü„OˆÃ³]º˜¾ÿŒ#pÖÂKNö]ƒpèã|¿¾cò7Œ‹ç˜¢&\r/»\"9n\r—·0¥™nMór•3^ë„ClDŠa¤C)JVêá•Ms×-ôEe’/ºZ¾á0Ö2RÒîg;U=òu\"/wQå6Ñ\rsÖKŽ®ƒãØþD3X7\$AM±Õ!Aôò¸KÆÒ=e°üq•£åÇ=¾eÒÚÍ”1pÕŽ›soeŸ¼‚œAþûWÄ{ÔY* €\n•ú‰Â#Q!Ô6@@ƒl¡•Ý¹òœ_QIL¥5Z„`êƒtO©î\n ôF¯ ºi3†v Ï´#`§›#•l@Rº\"…5:\"WJæd}P™jbtÂX\\>w.™ÕCµ¤CÂ¬€êE)=Ç†²Òiy€è ¥´—9``lnGüñ0ÆÞR+“)iö+7ôŽÐ{À‘qÄXqfY£×„i#ÔwïXÖºµ\"í\"Y0GKèEw¦h^©}6,ÑÖ?è•\"Ö‹Ñ)Z%§6…d“1}ÑåsJ%Tƒd*Ñ’ÉºE=GXæ•ê5èa	JøÜyH ÑÄ¸˜ˆ–œK<†\n©Ò“hä“Ò\nÄx,5¿Ê,’DÇä¾+‘Âûy¤EçÁÃ«'Ôž™^PÇÆY6å,æfQmäÌ)V²b\\Œ‚¤ÅØ1. ÙOYð49\0£¶w[™â\rá˜3ÆÄpùy-érc\$@¨Ï(mo!äAðæCc=áÌ3@À@PÃ:H`°ø‡*(a‚H©ô¶ÜO¸(`¤¯0¦‚1H6fÛL4j« Ô]^Æôš@D„ Ar2[éÊ?\$9\0Íp®voÊD¬£Z^ñdiLÐFÐ‰òñ\n‡gñ6£&r‘Bf\"ôYñrDâ©JrÈ+ÁPï·£à›-O‰\$ÉK˜}\$iù>FkOj-LÀ7ÀÈŸ¡ŠIpŽ\0Ï‘nU©ük‰ÕT¿C—Zª3õœ·Æ×‚_jI£ª5MåDª€ÑHG‹ÄF4²¼C°áÂÜ‡0îÙ\\heÀ4µ\0ÉRlHhj\rIª5f°Öšã^l\rˆ96FÌÚUÂOM¹µ7úÝ£vo\ré¾L×\0Ú\\…péÝÅ‡ã\rg‰ÊžfDƒuè²µ\nË¢2@\rw„öÑ4›²ž¬Ô½CEÍ—Âmkm\\«Ñ9B«´Ûp2k-¡@Dj†cœè\n\n (ŒXÎ~MøP³ÛY†¯Iù€Ã§^¢™dˆf<U0¨â—ûŠt9Q0¡`höoäX%óX³Ó×4ÿ—‰)db1Ùüš\\r‰\nÇ³‘GËäu,}ÿÊÞ©ãp¡åÒ õFcºÕFÈ¦Õ§©Q0»ˆ2èàâhBiß%¢À²[ˆ)iä½™Fˆ««j0’>Nà ¥ÆžHÇƒs?'ì5\0ãØ ÁÉu×Úÿuˆhm €1”7!¦Ï…¼=Çe|¶kt4Ã‘øó*\0žÂ¦tœëŠY‹S:´=ž¨nÁHÉÆæ±rœy9¦—ìøæó…Lhª_ÐQ`Ãpf\r!œ:‡(bŸ´•Å°„ô†\\;#óþ‹%kHÆpÝEJDq­81n7#·ìá¥§`©‰[Ë\r&žgÒ¸¨õ+b\rŒÏVºãŠ—d%šX˜FR³µþYá<'\0ª A\nr@@(L¼­T,#²±ÍA‘°÷\"¡”Ì´Ù¬Ø‹H½=Ò~˜aqL}õT%ê«y­QR•sŠÏLÊ¼¨\\èšr¸I<\"‹%2>ŸYÐdíåÐI†4íôõž’’ª,ãµ³i†è;Gê;=ëG}¡±Yò¼ˆYiúÚwgö¡rý·bEúÙžBã‹)&UÍÑ0[áë<Fx½‡m<¦f}ç±+ùê¶qVxŸ]¿u¨÷ä*nz›óÖpÄìœõ°q¼–Ð£žT)U2”EÞ¾¢ëgÞ¿‚³sà‘’™³ªÄˆYÁ) H<Ç©Óú¯ÍÚþþ8yÞ´ùÔÔ3†€Aˆñ.OpÄ/If\"wSU¿€À-–sd9ca¡I¨µ\0æ\r@Jƒx&ÎBTÇJ›%äëGžH ÒH(eÖ\n`‚€¦£Ø„ ÊŽöœ„ ƒF’¬¼4i0©ð\ncO€¤zô#|#\0P	 Ü‚\nq ¦mT¢JhKp>ãÐ‚0. îžgzâî¨y+LôœãZïìp~Î6Åæ7ËŽ’p˜ð¢Î:‰¼'ð¤¸MÞ‰ÌþzÂ`BªÛn‚1Œ©Êøi\"JOrëi ƒ.2çNÆ&ÎÊÑLìwDŽ®ø/ïLÀõ‚Œ ãœ‘°H‚Î‚úbÎN&z³á`*EpÛ„4÷	òêjÚ‹+Zœ¡ÿERt	”ÎüÆÊ¢I +äÚBÇØÍh\n'ÏœøËb.±dùïŽWÍ˜m”eGÀb¯à¨ÆfM¯fÑ	:öÉ@8ÎT\n€‚`\r>aàÒ=à@ #Æ\rí.()œCî¸î*N\\ø…”Ží”Ð	ˆ7¯FH‡Ò—\"6|±Ð²7'ÑNqï&è0æ×‰HÃîÆçïÍê¨{xó\\Ë'˜ÎJH}1îç#¨XpÀ®, /4ÊMªÀÇÄi®zõEêo¸ëñþ\",¡!çRAA ±àZdP ç°ØlÝo\$/8¿qôE•#d0ô„Ì‘H× L¦¡PŸ)à¨hÄ»+I&’.Ÿ22«O5Ä!±ùr ÎR% ÌW\"²–1¨1Rlþò:ÿ2]*Ò`×’d¶iÓ,r¤î\0r†ÂÍHâB0Œ»ªží0H'â‚(b‹\n²ñ,Ä%*/Š†¡§ª«“\0ß3R`òò=*EÄtW®†TÂ!-q„[2L,ãQ„GRv9®ª4`—NÝ å”QÓM/ë0²ZFqZ©â§\r-’µÅ AæŽ)	¤¬l÷¦ˆ-êÀd3z,ëe%'¥'Ë\\³JŒµ“m“vª±èÈ8€IæGCfÛÀ†=†æ`ª®Z/H“3žAD,J\$°ö“bµ¥„fÑ52“\r'Ò#=sK>gÃ=ç¯\$SÚÉ°ñ2¯32ò`Sì{³ðÛ+G¦Ã¤3íŸ*’ÏòD8*ð›ˆ®ò´ «BJB’_ lêìÔ¨ÍãC”\"Î\"#@EQîyé7=ŒV“ìEÇBÔ&ëÔ]tHî›&oN†á\\ÑfF‡JRe*N	i­È­ÞÉ“b‰r¾ë¯õ¢ß'å91ØÅ4¬–ñm:ns²k)ÎÜ+ñBÊÔªËôÅ\nÎµ!£JðZÓ+„=ð¿DÒFÔC'ô?NºÑNŠí”–°¹NÀð\0¨ àÝÎjZçç4.4ÛÓàêHbtÑ	¯Xñ”./aË_“¨˜r?@TEG)M\nõ<µAGòÙ3òOEBo@cóÇ3\"ÏuZP4dœUFÉó-O³ëU5tôOJudwõi>’°’iÝ&ic«CUƒY²ATôþ±(‘	áZ”c>ôgCt!ÕMOÔXèI)M³\$’Jx´÷\\´;GuÒ5¦-6ª*j^Ôç?óÛh—3IN¿Â!\$ŠÏRPè0àÍ­¥]S»>wBr'QT_uE_³Ê¡]9så6³`¥*³/òK	µ(4ÅV5á1¶#Y4ä1`Æg-N«1‰©Q8³ã`VE[5ÑVös/Ðã)1Û/rVtmYÔWh”ÁgRÿ\"•'\\4\r\\u¯i¶…X¬<Stœˆ2~16œ6%\nß4J¬Ù6Ês´ë\nt¦ÏÎ/:Ê€J'ŽÍk^TS,¶õ¦I\0Pÿ€ÌaæÒ£Gå1Ã§5§ú1BA°í&òË£n±nMpÊÊ“áR	;mröX¶ã(sH¨¯nMÖÄæ÷<çtŒç¶ùS·%G…æÅ¨…IÎT5  ¬:ÃV8†…qÔe2‹HêÑrÖ‹añ\reaGVõuÔ`ÈÖ¿=V)Ëtî1u0¶ãW‡VïL‡VŒ–#%vëTµ‰Yäv˜‰®{ZÖC|ÕõhkQ|Y)ÀÇÔhÈvñVµµ]'y|\$öV¬~q‰{„¥ú.4dâ'àŠ<'Ã·ÝháCÕÓ	‡Jƒ†ëÑO6_%˜+^– Yqi#zdÅñA8=‚8kC?õ±\\ö¹ƒ5ƒXTƒJÔ4€Q…©¡eØz§j`ñe…*m˜|Ã·ïkJJD?[O%lÔCb'÷¼`¬4/P8oiŠh—v6(ì,ÃLó‰ÓøP×ó:·¾ž¶3rµøò•E}õ‡~6¹4ûce•|„!kUÏU1Žñ4ÌX—Xå@7Ïi÷æƒÈ@„MÑzwB‹”€ÃõÚÙÏW]ø‚8ÙÝ™Ù€°ÔJR0)É[]×³“•“ÃŠ„´µnH©agòg3]yY'C8ã‚˜ç‚ØK9eZn¹WÕÅ™mØé}yNPŸ”iˆë™Ùui'Y™ÍiU—;Ycšg	í	”Ù•¥õSQ¸%–·»h8i˜•m™ÆÝØ^ö¸cœøGy¹œÁU6í½¸A’è¢0‘6¯˜žq	cDÝrRµÉ@ù›[d… ·+g—•™TOvÃ…¢1i«—Ú›Õ…˜Yq~p÷rš7jŽu”¸ôY	¤Ñû£šS’¹ßùˆNÈ˜M?ˆ¸8ïÜb³nª1WÎÝgÏ-˜5ÍŽêŒU£€ûŠÞFº…cZ‰SSixE–ú¥íç§õ_ª”c‹£Ø	ž7õ¡™‡‘\n@·-UXÙÞè3Æš©–{Oy§ÌÀxŒøs”%k+PÞú±î+™ámÛ8×!*d_¢ô?÷†Æw¹])›\n\\ÓŠ®É±R=±–pZµ8+F;äýQÃFBÓË1ÇÓŸª‡²·_ƒÅ<©%+X—„sõ¥e6^6fx[¶Te¶štÆ}lû[s³PPñ@e>\r€VÕ Ò`Ö\rÐiÐ`‚kà\r§\r Ì¢‡*+ÀŒ=cÄ\r¯²ÀÄ¾î\n ¨ÀZ\0Ap{²I\"½°S4ŒÛ‰»†ÊÐ¸á‘±A’œ)Åëžtq·vS'_Ûéz\$JÉ›óø~ãGH7»ÿ«7³¶%Gm”›ºdôÔt,ï¿¼ A¹GŒo»\r(×–	»³»sìÍ¬]Nø\rÎOhg_7¤ÃÓOÄ©6¸Çš˜Bˆâ¤“ÐH)ß4œ0’Îy:œP«E¡|8¶Ú¹k7ÙÈØZ)w§À˜ßKâl£Ä>£û.-ôI•]¦pžvÇ|AŠ…ÁÚÏEè¯n™IÊÍ¤býœ@äƒèÏ0oE¹éG—ž ;?Ãt¹¢Ö·˜”*~LWÃ¸La‚¹sŒ¾‰'Zˆz‡^ºÂùigùåÂ\\@€¨?ÃØ>¾< A¼­V\rãPáp{\\õÀ=-eŒ‰tXÍÃbù²2qoUM—cÔ=Õ¹ïuèi´…H˜8˜zI&Ä†|ÿ8áFfDÍQ3gtƒìà¦ ‚™¯À³O’`ê Û>ÚBvšÈ8¢~	ýNl0`«`êý?C@N%R^­¢t¯¹˜Ã{<ŸÌrDˆz´è<Ý™ P\nœê„í´‚%tÖØUsP3F³ñÊH{1\rY>í>ôúöï[=âý\0øKÑu™ýµšYa3×\\,6èßà4·#¶}ÏcMŒ?­@@š	 t\n`¦";break;case"th":$f="à\\! ˆMÀ¹@À0tD\0†Â \nX:&\0§€*à\n8Þ\0­	EÃ30‚/\0ZB (^\0µAàK…2\0ª•À&«‰bâ8¸KGàn‚ŒÄà	I”?J\\£)«Šbå.˜®)ˆ\\ò—S§®\"•¼s\0CÙWJ¤¶_6\\+eV¸6r¸JÃ©5kÒá´]ë³8õÄ@%9«9ªæ4·®fv2° #!˜Ðj6Ž5˜Æ:ïi\\ (µzÊ³y¾W eÂj‡\0MLrS«‚{q\0¼×§Ú|\\Iq	¾në[­Rã|¸”é¦›©ž7;ZÁá4	=j„¸´Þ.óùê°Y7Dƒ	ØÊ 7Ä‘¤ìi6LæS˜€èù£€È0Žxè4\r/èè0ŒOËÚ¶í‘p—²\0@«-±p¢BP¤,ã»JQpXD1’™«jCb¹2ÂÎ±;èó¤…—\$3€¸\$\rü6¹ÃÐ¼J±¶+šçº.º6»”Qó„Ÿ¨1ÚÚå`P¦ö#pÎ¬¢ª²P.åJVÝ!ëó\0ð0JË¶Ÿ­ˆ2¼\\Ì+ûbœ:HÃdÔ­IúSÅ’K¤ò¥QZ\0QŠL\\N|å9©Ã†è7…Ã[%BŠ#bð£Qi(ÃŽp{°°*\n”\$ìÏÅÄ“&Î4€‹Áî99Eã·/'ÊÊEÄ“¡q.Bh8³0b76\nzLµðŒ…M\$#;rÍjæÎRË\\ƒ¹²Ê¶H0KTXC¹ˆfŸÆL}¶€ET}EnÑjÚz™ÍS¹*¬¼“ü”ž”w‚BÕ¨€jmVHêŠ²¿—¿]ÔŽLÛ1ØHUì\\R°å]Ïxrl8JìTÚE‰Ü^RÝÚïE,î’|CMÊ ¯ÑÈgyà.nDád‹†OCN³*©œ¢/Xä2ŒÁèD4ƒ à9‡Ax^;êpÂ2\r²¨Ê9Ãxä3…ã(Ý®(Ü9#~¾?Ã¶2Žš0¿Œ#pÖÂHÚ8?#n¼:xÂSõã#ý\0ox¦(‰ƒL\nâÚ¨ë¾íæxíx±7NÝ¦L…Ê·o°4&Ú<·Eg,Ô}Gf5q„È\\NS¹OÓD]Må9»}?BàÞ<1ör;…Q»}í}ˆ7ŒrCÃ*pÒ][Îü³'q¡®s¹(¬Ò©Ú{=9´«‚\\]\"àË9zÛ'6ÜöYQÕ±¿Ý	'pã‚ZB&ˆ0Ž£`è°a\rÔ2®„²aQb)ÈDðœ…<Á‘X	9!¢~œ…	Y FÄ®©U¦®K¢&;dhé-Åö¢ÎÊ¢t/¥–!ÆT‹IéÈgÉõŽ'ò²cßQÛCmè»îNÕ=NEmq—\"«ÈÙYsŒ½[ÔîW^,IÏô66”{Ã˜cn0i—¨\"Z‹	ŽÑFD2²ËrBñ‘ÔV‰]Ó¯c\rr&7,©Ä'Ž.Ú;‡Z–D8 ‹! 2†ÐÂVTQ6'–A9	!’”Ž­:Ähä¶Nò¡cÄNDˆÒ&\$óÐBQ1™&8>¡]\n,2táÈ·vxÝóÇ{¤0¬Ç2æåTk’2>CÂxäÀSþ@(ô¦Ô{ÃxfÁ±« ùT’—2g^ìà@Þ|¤0n €:¶0êÃüa™þ‚\0ØÃ:U`°ÿ)¶C8aJ ‚y‚WÕCpu@  9‚—!W8t2Íá‚\0†ÂF\$Ç(ëš‹ÎÙ°†§AÊ‡_.k/²Ìé\"ÈRvÝ;Rs9É²³…4‘8„äþª8-—’¦x`*ÆäC3Z›‘+\0‚Õ°r³6@ÈÕÁ@hM£†è2J¡¾·ò°çe\rÊ‚9ÄX÷È¿6\"AÒ„ÒNU³3'¬Õ“M5òûS\r\\E½„¤–	X	¡„9 Pä|ëàsíiÃPðKC€º¤´ÐÐÚ+Gi--¦´ö¢ÔçÃWk-m®µûØ›#fí¡¶¶Ú›xln-Íº·vòÞê«€1	¶‡\náÜa\rg½Ç6¯6[Ú©¦tæ«7´_V¡Xq†¬¶cŠuMê:¢ÊÈ™<tÌcç®—M>¨—„ÉÜDŒ@\$\0@\n@)PhR>(¢z÷žAx÷%×ÇC”UJ¹Y£mPÂáCÒU;çšÅÔ%ux<*(¶9ËÄëË\nwK%UO\"Âº[±Â6Å^œÓ·ë+Â¬é­!Ê%¨ú˜+\$’‡“Ò ipÇÅÿ¸Üá:	\r8ÀJú0r\rá¶ŸT\0ÝR;^Žs¸“ü‚èpž•ß·.–oap¢Æ¢RÊä[\nJÙ]'¥W‚ìi•¶!J™â;Ü£]é@¡x•F!BQ.yŒ©ßˆÒê\\=}J*/ºø¢¢ÕSz)ìóâøµVÐçj` † ÒãŒÈà÷Ÿv‚‚¥æn.4·v´ÿíîAÈr	«žæ±Å- êx™²R\"å„&®¹ÄàÁzL…\n	á8P T»b@Š.Ê{Wi,ôÔkÖÚlKüã{å	Í8(²E=xzœ·}ˆK',w]#\\'|ÙÙáV\rw|P‹=(¥e=:JcäÎþuèj	Â¬¼¨ä¬4é`ÜKY1•£ÁcºK\0W\\%°#á÷þ%ž*³Mý2¬sÿwÒQq-——IÖS:PÆ¸æWaûÛC“ü^(;±@ñîÅW\"IjI±Ñ’ûˆ‹€™Z\\1EÌWnç)vï|^KÌb%brbL²æÒÒúÁG).»2v3¬™¥âQiÈÇì-Ú¶ùhJA¤=@P‡Ã„ú€µ`ü†4\n8bZrN…ñ3Çß•À•î¿˜Ý+†>á”;¬¨Êð{†õîPµ_—2a¬nO®å8‡!]óçJ–3xyTœôz‚=øØd]W£þm[o<NLõ‘dÚÚÙ®_7²>Í'r¾\\LN§n—?s\r'sÃÔ÷C;«Ö:É¬¯ŸòÖ¹;ò­á\"òŒq™KEùd®.‡ÅXwº‹ Ò‹ØÇœ\"¸áa”‹_=c Ù ¨ †	\0@Ç¦®\r#øÒ††>\0ÞÆ¤\rNò\$&m6èJ».(rê\"¸e¸žÀ@ã1JI¯0VfnE¥¢WDEÈ¼üNDH%;yƒ¸¶‰hN‰Âææ«žy,Në¬ÐÄ„ø1åñ\nÜ'pVé¢&+HÚÐ.¤O^¡Ð8e‰H{0z–bUdç%	¦dj§þÈ@îb²~!püâ¶õ¢¾9C(ÖnÐIc¾CÜìl&S‹úû0¯\r«®sŽj¹þXdš(N_¥þùè\nàÊGM\\ÓcòS²B‡Ôa¤%äS§¸vìf”»¥Û‚äVÉžVÂ~G#ŒscVÃhÛÉ§Eü9±[åh;§ì%Ð&hÚ¯šD£ÿ¤P*ð e‡…æŽÒñ\\}®@äqt'è\\u¤Ðt%â±§`SB^¶o5ƒÆPo÷¯ž2¼äK&rí\$ùcŠ;qŠ*b¶w‘Æ5¦H\$ºÌ¼<1ñ±bÌªM¶Ú²mtõ1’¨Šåïº¢n:‹†+‘Ò'n.à±h•¥<B„î‚ú+g8B³#mÊ2>Yr£²t2LÖrPó¤œà¨65¯nÖ/DÑ\0uÏLB2'\r&Px}nnó„ÄSí`E°E§¬¼íÎ‡î¦\"àS%eÄáÆ3\"#¾ã°­EB¡’nˆß(ñPãR®à2²ûò‚þîZ’òÎþ¢Ç …Kp¼ô],Ou'näî6ûÎ\"¬RÀ\ni\$ÑÍñÝ0½0Iy0²¹-‘ÿ1¾—o	+j!.ÈÚ:HÞ8ÈãR¿.²-'ÈÿÅ&L¯Êü%ñp®‡‰“Fc0f%ðj¡c·Ó(IPt‰«®ç„—³U&‡.o»\n°o2±£2ØÖ‚Ö…xÍ\rq3†ùKŠô31/378Óy4õ9FÖó‚t1¡Ïó:Ç3PŠË-èMn@¥%lüîö§o(­­)EC‡¬ñ,Q¨S'ë-	-+Elsd‡Êë>ŒØrI,âèŠSgÖõ<wêS?ˆî£H1é,úÒZuâg>Dœz²a=rÛ=ÅE:ó’‡¯ˆ8ÏŒ<\r`î+ˆ5ohÎm…zEœÎ¯~zD#C‰Dv#»5w(s'S«-tu@Q¡0ô„ºäå;çF–2é2-å\"ãºvOÜFèCapþpý1´I³Ž„ïßJ®ÓKjDÓ£.òru’õ4¸ä”¾-”­LSž®³ÁI“;IÔ=LÓ§HKKÔ©MÔÃŽY1åmM±D'ô°]“<ò2•ƒ¢6Ž þ˜B”üF¥Ð'rÊVÑü<#QUpìÁ#ÂPà\nCÒ†­1“‰Ktë8õHŸUOLc‘L³/GôÑH4×TuKUôâsT–8S8¿²Á2Ïpvõjô @Š`ÜïÊµ,4Îèx>l„œ È¦†•ð4õŽ›µ”lÕ­-©>€ßZU¨€±±£šW)>j.óÌ1ã	SÒ–7*±’=õa+³Å^h	^µPITçWÕòµèœ5ûL”{/õ'–`uíWu…GÕ‰YÎd¥`U÷`•ï1ÓÃb•Ë=UÎ4Šä5oc¥ž Ñc5ÿ6F8Ñê9B·	V=dÂ[[´)fJVèÒÿezasZØ ¨> Îúv=2½X½gï¤©ïNõgb35Or\riƒiVcTéhÔíVU†µ‹Yö¤úvhÿ Akæ®]šZuOµ\n µ8°œa/ûg…‚[2ƒi–·3/IaVÞÿ“Ynr¯-vRt6taO;g²òTó\"	\nø\rÕ4ÎJÌ,þ2'¥Þvõbú­âËóbIPRCLJÑ¡‡\\¬×tQ6fye>\"ÿê»ìZT_sP£sWSñ¡6ã›(stxÖF®¥.`è@Øl˜\r Æ\rlæ ŸRñéF)+]bx+\0ŒÓ‡¬~Kx«`ª\n€Œ p¼¨ŒbJÐ yƒ6–ª+°³?‚Yn¯-MÒÎ+är-¨’Ð;Sñâ&kð@šp ÒÀòÖ\rÐQ¥}CŸ>‚\0”¡e— 9vûs0ÖsdùQŒ\\—–9Ç%%’wÎCkV!kéã\"¿.ÆF‡Há†*Á,@˜\rí&\r¦´=äAx]†ÊJè(Q°ÇïCS}!6¯q\nÈ‡[D©üÝ”T<1 ß¤‘<HÒ}WNÀØ…`ù-îc/ò×ŠäùjµUkŽ\n„?#ú=ƒÜ´É@ÞLj®ê±x™4_†ó7QÎÇ}äÂ+¸¼øóôe“á\" —/dÚØ\nE¨‚;³á.	*\rÕ‘“ïAr„%òKƒxõÂà4¥Ì„×Ò\"à\nÀÂ`ê ÛFdŠQ¶l-DîB‰@Œ¥p'¡<òÃ¢9ªB'¥ð„ÌíM|e¬Eˆ_JçC¶_«°íHw&%&ß’ÚON\0Td8<9	.bé9˜à÷`¨LwS_WÆ?ê}E*+±Oø¨OlïÀ:C·œBæ{`	\0t	 š@¦\n`";break;case"tr":$f="E6šMÂ	Îi=ÁBQpÌÌ 9‚ˆ†ó™äÂ 3°ÖÆã!”äi6`'“yÈ\\\nb,P!Ú= 2ÀÌ‘H°€Äo<N‡XƒbnŸ§Â)Ì…'‰ÅbæÓ)ØÇ:GX‰ùœ@\nFC1 Ôl7ASv*|%4š F`(¨a1\râ	!®Ã^¦2Q×|%˜O3ã¥ÐßvMóÃA†\\ 7\\Îó´ÀÎe9ˆ—3©ÀÈa:sFƒNdépÉð'˜éÐ«ÖËtFKÅèÝ!¦vtÓ	´@e×l8(¼Ür0šàûûù”SÇ@ŒüùKªK:›\r†t/2u=w“îÝ\nŸ˜1óq¤@kìöèúDÒ/áÐÀé”éÕ\"Ëµï‹¸Ÿjè¼I\n>ç°O Â9-ÐxÒ48Úî%ƒ”6\r P‚©B8Ê7©ƒ¤&4­êmÚçŽ£pê§À.ÔXÀ¥ˆ(Aã{¶\nÉx@·ŒQ¼Bõ+(!&/sñ–0HÂˆ¸Ð9£0z\r è8aÐ^Žó(\\0ŒˆÜÉ(Î¦3€ðü Î0^3P{.:Kbúâî\ra|\$£ƒp˜Žà^0‡Ê#3xÈÍ3ƒ›D)Š1CB“È(ú 2˜e;0Ž	óX£ÔZD(Ðä¼\rËÀÚ¼*#*§\$“ã£×®)Âx©*‹-u2kß–-pKIÈ£ÈèÙi³àÇÎ2Ý1)(ë‰ìÜ/]\ra\0‚9J€‰,Œ.Ë\n;-ƒ«œ)ÔŒã\rh2HÛÁí}d2Ððó4•Ô9.ˆò:ç¨+d¦0¼/9§Ï‰†(ob6ª˜ê¾-Ä\"ß4õìòäBî}2÷Ä‰Ö60Ô PÖÁ5²…Æïk[ØUÙŠO\$VFo`×9Öy„ðëa°…:÷f™²ËžâÒR•¶õbSPÈBÖÓÜÉòË¨zÖ¹^.Z.1¤B	u=¦§ÀVwžá÷ˆ6DÖÊy´CxÌ3C“ZNaéð×¯,Â Þ¹ÂãpòF#œf1³˜Ìì„Îac49qcÎ0¥‰e£5'C(P9…)<E¬H0ô¦)ÁH@580ê˜ä6§Öä`‰\$l“ˆC¾óc¨½CÁp‹¥Hò‰òN*1£uêÉ/ƒ\rÃ=Å4 H÷41¸È2;‚J¡¯,Ëj-™Í¥EQ‰=»¤Ûh„fq3\r:¹ Ø^ f&&h2¼4FAezJ”ú\0 šU[`9‡rJ¤Ã(x¬2†Gxû_zZK‰y0&\$È™“BjM‰¹8ääJvO\rq=§Ôþö”„PÄ‰D?…QH!ÀR*LÍC’hƒI…yÄ¨‡ôNÃ“ý#ª­[›ðèrˆ>Bá°Ÿ=T¢IÂ©á\rÉ@Ã²\$f!Md(€ s#’ºADŽ0PQ]³ì÷²žaVUD+Ä:ãÞCj1\rL–6¢`@àXfa‡l0¢ÖCQ“¥•ê=`@ D\n q!`èö{dêä(,D“„’IøiRfDÂ©b8hÍ( KÅw\"×¸‘#ã†L:ˆË’–˜f\r™vþ!Ì96/ä¼. Â˜T6D|ƒ9©,Os-‰@“S>£¤éx¤i5‡#.øpu!¶dr`š#’Î\n˜¢xÎãŒPÁ½4IÒl_˜	p˜ÐÒEÂ0TŽçqIÉ\0àIL,Q˜ó%K&ÔR‰Ü)užV\\ƒå ±;k ²Pž\0U\n …@ŠìD%K/÷³;8h\$}:ÐÊ\n@U7©&Z}P*f¨€‚£,@É©Õ@%­Ršj<d‡,IØÌ£K±¹x5„ÖsP€BF' âœr/KàY®mTzb‡šùS@Ï(O¶ÚÀ[]X§‘¤\"q´ÂàÔá/i§”¡fúM™mv]›)fZÒÓÊEfÍ´!’Ênª)€¾¥²ö«#üEñ 9 …d”sš‰Ö;ØiOq0;Óøä..Gà‘‚\rë!ô`)…¦V1r²Tˆ\\©u`/@(!¢@àéNzü¡ŒÐ†C©d\$c­²=’x.hHùl!–‹Pî«E²¯ŠÄ^\"û¾Î³TEa„(öÏÕÂÃ5æ	úÆê‚GC5´hH\"R—ëK%Æ-Ç\0004×ŒF¸#ÁÎ01‘4ŠTÏ’PNÁc „U[!ÈÏÉòÎÛÍiD½Ÿ\$Píb¹i(x*@‚Â@ ˜„¼ÌKE/£ë’’p¦›ƒ¬ïIéMh‚ò®´Yz§YëE4<Òa~`ZO-SIÅB[\"å”¢Æá)<Úas}^8l˜Ú\0\\rüö'‰:š3¾,¦‰G=çÚÝ›–A…Ðr_Cc1žŽ“<Çn„.ÖÊL)u\$ëD9ç-'ì&Ò9æ‚]Ac¡óa±Õº+9ë™…> ÔYîkì%rP@R( &dr\"RI©#o¬‰eS´Éy‹ÑƒÌ¼ŒQžaC ;†PÅ–Q‘OqÅDû5ªR•>Ø:Kc¥\rÉ-&P–të}ÛæÎ*¥]Rñ )(*\"_¢²V\nÐÚ›o„óQ¬\$rÐñŠŽFp;ZŽÕÐé.7zæ ¹ÙèùÇp>g53Nó“ÌålŠ´# ÚÌÛJAòSŸ&+•ezFKâmhKàB#]>Hôž¦¬«sm©\"¤.lÕX\$‰ædƒNàÆ¨íð¼5õ™Ø1cnÆDøuª÷Z†Øª9w*fVŽÕ1\"\r.ÚìU/²qÞíi2CgÉQf»¾÷e»ê¨ðkÂ’vÞÑ;ÎòûëÅsåšòi\"ñ×\0lVö1XðÞï/P'õfÒÙýcñ7´0	õx÷×?bO´¶ÓQNqÜ;¨DüÃísYÿ‡©_Ìô|Óçü•ô`7žŒaS‰3°Ã(.Ká‚aB‡%Œ×i#ä6F?€ûªÏâ8Ç–wÚÎŽÊ1ýÊ Çêðìûjý	*ÄÔ\nPúÊTÄ\rîþ&B.L4Â%v¬¯ÆÅ,\0ÀL7Ï¦ò°*âl\nù®^uE]ƒ|ûOçP6Àn±Š¢È0<ïL€0NdðJPYŽrñÐ^Þ/§paG’µä¦Ëãº¨&BÄ0-ä.ÇÆˆÔè²BíÜ÷oZó.;\n0VÌ6ô;\n†ÌhïâN^g´\"¨rFPbÂ@²ž„\\€0­!ê\r%ïk[â6EÐäñiSÃh#bð‚DŒÁ#Ý\nCü%pîóÐLìÐÔ©O)qÊWqì–â1®jA)¯Ì\$!Ñ6ÄìK`Ä…Ã1á¬QÏ¹€Ò‹¯¦zñQ`´7¤1,ŠFäsÃT@Cç±TÓ£°FÑ‚ñ0¹ß~;ƒä­ð¨1-6;Oˆ«‚ØŒÄ Z%p¶\rZ_\nÒŠdŒÍpÏÃc¢D¯±žÖ±Èí`à\"Ä~3eõ¥–Î1ÁBRo„Ûo‹­.Ð\r3pã¬nì0¬HO¦)…ÂÇN%ƒj%äÖ\0†DÀØd /å\rÐ¾¢§€˜ÀÄŠ\n ¨ÀZ~\rÇÐ´ÂÕqõ 2HC’kˆZÌÓ3%å=&+ÖÎvl«M!¥´,R@ÒÀòC\$8,­B*6Âøër\rng!O\0Ç\"e!æª)…¤ÆÄ'Æ¢fÃáÉhA€ò“FZÀˆ¥b.“@ô“Ð›x9£›¨åJPþ7Ñ¾¦ZÀãÊ&ÀÞkæèØ†ÈGÈ°Ëµ2{0ÆÔñÞ“ÑÛ/È“/èŸIø c\$\"0Ä©1rþ1í¥ÅdEs\$õ‹*–\$¦	®.ëP®.ÞcQ\$ ô®SdSù&–ãÅ’¥À¬\"ž[bú s0Ÿ³64DöWg\0#@õ4£œ\\äÖŽ 7£Ö\0Š5Óq0S°±†_5.î~¤ò°âÞ°êË1äSL9#*’\$:ihäŒ#„¦1¥N@";break;case"uk":$f="ÐI4‚É ¿h-`­ì&ÑKÁBQpÌÌ 9‚š	Ørñ ¾h-š¸-}[´¹Zõ¢‚•H`Rø¢„˜®dbèÒrbºh d±éZí¢Œ†Gà‹Hü¢ƒ Í\rõMs6@Se+ÈƒE6œJçTd€Jsh\$g\$æG†­fÉj> ”žCˆÈf4†ãÌj¾¯SdRêBû\rh¡åSEÕ6\rVG!TI´ÂV±‘ÌÐÔ{Z‚L•¬éòÊ”i%QÏB×ØÜvUXh£ÚÊZ<,›Î¢A„ìeâÈÒv4›¦s)Ì@tåNC	Ót4zÇC	‹¥kK´4\\L+U0\\F½>¿kCß5ˆAø™2@ƒ\$M›à¬4é‹TA¥ŠJ\\G¾ORú¾èò‚¶	‹.©%\nKþ§B›Œ4Ã;\\’µ\r'¬²TÏSX6„‹VZ(è\"I(L©` Œ¹ Ê±\nËf@¦Ü\\¦‹’š¦.)Dæ‰™«(S³kZÚ±-êê„—.í*bÞED’¡~ÈHMƒVƒF: ‚£E:f¡FèÑ(É³ËšlÉGÔ(ß'R½’ªdX#Dš#Ïa¯+°a P ó¼ÖøÒó¼’ª6ëJb”ÍSÚZ™¨Õ1D¡tJ4MM”õ'NŠ4O²jÊ@£ˆÑ#QÔ1*ÙÕ&GAšCá[¦%àNÜ¦‘„º½’\"èGAàÂâC(Ì„C@è:˜t…ã½Ô# Û£\\7ŽC8^2×¸ðï\rÃ˜Ò7ß!®0Þ£(épï0Â7\ra|\$£ƒ¤6ß xŒ!ô°b\0Þ2:îÈæä\nbˆ˜4»ËZ©–1|0Ý¦)q-f\$Ñ ”ÚOÄ‰I\rZYÒ„®7Ö_irÝèsži¶-HÙ´vÃjÿ¤ª¾n˜Í*\n'AË^„»A±3Û&Ìœ¥ó™eW©©\"@†ÇHÔÎ©—û… ‡%Ìõ)™š„(˜oyËfÉIºÞZßW’–ø‡Á‚%¼0Ž£`èÃØ:Œ±Y—YkcWº-èK£\\UEi1‡LÜæ’–|e°DhF¹kUM›mi>L¬:l¡!	]„‡êÑkAH¦R·!Ak\n’X3¨rÃ†)JB7*6`o39Œx\\;“C)^ºA#E”æÞ11=8”¾chôèŠOä‚lùºžRÙŠ¨i­™­4ˆ!HëÙ\$Ðƒ\$\nÎ†Œ3p*›g¨ØZÚjxë[¿Ic¨Pu(¬Íc¡¨üºÂfzû¼V/íh æ¦éF‹V¬â\0*x9`’ Q†É—œ°rGá°CÃ0f\r‹Á•5“ZyË\r¬,<‚\0ê¿C¨cgT9†g*`oè€9£Àè¢èaá…êÙXâ §x0RZÌÑ»Ni!/µ@Â˜RÏUš·À\\AãÆ+©L£E&#±+…”hˆ’	X·Š©¨ƒ\"Väb´”&¬Ýá«#l.	àT8¬0ëeé—ò!w/\0ä\0_Á‘x‚´·òà,ì820ºˆ;c%­U•è#ßL,h¦D’£r¢#â.vÈÔÐ£„ÖŽÉ²´r\nKNAe+RŸ“hd†¤bxCs;ÁÈæOæ×£ ¡à8•º\$|Ç\ruo®Æ¹W:é]kµw†åâ¼×ª÷_4\r~/æ\0Øä`¬0ØÂØkb,MŠÍ&4YØã\r}±ÀÂÎC(9‹Æ-Ñ`Ü&¢ZÃDKŸ¤TTÈk2…=—Ÿæ·M\nV\"\$÷ü”ÍšŠ1„hßÒ’’…¸ \n (ÓùUÒ£|F  ³‚”y'JQN7ÈÑž:˜#›hŒ*\">p¸“ü›A.5P…¸áÐöÅ#Ø*JykOf!\"¦’˜‰(°¡;7bHl7­(¤ÔÝ&…”wÊe£ZŒ®Ût-(ÎrMärJ§ôNn4DÙ.–	àI\"áäá\0ÈYÊrìŒ72ÀxÝ.r}\0Ìƒxm—rö‹OÃÀ¾\0c,Œëž¬#e=I8IPBšš›Y\$žžÅåb	áL*;˜7m“ø­VövÚ‹ë}Ê¡3õÆÝ8ÂŽì°-FFH¶Ò¾Ì*ËÖ*FÉ¦¶æMÉ*eÎ¼KœŠùCt^bA½v‚¶ƒHg”&]c¢r‚ÛÁP(bë›˜ŠôrôêëÝ’0¼N:òA­a™8ê”šÊ5xNLÎ¶ä*JÈ4 ANÀh+ƒL&!é'ÐŽe™—È!iÀ64!YÌ¦e`'†‘HYû4jZHÔõBñQz RH½è·¥hQaNÄšÔ!ŠàîòêJ¥EY„BÚJA{*áV-WGS4¹XlÝÏ3‹Ôâ¸\$µé¿Åïø…-jþPÊ½cRÐCS•NSV¡,ZÞS •píÿêgõUT2Ïî%Ë±­jÌÓ­(ß£ô-BmÐ-¸ßš\0Dj&k”°°ía¬u–³¥°}jKK¿%ÏN•’%R7BëtoA ‹g©²6Š`ý›çÜÎÐµQËjY3à¸néèiNt!ÝáÜèS§H1àÉ©uëòÎ„)÷B³hs¼A(“Üî¯Òæ¸ed@2‡}JÒJ1ºØ˜µ#E—!!\r)„)ë¦WðÓµAs)=Î&ø‚Ô\"ÚmÈ\nkvQöãOL¶OS2òS“\$Š¾yB«dÍšJ¬SsFµÑ¤‹ØP•~×—R¦ø[ž‚/¾Æí F‹l(„½¿RÔ»í†2…#B ™¤ì¨Š–÷øbL kñeéÍ=‡~œQXA\nP „0.Ÿ.:¸¹nœßrÎÐpÈ\\Èµê¥AÝç:=›/¯¿Ç€^^£Â”çE4]6£qðÌ¨¸øß	˜Z6Þ4Kê€ºï=45:r©tJsÖÜ•Nó‰?Ág¿\rš‚àôçÓˆŠÐýz˜ñ;ÜC/ä¸ýÄÒÓ\$°üÿEL /¨ýˆ\$ïÞ®Lœ#ïºþ‡ü&@ù‡ààËˆOv€¦Ü€Nýbšý­ââx¶úOýÆç\0/°þ´COÍ†pÿ¦Ž\$°\0Tð*I\0¡}æÁ/xàÏÿðE\0nIFú«B5¦N]ç.»\0î#/ÐËb†¤ÑÂÂY\"FA°”ò£bñ2“\$¸’¢\n›#@ÐByÁj=	ZU‚Uˆ†Kp l:åZEÂ…\$òÏø?p`*Pœ-Áv>CVM-Ž>	¾Úä„µïniN Ò)”.œpÃ:êëJ•cbHù\"44nÓI®E‰¸ž0üt#Lñ¤\r&ŽZ¥A×C¤|×¯À½p<(1L”æ·Wfº*`œQN±Î	L´ž¢Öá¨lçáêã\"c¢?îzDÍ²‚çjœ¯æûç§Nçé±nÎï0V'œ\n¨Ö¬ì†®|jŽþh, Y\$#\$yÄ})²#Ä6NO>áb¨#CLJ	Ù.0ñì+QòjlénÝ±þ{#ÓGêFél4H‘ç\nñ°Á¼€‘fLÄÐéN…!¨(pŒòAãF“\0Pµ-\$«B2ÏÈ†Ö‡üÙío\"1PD‘-fTm‹%±ŸÓ¤æyŽNLWÒi%ˆX‘‰\0Nó*µ2„‡È#(±£\"’~ˆÙòo²`Ôò*nTØ²¯(Í”Þ•*ˆ'*ÃW·Q|Ô£*¾\$tF2ÎT\$}-°X½‘\0ñcN©ˆŒGPý\$‡*c-Q’üäd×2å.²Ý.ÂœWM²ñ²ô·Í²üîÓ-2¥Ó	.(/.dLœí[1rñ1Ï2û¥­r]**¿*cÒìJfNÇ-®ÊóÒµ5„TÉ¯¶b	6L¥2²'5rÖý\\ÉÓxì“5\$+)dÙ28 ÌôBqGÍâ±h„ÑÒ8*âê%bª¾l6ëµªÞtËH2ÃòB¦±:3­:rHï§jeï1éŽŠk*±d&XB ¯²ßs¤2:œ®Ê’ê÷S¨±¤¼.ÈR K×8³vP“ziL¤ê±EG©Q˜Ïn²Õ\rx%²:=’>ææ”çSR¦ecíD£w6²²áS‡ENpÿ¡9q¹*m¾\$Ï4Ô,CEŽwÏ%sRˆ‘U*olF…¯Dóo#IsF²Fó†èèÙ‘IÆ­G3™JÄ–+¦¬ÕI¸g&jUï¾‡z`\$)­2ƒ¢èO\rÍ¥ZR„§”â~\$!Ä\"ƒ³ñ‰ñò½.2^×’c\"¡>ÛüñÆƒIS/,uO²óPÍ0ÒÁh\"´©£ð‡F…‡^jÕ2ëDÕ>3Oæƒ9ÔtM¥§S+SÔ½U·>R5O\"Æð­é=³ØU‚â¯*öî-©\$MDKÊóEÕ	6ó‡Là®ssX‹9T£Rô@‚©Õ‡Mõ‹Hs-8RÇT.’S+)Zµ›[	/Vg>©U¬±KNç†ñXÍ™VÂJÃ)5ç[Èh>\\Í—;ÐnÎÞQ5áH³†V+Õ[•ça…Ev	Zï9¯Ñ÷a!_Ôv?\nê*nÒ+Äê2mÅHœRÔÒó«VV¥`µ*vNM¯<5–W[S‚þ³‡eåeg+ñµU6(¤JsìCTù45LˆÍ\n%* †çBÿº¬õDWÕ›0ËN22î1(/Ì¶u)jãN¯ìlIkk;k³4åj¦z·¥~ž¶±4´ÛPnåAEjYp8àâM‚?vØqÔ­Ve«jV¿05P\"HvÑjwa–ãÅ4ÿV½mU·fÂ•4±H¶ hÞ\r€Vì«]•Ÿ\r‚S!í?r=SUTB'MW)@ŒÆæ8«ªJrÅ ª\n€Œ pð˜+ŽD07oÇ\$M­9C|#È\\Ï}3îù\r‡jrw\\OBÐLùw³Qg—«y³Ÿ\0000d¾(ú†ZˆÖ±È[\0šcàÒÀòA¡dYãt%1\$>¤J@ôS”Tó–ayÃVYI?zÔï®®ëu®“1©è2qÖái¨H¦þ)&ë@k 	ŒXd\0Ú^ƒ;ƒÉƒx:šÚÛI0>­œ´…¢ð’-}ˆq:Öx2\$6i=\"±xc0s,E«b˜sC\$'†wð)®\n‡`ñ–áø‡.)IEñzªny†M„Ô\$÷_‡òëäfQ©1É?¬i|L¡PgÔ=<\$&ô1‰Ù \n˜À‘ÐßãÔÁòÚŽËì+ñ#té®5Ô*q&ˆ*/Ïð›Dè\nÀÂ`ê ÚÑ8²®Ã}…vòL§ý°µ“<ÚCêä¶7ÄÐÐ\$.t!=\$*äM\"Úuzá4)FœqÃ¨­šÖÒ‡Ž\r9‡ÙV#E\r¡µ]Ssƒ&pîkrèxÃ]<)\rL&¼±@";break;case"vi":$f="Bp®”&á†³‚š *ó(J.™„0Q,ÐÃZŒâ¤)vƒŽ@Tf™\nípj£pº*ÃV˜ÍÃC`á]¦ÌrY<•#\$b\$L2–€@%9¥ÅIÄô×ŒÆÎ“„œ§4Ë…€¡€Äd3\rFÃqÀät9N1 QŠE3Ú¡±hÄj[—J;±ºŠo—ç\nÓ(©Ubµ´da¬®ÆIÂ¾Ri¦Då\0\0A)÷XÞ8@q:žg!ÏC½_#yÃÌ¸™6:‚¶ëÑÚ‹Ì.—òŠšíK;×.ð›­Àƒ}FŽÊÍ¼S06ÂÁ½†¡Œ÷\\ÝÅv¯ëàÄN5°‡SÁ«Ü“ ¹»g	“¤pä7±®úvù¾#ô]“áÒ]“+°æ0Ž¡ÒŽ9©jjP ˜eî„Adš²c@êœãJ*Ì#ìÓŠX„\n\npEÉš44…K\nÁd‹Âñ”È@3Åè&Ã!\0Úï2Œì0ß%Å¤‹öƒb‰ÀC@\$)©¢Ô¶H…|™';• ˆÒlœ¯±†üI¢jV¿ªzT·\"ŒP¢iÄö2ÃdPC·&! bkëèVŽ\0P2Ê\rENiDþKÅÜÛ2°(c@ä2ŒÁèD4ƒ à9‡Ax^;ÖpÂ2\r®ØÊ9Ãxä3…ã(Ý^¥|90\0^#ƒ\rv2Ž•0¾1\r’°ÖÂHÚ8\rƒ(Û_à^0‡Ðœf\rxÈŽ\rá\0ê9Œ¡\0¦(‰ƒM„—ÓÖÊ²ìÌ·A ƒRÅC‘†]!±Ã)ã­a•ƒsÒå6|šÃºHuÎ16P9…1ö:7Rz±\"åÒh˜&L5&©'d]-‚%I\rèì0ƒ¨Ê^¬P‡!)ÁRÙ[œ«²<QÑ¢¦én	~Å/E+ûeL¢a”MË]é@ðêÑ²Dé²…ÓãGEÚHú y\$P@³L@’Ôšò·Ëj,¯—Á²h¢:˜eKú:;Å·A›Úö÷kŒÐØ¦Ê÷x˜Ð670Ð0ÇÙy*’b˜‰Ë°ý£¤\$ƒšem0ªbtõÃGaXý§}/NpmQvÖ?ÍJJ¼4ZQ;SÆy÷9dPÝ-ŠØ1Ïsì{¼÷ÊLÜö½¿2Åf£,ìÕ•vã0ÍA\rÃ*—r»ù@Çæj‰Œ) èQI!OdEðÓ¸DøŒ[›’@ °qFˆéêreaþ J¹Ï›?¡¸Ê†\\‘ÓQ'é–‚†éBF¦@ä|ŒT©)Id1\"fÐºaÔ—(dŠGNð¡?¡á\0wæ´ƒ˜ Êéu,BìU¢¶P01 ˆ¸ T5QªPDR d@„:°Î·—.\n 4¦‚ˆ(™Ú)¤í!£è/Ã¤-C.„H²³6ò¡‘XƒéÍ:ŸDðÖã±Õ?­À–Å¥CU2¨UJ±W+\0î¬¢‹ñW\né^+å€°ƒrÄXË :, Î³rÐZKPÃž¢(I”o\r±¡p²ò@ÙžëX.¬]£\0ÐK{j>GÐ‘¸äèDÃ(s”D´ÅšD6\$ÂHÉù²Øh !nî¬]sú@P&HÍá.‰Â&K¤¤¸\0Â)o…oÍ©Ø&£þšAÒ?\0(‡Èh;&±v(Ïì¸mÐ5%ÁÄr¨0.ÇŸ¥‡:æ'ÿŸ–>^a´8 0ì’à’DƒËé=a¥s†àÞW`n\\ät4Ä•Fj&IýÇüéÅk&‰¢¾ ¡°7®ÉÇC€a”ä¸\"/…fI	õ(„°…\0žÂ¤;ðÈœÈÐ‘Ôãga ™‘ÚN‰á(ž3tÏÅiWüåa‰\\FÇ)TE	\$)”ÏÐÙŸHýQ˜§ž’¢XzÓyvÁRqøÿNzé{	ðä§úœ áâ h\n­‘¦E^KkHÈdÅ’Iõ>!€ºN–”DC¾™ì;X?Žx03’Ž”1û±\rÜÃ\"1vB »¬9Š“¨p”j!50Œ‚Xb¬À‰c\$¹d|‚‹|ZÈØd¬è˜îÚ÷|'š–\0‚ïÈ†÷/mlA˜záÞGLêZé»éQ+0æ–n8¿¹õÍ-&¥qI¡*D^ÐF¸ÛaÞ²BE\"€Î	ÄV\nÃX¡»±À‹ùë»dq4aStQNšmÕõÆ¤qGx‰ÛÖI¡.²JÎCZp­F,œ\\6yN»¯\r¥4©ÒJ™&ƒñ‘[©Õƒ*ç;A”;˜¶lÈ»\r¯®=&¢p\"f™Æ`¦½ ‹¼°Î:;·ÅTCâb–˜3±1\rAú@pÏgÑ0xc9¯ÜäSÇ¡ì¾_\\òj	e½+¶”˜‚“éŒ¯ÄŠ#„Y‰3©¯v§½öŽìÏ-MÉÀ¨C	\"Ì@úÌÝ/\"aÔ8t°ƒ\$À/ŸèŠ]Úí\\øÎ‚\0^tI2I&Ð52,IÝvÒ7¤@ÂÞLÉ©7AÙ\"	¯v½dY xÅd¼\$d@ÕøIv½ Úç ë²gZ	‚]Å2T_›-Ù+ðÝ•jOøw\"ŽÊÁ¡j¦Ã²³Yh“ô‘?î\rs¯3ŒoÜ†Ú™bYa&£‘¹#¦,º™ŠgwvŽ¦2<™²¶ò­)Pœ\n²ìSí6³Dˆ›„å•®êâ%7H¾Xœ‘[í~iª-[Šb}k…=	Ó’‹R:T?Ís·)›.\"‹ïIß%Ócj	¤êë„ox(ëmñØ!‰\0«'¼Eù)9¥ Ê¶Ê·Ý/D9ñÑ)KÜgÚâýŒD]Ùà­rÁ-4ë|L\r³ì¥G÷t\"ñ¦^Ë'óvm¥ÚÑ„6ÙÃ.åòq˜Oz?´¾‰›vXïŽá¿«ÞŽ‘ÔP×aÃ–ïûŠñ|¯¾#½ƒ¾º;Üéý÷H\"xêh(|~[¶Ç	ÏÇÇYô].øÕldÉÊøuÑa–|?¬.þ6Ø2;hÅÄËé7‡ë='öÙÜßüè‘ìç ×’â,ýË<ÿÊÿO>í'f˜\n><Á\"'k¶CúCÎ£..äàa\nB‰¢˜­ª›ÏJójÚ£ªàõF·+P¼P‚h¶¢œ\$ªCŠ*ªðCïþþÌàê®º¬‹hüçFsÃ¤ÏKf\"Ìžêæÿ/öô/›a¯jâonÉÐ’ ¢®z„*Ó	ïœCO”9-_¨ø¯,r„úÄÒ\rv0,¹íøzghe°ÆÒ,¦ðJFÔ7 –Ï#¢`„”nt\"ÈFJh‡Œ-/æAMVÐ¿BHü/Ç­1Q)xøÍè1GS2âJÌ0Ü¬@Òç¨×Lfò¤øï&î‚ö9ÃVJŠÀ¶ð–þq)ã ç´/|çÂ‡\$|¶èÑqL](ë\"ÕO”ÒoåÓË2èQ¤{…³(oÝ+ªIqzË‘¼µ±ÁP¦]1Ælb\rF!¨	CÁqÒIg<M‚HH<ÑÐâ×q¸þÍ4±á1ÚMM¤Scîýí3 ­6ýˆ@òK^«èàÃ\"ik’_âP5„5ƒÅè#f×¨Ê:«öa­ÞëÄ4=Ž\\ˆÃ®+\$£E)XrVbÐZ>+ÌüÑ2Càœ>J €†-\0Ø9Ã~j¨âÃ\$€òÎ°–ÐŒB®E\"HÄÒ O‚ôðÃJDDî €ª\n€Œ p÷Îž%\0J±\r‰ÐN³\"è*%2\$Ç,Í*P†9gJÊ\$ÀÑe¢üJ`Ë’™'Ou)1Vòã6(£j,àäJÄšk®»…ìŸÆÐ²åôPÓ3d–Q§oËÎõÌð8CúÐ÷ÎÉ%ÎâbU\"dïØìn¶´P£\0§ù%ç\n\rd¼lU°šìp‰6\n(\$ƒq5¬©(‚\nì ®dÎ† jS\"Ò‹0ÖÄ6ÎÚODøûîâsƒxÎ%ð\"¬Í¤­M-ððÅ³¸'\nÐ¸/LËRgê ï°aévÛ\$šÒkÚm!ri¢Õ7ÃxO*Ðp	hl„³.*.#Á^0 ˜Ä	«ÃÜDG„Q\"J¡nÞ²²Ý9£F–¥A° 'ò[6J7Qt¶í 08È!e,03¥2Sqðº¦€ÏŒf4b¢";break;case"zh":$f="ä^¨ês•\\šr¤îõâ|%ÌÂ:\$\nr.®„ö2Šr/d²È»[8Ð S™8€r©!T¡\\¸s¦’I4¢b§r¬ñ•Ð€Js!Kd²u´eåV¦©ÅDªX,#!˜Ðj6Ž §:¥t\nr£“îU:.Z²PË‘.…\rVWd^%äŒµ’r¡T²Ô¼*°s#UÕ`QdÞu'c(€ÜoF“±¤Øe3™Nb¦`êp2N™S¡ Ó£:LYñta~¨&6ÛŠ‹•r¶s®Ôükžó{¾¹6ûòÙÍÀ©c(¸Ê2ªòf“qžÐˆP:S*@S¡^­t*…êýÎ”TyUëx»àè_¦\\‹¤Û™Tœ¥‰*Œ¸©Óªë¡„ÒŽÆ'ŠaÊ[–Nb¨Æ*¹ÎVÈÉd²>1[œå‰vr“ËqÌÃÂ¬!J—ç1.[\$¹hŒDcðMœ¤Al²¤‹‚N-9@€§)6_¥éDï’ë£âs–eÛ‚‡%ÊyPœ¤ÌŸÃèI´ä1ÎP)kÄ ¥Ñ&²1zJ·g1@œól“8ƒ\"9£0z\r è8aÐ^ŽôH\\0Œƒk¸2ŽApÞ9áxÊ7RÃÃV7cHßLM ÃJ£¤þ/¶cÜ5„Að’6ŽøÛKŽà^0‡Ê3GYµ£xÈÒ4Ã›*)Š\"`ÒÕ¶§I\0DœÄYS±RZLÇ9H]8\$™ÌO±\\s…ÉÐSÒ1}o\\ê¥)v]ZB_Â§A–G\$ºÉD‘1fT\$9òåQÊE)DO`\$x\"O£ê6\0ì0ƒ¨ÊYVe —¶†8MÜ¤–’áÎZIi9vsŠzFœåé\\–‘Ìu‡<J~vò‘„§‰qXsZ–±tñÌwƒ•€#bceDÙ²£˜ÇU;6)ÊH£ÅÛÈÿg)xõ¹Mãtå[÷\râÅ³UÑ·Áy‡G1ÅÞsn»6·Í6ÑLA4Ês¤™0Žrë>ówRtÍhð)nû»ã–]šTX äÆ±áFÊã0Ì6Qí©Í\$£Ö*\rìÀÛU!\0ëN£ÆÑc6&\rƒxÎîacH9w#Î0»¢×ôpÜ:µa@æõÌ,ND¦)ÁNRäI«`\$jIv‘ä”š®§)JÁ‡ei¤Q>c¡’UfŒ3)7t§Nè *5G‡'”ÔúŠ@'”öŸSùGU¡‘Oš£¸Õ²¸6¡Mà)àÜx²?Äl|ßkïN©¹üpšC™«Ff0î¤ÕøeÀ4§ÀÈ ªz\r	ñ?(¡2ˆQJ1ë)\$¥²˜ˆJmN©ð^¨MŠ¤TÀ‰TÅT«r°VJÒ«’ŽàhWË8ÖeV9™RÜ7+HG	Tü(âtŠv:«!\"¼÷—bX9‹r?Èòâ'`”éÉ: @@PM\0¤Q#†”÷„¨ˆrµ4ÁÐ-„,+%ÄÀ™jMÉÈ„B£˜WU ÃJ±æì(O0q@®Œ`I\"aåÒ†@Ò¯Ì»XA¹_šÓ^àqcPä`äÃl\n‘öšÕ.ÅXF×0àóƒ)µ&,R9<xS\n’3˜¢¬äyA.¡\0!fdÎW@€tˆVhÍšûa†0Ç·	Í;ÅQŽ˜ ÒÁÄ	“”ÏS:ž‚0T”J©_†•`¤Ø¬yœÓ , äe‰h‚YØ³qÌ(À¯ ('„à@B€D!P\"ÔÊœ(LµP´\nÑ/1ª^-<A-\nÄ:D¨¿n\"™Îˆ™RÎ™Õ.‚0ç˜FÀŠ\"¢î¼ºöY8»<MŽX‡\0ÜDšBäðž;šŒcsö=5¹6÷A\\Ê7â E¯—,9Dx˜a¥Eá\0™c{é°ÂpV ™X/cæ=²6P	H€•Òl†’5{\\Îø·}ä¶¤Z”yWXS\r!é„9ÐÃ„†|1š°Èwìiä\"tO:ñ*ß°1Þ–1rÃ*¿3¡”;žUÈ¹®BOe™86ÅÒÊÅô%¢èHA6·Å\0‡nu,stF\"…1¨‚Q›®1MhŠY>6YÊŠ|üp‘hbèƒ	¡Ò\$ÅðæÆ½¶W#qkœ*BÍÙÖ~~Î¡(rëË\n[Ä>ª˜T!\$	Ä¤I¢tÉðËù´iÃ…8½.¸OŠSÍ~\\‹±+ÌðA•+™-É¹<ÿ\nzæA« ¯°¹ê¾#ÄºI#”IˆÔ\$dÅ|ò UåÚæc3+ˆ.9lWß” ÿ:-9xP¾²ï´(\nXÊ9ŠÎpïpi(#ä„P¢zSkÎ”ÎƒÃHÔ'rsJ¬,% Ã(bÔi_	imnOÀ®z¹ ´±(&Qp¶¢NaZËEØ…iUkå#Ì+Ë@Ž\\¢=\rŽaq!x/EðÀ°„ìYà°u¼sßû,‡0›¿nmâï\nk©ÑÜ¢¹î}³vRvß¾Ë‡xîä\"\"Ó•.²Ùú‰¿}0“Ìp]‰‚l)(€‡}rˆÅ°¿/¼;‰pêÅÂx\\)Þbæü_CÇEà•D(ˆ¯™UZ+PºÒ´´oâ*,Fï°vSo¾Ú2—¹¦öÂœå|!7Ï9Ž÷»7¿mþvæïöçý\"[#jî,³ÄGçAÑÓ¤ndWõÏ:f¬Ù›¹ÖÚ<x*¢ï!~ÛEÏdÁ|9NÔbô=ü_#”IÍ»€?srˆ[…&6è¸!=Ø8F¿aqSÞ£÷‘%Èøåïr¹ qp*¹E7ädJ_I0l?“Dfõ	îz‡Qo÷xrÜl´0¹œ¾z\\k•#öÍá{ý¯aß>Ís!NÚ»ýâGè62Áã™Ù»GÆ%³|ü¢R]øßÎ;ÿ4]cžÙËan[.!*\nöð+« ˆi¢@G6“sðû½Ktžz,¸Þ+Å½Sævï×üÙÙŒþ\"˜|…lZúnÜÿ†DÂ\0³ƒÊï:a<ðîJæNÆgeòþ¥Þê&éNÎ]0,ñïõ%ÃeôÂ@ý³ÁŽäNú<ãŽ -ÌkðH°lÂ\$ùÓ¬0KPQL#Xí|Ã0ÂÐlÔÍrF\$fúHRøƒÆÆÁoÃ\nQ\n‚î	p\rÒê/ðoá°Ç-tëÊƒ®³K8Óav°Í~¨BžGBÐ¡b&ÁB(Ë®80ØIlÊ:íÖ´ÒÚ¬ÖÍ£`è@Øiâ\r Æ\r`@\$ôbæ25‡lWÀÒÇrXãjÊZŽ\0êœ€ÄN\n ¨ÀZ\0@Rè šÃº6¬ÊËëç0Oô#B8«\$YÃÌÉÅÖ	±-âaÐ!(9Bâ-8Í¦9+f>”9>Ä,Fq¥±vã\"!j»d–—bà`˜\rêF\r¥&2£R6-QX;Ãüäûa<H\rÐÙâÊßIè!Ð¡X¯mê%„	¡I\rïžýðœ‘ú@¨6C>4c\$2ŠJ©Þ\rààŠl½Ž¾.èFÏp\\ïIÄÆR¿\0-Bà.pP­bÈ¾nC%.TÆc¤bCmfÿÀ¬ Æ ê\r¢0‚¤,á…¶¿¡ÌqÜÉ¥¼&\$¾ÙÁ£ËJöG%Ú­tÁ²’Ÿk\rÆJñãÊéÒTñDäï\"	\$d@	\0t	 š@¦\n`";break;case"zh-tw":$f="ä^¨ê%Ó•\\šr¥ÑÎõâ|%ÌÎu:HçB(\\Ë4«‘pŠr –neRQÌ¡D8Ð S•\nt*.tÒI&”G‘N”ÊAÊ¤S¹V÷:	t%9Sy:\"<r«STâ ,#!˜Ðj6Ž1uL\0¼–£“îU:.–²I9“ˆ—BÍæK&]\nDªXç[ªÅ}-,°r¨“ÖûÎöŒ¿‹&ó¨€Ða;Dãx€àr4&Ã)œÊs3§SÂtÍ\rAÐÂbÒ¥¨E•E1»ÞÔ£Êg:åxç]#0,'}Ã¼b1Qä\\y\0çV¡E<Á¤Üg–¢SÅ )ÐªOLP\0¨ýÎ”«:}Uï»áÔr¢òå´yZë¤se¢\\BœÅABs–¤ @¤2*bPr–î\n¦ª²*‰.Ocê÷°D\nt”\$ñÊO-Ç1*\\CJY.R®DùÌLGI,I½ŽIÒ@H‹–Å‘Ð[°§)r_ «ÂK¯oŠì¼')tUœå™w/ax].J2«¥Áft(qÊWÈÐº®ëÌ¤U¢äÉv—ªY`\\…É\nsÎS ,°ä2ŒÁèD4ƒ à9‡Ax^;ÒpÂ2\r®ðÊ9Ãxä3…ã(ÝN\r€Ü9#}>5#\r62Ž”0¾Ü#pÖÂHÚ84ƒm<:xÂAíEtÙ\rã#RÕŽlÐ¦(‰ƒK`Ý\$	qód D…yÎRPa s-¯a~WÄ¡r’GALKI·ÉsZËÍÚè±\$ñÒPOdÙ\\‡ØÃòØ˜S%Û,N·&%ÙÐS”o1U¤Y+hÄÌP\"Pƒê6\0ì0ƒ¨ËlZV¢ZC—±Qqld1ÊH\nY N(KqÈ]—g1GÇÇ9{}œÄq%)öÁ2¨ÅPQŠÅÁ7§‰ò\nƒ-B\$©o)Én\$€€P•KpÍcbíÙ‡)\"^æï)ÌD’q²Ür·õÝr—7Œ£)ïw„Ÿy/–õÁ»—vëç¿I¼5Ã¿Mç1<[pêYX§©iWÏÇ/6råÒ[Äœü_½/7O7õSoPTqËu£i’d8ŽL“(ULÐÞ3Ãe,ÝO“ŸCª\rìèÛX!\0ëQŽ£ÆÓŽc66\rƒxÎïacR9y£Î0»ÁÊØÔ¨Ü:àˆŒÅDBib˜¤#Xã]<¿>DYÒ!ÄiÑO‚ñ“ø9D°®B\" Ÿ¡>ñ]\0º2!PË«#P”ÓÎT‡|(¥ƒ“Þj™RE.‚PŠ¤+@È©yÞêõ_› ¦õ(nPY-ŒH`Œ¯þ\0˜x !E)‘	¡„9›\0äg¢`sêic5`àTdÐ¡@†…¡T:‰Qj5G©&ú”º™SjuOµeD©0/UÙUªÐD«Ãb±VjÕ[«•w\rH4,U Ãú|Ìt8)w–•Ü6‡\nš‹ôF(@èB¬r‰X|‰#H ”ƒLar,Ü]¤•Ê+Ç0Ì(€ 0…A)B\"\nA2…ø	WäMG0†# VÌ2Vy…²#\"8—düÐÐæÂÕ•?ò‰2à€'å³¿Ãæ½G(ŠBg„ÌË»¥cÆ:²CrÆ6FÐ(0âÈ¢h ÁÈ7†Ø;ä„O6Jx7²²MI³5ÁñStxS\n€È\nF PóMe\neºqÌ\"b\"©`‚æLEi!–g™3*Ú¡Ñ¬{*MÞ\0ÄC8 Ya234h”F\nAÞO—Ì­ÔÓYÔ\n‚Pe’ŒÊ˜%¢KA|!‡H¥,P\n„ÂxNT(@‚(\n­ €\"P˜k‚KeèürˆñÊ«Øç&Ka­5ÆH.¸…0ÇHOC¬vÑ:\"‚ìödÈ¸§g‹ÌYŽ!‚S26†N!SòxÄÈ¤2.ÍjZGFâ„]®L‚Ts‰Ò*[D?)1ÔŽ\\\"™Qb\0sRÜR8‰ÈVÁ5 ‘Ø‡ÒÖ[ÊIu)¥êÁN6lFBŠ.®qH[\0è˜1Ÿ‡5e¬îµ(.Ð¦CÓ#t8>ÆG\rÍ c6ðÚƒË(Ÿ/tî4Z­òÛz—\r,‚øUŒhƒ(w)b©t®µÚãHç‚ˆr‹Ä”9|ÃXsÊ¾9…Ð\"ëé‰—.l\\è«•z°V#Ì)ÅÄ©~×º[cŽ1Ö<ÉÝ<¢1\0(Öñæˆ±ãÞ‘y‡Z-‚·\"é¢ŽAtuEØ¶½…çŸ3ÚˆB\"U¼*†ÿÁFÞ(36ç¹¬G¡Ì'Å(è\"Šžñ>:\\Ùç<¯ ð@¿y-âÜÇç|óžÂxKˆ/ Ç×Óö/EˆéâþT—6ÜÜØ¤¯®sE˜ô2…W».¤rêQB#zÆ@(<g¡D†upŒK5J±ÚÃž'8’g°Ši:ØÐðs‹a'&¤àˆ‹ë–Òî;*Û6Š96ÀœKÂ¡	‹µ«tf¯Ü¬œ]h	`.ÒÂ´QÑˆÅ\nÚ[›»A€ L.\0B±pˆíI0&\rÎQP:Dñ;u|Šèy´-=œ‡ƒ˜M‹C£bG:úÔâÉz®@¾§a,Ù›;ŒÚœ0_f/‡˜w‹›G€à:æó›ºä›`l¨G-@\$)‚-å—ÞÁ‘Aáé§¯¦^ÐÏJ%¼ë®lGÐ¥èH‘uw/ÚË[BšaÑ #lY´ó–Ú©Ÿ\"\"ômõîÒr1Êé3®Mü¸/h»½¦<G“—»ýà-8vÃøNºß|—ŽîâG'ˆôá”­ÒãçI†CÆ4ÆšÓÓÅÚ’Wjýa¾[šúüiì¼}°öÞÆ±iŠ	ñú¢HåbÁP”~–^â —yUÈQ`9DÕ¿vFJ£°øß!\rì_•&%R\0@]2<%: À^ïüÂ¥öPÎ3÷•®OËñ~11N@ýu´zòåÐ]EØ/Žüõ¡I\0,-\07¯!æU¬)\0EÚõ‹üÊÌ°Ïho0fð5nþ¶:Ë/|òðFËPBÇÐN[,·%ÂpÁ:!ÁÌæŠû\"ŠN'Á|†ðBÏüî¯@Ê6\\Â¢‚ïrÇÐ‹ðJö¦P¸/\n(|ÊLº·0žEpª^â|*PŽ%¡6DÂDúÎÌñKü·Cõ	)ÎÊ‹wasÁ/	¦ù\rÐ«P,<ÄpÐÎ¡	Ÿ\n0ï0÷ðalr,žKðÙŒƒ~òÍµàÈ ÇRqq)â¬FdjFäs1ä>>Â°ØËñHDPóCÉž	˜\r\"ëph‚–Ë–rçFK8Ðf\0  ‡¦`æN*8“dMæÞ¡Ð…ªaz\"áp¢\\-b‡d\"ákè_fäî,ãöõ-62 †€ä\r€V¡ÀÒ`Ö	(P&>d#byEŠ\r Ìy¥œ7@Œ¨ÉªC4| ª\n€Œ p<„iæ;ãtî‡>‰\r(Õéˆ#B8µ‡jÏD„ò@	±÷¥°á8\0áC˜0±X9nGlÀ¬i\n+VÛÂ–œ!Ëc¬^á×`Þ§€ÚSC45Ãm'Å&†B–+ˆ.gÆÂãnâÊåîFz+'*ŽbòNVÙñ ¤ÿÍšb„Z²¹\0È&6ãH5.3*|ª\ràà€ÒR«â‹L¶uï‡'\$À*«HÆff¢ZÃÎ‰/.Ò°ÏÈbk\níró*MÚÂ,Ñ°°\nÀÂ`ê Û&á\0 fsÁ,êG\$ÅEÐÑÅÝ'!RàÄö,£Í*ë&?#¡l Á¶S\\³CÍ+òÃF‚P¨û!Ì¦Q8FÄp	\0@š	 t\n`¦";break;}$Kh=array();foreach(explode("\n",lzw_decompress($f))as$X)$Kh[]=(strpos($X,"\t")?explode("\t",$X):$X);return$Kh;}if(!$Kh){$Kh=get_translations($ca);$_SESSION["translations"]=$Kh;}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$errno,$error;function
__construct(){global$b;$Gf=array_search("SQL",$b->operators);if($Gf!==false)unset($b->operators[$Gf]);}function
dsn($ec,$V,$G){try{parent::__construct($ec,$V,$G);}catch(Exception$wc){auth_error(h($wc->getMessage()));}$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=@$this->getAttribute(4);}function
query($H,$Uh=false){$I=parent::query($H);$this->error="";if(!$I){list(,$this->errno,$this->error)=$this->errorInfo();return
false;}$this->store_result($I);return$I;}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result($I=null){if(!$I){$I=$this->_result;if(!$I)return
false;}if($I->columnCount()){$I->num_rows=$I->rowCount();return$I;}$this->affected_rows=$I->rowCount();return
true;}function
next_result(){if(!$this->_result)return
false;$this->_result->_offset=0;return@$this->_result->nextRowset();}function
result($H,$o=0){$I=$this->query($H);if(!$I)return
false;$K=$I->fetch();return$K[$o];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$K=(object)$this->getColumnMeta($this->_offset++);$K->orgtable=$K->table;$K->orgname=$K->name;$K->charsetnr=(in_array("blob",(array)$K->flags)?63:0);return$K;}}}$Zb=array();class
Min_SQL{var$_conn;function
__construct($g){$this->_conn=$g;}function
select($R,$M,$Z,$dd,$ff=array(),$z=1,$E=0,$Of=false){global$b,$x;$Gd=(count($dd)<count($M));$H=$b->selectQueryBuild($M,$Z,$dd,$ff,$z,$E);if(!$H)$H="SELECT".limit(($_GET["page"]!="last"&&$z!=""&&$dd&&$Gd&&$x=="sql"?"SQL_CALC_FOUND_ROWS ":"").implode(", ",$M)."\nFROM ".table($R),($Z?"\nWHERE ".implode(" AND ",$Z):"").($dd&&$Gd?"\nGROUP BY ".implode(", ",$dd):"").($ff?"\nORDER BY ".implode(", ",$ff):""),($z!=""?+$z:null),($E?$z*$E:0),"\n");$Wg=microtime(true);$J=$this->_conn->query($H);if($Of)echo$b->selectQuery($H,format_time($Wg));return$J;}function
delete($R,$Xf,$z=0){$H="FROM ".table($R);return
queries("DELETE".($z?limit1($H,$Xf):" $H$Xf"));}function
update($R,$O,$Xf,$z=0,$Gg="\n"){$mi=array();foreach($O
as$y=>$X)$mi[]="$y = $X";$H=table($R)." SET$Gg".implode(",$Gg",$mi);return
queries("UPDATE".($z?limit1($H,$Xf):" $H$Xf"));}function
insert($R,$O){return
queries("INSERT INTO ".table($R).($O?" (".implode(", ",array_keys($O)).")\nVALUES (".implode(", ",$O).")":" DEFAULT VALUES"));}function
insertUpdate($R,$L,$Mf){return
false;}function
begin(){return
queries("BEGIN");}function
commit(){return
queries("COMMIT");}function
rollback(){return
queries("ROLLBACK");}}$Zb["sqlite"]="SQLite 3";$Zb["sqlite2"]="SQLite 2";if(isset($_GET["sqlite"])||isset($_GET["sqlite2"])){$Jf=array((isset($_GET["sqlite"])?"SQLite3":"SQLite"),"PDO_SQLite");define("DRIVER",(isset($_GET["sqlite"])?"sqlite":"sqlite2"));if(class_exists(isset($_GET["sqlite"])?"SQLite3":"SQLiteDatabase")){if(isset($_GET["sqlite"])){class
Min_SQLite{var$extension="SQLite3",$server_info,$affected_rows,$errno,$error,$_link;function
__construct($Lc){$this->_link=new
SQLite3($Lc);$pi=$this->_link->version();$this->server_info=$pi["versionString"];}function
query($H){$I=@$this->_link->query($H);$this->error="";if(!$I){$this->errno=$this->_link->lastErrorCode();$this->error=$this->_link->lastErrorMsg();return
false;}elseif($I->numColumns())return
new
Min_Result($I);$this->affected_rows=$this->_link->changes();return
true;}function
quote($Q){return(is_utf8($Q)?"'".$this->_link->escapeString($Q)."'":"x'".reset(unpack('H*',$Q))."'");}function
store_result(){return$this->_result;}function
result($H,$o=0){$I=$this->query($H);if(!is_object($I))return
false;$K=$I->_result->fetchArray();return$K[$o];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
__construct($I){$this->_result=$I;}function
fetch_assoc(){return$this->_result->fetchArray(SQLITE3_ASSOC);}function
fetch_row(){return$this->_result->fetchArray(SQLITE3_NUM);}function
fetch_field(){$d=$this->_offset++;$U=$this->_result->columnType($d);return(object)array("name"=>$this->_result->columnName($d),"type"=>$U,"charsetnr"=>($U==SQLITE3_BLOB?63:0),);}function
__desctruct(){return$this->_result->finalize();}}}else{class
Min_SQLite{var$extension="SQLite",$server_info,$affected_rows,$error,$_link;function
__construct($Lc){$this->server_info=sqlite_libversion();$this->_link=new
SQLiteDatabase($Lc);}function
query($H,$Uh=false){$ze=($Uh?"unbufferedQuery":"query");$I=@$this->_link->$ze($H,SQLITE_BOTH,$n);$this->error="";if(!$I){$this->error=$n;return
false;}elseif($I===true){$this->affected_rows=$this->changes();return
true;}return
new
Min_Result($I);}function
quote($Q){return"'".sqlite_escape_string($Q)."'";}function
store_result(){return$this->_result;}function
result($H,$o=0){$I=$this->query($H);if(!is_object($I))return
false;$K=$I->_result->fetch();return$K[$o];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
__construct($I){$this->_result=$I;if(method_exists($I,'numRows'))$this->num_rows=$I->numRows();}function
fetch_assoc(){$K=$this->_result->fetch(SQLITE_ASSOC);if(!$K)return
false;$J=array();foreach($K
as$y=>$X)$J[($y[0]=='"'?idf_unescape($y):$y)]=$X;return$J;}function
fetch_row(){return$this->_result->fetch(SQLITE_NUM);}function
fetch_field(){$C=$this->_result->fieldName($this->_offset++);$Cf='(\\[.*]|"(?:[^"]|"")*"|(.+))';if(preg_match("~^($Cf\\.)?$Cf\$~",$C,$B)){$R=($B[3]!=""?$B[3]:idf_unescape($B[2]));$C=($B[5]!=""?$B[5]:idf_unescape($B[4]));}return(object)array("name"=>$C,"orgname"=>$C,"orgtable"=>$R,);}}}}elseif(extension_loaded("pdo_sqlite")){class
Min_SQLite
extends
Min_PDO{var$extension="PDO_SQLite";function
__construct($Lc){$this->dsn(DRIVER.":$Lc","","");}}}if(class_exists("Min_SQLite")){class
Min_DB
extends
Min_SQLite{function
__construct(){parent::__construct(":memory:");}function
select_db($Lc){if(is_readable($Lc)&&$this->query("ATTACH ".$this->quote(preg_match("~(^[/\\\\]|:)~",$Lc)?$Lc:dirname($_SERVER["SCRIPT_FILENAME"])."/$Lc")." AS a")){parent::__construct($Lc);return
true;}return
false;}function
multi_query($H){return$this->_result=$this->query($H);}function
next_result(){return
false;}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($R,$L,$Mf){$mi=array();foreach($L
as$O)$mi[]="(".implode(", ",$O).")";return
queries("REPLACE INTO ".table($R)." (".implode(", ",array_keys(reset($L))).") VALUES\n".implode(",\n",$mi));}}function
idf_escape($u){return'"'.str_replace('"','""',$u).'"';}function
table($u){return
idf_escape($u);}function
connect(){return
new
Min_DB;}function
get_databases(){return
array();}function
limit($H,$Z,$z,$D=0,$Gg=" "){return" $H$Z".($z!==null?$Gg."LIMIT $z".($D?" OFFSET $D":""):"");}function
limit1($H,$Z){global$g;return($g->result("SELECT sqlite_compileoption_used('ENABLE_UPDATE_DELETE_LIMIT')")?limit($H,$Z,1):" $H$Z");}function
db_collation($m,$ob){global$g;return$g->result("PRAGMA encoding");}function
engines(){return
array();}function
logged_user(){return
get_current_user();}function
tables_list(){return
get_key_vals("SELECT name, type FROM sqlite_master WHERE type IN ('table', 'view') ORDER BY (name = 'sqlite_sequence'), name",1);}function
count_tables($l){return
array();}function
table_status($C=""){global$g;$J=array();foreach(get_rows("SELECT name AS Name, type AS Engine FROM sqlite_master WHERE type IN ('table', 'view') ".($C!=""?"AND name = ".q($C):"ORDER BY name"))as$K){$K["Oid"]=1;$K["Auto_increment"]="";$K["Rows"]=$g->result("SELECT COUNT(*) FROM ".idf_escape($K["Name"]));$J[$K["Name"]]=$K;}foreach(get_rows("SELECT * FROM sqlite_sequence",null,"")as$K)$J[$K["name"]]["Auto_increment"]=$K["seq"];return($C!=""?$J[$C]:$J);}function
is_view($S){return$S["Engine"]=="view";}function
fk_support($S){global$g;return!$g->result("SELECT sqlite_compileoption_used('OMIT_FOREIGN_KEY')");}function
fields($R){global$g;$J=array();$Mf="";foreach(get_rows("PRAGMA table_info(".table($R).")")as$K){$C=$K["name"];$U=strtolower($K["type"]);$Nb=$K["dflt_value"];$J[$C]=array("field"=>$C,"type"=>(preg_match('~int~i',$U)?"integer":(preg_match('~char|clob|text~i',$U)?"text":(preg_match('~blob~i',$U)?"blob":(preg_match('~real|floa|doub~i',$U)?"real":"numeric")))),"full_type"=>$U,"default"=>(preg_match("~'(.*)'~",$Nb,$B)?str_replace("''","'",$B[1]):($Nb=="NULL"?null:$Nb)),"null"=>!$K["notnull"],"privileges"=>array("select"=>1,"insert"=>1,"update"=>1),"primary"=>$K["pk"],);if($K["pk"]){if($Mf!="")$J[$Mf]["auto_increment"]=false;elseif(preg_match('~^integer$~i',$U))$J[$C]["auto_increment"]=true;$Mf=$C;}}$Ug=$g->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($R));preg_match_all('~(("[^"]*+")+|[a-z0-9_]+)\s+text\s+COLLATE\s+(\'[^\']+\'|\S+)~i',$Ug,$le,PREG_SET_ORDER);foreach($le
as$B){$C=str_replace('""','"',preg_replace('~^"|"$~','',$B[1]));if($J[$C])$J[$C]["collation"]=trim($B[3],"'");}return$J;}function
indexes($R,$h=null){global$g;if(!is_object($h))$h=$g;$J=array();$Ug=$h->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($R));if(preg_match('~\bPRIMARY\s+KEY\s*\((([^)"]+|"[^"]*")++)~i',$Ug,$B)){$J[""]=array("type"=>"PRIMARY","columns"=>array(),"lengths"=>array(),"descs"=>array());preg_match_all('~((("[^"]*+")+)|(\S+))(\s+(ASC|DESC))?(,\s*|$)~i',$B[1],$le,PREG_SET_ORDER);foreach($le
as$B){$J[""]["columns"][]=idf_unescape($B[2]).$B[4];$J[""]["descs"][]=(preg_match('~DESC~i',$B[5])?'1':null);}}if(!$J){foreach(fields($R)as$C=>$o){if($o["primary"])$J[""]=array("type"=>"PRIMARY","columns"=>array($C),"lengths"=>array(),"descs"=>array(null));}}$Vg=get_key_vals("SELECT name, sql FROM sqlite_master WHERE type = 'index' AND tbl_name = ".q($R),$h);foreach(get_rows("PRAGMA index_list(".table($R).")",$h)as$K){$C=$K["name"];$v=array("type"=>($K["unique"]?"UNIQUE":"INDEX"));$v["lengths"]=array();$v["descs"]=array();foreach(get_rows("PRAGMA index_info(".idf_escape($C).")",$h)as$wg){$v["columns"][]=$wg["name"];$v["descs"][]=null;}if(preg_match('~^CREATE( UNIQUE)? INDEX '.preg_quote(idf_escape($C).' ON '.idf_escape($R),'~').' \((.*)\)$~i',$Vg[$C],$ig)){preg_match_all('/("[^"]*+")+( DESC)?/',$ig[2],$le);foreach($le[2]as$y=>$X){if($X)$v["descs"][$y]='1';}}if(!$J[""]||$v["type"]!="UNIQUE"||$v["columns"]!=$J[""]["columns"]||$v["descs"]!=$J[""]["descs"]||!preg_match("~^sqlite_~",$C))$J[$C]=$v;}return$J;}function
foreign_keys($R){$J=array();foreach(get_rows("PRAGMA foreign_key_list(".table($R).")")as$K){$q=&$J[$K["id"]];if(!$q)$q=$K;$q["source"][]=$K["from"];$q["target"][]=$K["to"];}return$J;}function
view($C){global$g;return
array("select"=>preg_replace('~^(?:[^`"[]+|`[^`]*`|"[^"]*")* AS\\s+~iU','',$g->result("SELECT sql FROM sqlite_master WHERE name = ".q($C))));}function
collations(){return(isset($_GET["create"])?get_vals("PRAGMA collation_list",1):array());}function
information_schema($m){return
false;}function
error(){global$g;return
h($g->error);}function
check_sqlite_name($C){global$g;$Ec="db|sdb|sqlite";if(!preg_match("~^[^\\0]*\\.($Ec)\$~",$C)){$g->error=lang(21,str_replace("|",", ",$Ec));return
false;}return
true;}function
create_database($m,$nb){global$g;if(file_exists($m)){$g->error=lang(22);return
false;}if(!check_sqlite_name($m))return
false;try{$_=new
Min_SQLite($m);}catch(Exception$wc){$g->error=$wc->getMessage();return
false;}$_->query('PRAGMA encoding = "UTF-8"');$_->query('CREATE TABLE adminer (i)');$_->query('DROP TABLE adminer');return
true;}function
drop_databases($l){global$g;$g->__construct(":memory:");foreach($l
as$m){if(!@unlink($m)){$g->error=lang(22);return
false;}}return
true;}function
rename_database($C,$nb){global$g;if(!check_sqlite_name($C))return
false;$g->__construct(":memory:");$g->error=lang(22);return@rename(DB,$C);}function
auto_increment(){return" PRIMARY KEY".(DRIVER=="sqlite"?" AUTOINCREMENT":"");}function
alter_table($R,$C,$p,$Sc,$sb,$pc,$nb,$La,$yf){$gi=($R==""||$Sc);foreach($p
as$o){if($o[0]!=""||!$o[1]||$o[2]){$gi=true;break;}}$c=array();$of=array();foreach($p
as$o){if($o[1]){$c[]=($gi?$o[1]:"ADD ".implode($o[1]));if($o[0]!="")$of[$o[0]]=$o[1][0];}}if(!$gi){foreach($c
as$X){if(!queries("ALTER TABLE ".table($R)." $X"))return
false;}if($R!=$C&&!queries("ALTER TABLE ".table($R)." RENAME TO ".table($C)))return
false;}elseif(!recreate_table($R,$C,$c,$of,$Sc))return
false;if($La)queries("UPDATE sqlite_sequence SET seq = $La WHERE name = ".q($C));return
true;}function
recreate_table($R,$C,$p,$of,$Sc,$w=array()){if($R!=""){if(!$p){foreach(fields($R)as$y=>$o){$p[]=process_field($o,$o);$of[$y]=idf_escape($y);}}$Nf=false;foreach($p
as$o){if($o[6])$Nf=true;}$cc=array();foreach($w
as$y=>$X){if($X[2]=="DROP"){$cc[$X[1]]=true;unset($w[$y]);}}foreach(indexes($R)as$Pd=>$v){$e=array();foreach($v["columns"]as$y=>$d){if(!$of[$d])continue
2;$e[]=$of[$d].($v["descs"][$y]?" DESC":"");}if(!$cc[$Pd]){if($v["type"]!="PRIMARY"||!$Nf)$w[]=array($v["type"],$Pd,$e);}}foreach($w
as$y=>$X){if($X[0]=="PRIMARY"){unset($w[$y]);$Sc[]="  PRIMARY KEY (".implode(", ",$X[2]).")";}}foreach(foreign_keys($R)as$Pd=>$q){foreach($q["source"]as$y=>$d){if(!$of[$d])continue
2;$q["source"][$y]=idf_unescape($of[$d]);}if(!isset($Sc[" $Pd"]))$Sc[]=" ".format_foreign_key($q);}queries("BEGIN");}foreach($p
as$y=>$o)$p[$y]="  ".implode($o);$p=array_merge($p,array_filter($Sc));if(!queries("CREATE TABLE ".table($R!=""?"adminer_$C":$C)." (\n".implode(",\n",$p)."\n)"))return
false;if($R!=""){if($of&&!queries("INSERT INTO ".table("adminer_$C")." (".implode(", ",$of).") SELECT ".implode(", ",array_map('idf_escape',array_keys($of)))." FROM ".table($R)))return
false;$Qh=array();foreach(triggers($R)as$Oh=>$yh){$Nh=trigger($Oh);$Qh[]="CREATE TRIGGER ".idf_escape($Oh)." ".implode(" ",$yh)." ON ".table($C)."\n$Nh[Statement]";}if(!queries("DROP TABLE ".table($R)))return
false;queries("ALTER TABLE ".table("adminer_$C")." RENAME TO ".table($C));if(!alter_indexes($C,$w))return
false;foreach($Qh
as$Nh){if(!queries($Nh))return
false;}queries("COMMIT");}return
true;}function
index_sql($R,$U,$C,$e){return"CREATE $U ".($U!="INDEX"?"INDEX ":"").idf_escape($C!=""?$C:uniqid($R."_"))." ON ".table($R)." $e";}function
alter_indexes($R,$c){foreach($c
as$Mf){if($Mf[0]=="PRIMARY")return
recreate_table($R,$R,array(),array(),array(),$c);}foreach(array_reverse($c)as$X){if(!queries($X[2]=="DROP"?"DROP INDEX ".idf_escape($X[1]):index_sql($R,$X[0],$X[1],"(".implode(", ",$X[2]).")")))return
false;}return
true;}function
truncate_tables($T){return
apply_queries("DELETE FROM",$T);}function
drop_views($ri){return
apply_queries("DROP VIEW",$ri);}function
drop_tables($T){return
apply_queries("DROP TABLE",$T);}function
move_tables($T,$ri,$ph){return
false;}function
trigger($C){global$g;if($C=="")return
array("Statement"=>"BEGIN\n\t;\nEND");$u='(?:[^`"\\s]+|`[^`]*`|"[^"]*")+';$Ph=trigger_options();preg_match("~^CREATE\\s+TRIGGER\\s*$u\\s*(".implode("|",$Ph["Timing"]).")\\s+([a-z]+)(?:\\s+OF\\s+($u))?\\s+ON\\s*$u\\s*(?:FOR\\s+EACH\\s+ROW\\s)?(.*)~is",$g->result("SELECT sql FROM sqlite_master WHERE type = 'trigger' AND name = ".q($C)),$B);$Oe=$B[3];return
array("Timing"=>strtoupper($B[1]),"Event"=>strtoupper($B[2]).($Oe?" OF":""),"Of"=>($Oe[0]=='`'||$Oe[0]=='"'?idf_unescape($Oe):$Oe),"Trigger"=>$C,"Statement"=>$B[4],);}function
triggers($R){$J=array();$Ph=trigger_options();foreach(get_rows("SELECT * FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($R))as$K){preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*('.implode("|",$Ph["Timing"]).')\\s*(.*)\\s+ON\\b~iU',$K["sql"],$B);$J[$K["name"]]=array($B[1],$B[2]);}return$J;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER","INSTEAD OF"),"Event"=>array("INSERT","UPDATE","UPDATE OF","DELETE"),"Type"=>array("FOR EACH ROW"),);}function
routine($C,$U){}function
routines(){}function
routine_languages(){}function
begin(){return
queries("BEGIN");}function
last_id(){global$g;return$g->result("SELECT LAST_INSERT_ROWID()");}function
explain($g,$H){return$g->query("EXPLAIN QUERY PLAN $H");}function
found_rows($S,$Z){}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($_g){return
true;}function
create_sql($R,$La){global$g;$J=$g->result("SELECT sql FROM sqlite_master WHERE type IN ('table', 'view') AND name = ".q($R));foreach(indexes($R)as$C=>$v){if($C=='')continue;$J.=";\n\n".index_sql($R,$v['type'],$C,"(".implode(", ",array_map('idf_escape',$v['columns'])).")");}return$J;}function
truncate_sql($R){return"DELETE FROM ".table($R);}function
use_sql($k){}function
trigger_sql($R,$ah){return
implode(get_vals("SELECT sql || ';;\n' FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($R)));}function
show_variables(){global$g;$J=array();foreach(array("auto_vacuum","cache_size","count_changes","default_cache_size","empty_result_callbacks","encoding","foreign_keys","full_column_names","fullfsync","journal_mode","journal_size_limit","legacy_file_format","locking_mode","page_size","max_page_count","read_uncommitted","recursive_triggers","reverse_unordered_selects","secure_delete","short_column_names","synchronous","temp_store","temp_store_directory","schema_version","integrity_check","quick_check")as$y)$J[$y]=$g->result("PRAGMA $y");return$J;}function
show_status(){$J=array();foreach(get_vals("PRAGMA compile_options")as$cf){list($y,$X)=explode("=",$cf,2);$J[$y]=$X;}return$J;}function
convert_field($o){}function
unconvert_field($o,$J){return$J;}function
support($Hc){return
preg_match('~^(columns|database|drop_col|dump|indexes|move_col|sql|status|table|trigger|variables|view|view_trigger)$~',$Hc);}$x="sqlite";$Th=array("integer"=>0,"real"=>0,"numeric"=>0,"text"=>0,"blob"=>0);$Zg=array_keys($Th);$ai=array();$af=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL","SQL");$ad=array("hex","length","lower","round","unixepoch","upper");$fd=array("avg","count","count distinct","group_concat","max","min","sum");$hc=array(array(),array("integer|real|numeric"=>"+/-","text"=>"||",));}$Zb["pgsql"]="PostgreSQL";if(isset($_GET["pgsql"])){$Jf=array("PgSQL","PDO_PgSQL");define("DRIVER","pgsql");if(extension_loaded("pgsql")){class
Min_DB{var$extension="PgSQL",$_link,$_result,$_string,$_database=true,$server_info,$affected_rows,$error;function
_error($sc,$n){if(ini_bool("html_errors"))$n=html_entity_decode(strip_tags($n));$n=preg_replace('~^[^:]*: ~','',$n);$this->error=$n;}function
connect($N,$V,$G){global$b;$m=$b->database();set_error_handler(array($this,'_error'));$this->_string="host='".str_replace(":","' port='",addcslashes($N,"'\\"))."' user='".addcslashes($V,"'\\")."' password='".addcslashes($G,"'\\")."'";$this->_link=@pg_connect("$this->_string dbname='".($m!=""?addcslashes($m,"'\\"):"postgres")."'",PGSQL_CONNECT_FORCE_NEW);if(!$this->_link&&$m!=""){$this->_database=false;$this->_link=@pg_connect("$this->_string dbname='postgres'",PGSQL_CONNECT_FORCE_NEW);}restore_error_handler();if($this->_link){$pi=pg_version($this->_link);$this->server_info=$pi["server"];pg_set_client_encoding($this->_link,"UTF8");}return(bool)$this->_link;}function
quote($Q){return"'".pg_escape_string($this->_link,$Q)."'";}function
select_db($k){global$b;if($k==$b->database())return$this->_database;$J=@pg_connect("$this->_string dbname='".addcslashes($k,"'\\")."'",PGSQL_CONNECT_FORCE_NEW);if($J)$this->_link=$J;return$J;}function
close(){$this->_link=@pg_connect("$this->_string dbname='postgres'");}function
query($H,$Uh=false){$I=@pg_query($this->_link,$H);$this->error="";if(!$I){$this->error=pg_last_error($this->_link);return
false;}elseif(!pg_num_fields($I)){$this->affected_rows=pg_affected_rows($I);return
true;}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($H,$o=0){$I=$this->query($H);if(!$I||!$I->num_rows)return
false;return
pg_fetch_result($I->_result,0,$o);}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
__construct($I){$this->_result=$I;$this->num_rows=pg_num_rows($I);}function
fetch_assoc(){return
pg_fetch_assoc($this->_result);}function
fetch_row(){return
pg_fetch_row($this->_result);}function
fetch_field(){$d=$this->_offset++;$J=new
stdClass;if(function_exists('pg_field_table'))$J->orgtable=pg_field_table($this->_result,$d);$J->name=pg_field_name($this->_result,$d);$J->orgname=$J->name;$J->type=pg_field_type($this->_result,$d);$J->charsetnr=($J->type=="bytea"?63:0);return$J;}function
__destruct(){pg_free_result($this->_result);}}}elseif(extension_loaded("pdo_pgsql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_PgSQL";function
connect($N,$V,$G){global$b;$m=$b->database();$Q="pgsql:host='".str_replace(":","' port='",addcslashes($N,"'\\"))."' options='-c client_encoding=utf8'";$this->dsn("$Q dbname='".($m!=""?addcslashes($m,"'\\"):"postgres")."'",$V,$G);return
true;}function
select_db($k){global$b;return($b->database()==$k);}function
close(){}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($R,$L,$Mf){global$g;foreach($L
as$O){$bi=array();$Z=array();foreach($O
as$y=>$X){$bi[]="$y = $X";if(isset($Mf[idf_unescape($y)]))$Z[]="$y = $X";}if(!(($Z&&queries("UPDATE ".table($R)." SET ".implode(", ",$bi)." WHERE ".implode(" AND ",$Z))&&$g->affected_rows)||queries("INSERT INTO ".table($R)." (".implode(", ",array_keys($O)).") VALUES (".implode(", ",$O).")")))return
false;}return
true;}}function
idf_escape($u){return'"'.str_replace('"','""',$u).'"';}function
table($u){return
idf_escape($u);}function
connect(){global$b,$Th,$Zg;$g=new
Min_DB;$j=$b->credentials();if($g->connect($j[0],$j[1],$j[2])){if($g->server_info>=9){$g->query("SET application_name = 'Adminer'");if($g->server_info>=9.2){$Zg[lang(23)][]="json";$Th["json"]=4294967295;if($g->server_info>=9.4){$Zg[lang(23)][]="jsonb";$Th["jsonb"]=4294967295;}}}return$g;}return$g->error;}function
get_databases(){return
get_vals("SELECT datname FROM pg_database WHERE has_database_privilege(datname, 'CONNECT') ORDER BY datname");}function
limit($H,$Z,$z,$D=0,$Gg=" "){return" $H$Z".($z!==null?$Gg."LIMIT $z".($D?" OFFSET $D":""):"");}function
limit1($H,$Z){return" $H$Z";}function
db_collation($m,$ob){global$g;return$g->result("SHOW LC_COLLATE");}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT user");}function
tables_list(){$H="SELECT table_name, table_type FROM information_schema.tables WHERE table_schema = current_schema()";if(support('materializedview'))$H.="
UNION ALL
SELECT matviewname, 'MATERIALIZED VIEW'
FROM pg_matviews
WHERE schemaname = current_schema()";$H.="
ORDER BY 1";return
get_key_vals($H);}function
count_tables($l){return
array();}function
table_status($C=""){$J=array();foreach(get_rows("SELECT c.relname AS \"Name\", CASE c.relkind WHEN 'r' THEN 'table' WHEN 'm' THEN 'materialized view' ELSE 'view' END AS \"Engine\", pg_relation_size(c.oid) AS \"Data_length\", pg_total_relation_size(c.oid) - pg_relation_size(c.oid) AS \"Index_length\", obj_description(c.oid, 'pg_class') AS \"Comment\", c.relhasoids::int AS \"Oid\", c.reltuples as \"Rows\", n.nspname
FROM pg_class c
JOIN pg_namespace n ON(n.nspname = current_schema() AND n.oid = c.relnamespace)
WHERE relkind IN ('r', 'm', 'v')
".($C!=""?"AND relname = ".q($C):"ORDER BY relname"))as$K)$J[$K["Name"]]=$K;return($C!=""?$J[$C]:$J);}function
is_view($S){return
in_array($S["Engine"],array("view","materialized view"));}function
fk_support($S){return
true;}function
fields($R){$J=array();$Ca=array('timestamp without time zone'=>'timestamp','timestamp with time zone'=>'timestamptz',);foreach(get_rows("SELECT a.attname AS field, format_type(a.atttypid, a.atttypmod) AS full_type, d.adsrc AS default, a.attnotnull::int, col_description(c.oid, a.attnum) AS comment
FROM pg_class c
JOIN pg_namespace n ON c.relnamespace = n.oid
JOIN pg_attribute a ON c.oid = a.attrelid
LEFT JOIN pg_attrdef d ON c.oid = d.adrelid AND a.attnum = d.adnum
WHERE c.relname = ".q($R)."
AND n.nspname = current_schema()
AND NOT a.attisdropped
AND a.attnum > 0
ORDER BY a.attnum")as$K){preg_match('~([^([]+)(\((.*)\))?([a-z ]+)?((\[[0-9]*])*)$~',$K["full_type"],$B);list(,$U,$de,$K["length"],$wa,$Fa)=$B;$K["length"].=$Fa;$cb=$U.$wa;if(isset($Ca[$cb])){$K["type"]=$Ca[$cb];$K["full_type"]=$K["type"].$de.$Fa;}else{$K["type"]=$U;$K["full_type"]=$K["type"].$de.$wa.$Fa;}$K["null"]=!$K["attnotnull"];$K["auto_increment"]=preg_match('~^nextval\\(~i',$K["default"]);$K["privileges"]=array("insert"=>1,"select"=>1,"update"=>1);if(preg_match('~(.+)::[^)]+(.*)~',$K["default"],$B))$K["default"]=($B[1][0]=="'"?idf_unescape($B[1]):$B[1]).$B[2];$J[$K["field"]]=$K;}return$J;}function
indexes($R,$h=null){global$g;if(!is_object($h))$h=$g;$J=array();$ih=$h->result("SELECT oid FROM pg_class WHERE relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema()) AND relname = ".q($R));$e=get_key_vals("SELECT attnum, attname FROM pg_attribute WHERE attrelid = $ih AND attnum > 0",$h);foreach(get_rows("SELECT relname, indisunique::int, indisprimary::int, indkey, indoption , (indpred IS NOT NULL)::int as indispartial FROM pg_index i, pg_class ci WHERE i.indrelid = $ih AND ci.oid = i.indexrelid",$h)as$K){$jg=$K["relname"];$J[$jg]["type"]=($K["indispartial"]?"INDEX":($K["indisprimary"]?"PRIMARY":($K["indisunique"]?"UNIQUE":"INDEX")));$J[$jg]["columns"]=array();foreach(explode(" ",$K["indkey"])as$wd)$J[$jg]["columns"][]=$e[$wd];$J[$jg]["descs"]=array();foreach(explode(" ",$K["indoption"])as$xd)$J[$jg]["descs"][]=($xd&1?'1':null);$J[$jg]["lengths"]=array();}return$J;}function
foreign_keys($R){global$Ve;$J=array();foreach(get_rows("SELECT conname, condeferrable::int AS deferrable, pg_get_constraintdef(oid) AS definition
FROM pg_constraint
WHERE conrelid = (SELECT pc.oid FROM pg_class AS pc INNER JOIN pg_namespace AS pn ON (pn.oid = pc.relnamespace) WHERE pc.relname = ".q($R)." AND pn.nspname = current_schema())
AND contype = 'f'::char
ORDER BY conkey, conname")as$K){if(preg_match('~FOREIGN KEY\s*\((.+)\)\s*REFERENCES (.+)\((.+)\)(.*)$~iA',$K['definition'],$B)){$K['source']=array_map('trim',explode(',',$B[1]));if(preg_match('~^(("([^"]|"")+"|[^"]+)\.)?"?("([^"]|"")+"|[^"]+)$~',$B[2],$ke)){$K['ns']=str_replace('""','"',preg_replace('~^"(.+)"$~','\1',$ke[2]));$K['table']=str_replace('""','"',preg_replace('~^"(.+)"$~','\1',$ke[4]));}$K['target']=array_map('trim',explode(',',$B[3]));$K['on_delete']=(preg_match("~ON DELETE ($Ve)~",$B[4],$ke)?$ke[1]:'NO ACTION');$K['on_update']=(preg_match("~ON UPDATE ($Ve)~",$B[4],$ke)?$ke[1]:'NO ACTION');$J[$K['conname']]=$K;}}return$J;}function
view($C){global$g;return
array("select"=>trim($g->result("SELECT pg_get_viewdef(".q($C).")")));}function
collations(){return
array();}function
information_schema($m){return($m=="information_schema");}function
error(){global$g;$J=h($g->error);if(preg_match('~^(.*\\n)?([^\\n]*)\\n( *)\\^(\\n.*)?$~s',$J,$B))$J=$B[1].preg_replace('~((?:[^&]|&[^;]*;){'.strlen($B[3]).'})(.*)~','\\1<b>\\2</b>',$B[2]).$B[4];return
nl_br($J);}function
create_database($m,$nb){return
queries("CREATE DATABASE ".idf_escape($m).($nb?" ENCODING ".idf_escape($nb):""));}function
drop_databases($l){global$g;$g->close();return
apply_queries("DROP DATABASE",$l,'idf_escape');}function
rename_database($C,$nb){return
queries("ALTER DATABASE ".idf_escape(DB)." RENAME TO ".idf_escape($C));}function
auto_increment(){return"";}function
alter_table($R,$C,$p,$Sc,$sb,$pc,$nb,$La,$yf){$c=array();$Wf=array();foreach($p
as$o){$d=idf_escape($o[0]);$X=$o[1];if(!$X)$c[]="DROP $d";else{$li=$X[5];unset($X[5]);if(isset($X[6])&&$o[0]=="")$X[1]=($X[1]=="bigint"?" big":" ")."serial";if($o[0]=="")$c[]=($R!=""?"ADD ":"  ").implode($X);else{if($d!=$X[0])$Wf[]="ALTER TABLE ".table($R)." RENAME $d TO $X[0]";$c[]="ALTER $d TYPE$X[1]";if(!$X[6]){$c[]="ALTER $d ".($X[3]?"SET$X[3]":"DROP DEFAULT");$c[]="ALTER $d ".($X[2]==" NULL"?"DROP NOT":"SET").$X[2];}}if($o[0]!=""||$li!="")$Wf[]="COMMENT ON COLUMN ".table($R).".$X[0] IS ".($li!=""?substr($li,9):"''");}}$c=array_merge($c,$Sc);if($R=="")array_unshift($Wf,"CREATE TABLE ".table($C)." (\n".implode(",\n",$c)."\n)");elseif($c)array_unshift($Wf,"ALTER TABLE ".table($R)."\n".implode(",\n",$c));if($R!=""&&$R!=$C)$Wf[]="ALTER TABLE ".table($R)." RENAME TO ".table($C);if($R!=""||$sb!="")$Wf[]="COMMENT ON TABLE ".table($C)." IS ".q($sb);if($La!=""){}foreach($Wf
as$H){if(!queries($H))return
false;}return
true;}function
alter_indexes($R,$c){$i=array();$ac=array();$Wf=array();foreach($c
as$X){if($X[0]!="INDEX")$i[]=($X[2]=="DROP"?"\nDROP CONSTRAINT ".idf_escape($X[1]):"\nADD".($X[1]!=""?" CONSTRAINT ".idf_escape($X[1]):"")." $X[0] ".($X[0]=="PRIMARY"?"KEY ":"")."(".implode(", ",$X[2]).")");elseif($X[2]=="DROP")$ac[]=idf_escape($X[1]);else$Wf[]="CREATE INDEX ".idf_escape($X[1]!=""?$X[1]:uniqid($R."_"))." ON ".table($R)." (".implode(", ",$X[2]).")";}if($i)array_unshift($Wf,"ALTER TABLE ".table($R).implode(",",$i));if($ac)array_unshift($Wf,"DROP INDEX ".implode(", ",$ac));foreach($Wf
as$H){if(!queries($H))return
false;}return
true;}function
truncate_tables($T){return
queries("TRUNCATE ".implode(", ",array_map('table',$T)));return
true;}function
drop_views($ri){return
drop_tables($ri);}function
drop_tables($T){foreach($T
as$R){$P=table_status($R);if(!queries("DROP ".strtoupper($P["Engine"])." ".table($R)))return
false;}return
true;}function
move_tables($T,$ri,$ph){foreach(array_merge($T,$ri)as$R){$P=table_status($R);if(!queries("ALTER ".strtoupper($P["Engine"])." ".table($R)." SET SCHEMA ".idf_escape($ph)))return
false;}return
true;}function
trigger($C,$R=null){if($C=="")return
array("Statement"=>"EXECUTE PROCEDURE ()");if($R===null)$R=$_GET['trigger'];$L=get_rows('SELECT t.trigger_name AS "Trigger", t.action_timing AS "Timing", (SELECT STRING_AGG(event_manipulation, \' OR \') FROM information_schema.triggers WHERE event_object_table = t.event_object_table AND trigger_name = t.trigger_name ) AS "Events", t.event_manipulation AS "Event", \'FOR EACH \' || t.action_orientation AS "Type", t.action_statement AS "Statement" FROM information_schema.triggers t WHERE t.event_object_table = '.q($R).' AND t.trigger_name = '.q($C));return
reset($L);}function
triggers($R){$J=array();foreach(get_rows("SELECT * FROM information_schema.triggers WHERE event_object_table = ".q($R))as$K)$J[$K["trigger_name"]]=array($K["action_timing"],$K["event_manipulation"]);return$J;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Event"=>array("INSERT","UPDATE","DELETE"),"Type"=>array("FOR EACH ROW","FOR EACH STATEMENT"),);}function
routines(){return
get_rows('SELECT p.proname AS "ROUTINE_NAME", p.proargtypes AS "ROUTINE_TYPE", pg_catalog.format_type(p.prorettype, NULL) AS "DTD_IDENTIFIER"
FROM pg_catalog.pg_namespace n
JOIN pg_catalog.pg_proc p ON p.pronamespace = n.oid
WHERE n.nspname = current_schema()
ORDER BY p.proname');}function
routine_languages(){return
get_vals("SELECT langname FROM pg_catalog.pg_language");}function
last_id(){return
0;}function
explain($g,$H){return$g->query("EXPLAIN $H");}function
found_rows($S,$Z){global$g;if(preg_match("~ rows=([0-9]+)~",$g->result("EXPLAIN SELECT * FROM ".idf_escape($S["Name"]).($Z?" WHERE ".implode(" AND ",$Z):"")),$ig))return$ig[1];return
false;}function
types(){return
get_vals("SELECT typname
FROM pg_type
WHERE typnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())
AND typtype IN ('b','d','e')
AND typelem = 0");}function
schemas(){return
get_vals("SELECT nspname FROM pg_namespace ORDER BY nspname");}function
get_schema(){global$g;return$g->result("SELECT current_schema()");}function
set_schema($zg){global$g,$Th,$Zg;$J=$g->query("SET search_path TO ".idf_escape($zg));foreach(types()as$U){if(!isset($Th[$U])){$Th[$U]=0;$Zg[lang(24)][]=$U;}}return$J;}function
create_sql($R,$La){global$g;$J='';$pg=array();$Ig=array();$P=table_status($R);$p=fields($R);$w=indexes($R);ksort($w);$Qc=foreign_keys($R);ksort($Qc);$Qh=triggers($R);if(!$P||empty($p))return
false;$J="CREATE TABLE ".idf_escape($P['nspname']).".".idf_escape($P['Name'])." (\n    ";foreach($p
as$Jc=>$o){$vf=idf_escape($o['field']).' '.$o['full_type'].(is_null($o['default'])?"":" DEFAULT $o[default]").($o['attnotnull']?" NOT NULL":"");$pg[]=$vf;if(preg_match('~nextval\(\'([^\']+)\'\)~',$o['default'],$le)){$Hg=$le[1];$Tg=reset(get_rows("SELECT * FROM $Hg"));$Ig[]="CREATE SEQUENCE $Hg INCREMENT $Tg[increment_by] MINVALUE $Tg[min_value] MAXVALUE $Tg[max_value] START ".($La?$Tg['last_value']:1)." CACHE $Tg[cache_value];";}}if(!empty($Ig))$J=implode("\n\n",$Ig)."\n\n$J";foreach($w
as$ud=>$v){switch($v['type']){case'UNIQUE':$pg[]="CONSTRAINT ".idf_escape($ud)." UNIQUE (".implode(', ',array_map('idf_escape',$v['columns'])).")";break;case'PRIMARY':$pg[]="CONSTRAINT ".idf_escape($ud)." PRIMARY KEY (".implode(', ',array_map('idf_escape',$v['columns'])).")";break;}}foreach($Qc
as$Pc=>$Oc)$pg[]="CONSTRAINT ".idf_escape($Pc)." $Oc[definition] ".($Oc['deferrable']?'DEFERRABLE':'NOT DEFERRABLE');$J.=implode(",\n    ",$pg)."\n) WITH (oids = ".($P['Oid']?'true':'false').");";foreach($w
as$ud=>$v){if($v['type']=='INDEX')$J.="\n\nCREATE INDEX ".idf_escape($ud)." ON ".idf_escape($P['nspname']).".".idf_escape($P['Name'])." USING btree (".implode(', ',array_map('idf_escape',$v['columns'])).");";}if($P['Comment'])$J.="\n\nCOMMENT ON TABLE ".idf_escape($P['nspname']).".".idf_escape($P['Name'])." IS ".q($P['Comment']).";";foreach($p
as$Jc=>$o){if($o['comment'])$J.="\n\nCOMMENT ON COLUMN ".idf_escape($P['nspname']).".".idf_escape($P['Name']).".".idf_escape($Jc)." IS ".q($o['comment']).";";}foreach($Qh
as$Mh=>$Lh){$Nh=trigger($Mh,$P['Name']);$J.="\n\nCREATE TRIGGER ".idf_escape($Nh['Trigger'])." $Nh[Timing] $Nh[Events] ON ".idf_escape($P["nspname"]).".".idf_escape($P['Name'])." $Nh[Type] $Nh[Statement];";}return
rtrim($J,';');}function
trigger_sql($R,$ah){$J="";return
false;}function
use_sql($k){return"\connect ".idf_escape($k);}function
show_variables(){return
get_key_vals("SHOW ALL");}function
process_list(){global$g;return
get_rows("SELECT * FROM pg_stat_activity ORDER BY ".($g->server_info<9.2?"procpid":"pid"));}function
show_status(){}function
convert_field($o){}function
unconvert_field($o,$J){return$J;}function
support($Hc){global$g;return
preg_match('~^(database|table|columns|sql|indexes|comment|view|'.($g->server_info>=9.3?'materializedview|':'').'scheme|processlist|sequence|trigger|type|variables|drop_col|kill|dump)$~',$Hc);}function
kill_process($X){return
queries("SELECT pg_terminate_backend(".number($X).")");}function
connection_id(){return"SELECT pg_backend_pid()";}function
max_connections(){global$g;return$g->result("SHOW max_connections");}$x="pgsql";$Th=array();$Zg=array();foreach(array(lang(25)=>array("smallint"=>5,"integer"=>10,"bigint"=>19,"boolean"=>1,"numeric"=>0,"real"=>7,"double precision"=>16,"money"=>20),lang(26)=>array("date"=>13,"time"=>17,"timestamp"=>20,"timestamptz"=>21,"interval"=>0),lang(23)=>array("character"=>0,"character varying"=>0,"text"=>0,"tsquery"=>0,"tsvector"=>0,"uuid"=>0,"xml"=>0),lang(27)=>array("bit"=>0,"bit varying"=>0,"bytea"=>0),lang(28)=>array("cidr"=>43,"inet"=>43,"macaddr"=>17,"txid_snapshot"=>0),lang(29)=>array("box"=>0,"circle"=>0,"line"=>0,"lseg"=>0,"path"=>0,"point"=>0,"polygon"=>0),)as$y=>$X){$Th+=$X;$Zg[$y]=array_keys($X);}$ai=array();$af=array("=","<",">","<=",">=","!=","~","!~","LIKE","LIKE %%","ILIKE","ILIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$ad=array("char_length","lower","round","to_hex","to_timestamp","upper");$fd=array("avg","count","count distinct","max","min","sum");$hc=array(array("char"=>"md5","date|time"=>"now",),array("int|numeric|real|money"=>"+/-","date|time"=>"+ interval/- interval","char|text"=>"||",));}$Zb["oracle"]="Oracle";if(isset($_GET["oracle"])){$Jf=array("OCI8","PDO_OCI");define("DRIVER","oracle");if(extension_loaded("oci8")){class
Min_DB{var$extension="oci8",$_link,$_result,$server_info,$affected_rows,$errno,$error;function
_error($sc,$n){if(ini_bool("html_errors"))$n=html_entity_decode(strip_tags($n));$n=preg_replace('~^[^:]*: ~','',$n);$this->error=$n;}function
connect($N,$V,$G){$this->_link=@oci_new_connect($V,$G,$N,"AL32UTF8");if($this->_link){$this->server_info=oci_server_version($this->_link);return
true;}$n=oci_error();$this->error=$n["message"];return
false;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}function
select_db($k){return
true;}function
query($H,$Uh=false){$I=oci_parse($this->_link,$H);$this->error="";if(!$I){$n=oci_error($this->_link);$this->errno=$n["code"];$this->error=$n["message"];return
false;}set_error_handler(array($this,'_error'));$J=@oci_execute($I);restore_error_handler();if($J){if(oci_num_fields($I))return
new
Min_Result($I);$this->affected_rows=oci_num_rows($I);}return$J;}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($H,$o=1){$I=$this->query($H);if(!is_object($I)||!oci_fetch($I->_result))return
false;return
oci_result($I->_result,$o);}}class
Min_Result{var$_result,$_offset=1,$num_rows;function
__construct($I){$this->_result=$I;}function
_convert($K){foreach((array)$K
as$y=>$X){if(is_a($X,'OCI-Lob'))$K[$y]=$X->load();}return$K;}function
fetch_assoc(){return$this->_convert(oci_fetch_assoc($this->_result));}function
fetch_row(){return$this->_convert(oci_fetch_row($this->_result));}function
fetch_field(){$d=$this->_offset++;$J=new
stdClass;$J->name=oci_field_name($this->_result,$d);$J->orgname=$J->name;$J->type=oci_field_type($this->_result,$d);$J->charsetnr=(preg_match("~raw|blob|bfile~",$J->type)?63:0);return$J;}function
__destruct(){oci_free_statement($this->_result);}}}elseif(extension_loaded("pdo_oci")){class
Min_DB
extends
Min_PDO{var$extension="PDO_OCI";function
connect($N,$V,$G){$this->dsn("oci:dbname=//$N;charset=AL32UTF8",$V,$G);return
true;}function
select_db($k){return
true;}}}class
Min_Driver
extends
Min_SQL{function
begin(){return
true;}}function
idf_escape($u){return'"'.str_replace('"','""',$u).'"';}function
table($u){return
idf_escape($u);}function
connect(){global$b;$g=new
Min_DB;$j=$b->credentials();if($g->connect($j[0],$j[1],$j[2]))return$g;return$g->error;}function
get_databases(){return
get_vals("SELECT tablespace_name FROM user_tablespaces");}function
limit($H,$Z,$z,$D=0,$Gg=" "){return($D?" * FROM (SELECT t.*, rownum AS rnum FROM (SELECT $H$Z) t WHERE rownum <= ".($z+$D).") WHERE rnum > $D":($z!==null?" * FROM (SELECT $H$Z) WHERE rownum <= ".($z+$D):" $H$Z"));}function
limit1($H,$Z){return" $H$Z";}function
db_collation($m,$ob){global$g;return$g->result("SELECT value FROM nls_database_parameters WHERE parameter = 'NLS_CHARACTERSET'");}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT USER FROM DUAL");}function
tables_list(){return
get_key_vals("SELECT table_name, 'table' FROM all_tables WHERE tablespace_name = ".q(DB)."
UNION SELECT view_name, 'view' FROM user_views
ORDER BY 1");}function
count_tables($l){return
array();}function
table_status($C=""){$J=array();$Ag=q($C);foreach(get_rows('SELECT table_name "Name", \'table\' "Engine", avg_row_len * num_rows "Data_length", num_rows "Rows" FROM all_tables WHERE tablespace_name = '.q(DB).($C!=""?" AND table_name = $Ag":"")."
UNION SELECT view_name, 'view', 0, 0 FROM user_views".($C!=""?" WHERE view_name = $Ag":"")."
ORDER BY 1")as$K){if($C!="")return$K;$J[$K["Name"]]=$K;}return$J;}function
is_view($S){return$S["Engine"]=="view";}function
fk_support($S){return
true;}function
fields($R){$J=array();foreach(get_rows("SELECT * FROM all_tab_columns WHERE table_name = ".q($R)." ORDER BY column_id")as$K){$U=$K["DATA_TYPE"];$de="$K[DATA_PRECISION],$K[DATA_SCALE]";if($de==",")$de=$K["DATA_LENGTH"];$J[$K["COLUMN_NAME"]]=array("field"=>$K["COLUMN_NAME"],"full_type"=>$U.($de?"($de)":""),"type"=>strtolower($U),"length"=>$de,"default"=>$K["DATA_DEFAULT"],"null"=>($K["NULLABLE"]=="Y"),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);}return$J;}function
indexes($R,$h=null){$J=array();foreach(get_rows("SELECT uic.*, uc.constraint_type
FROM user_ind_columns uic
LEFT JOIN user_constraints uc ON uic.index_name = uc.constraint_name AND uic.table_name = uc.table_name
WHERE uic.table_name = ".q($R)."
ORDER BY uc.constraint_type, uic.column_position",$h)as$K){$ud=$K["INDEX_NAME"];$J[$ud]["type"]=($K["CONSTRAINT_TYPE"]=="P"?"PRIMARY":($K["CONSTRAINT_TYPE"]=="U"?"UNIQUE":"INDEX"));$J[$ud]["columns"][]=$K["COLUMN_NAME"];$J[$ud]["lengths"][]=($K["CHAR_LENGTH"]&&$K["CHAR_LENGTH"]!=$K["COLUMN_LENGTH"]?$K["CHAR_LENGTH"]:null);$J[$ud]["descs"][]=($K["DESCEND"]?'1':null);}return$J;}function
view($C){$L=get_rows('SELECT text "select" FROM user_views WHERE view_name = '.q($C));return
reset($L);}function
collations(){return
array();}function
information_schema($m){return
false;}function
error(){global$g;return
h($g->error);}function
explain($g,$H){$g->query("EXPLAIN PLAN FOR $H");return$g->query("SELECT * FROM plan_table");}function
found_rows($S,$Z){}function
alter_table($R,$C,$p,$Sc,$sb,$pc,$nb,$La,$yf){$c=$ac=array();foreach($p
as$o){$X=$o[1];if($X&&$o[0]!=""&&idf_escape($o[0])!=$X[0])queries("ALTER TABLE ".table($R)." RENAME COLUMN ".idf_escape($o[0])." TO $X[0]");if($X)$c[]=($R!=""?($o[0]!=""?"MODIFY (":"ADD ("):"  ").implode($X).($R!=""?")":"");else$ac[]=idf_escape($o[0]);}if($R=="")return
queries("CREATE TABLE ".table($C)." (\n".implode(",\n",$c)."\n)");return(!$c||queries("ALTER TABLE ".table($R)."\n".implode("\n",$c)))&&(!$ac||queries("ALTER TABLE ".table($R)." DROP (".implode(", ",$ac).")"))&&($R==$C||queries("ALTER TABLE ".table($R)." RENAME TO ".table($C)));}function
foreign_keys($R){$J=array();$H="SELECT c_list.CONSTRAINT_NAME as NAME,
c_src.COLUMN_NAME as SRC_COLUMN,
c_dest.OWNER as DEST_DB,
c_dest.TABLE_NAME as DEST_TABLE,
c_dest.COLUMN_NAME as DEST_COLUMN,
c_list.DELETE_RULE as ON_DELETE
FROM ALL_CONSTRAINTS c_list, ALL_CONS_COLUMNS c_src, ALL_CONS_COLUMNS c_dest
WHERE c_list.CONSTRAINT_NAME = c_src.CONSTRAINT_NAME
AND c_list.R_CONSTRAINT_NAME = c_dest.CONSTRAINT_NAME
AND c_list.CONSTRAINT_TYPE = 'R'
AND c_src.TABLE_NAME = ".q($R);foreach(get_rows($H)as$K)$J[$K['NAME']]=array("db"=>$K['DEST_DB'],"table"=>$K['DEST_TABLE'],"source"=>array($K['SRC_COLUMN']),"target"=>array($K['DEST_COLUMN']),"on_delete"=>$K['ON_DELETE'],"on_update"=>null,);return$J;}function
truncate_tables($T){return
apply_queries("TRUNCATE TABLE",$T);}function
drop_views($ri){return
apply_queries("DROP VIEW",$ri);}function
drop_tables($T){return
apply_queries("DROP TABLE",$T);}function
last_id(){return
0;}function
schemas(){return
get_vals("SELECT DISTINCT owner FROM dba_segments WHERE owner IN (SELECT username FROM dba_users WHERE default_tablespace NOT IN ('SYSTEM','SYSAUX'))");}function
get_schema(){global$g;return$g->result("SELECT sys_context('USERENV', 'SESSION_USER') FROM dual");}function
set_schema($_g){global$g;return$g->query("ALTER SESSION SET CURRENT_SCHEMA = ".idf_escape($_g));}function
show_variables(){return
get_key_vals('SELECT name, display_value FROM v$parameter');}function
process_list(){return
get_rows('SELECT sess.process AS "process", sess.username AS "user", sess.schemaname AS "schema", sess.status AS "status", sess.wait_class AS "wait_class", sess.seconds_in_wait AS "seconds_in_wait", sql.sql_text AS "sql_text", sess.machine AS "machine", sess.port AS "port"
FROM v$session sess LEFT OUTER JOIN v$sql sql
ON sql.sql_id = sess.sql_id
WHERE sess.type = \'USER\'
ORDER BY PROCESS
');}function
show_status(){$L=get_rows('SELECT * FROM v$instance');return
reset($L);}function
convert_field($o){}function
unconvert_field($o,$J){return$J;}function
support($Hc){return
preg_match('~^(columns|database|drop_col|indexes|processlist|scheme|sql|status|table|variables|view|view_trigger)$~',$Hc);}$x="oracle";$Th=array();$Zg=array();foreach(array(lang(25)=>array("number"=>38,"binary_float"=>12,"binary_double"=>21),lang(26)=>array("date"=>10,"timestamp"=>29,"interval year"=>12,"interval day"=>28),lang(23)=>array("char"=>2000,"varchar2"=>4000,"nchar"=>2000,"nvarchar2"=>4000,"clob"=>4294967295,"nclob"=>4294967295),lang(27)=>array("raw"=>2000,"long raw"=>2147483648,"blob"=>4294967295,"bfile"=>4294967296),)as$y=>$X){$Th+=$X;$Zg[$y]=array_keys($X);}$ai=array();$af=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL");$ad=array("length","lower","round","upper");$fd=array("avg","count","count distinct","max","min","sum");$hc=array(array("date"=>"current_date","timestamp"=>"current_timestamp",),array("number|float|double"=>"+/-","date|timestamp"=>"+ interval/- interval","char|clob"=>"||",));}$Zb["mssql"]="MS SQL";if(isset($_GET["mssql"])){$Jf=array("SQLSRV","MSSQL","PDO_DBLIB");define("DRIVER","mssql");if(extension_loaded("sqlsrv")){class
Min_DB{var$extension="sqlsrv",$_link,$_result,$server_info,$affected_rows,$errno,$error;function
_get_error(){$this->error="";foreach(sqlsrv_errors()as$n){$this->errno=$n["code"];$this->error.="$n[message]\n";}$this->error=rtrim($this->error);}function
connect($N,$V,$G){$this->_link=@sqlsrv_connect($N,array("UID"=>$V,"PWD"=>$G,"CharacterSet"=>"UTF-8"));if($this->_link){$yd=sqlsrv_server_info($this->_link);$this->server_info=$yd['SQLServerVersion'];}else$this->_get_error();return(bool)$this->_link;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}function
select_db($k){return$this->query("USE ".idf_escape($k));}function
query($H,$Uh=false){$I=sqlsrv_query($this->_link,$H);$this->error="";if(!$I){$this->_get_error();return
false;}return$this->store_result($I);}function
multi_query($H){$this->_result=sqlsrv_query($this->_link,$H);$this->error="";if(!$this->_result){$this->_get_error();return
false;}return
true;}function
store_result($I=null){if(!$I)$I=$this->_result;if(!$I)return
false;if(sqlsrv_field_metadata($I))return
new
Min_Result($I);$this->affected_rows=sqlsrv_rows_affected($I);return
true;}function
next_result(){return$this->_result?sqlsrv_next_result($this->_result):null;}function
result($H,$o=0){$I=$this->query($H);if(!is_object($I))return
false;$K=$I->fetch_row();return$K[$o];}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
__construct($I){$this->_result=$I;}function
_convert($K){foreach((array)$K
as$y=>$X){if(is_a($X,'DateTime'))$K[$y]=$X->format("Y-m-d H:i:s");}return$K;}function
fetch_assoc(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_ASSOC));}function
fetch_row(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_NUMERIC));}function
fetch_field(){if(!$this->_fields)$this->_fields=sqlsrv_field_metadata($this->_result);$o=$this->_fields[$this->_offset++];$J=new
stdClass;$J->name=$o["Name"];$J->orgname=$o["Name"];$J->type=($o["Type"]==1?254:0);return$J;}function
seek($D){for($s=0;$s<$D;$s++)sqlsrv_fetch($this->_result);}function
__destruct(){sqlsrv_free_stmt($this->_result);}}}elseif(extension_loaded("mssql")){class
Min_DB{var$extension="MSSQL",$_link,$_result,$server_info,$affected_rows,$error;function
connect($N,$V,$G){$this->_link=@mssql_connect($N,$V,$G);if($this->_link){$I=$this->query("SELECT SERVERPROPERTY('ProductLevel'), SERVERPROPERTY('Edition')");$K=$I->fetch_row();$this->server_info=$this->result("sp_server_info 2",2)." [$K[0]] $K[1]";}else$this->error=mssql_get_last_message();return(bool)$this->_link;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}function
select_db($k){return
mssql_select_db($k);}function
query($H,$Uh=false){$I=@mssql_query($H,$this->_link);$this->error="";if(!$I){$this->error=mssql_get_last_message();return
false;}if($I===true){$this->affected_rows=mssql_rows_affected($this->_link);return
true;}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
mssql_next_result($this->_result->_result);}function
result($H,$o=0){$I=$this->query($H);if(!is_object($I))return
false;return
mssql_result($I->_result,0,$o);}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
__construct($I){$this->_result=$I;$this->num_rows=mssql_num_rows($I);}function
fetch_assoc(){return
mssql_fetch_assoc($this->_result);}function
fetch_row(){return
mssql_fetch_row($this->_result);}function
num_rows(){return
mssql_num_rows($this->_result);}function
fetch_field(){$J=mssql_fetch_field($this->_result);$J->orgtable=$J->table;$J->orgname=$J->name;return$J;}function
seek($D){mssql_data_seek($this->_result,$D);}function
__destruct(){mssql_free_result($this->_result);}}}elseif(extension_loaded("pdo_dblib")){class
Min_DB
extends
Min_PDO{var$extension="PDO_DBLIB";function
connect($N,$V,$G){$this->dsn("dblib:charset=utf8;host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$N)),$V,$G);return
true;}function
select_db($k){return$this->query("USE ".idf_escape($k));}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($R,$L,$Mf){foreach($L
as$O){$bi=array();$Z=array();foreach($O
as$y=>$X){$bi[]="$y = $X";if(isset($Mf[idf_unescape($y)]))$Z[]="$y = $X";}if(!queries("MERGE ".table($R)." USING (VALUES(".implode(", ",$O).")) AS source (c".implode(", c",range(1,count($O))).") ON ".implode(" AND ",$Z)." WHEN MATCHED THEN UPDATE SET ".implode(", ",$bi)." WHEN NOT MATCHED THEN INSERT (".implode(", ",array_keys($O)).") VALUES (".implode(", ",$O).");"))return
false;}return
true;}function
begin(){return
queries("BEGIN TRANSACTION");}}function
idf_escape($u){return"[".str_replace("]","]]",$u)."]";}function
table($u){return($_GET["ns"]!=""?idf_escape($_GET["ns"]).".":"").idf_escape($u);}function
connect(){global$b;$g=new
Min_DB;$j=$b->credentials();if($g->connect($j[0],$j[1],$j[2]))return$g;return$g->error;}function
get_databases(){return
get_vals("SELECT name FROM sys.databases WHERE name NOT IN ('master', 'tempdb', 'model', 'msdb')");}function
limit($H,$Z,$z,$D=0,$Gg=" "){return($z!==null?" TOP (".($z+$D).")":"")." $H$Z";}function
limit1($H,$Z){return
limit($H,$Z,1);}function
db_collation($m,$ob){global$g;return$g->result("SELECT collation_name FROM sys.databases WHERE name =  ".q($m));}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT SUSER_NAME()");}function
tables_list(){return
get_key_vals("SELECT name, type_desc FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ORDER BY name");}function
count_tables($l){global$g;$J=array();foreach($l
as$m){$g->select_db($m);$J[$m]=$g->result("SELECT COUNT(*) FROM INFORMATION_SCHEMA.TABLES");}return$J;}function
table_status($C=""){$J=array();foreach(get_rows("SELECT name AS Name, type_desc AS Engine FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ".($C!=""?"AND name = ".q($C):"ORDER BY name"))as$K){if($C!="")return$K;$J[$K["Name"]]=$K;}return$J;}function
is_view($S){return$S["Engine"]=="VIEW";}function
fk_support($S){return
true;}function
fields($R){$J=array();foreach(get_rows("SELECT c.*, t.name type, d.definition [default]
FROM sys.all_columns c
JOIN sys.all_objects o ON c.object_id = o.object_id
JOIN sys.types t ON c.user_type_id = t.user_type_id
LEFT JOIN sys.default_constraints d ON c.default_object_id = d.parent_column_id
WHERE o.schema_id = SCHEMA_ID(".q(get_schema()).") AND o.type IN ('S', 'U', 'V') AND o.name = ".q($R))as$K){$U=$K["type"];$de=(preg_match("~char|binary~",$U)?$K["max_length"]:($U=="decimal"?"$K[precision],$K[scale]":""));$J[$K["name"]]=array("field"=>$K["name"],"full_type"=>$U.($de?"($de)":""),"type"=>$U,"length"=>$de,"default"=>$K["default"],"null"=>$K["is_nullable"],"auto_increment"=>$K["is_identity"],"collation"=>$K["collation_name"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"primary"=>$K["is_identity"],);}return$J;}function
indexes($R,$h=null){$J=array();foreach(get_rows("SELECT i.name, key_ordinal, is_unique, is_primary_key, c.name AS column_name, is_descending_key
FROM sys.indexes i
INNER JOIN sys.index_columns ic ON i.object_id = ic.object_id AND i.index_id = ic.index_id
INNER JOIN sys.columns c ON ic.object_id = c.object_id AND ic.column_id = c.column_id
WHERE OBJECT_NAME(i.object_id) = ".q($R),$h)as$K){$C=$K["name"];$J[$C]["type"]=($K["is_primary_key"]?"PRIMARY":($K["is_unique"]?"UNIQUE":"INDEX"));$J[$C]["lengths"]=array();$J[$C]["columns"][$K["key_ordinal"]]=$K["column_name"];$J[$C]["descs"][$K["key_ordinal"]]=($K["is_descending_key"]?'1':null);}return$J;}function
view($C){global$g;return
array("select"=>preg_replace('~^(?:[^[]|\\[[^]]*])*\\s+AS\\s+~isU','',$g->result("SELECT VIEW_DEFINITION FROM INFORMATION_SCHEMA.VIEWS WHERE TABLE_SCHEMA = SCHEMA_NAME() AND TABLE_NAME = ".q($C))));}function
collations(){$J=array();foreach(get_vals("SELECT name FROM fn_helpcollations()")as$nb)$J[preg_replace('~_.*~','',$nb)][]=$nb;return$J;}function
information_schema($m){return
false;}function
error(){global$g;return
nl_br(h(preg_replace('~^(\\[[^]]*])+~m','',$g->error)));}function
create_database($m,$nb){return
queries("CREATE DATABASE ".idf_escape($m).(preg_match('~^[a-z0-9_]+$~i',$nb)?" COLLATE $nb":""));}function
drop_databases($l){return
queries("DROP DATABASE ".implode(", ",array_map('idf_escape',$l)));}function
rename_database($C,$nb){if(preg_match('~^[a-z0-9_]+$~i',$nb))queries("ALTER DATABASE ".idf_escape(DB)." COLLATE $nb");queries("ALTER DATABASE ".idf_escape(DB)." MODIFY NAME = ".idf_escape($C));return
true;}function
auto_increment(){return" IDENTITY".($_POST["Auto_increment"]!=""?"(".number($_POST["Auto_increment"]).",1)":"")." PRIMARY KEY";}function
alter_table($R,$C,$p,$Sc,$sb,$pc,$nb,$La,$yf){$c=array();foreach($p
as$o){$d=idf_escape($o[0]);$X=$o[1];if(!$X)$c["DROP"][]=" COLUMN $d";else{$X[1]=preg_replace("~( COLLATE )'(\\w+)'~","\\1\\2",$X[1]);if($o[0]=="")$c["ADD"][]="\n  ".implode("",$X).($R==""?substr($Sc[$X[0]],16+strlen($X[0])):"");else{unset($X[6]);if($d!=$X[0])queries("EXEC sp_rename ".q(table($R).".$d").", ".q(idf_unescape($X[0])).", 'COLUMN'");$c["ALTER COLUMN ".implode("",$X)][]="";}}}if($R=="")return
queries("CREATE TABLE ".table($C)." (".implode(",",(array)$c["ADD"])."\n)");if($R!=$C)queries("EXEC sp_rename ".q(table($R)).", ".q($C));if($Sc)$c[""]=$Sc;foreach($c
as$y=>$X){if(!queries("ALTER TABLE ".idf_escape($C)." $y".implode(",",$X)))return
false;}return
true;}function
alter_indexes($R,$c){$v=array();$ac=array();foreach($c
as$X){if($X[2]=="DROP"){if($X[0]=="PRIMARY")$ac[]=idf_escape($X[1]);else$v[]=idf_escape($X[1])." ON ".table($R);}elseif(!queries(($X[0]!="PRIMARY"?"CREATE $X[0] ".($X[0]!="INDEX"?"INDEX ":"").idf_escape($X[1]!=""?$X[1]:uniqid($R."_"))." ON ".table($R):"ALTER TABLE ".table($R)." ADD PRIMARY KEY")." (".implode(", ",$X[2]).")"))return
false;}return(!$v||queries("DROP INDEX ".implode(", ",$v)))&&(!$ac||queries("ALTER TABLE ".table($R)." DROP ".implode(", ",$ac)));}function
last_id(){global$g;return$g->result("SELECT SCOPE_IDENTITY()");}function
explain($g,$H){$g->query("SET SHOWPLAN_ALL ON");$J=$g->query($H);$g->query("SET SHOWPLAN_ALL OFF");return$J;}function
found_rows($S,$Z){}function
foreign_keys($R){$J=array();foreach(get_rows("EXEC sp_fkeys @fktable_name = ".q($R))as$K){$q=&$J[$K["FK_NAME"]];$q["table"]=$K["PKTABLE_NAME"];$q["source"][]=$K["FKCOLUMN_NAME"];$q["target"][]=$K["PKCOLUMN_NAME"];}return$J;}function
truncate_tables($T){return
apply_queries("TRUNCATE TABLE",$T);}function
drop_views($ri){return
queries("DROP VIEW ".implode(", ",array_map('table',$ri)));}function
drop_tables($T){return
queries("DROP TABLE ".implode(", ",array_map('table',$T)));}function
move_tables($T,$ri,$ph){return
apply_queries("ALTER SCHEMA ".idf_escape($ph)." TRANSFER",array_merge($T,$ri));}function
trigger($C){if($C=="")return
array();$L=get_rows("SELECT s.name [Trigger],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(s.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(s.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing],
c.text
FROM sysobjects s
JOIN syscomments c ON s.id = c.id
WHERE s.xtype = 'TR' AND s.name = ".q($C));$J=reset($L);if($J)$J["Statement"]=preg_replace('~^.+\\s+AS\\s+~isU','',$J["text"]);return$J;}function
triggers($R){$J=array();foreach(get_rows("SELECT sys1.name,
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing]
FROM sysobjects sys1
JOIN sysobjects sys2 ON sys1.parent_obj = sys2.id
WHERE sys1.xtype = 'TR' AND sys2.name = ".q($R))as$K)$J[$K["name"]]=array($K["Timing"],$K["Event"]);return$J;}function
trigger_options(){return
array("Timing"=>array("AFTER","INSTEAD OF"),"Event"=>array("INSERT","UPDATE","DELETE"),"Type"=>array("AS"),);}function
schemas(){return
get_vals("SELECT name FROM sys.schemas");}function
get_schema(){global$g;if($_GET["ns"]!="")return$_GET["ns"];return$g->result("SELECT SCHEMA_NAME()");}function
set_schema($zg){return
true;}function
use_sql($k){return"USE ".idf_escape($k);}function
show_variables(){return
array();}function
show_status(){return
array();}function
convert_field($o){}function
unconvert_field($o,$J){return$J;}function
support($Hc){return
preg_match('~^(columns|database|drop_col|indexes|scheme|sql|table|trigger|view|view_trigger)$~',$Hc);}$x="mssql";$Th=array();$Zg=array();foreach(array(lang(25)=>array("tinyint"=>3,"smallint"=>5,"int"=>10,"bigint"=>20,"bit"=>1,"decimal"=>0,"real"=>12,"float"=>53,"smallmoney"=>10,"money"=>20),lang(26)=>array("date"=>10,"smalldatetime"=>19,"datetime"=>19,"datetime2"=>19,"time"=>8,"datetimeoffset"=>10),lang(23)=>array("char"=>8000,"varchar"=>8000,"text"=>2147483647,"nchar"=>4000,"nvarchar"=>4000,"ntext"=>1073741823),lang(27)=>array("binary"=>8000,"varbinary"=>8000,"image"=>2147483647),)as$y=>$X){$Th+=$X;$Zg[$y]=array_keys($X);}$ai=array();$af=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$ad=array("len","lower","round","upper");$fd=array("avg","count","count distinct","max","min","sum");$hc=array(array("date|time"=>"getdate",),array("int|decimal|real|float|money|datetime"=>"+/-","char|text"=>"+",));}$Zb['firebird']='Firebird (alpha)';if(isset($_GET["firebird"])){$Jf=array("interbase");define("DRIVER","firebird");if(extension_loaded("interbase")){class
Min_DB{var$extension="Firebird",$server_info,$affected_rows,$errno,$error,$_link,$_result;function
connect($N,$V,$G){$this->_link=ibase_connect($N,$V,$G);if($this->_link){$ei=explode(':',$N);$this->service_link=ibase_service_attach($ei[0],$V,$G);$this->server_info=ibase_server_info($this->service_link,IBASE_SVC_SERVER_VERSION);}else{$this->errno=ibase_errcode();$this->error=ibase_errmsg();}return(bool)$this->_link;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}function
select_db($k){return($k=="domain");}function
query($H,$Uh=false){$I=ibase_query($H,$this->_link);if(!$I){$this->errno=ibase_errcode();$this->error=ibase_errmsg();return
false;}$this->error="";if($I===true){$this->affected_rows=ibase_affected_rows($this->_link);return
true;}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($H,$o=0){$I=$this->query($H);if(!$I||!$I->num_rows)return
false;$K=$I->fetch_row();return$K[$o];}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
__construct($I){$this->_result=$I;}function
fetch_assoc(){return
ibase_fetch_assoc($this->_result);}function
fetch_row(){return
ibase_fetch_row($this->_result);}function
fetch_field(){$o=ibase_field_info($this->_result,$this->_offset++);return(object)array('name'=>$o['name'],'orgname'=>$o['name'],'type'=>$o['type'],'charsetnr'=>$o['length'],);}function
__destruct(){ibase_free_result($this->_result);}}}class
Min_Driver
extends
Min_SQL{}function
idf_escape($u){return'"'.str_replace('"','""',$u).'"';}function
table($u){return
idf_escape($u);}function
connect(){global$b;$g=new
Min_DB;$j=$b->credentials();if($g->connect($j[0],$j[1],$j[2]))return$g;return$g->error;}function
get_databases($Rc){return
array("domain");}function
limit($H,$Z,$z,$D=0,$Gg=" "){$J='';$J.=($z!==null?$Gg."FIRST $z".($D?" SKIP $D":""):"");$J.=" $H$Z";return$J;}function
limit1($H,$Z){return
limit($H,$Z,1);}function
db_collation($m,$ob){}function
engines(){return
array();}function
logged_user(){global$b;$j=$b->credentials();return$j[1];}function
tables_list(){global$g;$H='SELECT RDB$RELATION_NAME FROM rdb$relations WHERE rdb$system_flag = 0';$I=ibase_query($g->_link,$H);$J=array();while($K=ibase_fetch_assoc($I))$J[$K['RDB$RELATION_NAME']]='table';ksort($J);return$J;}function
count_tables($l){return
array();}function
table_status($C="",$Gc=false){global$g;$J=array();$Hb=tables_list();foreach($Hb
as$v=>$X){$v=trim($v);$J[$v]=array('Name'=>$v,'Engine'=>'standard',);if($C==$v)return$J[$v];}return$J;}function
is_view($S){return
false;}function
fk_support($S){return
preg_match('~InnoDB|IBMDB2I~i',$S["Engine"]);}function
fields($R){global$g;$J=array();$H='SELECT r.RDB$FIELD_NAME AS field_name,
r.RDB$DESCRIPTION AS field_description,
r.RDB$DEFAULT_VALUE AS field_default_value,
r.RDB$NULL_FLAG AS field_not_null_constraint,
f.RDB$FIELD_LENGTH AS field_length,
f.RDB$FIELD_PRECISION AS field_precision,
f.RDB$FIELD_SCALE AS field_scale,
CASE f.RDB$FIELD_TYPE
WHEN 261 THEN \'BLOB\'
WHEN 14 THEN \'CHAR\'
WHEN 40 THEN \'CSTRING\'
WHEN 11 THEN \'D_FLOAT\'
WHEN 27 THEN \'DOUBLE\'
WHEN 10 THEN \'FLOAT\'
WHEN 16 THEN \'INT64\'
WHEN 8 THEN \'INTEGER\'
WHEN 9 THEN \'QUAD\'
WHEN 7 THEN \'SMALLINT\'
WHEN 12 THEN \'DATE\'
WHEN 13 THEN \'TIME\'
WHEN 35 THEN \'TIMESTAMP\'
WHEN 37 THEN \'VARCHAR\'
ELSE \'UNKNOWN\'
END AS field_type,
f.RDB$FIELD_SUB_TYPE AS field_subtype,
coll.RDB$COLLATION_NAME AS field_collation,
cset.RDB$CHARACTER_SET_NAME AS field_charset
FROM RDB$RELATION_FIELDS r
LEFT JOIN RDB$FIELDS f ON r.RDB$FIELD_SOURCE = f.RDB$FIELD_NAME
LEFT JOIN RDB$COLLATIONS coll ON f.RDB$COLLATION_ID = coll.RDB$COLLATION_ID
LEFT JOIN RDB$CHARACTER_SETS cset ON f.RDB$CHARACTER_SET_ID = cset.RDB$CHARACTER_SET_ID
WHERE r.RDB$RELATION_NAME = '.q($R).'
ORDER BY r.RDB$FIELD_POSITION';$I=ibase_query($g->_link,$H);while($K=ibase_fetch_assoc($I))$J[trim($K['FIELD_NAME'])]=array("field"=>trim($K["FIELD_NAME"]),"full_type"=>trim($K["FIELD_TYPE"]),"type"=>trim($K["FIELD_SUB_TYPE"]),"default"=>trim($K['FIELD_DEFAULT_VALUE']),"null"=>(trim($K["FIELD_NOT_NULL_CONSTRAINT"])=="YES"),"auto_increment"=>'0',"collation"=>trim($K["FIELD_COLLATION"]),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"comment"=>trim($K["FIELD_DESCRIPTION"]),);return$J;}function
indexes($R,$h=null){$J=array();return$J;}function
foreign_keys($R){return
array();}function
collations(){return
array();}function
information_schema($m){return
false;}function
error(){global$g;return
h($g->error);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($zg){return
true;}function
support($Hc){return
preg_match("~^(columns|sql|status|table)$~",$Hc);}$x="firebird";$af=array("=");$ad=array();$fd=array();$hc=array();}$Zb["simpledb"]="SimpleDB";if(isset($_GET["simpledb"])){$Jf=array("SimpleXML");define("DRIVER","simpledb");if(class_exists('SimpleXMLElement')){class
Min_DB{var$extension="SimpleXML",$server_info='2009-04-15',$error,$timeout,$next,$affected_rows,$_result;function
select_db($k){return($k=="domain");}function
query($H,$Uh=false){$F=array('SelectExpression'=>$H,'ConsistentRead'=>'true');if($this->next)$F['NextToken']=$this->next;$I=sdb_request_all('Select','Item',$F,$this->timeout);if($I===false)return$I;if(preg_match('~^\s*SELECT\s+COUNT\(~i',$H)){$dh=0;foreach($I
as$Kd)$dh+=$Kd->Attribute->Value;$I=array((object)array('Attribute'=>array((object)array('Name'=>'Count','Value'=>$dh,))));}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}}class
Min_Result{var$num_rows,$_rows=array(),$_offset=0;function
__construct($I){foreach($I
as$Kd){$K=array();if($Kd->Name!='')$K['itemName()']=(string)$Kd->Name;foreach($Kd->Attribute
as$Ia){$C=$this->_processValue($Ia->Name);$Y=$this->_processValue($Ia->Value);if(isset($K[$C])){$K[$C]=(array)$K[$C];$K[$C][]=$Y;}else$K[$C]=$Y;}$this->_rows[]=$K;foreach($K
as$y=>$X){if(!isset($this->_rows[0][$y]))$this->_rows[0][$y]=null;}}$this->num_rows=count($this->_rows);}function
_processValue($kc){return(is_object($kc)&&$kc['encoding']=='base64'?base64_decode($kc):(string)$kc);}function
fetch_assoc(){$K=current($this->_rows);if(!$K)return$K;$J=array();foreach($this->_rows[0]as$y=>$X)$J[$y]=$K[$y];next($this->_rows);return$J;}function
fetch_row(){$J=$this->fetch_assoc();if(!$J)return$J;return
array_values($J);}function
fetch_field(){$Qd=array_keys($this->_rows[0]);return(object)array('name'=>$Qd[$this->_offset++]);}}}class
Min_Driver
extends
Min_SQL{public$Mf="itemName()";function
_chunkRequest($rd,$va,$F,$_c=array()){global$g;foreach(array_chunk($rd,25)as$gb){$tf=$F;foreach($gb
as$s=>$t){$tf["Item.$s.ItemName"]=$t;foreach($_c
as$y=>$X)$tf["Item.$s.$y"]=$X;}if(!sdb_request($va,$tf))return
false;}$g->affected_rows=count($rd);return
true;}function
_extractIds($R,$Xf,$z){$J=array();if(preg_match_all("~itemName\(\) = (('[^']*+')+)~",$Xf,$le))$J=array_map('idf_unescape',$le[1]);else{foreach(sdb_request_all('Select','Item',array('SelectExpression'=>'SELECT itemName() FROM '.table($R).$Xf.($z?" LIMIT 1":"")))as$Kd)$J[]=$Kd->Name;}return$J;}function
select($R,$M,$Z,$dd,$ff=array(),$z=1,$E=0,$Of=false){global$g;$g->next=$_GET["next"];$J=parent::select($R,$M,$Z,$dd,$ff,$z,$E,$Of);$g->next=0;return$J;}function
delete($R,$Xf,$z=0){return$this->_chunkRequest($this->_extractIds($R,$Xf,$z),'BatchDeleteAttributes',array('DomainName'=>$R));}function
update($R,$O,$Xf,$z=0,$Gg="\n"){$Ob=array();$Bd=array();$s=0;$rd=$this->_extractIds($R,$Xf,$z);$t=idf_unescape($O["`itemName()`"]);unset($O["`itemName()`"]);foreach($O
as$y=>$X){$y=idf_unescape($y);if($X=="NULL"||($t!=""&&array($t)!=$rd))$Ob["Attribute.".count($Ob).".Name"]=$y;if($X!="NULL"){foreach((array)$X
as$Md=>$W){$Bd["Attribute.$s.Name"]=$y;$Bd["Attribute.$s.Value"]=(is_array($X)?$W:idf_unescape($W));if(!$Md)$Bd["Attribute.$s.Replace"]="true";$s++;}}}$F=array('DomainName'=>$R);return(!$Bd||$this->_chunkRequest(($t!=""?array($t):$rd),'BatchPutAttributes',$F,$Bd))&&(!$Ob||$this->_chunkRequest($rd,'BatchDeleteAttributes',$F,$Ob));}function
insert($R,$O){$F=array("DomainName"=>$R);$s=0;foreach($O
as$C=>$Y){if($Y!="NULL"){$C=idf_unescape($C);if($C=="itemName()")$F["ItemName"]=idf_unescape($Y);else{foreach((array)$Y
as$X){$F["Attribute.$s.Name"]=$C;$F["Attribute.$s.Value"]=(is_array($Y)?$X:idf_unescape($Y));$s++;}}}}return
sdb_request('PutAttributes',$F);}function
insertUpdate($R,$L,$Mf){foreach($L
as$O){if(!$this->update($R,$O,"WHERE `itemName()` = ".q($O["`itemName()`"])))return
false;}return
true;}function
begin(){return
false;}function
commit(){return
false;}function
rollback(){return
false;}}function
connect(){return
new
Min_DB;}function
support($Hc){return
preg_match('~sql~',$Hc);}function
logged_user(){global$b;$j=$b->credentials();return$j[1];}function
get_databases(){return
array("domain");}function
collations(){return
array();}function
db_collation($m,$ob){}function
tables_list(){global$g;$J=array();foreach(sdb_request_all('ListDomains','DomainName')as$R)$J[(string)$R]='table';if($g->error&&defined("PAGE_HEADER"))echo"<p class='error'>".error()."\n";return$J;}function
table_status($C="",$Gc=false){$J=array();foreach(($C!=""?array($C=>true):tables_list())as$R=>$U){$K=array("Name"=>$R,"Auto_increment"=>"");if(!$Gc){$ye=sdb_request('DomainMetadata',array('DomainName'=>$R));if($ye){foreach(array("Rows"=>"ItemCount","Data_length"=>"ItemNamesSizeBytes","Index_length"=>"AttributeValuesSizeBytes","Data_free"=>"AttributeNamesSizeBytes",)as$y=>$X)$K[$y]=(string)$ye->$X;}}if($C!="")return$K;$J[$R]=$K;}return$J;}function
explain($g,$H){}function
error(){global$g;return
h($g->error);}function
information_schema(){}function
is_view($S){}function
indexes($R,$h=null){return
array(array("type"=>"PRIMARY","columns"=>array("itemName()")),);}function
fields($R){return
fields_from_edit();}function
foreign_keys($R){return
array();}function
table($u){return
idf_escape($u);}function
idf_escape($u){return"`".str_replace("`","``",$u)."`";}function
limit($H,$Z,$z,$D=0,$Gg=" "){return" $H$Z".($z!==null?$Gg."LIMIT $z":"");}function
unconvert_field($o,$J){return$J;}function
fk_support($S){}function
engines(){return
array();}function
alter_table($R,$C,$p,$Sc,$sb,$pc,$nb,$La,$yf){return($R==""&&sdb_request('CreateDomain',array('DomainName'=>$C)));}function
drop_tables($T){foreach($T
as$R){if(!sdb_request('DeleteDomain',array('DomainName'=>$R)))return
false;}return
true;}function
count_tables($l){foreach($l
as$m)return
array($m=>count(tables_list()));}function
found_rows($S,$Z){return($Z?null:$S["Rows"]);}function
last_id(){}function
hmac($Ba,$Hb,$y,$bg=false){$Ua=64;if(strlen($y)>$Ua)$y=pack("H*",$Ba($y));$y=str_pad($y,$Ua,"\0");$Nd=$y^str_repeat("\x36",$Ua);$Od=$y^str_repeat("\x5C",$Ua);$J=$Ba($Od.pack("H*",$Ba($Nd.$Hb)));if($bg)$J=pack("H*",$J);return$J;}function
sdb_request($va,$F=array()){global$b,$g;list($od,$F['AWSAccessKeyId'],$Bg)=$b->credentials();$F['Action']=$va;$F['Timestamp']=gmdate('Y-m-d\TH:i:s+00:00');$F['Version']='2009-04-15';$F['SignatureVersion']=2;$F['SignatureMethod']='HmacSHA1';ksort($F);$H='';foreach($F
as$y=>$X)$H.='&'.rawurlencode($y).'='.rawurlencode($X);$H=str_replace('%7E','~',substr($H,1));$H.="&Signature=".urlencode(base64_encode(hmac('sha1',"POST\n".preg_replace('~^https?://~','',$od)."\n/\n$H",$Bg,true)));@ini_set('track_errors',1);$Kc=@file_get_contents((preg_match('~^https?://~',$od)?$od:"http://$od"),false,stream_context_create(array('http'=>array('method'=>'POST','content'=>$H,'ignore_errors'=>1,))));if(!$Kc){$g->error=$php_errormsg;return
false;}libxml_use_internal_errors(true);$xi=simplexml_load_string($Kc);if(!$xi){$n=libxml_get_last_error();$g->error=$n->message;return
false;}if($xi->Errors){$n=$xi->Errors->Error;$g->error="$n->Message ($n->Code)";return
false;}$g->error='';$oh=$va."Result";return($xi->$oh?$xi->$oh:true);}function
sdb_request_all($va,$oh,$F=array(),$xh=0){$J=array();$Wg=($xh?microtime(true):0);$z=(preg_match('~LIMIT\s+(\d+)\s*$~i',$F['SelectExpression'],$B)?$B[1]:0);do{$xi=sdb_request($va,$F);if(!$xi)break;foreach($xi->$oh
as$kc)$J[]=$kc;if($z&&count($J)>=$z){$_GET["next"]=$xi->NextToken;break;}if($xh&&microtime(true)-$Wg>$xh)return
false;$F['NextToken']=$xi->NextToken;if($z)$F['SelectExpression']=preg_replace('~\d+\s*$~',$z-count($J),$F['SelectExpression']);}while($xi->NextToken);return$J;}$x="simpledb";$af=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","IS NOT NULL");$ad=array();$fd=array("count");$hc=array(array("json"));}$Zb["mongo"]="MongoDB (beta)";if(isset($_GET["mongo"])){$Jf=array("mongo");define("DRIVER","mongo");if(class_exists('MongoDB')){class
Min_DB{var$extension="Mongo",$error,$last_id,$_link,$_db;function
connect($N,$V,$G){global$b;$m=$b->database();$df=array();if($V!=""){$df["username"]=$V;$df["password"]=$G;}if($m!="")$df["db"]=$m;try{$this->_link=@new
MongoClient("mongodb://$N",$df);return
true;}catch(Exception$wc){$this->error=$wc->getMessage();return
false;}}function
query($H){return
false;}function
select_db($k){try{$this->_db=$this->_link->selectDB($k);return
true;}catch(Exception$wc){$this->error=$wc->getMessage();return
false;}}function
quote($Q){return$Q;}}class
Min_Result{var$num_rows,$_rows=array(),$_offset=0,$_charset=array();function
__construct($I){foreach($I
as$Kd){$K=array();foreach($Kd
as$y=>$X){if(is_a($X,'MongoBinData'))$this->_charset[$y]=63;$K[$y]=(is_a($X,'MongoId')?'ObjectId("'.strval($X).'")':(is_a($X,'MongoDate')?gmdate("Y-m-d H:i:s",$X->sec)." GMT":(is_a($X,'MongoBinData')?$X->bin:(is_a($X,'MongoRegex')?strval($X):(is_object($X)?get_class($X):$X)))));}$this->_rows[]=$K;foreach($K
as$y=>$X){if(!isset($this->_rows[0][$y]))$this->_rows[0][$y]=null;}}$this->num_rows=count($this->_rows);}function
fetch_assoc(){$K=current($this->_rows);if(!$K)return$K;$J=array();foreach($this->_rows[0]as$y=>$X)$J[$y]=$K[$y];next($this->_rows);return$J;}function
fetch_row(){$J=$this->fetch_assoc();if(!$J)return$J;return
array_values($J);}function
fetch_field(){$Qd=array_keys($this->_rows[0]);$C=$Qd[$this->_offset++];return(object)array('name'=>$C,'charsetnr'=>$this->_charset[$C],);}}}class
Min_Driver
extends
Min_SQL{public$Mf="_id";function
select($R,$M,$Z,$dd,$ff=array(),$z=1,$E=0,$Of=false){$M=($M==array("*")?array():array_fill_keys($M,true));$Qg=array();foreach($ff
as$X){$X=preg_replace('~ DESC$~','',$X,1,$Bb);$Qg[$X]=($Bb?-1:1);}return
new
Min_Result($this->_conn->_db->selectCollection($R)->find(array(),$M)->sort($Qg)->limit($z!=""?+$z:0)->skip($E*$z));}function
insert($R,$O){try{$J=$this->_conn->_db->selectCollection($R)->insert($O);$this->_conn->errno=$J['code'];$this->_conn->error=$J['err'];$this->_conn->last_id=$O['_id'];return!$J['err'];}catch(Exception$wc){$this->_conn->error=$wc->getMessage();return
false;}}}function
connect(){global$b;$g=new
Min_DB;$j=$b->credentials();if($g->connect($j[0],$j[1],$j[2]))return$g;return$g->error;}function
error(){global$g;return
h($g->error);}function
logged_user(){global$b;$j=$b->credentials();return$j[1];}function
get_databases($Rc){global$g;$J=array();$Lb=$g->_link->listDBs();foreach($Lb['databases']as$m)$J[]=$m['name'];return$J;}function
collations(){return
array();}function
db_collation($m,$ob){}function
count_tables($l){global$g;$J=array();foreach($l
as$m)$J[$m]=count($g->_link->selectDB($m)->getCollectionNames(true));return$J;}function
tables_list(){global$g;return
array_fill_keys($g->_db->getCollectionNames(true),'table');}function
table_status($C="",$Gc=false){$J=array();foreach(tables_list()as$R=>$U){$J[$R]=array("Name"=>$R);if($C==$R)return$J[$R];}return$J;}function
information_schema(){}function
is_view($S){}function
drop_databases($l){global$g;foreach($l
as$m){$mg=$g->_link->selectDB($m)->drop();if(!$mg['ok'])return
false;}return
true;}function
indexes($R,$h=null){global$g;$J=array();foreach($g->_db->selectCollection($R)->getIndexInfo()as$v){$Rb=array();foreach($v["key"]as$d=>$U)$Rb[]=($U==-1?'1':null);$J[$v["name"]]=array("type"=>($v["name"]=="_id_"?"PRIMARY":($v["unique"]?"UNIQUE":"INDEX")),"columns"=>array_keys($v["key"]),"lengths"=>array(),"descs"=>$Rb,);}return$J;}function
fields($R){return
fields_from_edit();}function
convert_field($o){}function
unconvert_field($o,$J){return$J;}function
foreign_keys($R){return
array();}function
fk_support($S){}function
engines(){return
array();}function
found_rows($S,$Z){global$g;return$g->_db->selectCollection($_GET["select"])->count($Z);}function
alter_table($R,$C,$p,$Sc,$sb,$pc,$nb,$La,$yf){global$g;if($R==""){$g->_db->createCollection($C);return
true;}}function
drop_tables($T){global$g;foreach($T
as$R){$mg=$g->_db->selectCollection($R)->drop();if(!$mg['ok'])return
false;}return
true;}function
truncate_tables($T){global$g;foreach($T
as$R){$mg=$g->_db->selectCollection($R)->remove();if(!$mg['ok'])return
false;}return
true;}function
alter_indexes($R,$c){global$g;foreach($c
as$X){list($U,$C,$O)=$X;if($O=="DROP")$J=$g->_db->command(array("deleteIndexes"=>$R,"index"=>$C));else{$e=array();foreach($O
as$d){$d=preg_replace('~ DESC$~','',$d,1,$Bb);$e[$d]=($Bb?-1:1);}$J=$g->_db->selectCollection($R)->ensureIndex($e,array("unique"=>($U=="UNIQUE"),"name"=>$C,));}if($J['errmsg']){$g->error=$J['errmsg'];return
false;}}return
true;}function
last_id(){global$g;return$g->last_id;}function
table($u){return$u;}function
idf_escape($u){return$u;}function
support($Hc){return
preg_match("~database|indexes~",$Hc);}$x="mongo";$af=array("=");$ad=array();$fd=array();$hc=array(array("json"));}$Zb["elastic"]="Elasticsearch (beta)";if(isset($_GET["elastic"])){$Jf=array("json");define("DRIVER","elastic");if(function_exists('json_decode')){class
Min_DB{var$extension="JSON",$server_info,$errno,$error,$_url;function
rootQuery($Af,$xb=array(),$ze='GET'){@ini_set('track_errors',1);$Kc=@file_get_contents($this->_url.'/'.ltrim($Af,'/'),false,stream_context_create(array('http'=>array('method'=>$ze,'content'=>json_encode($xb),'ignore_errors'=>1,))));if(!$Kc){$this->error=$php_errormsg;return$Kc;}if(!preg_match('~^HTTP/[0-9.]+ 2~i',$http_response_header[0])){$this->error=$Kc;return
false;}$J=json_decode($Kc,true);if($J===null){$this->errno=json_last_error();if(function_exists('json_last_error_msg'))$this->error=json_last_error_msg();else{$wb=get_defined_constants(true);foreach($wb['json']as$C=>$Y){if($Y==$this->errno&&preg_match('~^JSON_ERROR_~',$C)){$this->error=$C;break;}}}}return$J;}function
query($Af,$xb=array(),$ze='GET'){return$this->rootQuery(($this->_db!=""?"$this->_db/":"/").ltrim($Af,'/'),$xb,$ze);}function
connect($N,$V,$G){preg_match('~^(https?://)?(.*)~',$N,$B);$this->_url=($B[1]?$B[1]:"http://")."$V:$G@$B[2]/";$J=$this->query('');if($J)$this->server_info=$J['version']['number'];return(bool)$J;}function
select_db($k){$this->_db=$k;return
true;}function
quote($Q){return$Q;}}class
Min_Result{var$num_rows,$_rows;function
__construct($L){$this->num_rows=count($this->_rows);$this->_rows=$L;reset($this->_rows);}function
fetch_assoc(){$J=current($this->_rows);next($this->_rows);return$J;}function
fetch_row(){return
array_values($this->fetch_assoc());}}}class
Min_Driver
extends
Min_SQL{function
select($R,$M,$Z,$dd,$ff=array(),$z=1,$E=0,$Of=false){global$b;$Hb=array();$H="$R/_search";if($M!=array("*"))$Hb["fields"]=$M;if($ff){$Qg=array();foreach($ff
as$lb){$lb=preg_replace('~ DESC$~','',$lb,1,$Bb);$Qg[]=($Bb?array($lb=>"desc"):$lb);}$Hb["sort"]=$Qg;}if($z){$Hb["size"]=+$z;if($E)$Hb["from"]=($E*$z);}foreach($Z
as$X){list($lb,$Ye,$X)=explode(" ",$X,3);if($lb=="_id")$Hb["query"]["ids"]["values"][]=$X;elseif($lb.$X!=""){$sh=array("term"=>array(($lb!=""?$lb:"_all")=>$X));if($Ye=="=")$Hb["query"]["filtered"]["filter"]["and"][]=$sh;else$Hb["query"]["filtered"]["query"]["bool"]["must"][]=$sh;}}if($Hb["query"]&&!$Hb["query"]["filtered"]["query"]&&!$Hb["query"]["ids"])$Hb["query"]["filtered"]["query"]=array("match_all"=>array());$Wg=microtime(true);$Ag=$this->_conn->query($H,$Hb);if($Of)echo$b->selectQuery("$H: ".print_r($Hb,true),format_time($Wg));if(!$Ag)return
false;$J=array();foreach($Ag['hits']['hits']as$nd){$K=array();if($M==array("*"))$K["_id"]=$nd["_id"];$p=$nd['_source'];if($M!=array("*")){$p=array();foreach($M
as$y)$p[$y]=$nd['fields'][$y];}foreach($p
as$y=>$X){if($Hb["fields"])$X=$X[0];$K[$y]=(is_array($X)?json_encode($X):$X);}$J[]=$K;}return
new
Min_Result($J);}}function
connect(){global$b;$g=new
Min_DB;$j=$b->credentials();if($g->connect($j[0],$j[1],$j[2]))return$g;return$g->error;}function
support($Hc){return
preg_match("~database|table|columns~",$Hc);}function
logged_user(){global$b;$j=$b->credentials();return$j[1];}function
get_databases(){global$g;$J=$g->rootQuery('_aliases');if($J){$J=array_keys($J);sort($J,SORT_STRING);}return$J;}function
collations(){return
array();}function
db_collation($m,$ob){}function
engines(){return
array();}function
count_tables($l){global$g;$J=$g->query('_mapping');if($J)$J=array_map('count',$J);return$J;}function
tables_list(){global$g;$J=$g->query('_mapping');if($J)$J=array_fill_keys(array_keys($J[$g->_db]["mappings"]),'table');return$J;}function
table_status($C="",$Gc=false){global$g;$Ag=$g->query("_search?search_type=count",array("facets"=>array("count_by_type"=>array("terms"=>array("field"=>"_type",)))),"POST");$J=array();if($Ag){foreach($Ag["facets"]["count_by_type"]["terms"]as$R){$J[$R["term"]]=array("Name"=>$R["term"],"Engine"=>"table","Rows"=>$R["count"],);if($C!=""&&$C==$R["term"])return$J[$C];}}return$J;}function
error(){global$g;return
h($g->error);}function
information_schema(){}function
is_view($S){}function
indexes($R,$h=null){return
array(array("type"=>"PRIMARY","columns"=>array("_id")),);}function
fields($R){global$g;$I=$g->query("$R/_mapping");$J=array();if($I){$je=$I[$R]['properties'];if(!$je)$je=$I[$g->_db]['mappings'][$R]['properties'];if($je){foreach($je
as$C=>$o){$J[$C]=array("field"=>$C,"full_type"=>$o["type"],"type"=>$o["type"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);if($o["properties"]){unset($J[$C]["privileges"]["insert"]);unset($J[$C]["privileges"]["update"]);}}}}return$J;}function
foreign_keys($R){return
array();}function
table($u){return$u;}function
idf_escape($u){return$u;}function
convert_field($o){}function
unconvert_field($o,$J){return$J;}function
fk_support($S){}function
found_rows($S,$Z){return
null;}function
create_database($m){global$g;return$g->rootQuery(urlencode($m),array(),'PUT');}function
drop_databases($l){global$g;return$g->rootQuery(urlencode(implode(',',$l)),array(),'DELETE');}function
drop_tables($T){global$g;$J=true;foreach($T
as$R)$J=$J&&$g->query(urlencode($R),array(),'DELETE');return$J;}$x="elastic";$af=array("=","query");$ad=array();$fd=array();$hc=array(array("json"));}$Zb=array("server"=>"MySQL")+$Zb;if(!defined("DRIVER")){$Jf=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
__construct(){parent::init();}function
connect($N="",$V="",$G="",$k=null,$Ff=null,$Pg=null){mysqli_report(MYSQLI_REPORT_OFF);list($od,$Ff)=explode(":",$N,2);$J=@$this->real_connect(($N!=""?$od:ini_get("mysqli.default_host")),($N.$V!=""?$V:ini_get("mysqli.default_user")),($N.$V.$G!=""?$G:ini_get("mysqli.default_pw")),$k,(is_numeric($Ff)?$Ff:ini_get("mysqli.default_port")),(!is_numeric($Ff)?$Ff:$Pg));return$J;}function
set_charset($ab){if(parent::set_charset($ab))return
true;parent::set_charset('utf8');return$this->query("SET NAMES $ab");}function
result($H,$o=0){$I=$this->query($H);if(!$I)return
false;$K=$I->fetch_array();return$K[$o];}function
quote($Q){return"'".$this->escape_string($Q)."'";}}}elseif(extension_loaded("mysql")&&!(ini_get("sql.safe_mode")&&extension_loaded("pdo_mysql"))){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$errno,$error,$_link,$_result;function
connect($N,$V,$G){$this->_link=@mysql_connect(($N!=""?$N:ini_get("mysql.default_host")),("$N$V"!=""?$V:ini_get("mysql.default_user")),("$N$V$G"!=""?$G:ini_get("mysql.default_password")),true,131072);if($this->_link)$this->server_info=mysql_get_server_info($this->_link);else$this->error=mysql_error();return(bool)$this->_link;}function
set_charset($ab){if(function_exists('mysql_set_charset')){if(mysql_set_charset($ab,$this->_link))return
true;mysql_set_charset('utf8',$this->_link);}return$this->query("SET NAMES $ab");}function
quote($Q){return"'".mysql_real_escape_string($Q,$this->_link)."'";}function
select_db($k){return
mysql_select_db($k,$this->_link);}function
query($H,$Uh=false){$I=@($Uh?mysql_unbuffered_query($H,$this->_link):mysql_query($H,$this->_link));$this->error="";if(!$I){$this->errno=mysql_errno($this->_link);$this->error=mysql_error($this->_link);return
false;}if($I===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($H,$o=0){$I=$this->query($H);if(!$I||!$I->num_rows)return
false;return
mysql_result($I->_result,0,$o);}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
__construct($I){$this->_result=$I;$this->num_rows=mysql_num_rows($I);}function
fetch_assoc(){return
mysql_fetch_assoc($this->_result);}function
fetch_row(){return
mysql_fetch_row($this->_result);}function
fetch_field(){$J=mysql_fetch_field($this->_result,$this->_offset++);$J->orgtable=$J->table;$J->orgname=$J->name;$J->charsetnr=($J->blob?63:0);return$J;}function
__destruct(){mysql_free_result($this->_result);}}}elseif(extension_loaded("pdo_mysql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_MySQL";function
connect($N,$V,$G){$this->dsn("mysql:charset=utf8;host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$N)),$V,$G);return
true;}function
set_charset($ab){$this->query("SET NAMES $ab");}function
select_db($k){return$this->query("USE ".idf_escape($k));}function
query($H,$Uh=false){$this->setAttribute(1000,!$Uh);return
parent::query($H,$Uh);}}}class
Min_Driver
extends
Min_SQL{function
insert($R,$O){return($O?parent::insert($R,$O):queries("INSERT INTO ".table($R)." ()\nVALUES ()"));}function
insertUpdate($R,$L,$Mf){$e=array_keys(reset($L));$Kf="INSERT INTO ".table($R)." (".implode(", ",$e).") VALUES\n";$mi=array();foreach($e
as$y)$mi[$y]="$y = VALUES($y)";$ch="\nON DUPLICATE KEY UPDATE ".implode(", ",$mi);$mi=array();$de=0;foreach($L
as$O){$Y="(".implode(", ",$O).")";if($mi&&(strlen($Kf)+$de+strlen($Y)+strlen($ch)>1e6)){if(!queries($Kf.implode(",\n",$mi).$ch))return
false;$mi=array();$de=0;}$mi[]=$Y;$de+=strlen($Y)+2;}return
queries($Kf.implode(",\n",$mi).$ch);}}function
idf_escape($u){return"`".str_replace("`","``",$u)."`";}function
table($u){return
idf_escape($u);}function
connect(){global$b,$Th,$Zg;$g=new
Min_DB;$j=$b->credentials();if($g->connect($j[0],$j[1],$j[2])){$g->set_charset(charset($g));$g->query("SET sql_quote_show_create = 1, autocommit = 1");if(version_compare($g->server_info,'5.7.8')>=0){$Zg[lang(23)][]="json";$Th["json"]=4294967295;}return$g;}$J=$g->error;if(function_exists('iconv')&&!is_utf8($J)&&strlen($xg=iconv("windows-1250","utf-8",$J))>strlen($J))$J=$xg;return$J;}function
get_databases($Rc){global$g;$J=get_session("dbs");if($J===null){$H=($g->server_info>=5?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA":"SHOW DATABASES");$J=($Rc?slow_query($H):get_vals($H));restart_session();set_session("dbs",$J);stop_session();}return$J;}function
limit($H,$Z,$z,$D=0,$Gg=" "){return" $H$Z".($z!==null?$Gg."LIMIT $z".($D?" OFFSET $D":""):"");}function
limit1($H,$Z){return
limit($H,$Z,1);}function
db_collation($m,$ob){global$g;$J=null;$i=$g->result("SHOW CREATE DATABASE ".idf_escape($m),1);if(preg_match('~ COLLATE ([^ ]+)~',$i,$B))$J=$B[1];elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$i,$B))$J=$ob[$B[1]][-1];return$J;}function
engines(){$J=array();foreach(get_rows("SHOW ENGINES")as$K){if(preg_match("~YES|DEFAULT~",$K["Support"]))$J[]=$K["Engine"];}return$J;}function
logged_user(){global$g;return$g->result("SELECT USER()");}function
tables_list(){global$g;return
get_key_vals($g->server_info>=5?"SELECT TABLE_NAME, TABLE_TYPE FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() ORDER BY TABLE_NAME":"SHOW TABLES");}function
count_tables($l){$J=array();foreach($l
as$m)$J[$m]=count(get_vals("SHOW TABLES IN ".idf_escape($m)));return$J;}function
table_status($C="",$Gc=false){global$g;$J=array();foreach(get_rows($Gc&&$g->server_info>=5?"SELECT TABLE_NAME AS Name, ENGINE AS Engine, TABLE_COMMENT AS Comment FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() ".($C!=""?"AND TABLE_NAME = ".q($C):"ORDER BY Name"):"SHOW TABLE STATUS".($C!=""?" LIKE ".q(addcslashes($C,"%_\\")):""))as$K){if($K["Engine"]=="InnoDB")$K["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$K["Comment"]);if(!isset($K["Engine"]))$K["Comment"]="";if($C!="")return$K;$J[$K["Name"]]=$K;}return$J;}function
is_view($S){return$S["Engine"]===null;}function
fk_support($S){global$g;return
preg_match('~InnoDB|IBMDB2I~i',$S["Engine"])||(preg_match('~NDB~i',$S["Engine"])&&version_compare($g->server_info,'5.6')>=0);}function
fields($R){$J=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($R))as$K){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$K["Type"],$B);$J[$K["Field"]]=array("field"=>$K["Field"],"full_type"=>$K["Type"],"type"=>$B[1],"length"=>$B[2],"unsigned"=>ltrim($B[3].$B[4]),"default"=>($K["Default"]!=""||preg_match("~char|set~",$B[1])?$K["Default"]:null),"null"=>($K["Null"]=="YES"),"auto_increment"=>($K["Extra"]=="auto_increment"),"on_update"=>(preg_match('~^on update (.+)~i',$K["Extra"],$B)?$B[1]:""),"collation"=>$K["Collation"],"privileges"=>array_flip(preg_split('~, *~',$K["Privileges"])),"comment"=>$K["Comment"],"primary"=>($K["Key"]=="PRI"),);}return$J;}function
indexes($R,$h=null){$J=array();foreach(get_rows("SHOW INDEX FROM ".table($R),$h)as$K){$C=$K["Key_name"];$J[$C]["type"]=($C=="PRIMARY"?"PRIMARY":($K["Index_type"]=="FULLTEXT"?"FULLTEXT":($K["Non_unique"]?($K["Index_type"]=="SPATIAL"?"SPATIAL":"INDEX"):"UNIQUE")));$J[$C]["columns"][]=$K["Column_name"];$J[$C]["lengths"][]=($K["Index_type"]=="SPATIAL"?null:$K["Sub_part"]);$J[$C]["descs"][]=null;}return$J;}function
foreign_keys($R){global$g,$Ve;static$Cf='`(?:[^`]|``)+`';$J=array();$Cb=$g->result("SHOW CREATE TABLE ".table($R),1);if($Cb){preg_match_all("~CONSTRAINT ($Cf) FOREIGN KEY ?\\(((?:$Cf,? ?)+)\\) REFERENCES ($Cf)(?:\\.($Cf))? \\(((?:$Cf,? ?)+)\\)(?: ON DELETE ($Ve))?(?: ON UPDATE ($Ve))?~",$Cb,$le,PREG_SET_ORDER);foreach($le
as$B){preg_match_all("~$Cf~",$B[2],$Rg);preg_match_all("~$Cf~",$B[5],$ph);$J[idf_unescape($B[1])]=array("db"=>idf_unescape($B[4]!=""?$B[3]:$B[4]),"table"=>idf_unescape($B[4]!=""?$B[4]:$B[3]),"source"=>array_map('idf_unescape',$Rg[0]),"target"=>array_map('idf_unescape',$ph[0]),"on_delete"=>($B[6]?$B[6]:"RESTRICT"),"on_update"=>($B[7]?$B[7]:"RESTRICT"),);}}return$J;}function
view($C){global$g;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$g->result("SHOW CREATE VIEW ".table($C),1)));}function
collations(){$J=array();foreach(get_rows("SHOW COLLATION")as$K){if($K["Default"])$J[$K["Charset"]][-1]=$K["Collation"];else$J[$K["Charset"]][]=$K["Collation"];}ksort($J);foreach($J
as$y=>$X)asort($J[$y]);return$J;}function
information_schema($m){global$g;return($g->server_info>=5&&$m=="information_schema")||($g->server_info>=5.5&&$m=="performance_schema");}function
error(){global$g;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$g->error));}function
create_database($m,$nb){return
queries("CREATE DATABASE ".idf_escape($m).($nb?" COLLATE ".q($nb):""));}function
drop_databases($l){$J=apply_queries("DROP DATABASE",$l,'idf_escape');restart_session();set_session("dbs",null);return$J;}function
rename_database($C,$nb){$J=false;if(create_database($C,$nb)){$kg=array();foreach(tables_list()as$R=>$U)$kg[]=table($R)." TO ".idf_escape($C).".".table($R);$J=(!$kg||queries("RENAME TABLE ".implode(", ",$kg)));if($J)queries("DROP DATABASE ".idf_escape(DB));restart_session();set_session("dbs",null);}return$J;}function
auto_increment(){$Ma=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$v){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$v["columns"],true)){$Ma="";break;}if($v["type"]=="PRIMARY")$Ma=" UNIQUE";}}return" AUTO_INCREMENT$Ma";}function
alter_table($R,$C,$p,$Sc,$sb,$pc,$nb,$La,$yf){$c=array();foreach($p
as$o)$c[]=($o[1]?($R!=""?($o[0]!=""?"CHANGE ".idf_escape($o[0]):"ADD"):" ")." ".implode($o[1]).($R!=""?$o[2]:""):"DROP ".idf_escape($o[0]));$c=array_merge($c,$Sc);$P=($sb!==null?" COMMENT=".q($sb):"").($pc?" ENGINE=".q($pc):"").($nb?" COLLATE ".q($nb):"").($La!=""?" AUTO_INCREMENT=$La":"");if($R=="")return
queries("CREATE TABLE ".table($C)." (\n".implode(",\n",$c)."\n)$P$yf");if($R!=$C)$c[]="RENAME TO ".table($C);if($P)$c[]=ltrim($P);return($c||$yf?queries("ALTER TABLE ".table($R)."\n".implode(",\n",$c).$yf):true);}function
alter_indexes($R,$c){foreach($c
as$y=>$X)$c[$y]=($X[2]=="DROP"?"\nDROP INDEX ".idf_escape($X[1]):"\nADD $X[0] ".($X[0]=="PRIMARY"?"KEY ":"").($X[1]!=""?idf_escape($X[1])." ":"")."(".implode(", ",$X[2]).")");return
queries("ALTER TABLE ".table($R).implode(",",$c));}function
truncate_tables($T){return
apply_queries("TRUNCATE TABLE",$T);}function
drop_views($ri){return
queries("DROP VIEW ".implode(", ",array_map('table',$ri)));}function
drop_tables($T){return
queries("DROP TABLE ".implode(", ",array_map('table',$T)));}function
move_tables($T,$ri,$ph){$kg=array();foreach(array_merge($T,$ri)as$R)$kg[]=table($R)." TO ".idf_escape($ph).".".table($R);return
queries("RENAME TABLE ".implode(", ",$kg));}function
copy_tables($T,$ri,$ph){queries("SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'");foreach($T
as$R){$C=($ph==DB?table("copy_$R"):idf_escape($ph).".".table($R));if(!queries("\nDROP TABLE IF EXISTS $C")||!queries("CREATE TABLE $C LIKE ".table($R))||!queries("INSERT INTO $C SELECT * FROM ".table($R)))return
false;}foreach($ri
as$R){$C=($ph==DB?table("copy_$R"):idf_escape($ph).".".table($R));$qi=view($R);if(!queries("DROP VIEW IF EXISTS $C")||!queries("CREATE VIEW $C AS $qi[select]"))return
false;}return
true;}function
trigger($C){if($C=="")return
array();$L=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($C));return
reset($L);}function
triggers($R){$J=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($R,"%_\\")))as$K)$J[$K["Trigger"]]=array($K["Timing"],$K["Event"]);return$J;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Event"=>array("INSERT","UPDATE","DELETE"),"Type"=>array("FOR EACH ROW"),);}function
routine($C,$U){global$g,$rc,$_d,$Th;$Ca=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$Sh="((".implode("|",array_merge(array_keys($Th),$Ca)).")\\b(?:\\s*\\(((?:[^'\")]|$rc)++)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s,]+)['\"]?)?";$Cf="\\s*(".($U=="FUNCTION"?"":$_d).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$Sh";$i=$g->result("SHOW CREATE $U ".idf_escape($C),2);preg_match("~\\(((?:$Cf\\s*,?)*)\\)\\s*".($U=="FUNCTION"?"RETURNS\\s+$Sh\\s+":"")."(.*)~is",$i,$B);$p=array();preg_match_all("~$Cf\\s*,?~is",$B[1],$le,PREG_SET_ORDER);foreach($le
as$sf){$C=str_replace("``","`",$sf[2]).$sf[3];$p[]=array("field"=>$C,"type"=>strtolower($sf[5]),"length"=>preg_replace_callback("~$rc~s",'normalize_enum',$sf[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$sf[8] $sf[7]"))),"null"=>1,"full_type"=>$sf[4],"inout"=>strtoupper($sf[1]),"collation"=>strtolower($sf[9]),);}if($U!="FUNCTION")return
array("fields"=>$p,"definition"=>$B[11]);return
array("fields"=>$p,"returns"=>array("type"=>$B[12],"length"=>$B[13],"unsigned"=>$B[15],"collation"=>$B[16]),"definition"=>$B[17],"language"=>"SQL",);}function
routines(){return
get_rows("SELECT ROUTINE_NAME, ROUTINE_TYPE, DTD_IDENTIFIER FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
routine_languages(){return
array();}function
last_id(){global$g;return$g->result("SELECT LAST_INSERT_ID()");}function
explain($g,$H){return$g->query("EXPLAIN ".($g->server_info>=5.1?"PARTITIONS ":"").$H);}function
found_rows($S,$Z){return($Z||$S["Engine"]!="InnoDB"?null:$S["Rows"]);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($zg){return
true;}function
create_sql($R,$La){global$g;$J=$g->result("SHOW CREATE TABLE ".table($R),1);if(!$La)$J=preg_replace('~ AUTO_INCREMENT=\\d+~','',$J);return$J;}function
truncate_sql($R){return"TRUNCATE ".table($R);}function
use_sql($k){return"USE ".idf_escape($k);}function
trigger_sql($R,$ah){$J="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($R,"%_\\")),null,"-- ")as$K)$J.="\n".($ah=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($K["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($K["Trigger"])." $K[Timing] $K[Event] ON ".table($K["Table"])." FOR EACH ROW\n$K[Statement];;\n";return$J;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
process_list(){return
get_rows("SHOW FULL PROCESSLIST");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
convert_field($o){if(preg_match("~binary~",$o["type"]))return"HEX(".idf_escape($o["field"]).")";if($o["type"]=="bit")return"BIN(".idf_escape($o["field"])." + 0)";if(preg_match("~geometry|point|linestring|polygon~",$o["type"]))return"AsWKT(".idf_escape($o["field"]).")";}function
unconvert_field($o,$J){if(preg_match("~binary~",$o["type"]))$J="UNHEX($J)";if($o["type"]=="bit")$J="CONV($J, 2, 10) + 0";if(preg_match("~geometry|point|linestring|polygon~",$o["type"]))$J="GeomFromText($J)";return$J;}function
support($Hc){global$g;return!preg_match("~scheme|sequence|type|view_trigger|materializedview".($g->server_info<5.1?"|event|partitioning".($g->server_info<5?"|routine|trigger|view":""):"")."~",$Hc);}function
kill_process($X){return
queries("KILL ".number($X));}function
connection_id(){return"SELECT CONNECTION_ID()";}function
max_connections(){global$g;return$g->result("SELECT @@max_connections");}$x="sql";$Th=array();$Zg=array();foreach(array(lang(25)=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),lang(26)=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),lang(23)=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),lang(30)=>array("enum"=>65535,"set"=>64),lang(27)=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),lang(29)=>array("geometry"=>0,"point"=>0,"linestring"=>0,"polygon"=>0,"multipoint"=>0,"multilinestring"=>0,"multipolygon"=>0,"geometrycollection"=>0),)as$y=>$X){$Th+=$X;$Zg[$y]=array_keys($X);}$ai=array("unsigned","zerofill","unsigned zerofill");$af=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL");$ad=array("char_length","date","from_unixtime","lower","round","sec_to_time","time_to_sec","upper");$fd=array("avg","count","count distinct","group_concat","max","min","sum");$hc=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1","date|time"=>"now",),array("(^|[^o])int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$ia="4.4.0";class
Adminer{var$operators;function
name(){return"<a href='https://www.adminer.org/' target='_blank' id='h1'>Adminer</a>";}function
credentials(){return
array(SERVER,$_GET["username"],get_password());}function
permanentLogin($i=false){return
password_file($i);}function
bruteForceKey(){return$_SERVER["REMOTE_ADDR"];}function
database(){return
DB;}function
databases($Rc=true){return
get_databases($Rc);}function
schemas(){return
schemas();}function
queryTimeout(){return
5;}function
headers(){}function
csp(){return
csp();}function
head(){return
true;}function
loginForm(){global$Zb;echo'<table cellspacing="0">
<tr><th>',lang(31),'<td>',html_select("auth[driver]",$Zb,DRIVER)."\n",'<tr><th>',lang(32),'<td><input name="auth[server]" value="',h(SERVER),'" title="hostname[:port]" placeholder="localhost" autocapitalize="off">
<tr><th>',lang(33),'<td><input name="auth[username]" id="username" value="',h($_GET["username"]),'" autocapitalize="off">
<tr><th>',lang(34),'<td><input type="password" name="auth[password]">
<tr><th>',lang(35),'<td><input name="auth[db]" value="',h($_GET["db"]),'" autocapitalize="off">
</table>
',script("focus(qs('#username'));"),"<p><input type='submit' value='".lang(36)."'>\n",checkbox("auth[permanent]",1,$_COOKIE["adminer_permanent"],lang(37))."\n";}function
login($he,$G){global$x;if($x=="sqlite")return
lang(38,'<code>login()</code>');return
true;}function
tableName($gh){return
h($gh["Name"]);}function
fieldName($o,$ff=0){return'<span title="'.h($o["full_type"]).'">'.h($o["field"]).'</span>';}function
selectLinks($gh,$O=""){echo'<p class="links">';$ge=array("select"=>lang(39));if(support("table")||support("indexes"))$ge["table"]=lang(40);if(support("table")){if(is_view($gh))$ge["view"]=lang(41);else$ge["create"]=lang(42);}if($O!==null)$ge["edit"]=lang(43);foreach($ge
as$y=>$X)echo" <a href='".h(ME)."$y=".urlencode($gh["Name"]).($y=="edit"?$O:"")."'".bold(isset($_GET[$y])).">$X</a>";echo"\n";}function
foreignKeys($R){return
foreign_keys($R);}function
backwardKeys($R,$fh){return
array();}function
backwardKeysPrint($Oa,$K){}function
selectQuery($H,$wh){global$x;return"<p><code class='jush-$x'>".h(str_replace("\n"," ",$H))."</code> <span class='time'>($wh)</span>".(support("sql")?" <a href='".h(ME)."sql=".urlencode($H)."'>".lang(10)."</a>":"")."</p>";}function
sqlCommandQuery($H){return
shorten_utf8(trim($H),1000);}function
rowDescription($R){return"";}function
rowDescriptions($L,$Tc){return$L;}function
selectLink($X,$o){}function
selectVal($X,$_,$o,$nf){$J=($X===null?"<i>NULL</i>":(preg_match("~char|binary~",$o["type"])&&!preg_match("~var~",$o["type"])?"<code>$X</code>":$X));if(preg_match('~blob|bytea|raw|file~',$o["type"])&&!is_utf8($X))$J="<i>".lang(44,strlen($nf))."</i>";if(preg_match('~json~',$o["type"]))$J="<code class='jush-js'>$J</code>";return($_?"<a href='".h($_)."'".(is_url($_)?" rel='noreferrer'":"").">$J</a>":$J);}function
editVal($X,$o){return$X;}function
tableStructurePrint($p){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(45)."<td>".lang(46).(support("comment")?"<td>".lang(47):"")."</thead>\n";foreach($p
as$o){echo"<tr".odd()."><th>".h($o["field"]),"<td><span title='".h($o["collation"])."'>".h($o["full_type"])."</span>",($o["null"]?" <i>NULL</i>":""),($o["auto_increment"]?" <i>".lang(48)."</i>":""),(isset($o["default"])?" <span title='".lang(49)."'>[<b>".h($o["default"])."</b>]</span>":""),(support("comment")?"<td>".nbsp($o["comment"]):""),"\n";}echo"</table>\n";}function
tableIndexesPrint($w){echo"<table cellspacing='0'>\n";foreach($w
as$C=>$v){ksort($v["columns"]);$Of=array();foreach($v["columns"]as$y=>$X)$Of[]="<i>".h($X)."</i>".($v["lengths"][$y]?"(".$v["lengths"][$y].")":"").($v["descs"][$y]?" DESC":"");echo"<tr title='".h($C)."'><th>$v[type]<td>".implode(", ",$Of)."\n";}echo"</table>\n";}function
selectColumnsPrint($M,$e){global$ad,$fd;print_fieldset("select",lang(50),$M);$s=0;$M[""]=array();foreach($M
as$y=>$X){$X=$_GET["columns"][$y];$d=select_input(" name='columns[$s][col]'",$e,$X["col"],($y!==""?"selectFieldChange":"selectAddRow"));echo"<div>".($ad||$fd?"<select name='columns[$s][fun]'>".optionlist(array(-1=>"")+array_filter(array(lang(51)=>$ad,lang(52)=>$fd)),$X["fun"])."</select>".on_help("getTarget(event).value && getTarget(event).value.replace(/ |\$/, '(') + ')'",1).script("qsl('select').onchange = function () { helpClose();".($y!==""?"":" qsl('select, input', this.parentNode).onchange();")." };","")."($d)":$d)."</div>\n";$s++;}echo"</div></fieldset>\n";}function
selectSearchPrint($Z,$e,$w){print_fieldset("search",lang(53),$Z);foreach($w
as$s=>$v){if($v["type"]=="FULLTEXT"){echo"(<i>".implode("</i>, <i>",array_map('h',$v["columns"]))."</i>) AGAINST"," <input type='search' name='fulltext[$s]' value='".h($_GET["fulltext"][$s])."'>",script("qsl('input').oninput = selectFieldChange;",""),checkbox("boolean[$s]",1,isset($_GET["boolean"][$s]),"BOOL"),"<br>\n";}}$_GET["where"]=(array)$_GET["where"];reset($_GET["where"]);$Za="this.parentNode.firstChild.onchange();";for($s=0;$s<=count($_GET["where"]);$s++){list(,$X)=each($_GET["where"]);if(!$X||("$X[col]$X[val]"!=""&&in_array($X["op"],$this->operators))){echo"<div>".select_input(" name='where[$s][col]'",$e,$X["col"],($X?"selectFieldChange":"selectAddRow"),"(".lang(54).")"),html_select("where[$s][op]",$this->operators,$X["op"],$Za),"<input type='search' name='where[$s][val]' value='".h($X["val"])."'>",script("mixin(qsl('input'), {oninput: function () { $Za }, onkeydown: selectSearchKeydown, onsearch: selectSearchSearch});",""),"</div>\n";}}echo"</div></fieldset>\n";}function
selectOrderPrint($ff,$e,$w){print_fieldset("sort",lang(55),$ff);$s=0;foreach((array)$_GET["order"]as$y=>$X){if($X!=""){echo"<div>".select_input(" name='order[$s]'",$e,$X,"selectFieldChange"),checkbox("desc[$s]",1,isset($_GET["desc"][$y]),lang(56))."</div>\n";$s++;}}echo"<div>".select_input(" name='order[$s]'",$e,"","selectAddRow"),checkbox("desc[$s]",1,false,lang(56))."</div>\n","</div></fieldset>\n";}function
selectLimitPrint($z){echo"<fieldset><legend>".lang(57)."</legend><div>";echo"<input type='number' name='limit' class='size' value='".h($z)."'>",script("qsl('input').oninput = selectFieldChange;",""),"</div></fieldset>\n";}function
selectLengthPrint($vh){if($vh!==null){echo"<fieldset><legend>".lang(58)."</legend><div>","<input type='number' name='text_length' class='size' value='".h($vh)."'>","</div></fieldset>\n";}}function
selectActionPrint($w){echo"<fieldset><legend>".lang(59)."</legend><div>","<input type='submit' value='".lang(50)."'>"," <span id='noindex' title='".lang(60)."'></span>","<script".nonce().">\n","var indexColumns = ";$e=array();foreach($w
as$v){$Gb=reset($v["columns"]);if($v["type"]!="FULLTEXT"&&$Gb)$e[$Gb]=1;}$e[""]=1;foreach($e
as$y=>$X)json_row($y);echo";\n","selectFieldChange.call(qs('#form')['select']);\n","</script>\n","</div></fieldset>\n";}function
selectCommandPrint(){return!information_schema(DB);}function
selectImportPrint(){return!information_schema(DB);}function
selectEmailPrint($mc,$e){}function
selectColumnsProcess($e,$w){global$ad,$fd;$M=array();$dd=array();foreach((array)$_GET["columns"]as$y=>$X){if($X["fun"]=="count"||($X["col"]!=""&&(!$X["fun"]||in_array($X["fun"],$ad)||in_array($X["fun"],$fd)))){$M[$y]=apply_sql_function($X["fun"],($X["col"]!=""?idf_escape($X["col"]):"*"));if(!in_array($X["fun"],$fd))$dd[]=$M[$y];}}return
array($M,$dd);}function
selectSearchProcess($p,$w){global$g,$x;$J=array();foreach($w
as$s=>$v){if($v["type"]=="FULLTEXT"&&$_GET["fulltext"][$s]!="")$J[]="MATCH (".implode(", ",array_map('idf_escape',$v["columns"])).") AGAINST (".q($_GET["fulltext"][$s]).(isset($_GET["boolean"][$s])?" IN BOOLEAN MODE":"").")";}foreach((array)$_GET["where"]as$X){if("$X[col]$X[val]"!=""&&in_array($X["op"],$this->operators)){$ub=" $X[op]";if(preg_match('~IN$~',$X["op"])){$td=process_length($X["val"]);$ub.=" ".($td!=""?$td:"(NULL)");}elseif($X["op"]=="SQL")$ub=" $X[val]";elseif($X["op"]=="LIKE %%")$ub=" LIKE ".$this->processInput($p[$X["col"]],"%$X[val]%");elseif($X["op"]=="ILIKE %%")$ub=" ILIKE ".$this->processInput($p[$X["col"]],"%$X[val]%");elseif(!preg_match('~NULL$~',$X["op"]))$ub.=" ".$this->processInput($p[$X["col"]],$X["val"]);if($X["col"]!="")$J[]=idf_escape($X["col"]).$ub;else{$pb=array();foreach($p
as$C=>$o){$Id=preg_match('~char|text|enum|set~',$o["type"]);if((is_numeric($X["val"])||!preg_match('~(^|[^o])int|float|double|decimal|bit~',$o["type"]))&&(!preg_match("~[\x80-\xFF]~",$X["val"])||$Id)){$C=idf_escape($C);$pb[]=($x=="sql"&&$Id&&!preg_match("~^utf8_~",$o["collation"])?"CONVERT($C USING ".charset($g).")":$C);}}$J[]=($pb?"(".implode("$ub OR ",$pb)."$ub)":"0");}}}return$J;}function
selectOrderProcess($p,$w){$J=array();foreach((array)$_GET["order"]as$y=>$X){if($X!="")$J[]=(preg_match('~^((COUNT\\(DISTINCT |[A-Z0-9_]+\\()(`(?:[^`]|``)+`|"(?:[^"]|"")+")\\)|COUNT\\(\\*\\))$~',$X)?$X:idf_escape($X)).(isset($_GET["desc"][$y])?" DESC":"");}return$J;}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"50");}function
selectLengthProcess(){return(isset($_GET["text_length"])?$_GET["text_length"]:"100");}function
selectEmailProcess($Z,$Tc){return
false;}function
selectQueryBuild($M,$Z,$dd,$ff,$z,$E){return"";}function
messageQuery($H,$wh){global$x;restart_session();$ld=&get_session("queries");if(!$ld[$_GET["db"]])$ld[$_GET["db"]]=array();$t="sql-".count($ld[$_GET["db"]]);if(strlen($H)>1e6)$H=preg_replace('~[\x80-\xFF]+$~','',substr($H,0,1e6))."\n...";$ld[$_GET["db"]][]=array($H,time(),$wh);return" <span class='time'>".@date("H:i:s")."</span>"." <a href='#$t' class='toggle'>".lang(61)."</a>"."<div id='$t' class='hidden'><pre><code class='jush-$x'>".shorten_utf8($H,1000).'</code></pre>'.($wh?" <span class='time'>($wh)</span>":'').(support("sql")?'<p><a href="'.h(str_replace("db=".urlencode(DB),"db=".urlencode($_GET["db"]),ME).'sql=&history='.(count($ld[$_GET["db"]])-1)).'">'.lang(10).'</a>':'').'</div>';}function
editFunctions($o){global$hc;$J=($o["null"]?"NULL/":"");foreach($hc
as$y=>$ad){if(!$y||(!isset($_GET["call"])&&(isset($_GET["select"])||where($_GET)))){foreach($ad
as$Cf=>$X){if(!$Cf||preg_match("~$Cf~",$o["type"]))$J.="/$X";}if($y&&!preg_match('~set|blob|bytea|raw|file~',$o["type"]))$J.="/SQL";}}if($o["auto_increment"]&&!isset($_GET["select"])&&!where($_GET))$J=lang(48);return
explode("/",$J);}function
editInput($R,$o,$Ja,$Y){if($o["type"]=="enum")return(isset($_GET["select"])?"<label><input type='radio'$Ja value='-1' checked><i>".lang(8)."</i></label> ":"").($o["null"]?"<label><input type='radio'$Ja value=''".($Y!==null||isset($_GET["select"])?"":" checked")."><i>NULL</i></label> ":"").enum_input("radio",$Ja,$o,$Y,0);return"";}function
editHint($R,$o,$Y){return"";}function
processInput($o,$Y,$r=""){if($r=="SQL")return$Y;$C=$o["field"];$J=q($Y);if(preg_match('~^(now|getdate|uuid)$~',$r))$J="$r()";elseif(preg_match('~^current_(date|timestamp)$~',$r))$J=$r;elseif(preg_match('~^([+-]|\\|\\|)$~',$r))$J=idf_escape($C)." $r $J";elseif(preg_match('~^[+-] interval$~',$r))$J=idf_escape($C)." $r ".(preg_match("~^(\\d+|'[0-9.: -]') [A-Z_]+\$~i",$Y)?$Y:$J);elseif(preg_match('~^(addtime|subtime|concat)$~',$r))$J="$r(".idf_escape($C).", $J)";elseif(preg_match('~^(md5|sha1|password|encrypt)$~',$r))$J="$r($J)";return
unconvert_field($o,$J);}function
dumpOutput(){$J=array('text'=>lang(62),'file'=>lang(63));if(function_exists('gzencode'))$J['gz']='gzip';return$J;}function
dumpFormat(){return
array('sql'=>'SQL','csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpDatabase($m){}function
dumpTable($R,$ah,$Jd=0){if($_POST["format"]!="sql"){echo"\xef\xbb\xbf";if($ah)dump_csv(array_keys(fields($R)));}else{if($Jd==2){$p=array();foreach(fields($R)as$C=>$o)$p[]=idf_escape($C)." $o[full_type]";$i="CREATE TABLE ".table($R)." (".implode(", ",$p).")";}else$i=create_sql($R,$_POST["auto_increment"]);set_utf8mb4($i);if($ah&&$i){if($ah=="DROP+CREATE"||$Jd==1)echo"DROP ".($Jd==2?"VIEW":"TABLE")." IF EXISTS ".table($R).";\n";if($Jd==1)$i=remove_definer($i);echo"$i;\n\n";}}}function
dumpData($R,$ah,$H){global$g,$x;$ne=($x=="sqlite"?0:1048576);if($ah){if($_POST["format"]=="sql"){if($ah=="TRUNCATE+INSERT")echo
truncate_sql($R).";\n";$p=fields($R);}$I=$g->query($H,1);if($I){$Bd="";$Xa="";$Qd=array();$ch="";$Ic=($R!=''?'fetch_assoc':'fetch_row');while($K=$I->$Ic()){if(!$Qd){$mi=array();foreach($K
as$X){$o=$I->fetch_field();$Qd[]=$o->name;$y=idf_escape($o->name);$mi[]="$y = VALUES($y)";}$ch=($ah=="INSERT+UPDATE"?"\nON DUPLICATE KEY UPDATE ".implode(", ",$mi):"").";\n";}if($_POST["format"]!="sql"){if($ah=="table"){dump_csv($Qd);$ah="INSERT";}dump_csv($K);}else{if(!$Bd)$Bd="INSERT INTO ".table($R)." (".implode(", ",array_map('idf_escape',$Qd)).") VALUES";foreach($K
as$y=>$X){$o=$p[$y];$K[$y]=($X!==null?unconvert_field($o,preg_match('~(^|[^o])int|float|double|decimal~',$o["type"])&&$X!=''?$X:q($X)):"NULL");}$xg=($ne?"\n":" ")."(".implode(",\t",$K).")";if(!$Xa)$Xa=$Bd.$xg;elseif(strlen($Xa)+4+strlen($xg)+strlen($ch)<$ne)$Xa.=",$xg";else{echo$Xa.$ch;$Xa=$Bd.$xg;}}}if($Xa)echo$Xa.$ch;}elseif($_POST["format"]=="sql")echo"-- ".str_replace("\n"," ",$g->error)."\n";}}function
dumpFilename($qd){return
friendly_url($qd!=""?$qd:(SERVER!=""?SERVER:"localhost"));}function
dumpHeaders($qd,$Be=false){$qf=$_POST["output"];$Cc=(preg_match('~sql~',$_POST["format"])?"sql":($Be?"tar":"csv"));header("Content-Type: ".($qf=="gz"?"application/x-gzip":($Cc=="tar"?"application/x-tar":($Cc=="sql"||$qf!="file"?"text/plain":"text/csv")."; charset=utf-8")));if($qf=="gz")ob_start('ob_gzencode',1e6);return$Cc;}function
homepage(){echo'<p class="links">'.($_GET["ns"]==""&&support("database")?'<a href="'.h(ME).'database=">'.lang(64)."</a>\n":""),(support("scheme")?"<a href='".h(ME)."scheme='>".($_GET["ns"]!=""?lang(65):lang(66))."</a>\n":""),($_GET["ns"]!==""?'<a href="'.h(ME).'schema=">'.lang(67)."</a>\n":""),(support("privileges")?"<a href='".h(ME)."privileges='>".lang(68)."</a>\n":"");return
true;}function
navigation($Ae){global$ia,$x,$Zb,$g;echo'<h1>
',$this->name(),' <span class="version">',$ia,'</span>
<a href="https://www.adminer.org/#download" target="_blank" id="version">',(version_compare($ia,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($Ae=="auth"){$Nc=true;foreach((array)$_SESSION["pwds"]as$oi=>$Lg){foreach($Lg
as$N=>$ji){foreach($ji
as$V=>$G){if($G!==null){if($Nc){echo"<p id='logins'>".script("mixin(qs('#logins'), {onmouseover: menuOver, onmouseout: menuOut});");$Nc=false;}$Lb=$_SESSION["db"][$oi][$N][$V];foreach(($Lb?array_keys($Lb):array(""))as$m)echo"<a href='".h(auth_url($oi,$N,$V,$m))."'>($Zb[$oi]) ".h($V.($N!=""?"@$N":"").($m!=""?" - $m":""))."</a><br>\n";}}}}}else{if($_GET["ns"]!==""&&!$Ae&&DB!=""){$g->select_db(DB);$T=table_status('',true);}echo
script_src(preg_replace("~\\?.*~","",ME)."?file=jush.js&version=4.4.0");if(support("sql")){echo'<script',nonce(),'>
';if($T){$ge=array();foreach($T
as$R=>$U)$ge[]=preg_quote($R,'/');echo"var jushLinks = { $x: [ '".js_escape(ME).(support("table")?"table=":"select=")."\$&', /\\b(".implode("|",$ge).")\\b/g ] };\n";foreach(array("bac","bra","sqlite_quo","mssql_bra")as$X)echo"jushLinks.$X = jushLinks.$x;\n";}echo'bodyLoad(\'',(is_object($g)?substr($g->server_info,0,3):""),'\');
</script>
';}$this->databasesPrint($Ae);if(DB==""||!$Ae){echo"<p class='links'>".(support("sql")?"<a href='".h(ME)."sql='".bold(isset($_GET["sql"])&&!isset($_GET["import"])).">".lang(61)."</a>\n<a href='".h(ME)."import='".bold(isset($_GET["import"])).">".lang(69)."</a>\n":"")."";if(support("dump"))echo"<a href='".h(ME)."dump=".urlencode(isset($_GET["table"])?$_GET["table"]:$_GET["select"])."' id='dump'".bold(isset($_GET["dump"])).">".lang(70)."</a>\n";}if($_GET["ns"]!==""&&!$Ae&&DB!=""){echo'<a href="'.h(ME).'create="'.bold($_GET["create"]==="").">".lang(71)."</a>\n";if(!$T)echo"<p class='message'>".lang(9)."\n";else$this->tablesPrint($T);}}}function
databasesPrint($Ae){global$b,$g;$l=$this->databases();echo'<form action="">
<p id="dbs">
';hidden_fields_get();$Jb=script("mixin(qsl('select'), {onmousedown: dbMouseDown, onchange: dbChange});","");echo"<span title='".lang(72)."'>DB</span>: ".($l?"<select name='db'>".optionlist(array(""=>"")+$l,DB)."</select>$Jb":'<input name="db" value="'.h(DB).'" autocapitalize="off">'),"<input type='submit' value='".lang(20)."'".($l?" class='hidden'":"").">\n";if($Ae!="db"&&DB!=""&&$g->select_db(DB)){if(support("scheme")){echo"<br>".lang(73).": <select name='ns'>".optionlist(array(""=>"")+$b->schemas(),$_GET["ns"])."</select>$Jb";if($_GET["ns"]!="")set_schema($_GET["ns"]);}}echo(isset($_GET["sql"])?'<input type="hidden" name="sql" value="">':(isset($_GET["schema"])?'<input type="hidden" name="schema" value="">':(isset($_GET["dump"])?'<input type="hidden" name="dump" value="">':(isset($_GET["privileges"])?'<input type="hidden" name="privileges" value="">':"")))),"</p></form>\n";}function
tablesPrint($T){echo"<ul id='tables'>".script("mixin(qs('#tables'), {onmouseover: menuOver, onmouseout: menuOut});");foreach($T
as$R=>$P){echo'<li><a href="'.h(ME).'select='.urlencode($R).'"'.bold($_GET["select"]==$R||$_GET["edit"]==$R,"select").">".lang(74)."</a> ";$C=$this->tableName($P);echo(support("table")||support("indexes")?'<a href="'.h(ME).'table='.urlencode($R).'"'.bold(in_array($R,array($_GET["table"],$_GET["create"],$_GET["indexes"],$_GET["foreign"],$_GET["trigger"])),(is_view($P)?"view":"structure"))." title='".lang(40)."'>$C</a>":"<span>$C</span>")."\n";}echo"</ul>\n";}}$b=(function_exists('adminer_object')?adminer_object():new
Adminer);if($b->operators===null)$b->operators=$af;function
page_header($zh,$n="",$Wa=array(),$_h=""){global$ca,$ia,$b,$Zb,$x;page_headers();if(is_ajax()&&$n){page_messages($n);exit;}$Ah=$zh.($_h!=""?": $_h":"");$Bh=strip_tags($Ah.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$b->name());echo'<!DOCTYPE html>
<html lang="',$ca,'" dir="',lang(75),'">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="robots" content="noindex">
<title>',$Bh,'</title>
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME)."?file=default.css&version=4.4.0"),'">
',script_src(preg_replace("~\\?.*~","",ME)."?file=functions.js&version=4.4.0");if($b->head()){echo'<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME)."?file=favicon.ico&version=4.4.0"),'">
<link rel="apple-touch-icon" href="',h(preg_replace("~\\?.*~","",ME)."?file=favicon.ico&version=4.4.0"),'">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}}echo'
<body class="',lang(75),' nojs">
<script',nonce(),'>
mixin(document.body, {onkeydown: bodyKeydown, onclick: bodyClick',(isset($_COOKIE["adminer_version"])?"":", onload: partial(verifyVersion, '$ia')");?>});
document.body.className = document.body.className.replace(/ nojs/, ' js');
var offlineMessage = '<?php echo
js_escape(lang(76)),'\';
</script>

<div id="help" class="jush-',$x,' jsonly hidden"></div>
',script("mixin(qs('#help'), {onmouseover: function () { helpOpen = 1; }, onmouseout: helpMouseout});"),'
<div id="content">
';if($Wa!==null){$_=substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.h($_?$_:".").'">'.$Zb[DRIVER].'</a> &raquo; ';$_=substr(preg_replace('~\b(db|ns)=[^&]*&~','',ME),0,-1);$N=(SERVER!=""?h(SERVER):lang(32));if($Wa===false)echo"$N\n";else{echo"<a href='".($_?h($_):".")."' accesskey='1' title='Alt+Shift+1'>$N</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($Wa)))echo'<a href="'.h($_."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';if(is_array($Wa)){if($_GET["ns"]!="")echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';foreach($Wa
as$y=>$X){$Qb=(is_array($X)?$X[1]:h($X));if($Qb!="")echo"<a href='".h(ME."$y=").urlencode(is_array($X)?$X[0]:$X)."'>$Qb</a> &raquo; ";}}echo"$zh\n";}}echo"<h2>$Ah</h2>\n","<div id='ajaxstatus' class='jsonly hidden'></div>\n";restart_session();page_messages($n);$l=&get_session("dbs");if(DB!=""&&$l&&!in_array(DB,$l,true))$l=null;stop_session();define("PAGE_HEADER",1);}function
page_headers(){global$b;header("Content-Type: text/html; charset=utf-8");header("Cache-Control: no-cache");header("X-Frame-Options: deny");header("X-XSS-Protection: 0");header("X-Content-Type-Options: nosniff");header("Referrer-Policy: origin-when-cross-origin");foreach($b->csp()as$Eb){$kd=array();foreach($Eb
as$y=>$X)$kd[]="$y $X";header("Content-Security-Policy: ".implode("; ",$kd));}$b->headers();}function
csp(){return
array(array("default-src"=>"'none'","script-src"=>"'self' 'unsafe-inline' 'nonce-".get_nonce()."' 'strict-dynamic'","style-src"=>"'self' 'unsafe-inline'","connect-src"=>"'self'","img-src"=>"'self' data:","frame-src"=>"https://www.adminer.org","form-action"=>"'self'",),);}function
get_nonce(){static$Ke;if(!$Ke)$Ke=base64_encode(rand_string());return$Ke;}function
page_messages($n){$ci=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$xe=$_SESSION["messages"][$ci];if($xe){echo"<div class='message'>".implode("</div>\n<div class='message'>",$xe)."</div>".script("messagesPrint();");unset($_SESSION["messages"][$ci]);}if($n)echo"<div class='error'>$n</div>\n";}function
page_footer($Ae=""){global$b,$Eh;echo'</div>

';switch_lang();if($Ae!="auth"){echo'<form action="" method="post">
<p class="logout">
<input type="submit" name="logout" value="',lang(77),'" id="logout">
<input type="hidden" name="token" value="',$Eh,'">
</p>
</form>
';}echo'<div id="menu">
';$b->navigation($Ae);echo'</div>
',script("setupSubmitHighlight(document);");}function
int32($De){while($De>=2147483648)$De-=4294967296;while($De<=-2147483649)$De+=4294967296;return(int)$De;}function
long2str($W,$ti){$xg='';foreach($W
as$X)$xg.=pack('V',$X);if($ti)return
substr($xg,0,end($W));return$xg;}function
str2long($xg,$ti){$W=array_values(unpack('V*',str_pad($xg,4*ceil(strlen($xg)/4),"\0")));if($ti)$W[]=strlen($xg);return$W;}function
xxtea_mx($zi,$yi,$dh,$Md){return
int32((($zi>>5&0x7FFFFFF)^$yi<<2)+(($yi>>3&0x1FFFFFFF)^$zi<<4))^int32(($dh^$yi)+($Md^$zi));}function
encrypt_string($Yg,$y){if($Yg=="")return"";$y=array_values(unpack("V*",pack("H*",md5($y))));$W=str2long($Yg,true);$De=count($W)-1;$zi=$W[$De];$yi=$W[0];$Vf=floor(6+52/($De+1));$dh=0;while($Vf-->0){$dh=int32($dh+0x9E3779B9);$gc=$dh>>2&3;for($rf=0;$rf<$De;$rf++){$yi=$W[$rf+1];$Ce=xxtea_mx($zi,$yi,$dh,$y[$rf&3^$gc]);$zi=int32($W[$rf]+$Ce);$W[$rf]=$zi;}$yi=$W[0];$Ce=xxtea_mx($zi,$yi,$dh,$y[$rf&3^$gc]);$zi=int32($W[$De]+$Ce);$W[$De]=$zi;}return
long2str($W,false);}function
decrypt_string($Yg,$y){if($Yg=="")return"";if(!$y)return
false;$y=array_values(unpack("V*",pack("H*",md5($y))));$W=str2long($Yg,false);$De=count($W)-1;$zi=$W[$De];$yi=$W[0];$Vf=floor(6+52/($De+1));$dh=int32($Vf*0x9E3779B9);while($dh){$gc=$dh>>2&3;for($rf=$De;$rf>0;$rf--){$zi=$W[$rf-1];$Ce=xxtea_mx($zi,$yi,$dh,$y[$rf&3^$gc]);$yi=int32($W[$rf]-$Ce);$W[$rf]=$yi;}$zi=$W[$De];$Ce=xxtea_mx($zi,$yi,$dh,$y[$rf&3^$gc]);$yi=int32($W[0]-$Ce);$W[0]=$yi;$dh=int32($dh-0x9E3779B9);}return
long2str($W,true);}$g='';$jd=$_SESSION["token"];if(!$jd)$_SESSION["token"]=rand(1,1e6);$Eh=get_token();$Df=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$X){list($y)=explode(":",$X);$Df[$y]=$X;}}function
add_invalid_login(){global$b;$Lc=get_temp_dir()."/adminer.invalid";$Yc=@fopen($Lc,"r+");if(!$Yc){$Yc=@fopen($Lc,"w");if(!$Yc)return;}flock($Yc,LOCK_EX);$Ed=unserialize(stream_get_contents($Yc));$wh=time();if($Ed){foreach($Ed
as$Fd=>$X){if($X[0]<$wh)unset($Ed[$Fd]);}}$Dd=&$Ed[$b->bruteForceKey()];if(!$Dd)$Dd=array($wh+30*60,0);$Dd[1]++;$Jg=serialize($Ed);rewind($Yc);fwrite($Yc,$Jg);ftruncate($Yc,strlen($Jg));flock($Yc,LOCK_UN);fclose($Yc);}function
check_invalid_login(){global$b;$Ed=unserialize(@file_get_contents(get_temp_dir()."/adminer.invalid"));$Dd=$Ed[$b->bruteForceKey()];$Je=($Dd[1]>30?$Dd[0]-time():0);if($Je>0)auth_error(lang(78,ceil($Je/60)));}$Ka=$_POST["auth"];if($Ka){session_regenerate_id();$oi=$Ka["driver"];$N=$Ka["server"];$V=$Ka["username"];$G=(string)$Ka["password"];$m=$Ka["db"];set_password($oi,$N,$V,$G);$_SESSION["db"][$oi][$N][$V][$m]=true;if($Ka["permanent"]){$y=base64_encode($oi)."-".base64_encode($N)."-".base64_encode($V)."-".base64_encode($m);$Pf=$b->permanentLogin(true);$Df[$y]="$y:".base64_encode($Pf?encrypt_string($G,$Pf):"");cookie("adminer_permanent",implode(" ",$Df));}if(count($_POST)==1||DRIVER!=$oi||SERVER!=$N||$_GET["username"]!==$V||DB!=$m)redirect(auth_url($oi,$N,$V,$m));}elseif($_POST["logout"]){if($jd&&!verify_token()){page_header(lang(77),lang(79));page_footer("db");exit;}else{foreach(array("pwds","db","dbs","queries")as$y)set_session($y,null);unset_permanent();redirect(substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1),lang(80).' '.lang(81,'https://sourceforge.net/donate/index.php?group_id=264133'));}}elseif($Df&&!$_SESSION["pwds"]){session_regenerate_id();$Pf=$b->permanentLogin();foreach($Df
as$y=>$X){list(,$hb)=explode(":",$X);list($oi,$N,$V,$m)=array_map('base64_decode',explode("-",$y));set_password($oi,$N,$V,decrypt_string(base64_decode($hb),$Pf));$_SESSION["db"][$oi][$N][$V][$m]=true;}}function
unset_permanent(){global$Df;foreach($Df
as$y=>$X){list($oi,$N,$V,$m)=array_map('base64_decode',explode("-",$y));if($oi==DRIVER&&$N==SERVER&&$V==$_GET["username"]&&$m==DB)unset($Df[$y]);}cookie("adminer_permanent",implode(" ",$Df));}function
auth_error($n){global$b,$jd;$Mg=session_name();if(isset($_GET["username"])){header("HTTP/1.1 403 Forbidden");if(($_COOKIE[$Mg]||$_GET[$Mg])&&!$jd)$n=lang(82);else{add_invalid_login();$G=get_password();if($G!==null){if($G===false)$n.='<br>'.lang(83,'<code>permanentLogin()</code>');set_password(DRIVER,SERVER,$_GET["username"],null);}unset_permanent();}}if(!$_COOKIE[$Mg]&&$_GET[$Mg]&&ini_bool("session.use_only_cookies"))$n=lang(84);$F=session_get_cookie_params();cookie("adminer_key",($_COOKIE["adminer_key"]?$_COOKIE["adminer_key"]:rand_string()),$F["lifetime"]);page_header(lang(36),$n,null);echo"<form action='' method='post'>\n";$b->loginForm();echo"<div>";hidden_fields($_POST,array("auth"));echo"</div>\n","</form>\n";page_footer("auth");exit;}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);unset_permanent();page_header(lang(85),lang(86,implode(", ",$Jf)),false);page_footer("auth");exit;}list($od,$Ff)=explode(":",SERVER,2);if(is_numeric($Ff)&&$Ff<1024)auth_error('Connecting to privileged ports is not allowed.');check_invalid_login();$g=connect();}$Yb=new
Min_Driver($g);if(!is_object($g)||($he=$b->login($_GET["username"],get_password()))!==true)auth_error((is_string($g)?h($g):(is_string($he)?$he:lang(87))));if($Ka&&$_POST["token"])$_POST["token"]=$Eh;$n='';if($_POST){if(!verify_token()){$zd="max_input_vars";$re=ini_get($zd);if(extension_loaded("suhosin")){foreach(array("suhosin.request.max_vars","suhosin.post.max_vars")as$y){$X=ini_get($y);if($X&&(!$re||$X<$re)){$zd=$y;$re=$X;}}}$n=(!$_POST["token"]&&$re?lang(88,"'$zd'"):lang(79).' '.lang(89));}}elseif($_SERVER["REQUEST_METHOD"]=="POST"){$n=lang(90,"'post_max_size'");if(isset($_GET["sql"]))$n.=' '.lang(91);}if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false)session_write_close();function
select($I,$h=null,$if=array(),$z=0){global$x;$ge=array();$w=array();$e=array();$Ta=array();$Th=array();$J=array();odd('');for($s=0;(!$z||$s<$z)&&($K=$I->fetch_row());$s++){if(!$s){echo"<table cellspacing='0' class='nowrap'>\n","<thead><tr>";for($Ld=0;$Ld<count($K);$Ld++){$o=$I->fetch_field();$C=$o->name;$hf=$o->orgtable;$gf=$o->orgname;$J[$o->table]=$hf;if($if&&$x=="sql")$ge[$Ld]=($C=="table"?"table=":($C=="possible_keys"?"indexes=":null));elseif($hf!=""){if(!isset($w[$hf])){$w[$hf]=array();foreach(indexes($hf,$h)as$v){if($v["type"]=="PRIMARY"){$w[$hf]=array_flip($v["columns"]);break;}}$e[$hf]=$w[$hf];}if(isset($e[$hf][$gf])){unset($e[$hf][$gf]);$w[$hf][$gf]=$Ld;$ge[$Ld]=$hf;}}if($o->charsetnr==63)$Ta[$Ld]=true;$Th[$Ld]=$o->type;echo"<th".($hf!=""||$o->name!=$gf?" title='".h(($hf!=""?"$hf.":"").$gf)."'":"").">".h($C).($if?doc_link(array('sql'=>"explain-output.html#explain_".strtolower($C))):"");}echo"</thead>\n";}echo"<tr".odd().">";foreach($K
as$y=>$X){if($X===null)$X="<i>NULL</i>";elseif($Ta[$y]&&!is_utf8($X))$X="<i>".lang(44,strlen($X))."</i>";elseif(!strlen($X))$X="&nbsp;";else{$X=h($X);if($Th[$y]==254)$X="<code>$X</code>";}if(isset($ge[$y])&&!$e[$ge[$y]]){if($if&&$x=="sql"){$R=$K[array_search("table=",$ge)];$_=$ge[$y].urlencode($if[$R]!=""?$if[$R]:$R);}else{$_="edit=".urlencode($ge[$y]);foreach($w[$ge[$y]]as$lb=>$Ld)$_.="&where".urlencode("[".bracket_escape($lb)."]")."=".urlencode($K[$Ld]);}$X="<a href='".h(ME.$_)."'>$X</a>";}echo"<td>$X";}}echo($s?"</table>":"<p class='message'>".lang(12))."\n";return$J;}function
referencable_primary($Fg){$J=array();foreach(table_status('',true)as$hh=>$R){if($hh!=$Fg&&fk_support($R)){foreach(fields($hh)as$o){if($o["primary"]){if($J[$hh]){unset($J[$hh]);break;}$J[$hh]=$o;}}}}return$J;}function
textarea($C,$Y,$L=10,$pb=80){global$x;echo"<textarea name='$C' rows='$L' cols='$pb' class='sqlarea jush-$x' spellcheck='false' wrap='off'>";if(is_array($Y)){foreach($Y
as$X)echo
h($X[0])."\n\n\n";}else
echo
h($Y);echo"</textarea>";}function
edit_type($y,$o,$ob,$Uc=array()){global$Zg,$Th,$ai,$Ve;$U=$o["type"];echo'<td><select name="',h($y),'[type]" class="type" aria-labelledby="label-type">';if($U&&!isset($Th[$U])&&!isset($Uc[$U]))array_unshift($Zg,$U);if($Uc)$Zg[lang(92)]=$Uc;echo
optionlist($Zg,$U),'</select>
',on_help("getTarget(event).value",1),script("mixin(qsl('select'), {onfocus: function () { lastType = selectValue(this); }, onchange: editingTypeChange});",""),'<td><input name="',h($y),'[length]" value="',h($o["length"]),'" size="3"',(!$o["length"]&&preg_match('~var(char|binary)$~',$U)?" class='required'":""),' aria-labelledby="label-length">',script("mixin(qsl('input'), {onfocus: editingLengthFocus, oninput: editingLengthChange});",""),'<td class="options">';echo"<select name='".h($y)."[collation]'".(preg_match('~(char|text|enum|set)$~',$U)?"":" class='hidden'").'><option value="">('.lang(93).')'.optionlist($ob,$o["collation"]).'</select>',($ai?"<select name='".h($y)."[unsigned]'".(!$U||preg_match('~((^|[^o])int|float|double|decimal)$~',$U)?"":" class='hidden'").'><option>'.optionlist($ai,$o["unsigned"]).'</select>':''),(isset($o['on_update'])?"<select name='".h($y)."[on_update]'".(preg_match('~timestamp|datetime~',$U)?"":" class='hidden'").'>'.optionlist(array(""=>"(".lang(94).")","CURRENT_TIMESTAMP"),$o["on_update"]).'</select>':''),($Uc?"<select name='".h($y)."[on_delete]'".(preg_match("~`~",$U)?"":" class='hidden'")."><option value=''>(".lang(95).")".optionlist(explode("|",$Ve),$o["on_delete"])."</select> ":" ");}function
process_length($de){global$rc;return(preg_match("~^\\s*\\(?\\s*$rc(?:\\s*,\\s*$rc)*+\\s*\\)?\\s*\$~",$de)&&preg_match_all("~$rc~",$de,$le)?"(".implode(",",$le[0]).")":preg_replace('~^[0-9].*~','(\0)',preg_replace('~[^-0-9,+()[\]]~','',$de)));}function
process_type($o,$mb="COLLATE"){global$ai;return" $o[type]".process_length($o["length"]).(preg_match('~(^|[^o])int|float|double|decimal~',$o["type"])&&in_array($o["unsigned"],$ai)?" $o[unsigned]":"").(preg_match('~char|text|enum|set~',$o["type"])&&$o["collation"]?" $mb ".q($o["collation"]):"");}function
process_field($o,$Rh){global$x;$Nb=$o["default"];return
array(idf_escape(trim($o["field"])),process_type($Rh),($o["null"]?" NULL":" NOT NULL"),(isset($Nb)?" DEFAULT ".((preg_match('~time~',$o["type"])&&preg_match('~^CURRENT_TIMESTAMP$~i',$Nb))||($x=="sqlite"&&preg_match('~^CURRENT_(TIME|TIMESTAMP|DATE)$~i',$Nb))||($o["type"]=="bit"&&preg_match("~^([0-9]+|b'[0-1]+')\$~",$Nb))||($x=="pgsql"&&preg_match("~^[a-z]+\\(('[^']*')+\\)\$~",$Nb))?$Nb:q($Nb)):""),(preg_match('~timestamp|datetime~',$o["type"])&&$o["on_update"]?" ON UPDATE $o[on_update]":""),(support("comment")&&$o["comment"]!=""?" COMMENT ".q($o["comment"]):""),($o["auto_increment"]?auto_increment():null),);}function
type_class($U){foreach(array('char'=>'text','date'=>'time|year','binary'=>'blob','enum'=>'set',)as$y=>$X){if(preg_match("~$y|$X~",$U))return" class='$y'";}}function
edit_fields($p,$ob,$U="TABLE",$Uc=array(),$tb=false){global$g,$_d;$p=array_values($p);echo'<thead><tr class="wrap">
';if($U=="PROCEDURE"){echo'<td>&nbsp;';}echo'<th id="label-name">',($U=="TABLE"?lang(96):lang(97)),'<td id="label-type">',lang(46),'<textarea id="enum-edit" rows="4" cols="12" wrap="off" style="display: none;"></textarea>',script("qs('#enum-edit').onblur = editingLengthBlur;"),'<td id="label-length">',lang(98),'<td>',lang(99);if($U=="TABLE"){echo'<td id="label-null">NULL
<td><input type="radio" name="auto_increment_col" value=""><acronym id="label-ai" title="',lang(48),'">AI</acronym>',doc_link(array('sql'=>"example-auto-increment.html",'sqlite'=>"autoinc.html",'pgsql'=>"datatype.html#DATATYPE-SERIAL",'mssql'=>"ms186775.aspx",)),'<td id="label-default">',lang(49),(support("comment")?"<td id='label-comment'".($tb?"":" class='hidden'").">".lang(47):"");}echo'<td>',"<input type='image' class='icon' name='add[".(support("move_col")?0:count($p))."]' src='".h(preg_replace("~\\?.*~","",ME)."?file=plus.gif&version=4.4.0")."' alt='+' title='".lang(100)."'>".script("row_count = ".count($p).";"),'</thead>
<tbody>
',script("qsl('tbody').onkeydown = editingKeydown;");foreach($p
as$s=>$o){$s++;$jf=$o[($_POST?"orig":"field")];$Ub=(isset($_POST["add"][$s-1])||(isset($o["field"])&&!$_POST["drop_col"][$s]))&&(support("drop_col")||$jf=="");echo'<tr',($Ub?"":" style='display: none;'"),'>
',($U=="PROCEDURE"?"<td>".html_select("fields[$s][inout]",explode("|",$_d),$o["inout"]):""),'<th>';if($Ub){echo'<input name="fields[',$s,'][field]" value="',h($o["field"]),'" maxlength="64" autocapitalize="off" aria-labelledby="label-name">',script("qsl('input').oninput = function () { editingNameChange.call(this);".($o["field"]!=""||count($p)>1?"":" editingAddRow.call(this);")." };","");}echo'<input type="hidden" name="fields[',$s,'][orig]" value="',h($jf),'">
';edit_type("fields[$s]",$o,$ob,$Uc);if($U=="TABLE"){echo'<td>',checkbox("fields[$s][null]",1,$o["null"],"","","block","label-null"),'<td><label class="block"><input type="radio" name="auto_increment_col" value="',$s,'"';if($o["auto_increment"]){echo' checked';}echo' aria-labelledby="label-ai">',script("qsl('input').onclick = function () { var field = this.form['fields[' + this.value + '][field]']; if (!field.value) { field.value = 'id'; field.oninput(); } }"),'</label><td>',checkbox("fields[$s][has_default]",1,$o["has_default"],"","","","label-default"),'<input name="fields[',$s,'][default]" value="',h($o["default"]),'" aria-labelledby="label-default">',script("qsl('input').oninput = function () { this.previousSibling.checked = true; }",""),(support("comment")?"<td".($tb?"":" class='hidden'")."><input name='fields[$s][comment]' value='".h($o["comment"])."' maxlength='".($g->server_info>=5.5?1024:255)."' aria-labelledby='label-comment'>":"");}echo"<td>",(support("move_col")?"<input type='image' class='icon' name='add[$s]' src='".h(preg_replace("~\\?.*~","",ME)."?file=plus.gif&version=4.4.0")."' alt='+' title='".lang(100)."'>&nbsp;".script("qsl('input').onclick = partial(editingAddRow, 1);","")."<input type='image' class='icon' name='up[$s]' src='".h(preg_replace("~\\?.*~","",ME)."?file=up.gif&version=4.4.0")."' alt='^' title='".lang(101)."'>&nbsp;".script("qsl('input').onclick = partial(editingMoveRow, 1);","")."<input type='image' class='icon' name='down[$s]' src='".h(preg_replace("~\\?.*~","",ME)."?file=down.gif&version=4.4.0")."' alt='v' title='".lang(102)."'>&nbsp;".script("qsl('input').onclick = partial(editingMoveRow, 0);",""):""),($jf==""||support("drop_col")?"<input type='image' class='icon' name='drop_col[$s]' src='".h(preg_replace("~\\?.*~","",ME)."?file=cross.gif&version=4.4.0")."' alt='x' title='".lang(103)."'>".script("qsl('input').onclick = partial(editingRemoveRow, 'fields\$1[field]');"):"");}}function
process_fields(&$p){$D=0;if($_POST["up"]){$Xd=0;foreach($p
as$y=>$o){if(key($_POST["up"])==$y){unset($p[$y]);array_splice($p,$Xd,0,array($o));break;}if(isset($o["field"]))$Xd=$D;$D++;}}elseif($_POST["down"]){$Wc=false;foreach($p
as$y=>$o){if(isset($o["field"])&&$Wc){unset($p[key($_POST["down"])]);array_splice($p,$D,0,array($Wc));break;}if(key($_POST["down"])==$y)$Wc=$o;$D++;}}elseif($_POST["add"]){$p=array_values($p);array_splice($p,key($_POST["add"]),0,array(array()));}elseif(!$_POST["drop_col"])return
false;return
true;}function
normalize_enum($B){return"'".str_replace("'","''",addcslashes(stripcslashes(str_replace($B[0][0].$B[0][0],$B[0][0],substr($B[0],1,-1))),'\\'))."'";}function
grant($bd,$Rf,$e,$Ue){if(!$Rf)return
true;if($Rf==array("ALL PRIVILEGES","GRANT OPTION"))return($bd=="GRANT"?queries("$bd ALL PRIVILEGES$Ue WITH GRANT OPTION"):queries("$bd ALL PRIVILEGES$Ue")&&queries("$bd GRANT OPTION$Ue"));return
queries("$bd ".preg_replace('~(GRANT OPTION)\\([^)]*\\)~','\\1',implode("$e, ",$Rf).$e).$Ue);}function
drop_create($ac,$i,$bc,$th,$dc,$A,$we,$ue,$ve,$Re,$Ge){if($_POST["drop"])query_redirect($ac,$A,$we);elseif($Re=="")query_redirect($i,$A,$ve);elseif($Re!=$Ge){$Db=queries($i);queries_redirect($A,$ue,$Db&&queries($ac));if($Db)queries($bc);}else
queries_redirect($A,$ue,queries($th)&&queries($dc)&&queries($ac)&&queries($i));}function
create_trigger($Ue,$K){global$x;$yh=" $K[Timing] $K[Event]".($K["Event"]=="UPDATE OF"?" ".idf_escape($K["Of"]):"");return"CREATE TRIGGER ".idf_escape($K["Trigger"]).($x=="mssql"?$Ue.$yh:$yh.$Ue).rtrim(" $K[Type]\n$K[Statement]",";").";";}function
create_routine($tg,$K){global$_d;$O=array();$p=(array)$K["fields"];ksort($p);foreach($p
as$o){if($o["field"]!="")$O[]=(preg_match("~^($_d)\$~",$o["inout"])?"$o[inout] ":"").idf_escape($o["field"]).process_type($o,"CHARACTER SET");}return"CREATE $tg ".idf_escape(trim($K["name"]))." (".implode(", ",$O).")".(isset($_GET["function"])?" RETURNS".process_type($K["returns"],"CHARACTER SET"):"").($K["language"]?" LANGUAGE $K[language]":"").rtrim("\n$K[definition]",";").";";}function
remove_definer($H){return
preg_replace('~^([A-Z =]+) DEFINER=`'.preg_replace('~@(.*)~','`@`(%|\\1)',logged_user()).'`~','\\1',$H);}function
format_foreign_key($q){global$Ve;return" FOREIGN KEY (".implode(", ",array_map('idf_escape',$q["source"])).") REFERENCES ".table($q["table"])." (".implode(", ",array_map('idf_escape',$q["target"])).")".(preg_match("~^($Ve)\$~",$q["on_delete"])?" ON DELETE $q[on_delete]":"").(preg_match("~^($Ve)\$~",$q["on_update"])?" ON UPDATE $q[on_update]":"");}function
tar_file($Lc,$Ch){$J=pack("a100a8a8a8a12a12",$Lc,644,0,0,decoct($Ch->size),decoct(time()));$fb=8*32;for($s=0;$s<strlen($J);$s++)$fb+=ord($J[$s]);$J.=sprintf("%06o",$fb)."\0 ";echo$J,str_repeat("\0",512-strlen($J));$Ch->send();echo
str_repeat("\0",511-($Ch->size+511)%512);}function
ini_bytes($zd){$X=ini_get($zd);switch(strtolower(substr($X,-1))){case'g':$X*=1024;case'm':$X*=1024;case'k':$X*=1024;}return$X;}function
doc_link($Bf){global$x,$g;$fi=array('sql'=>"https://dev.mysql.com/doc/refman/".substr($g->server_info,0,3)."/en/",'sqlite'=>"https://www.sqlite.org/",'pgsql'=>"https://www.postgresql.org/docs/".substr($g->server_info,0,3)."/static/",'mssql'=>"https://msdn.microsoft.com/library/",'oracle'=>"https://download.oracle.com/docs/cd/B19306_01/server.102/b14200/",);return($Bf[$x]?"<a href='$fi[$x]$Bf[$x]' target='_blank' rel='noreferrer'><sup>?</sup></a>":"");}function
ob_gzencode($Q){return
gzencode($Q);}function
db_size($m){global$g;if(!$g->select_db($m))return"?";$J=0;foreach(table_status()as$S)$J+=$S["Data_length"]+$S["Index_length"];return
format_number($J);}function
set_utf8mb4($i){global$g;static$O=false;if(!$O&&preg_match('~\butf8mb4~i',$i)){$O=true;echo"SET NAMES ".charset($g).";\n\n";}}function
connect_error(){global$b,$g,$Eh,$n,$Zb;if(DB!=""){header("HTTP/1.1 404 Not Found");page_header(lang(35).": ".h(DB),lang(104),true);}else{if($_POST["db"]&&!$n)queries_redirect(substr(ME,0,-1),lang(105),drop_databases($_POST["db"]));page_header(lang(106),$n,false);echo"<p class='links'>\n";foreach(array('database'=>lang(107),'privileges'=>lang(68),'processlist'=>lang(108),'variables'=>lang(109),'status'=>lang(110),)as$y=>$X){if(support($y))echo"<a href='".h(ME)."$y='>$X</a>\n";}echo"<p>".lang(111,$Zb[DRIVER],"<b>".h($g->server_info)."</b>","<b>$g->extension</b>")."\n","<p>".lang(112,"<b>".h(logged_user())."</b>")."\n";$l=$b->databases();if($l){$_g=support("scheme");$ob=collations();echo"<form action='' method='post'>\n","<table cellspacing='0' class='checkable'>\n",script("mixin(qsl('table'), {onclick: tableClick, ondblclick: partialArg(tableClick, true)});"),"<thead><tr>".(support("database")?"<td>&nbsp;":"")."<th>".lang(35)." - <a href='".h(ME)."refresh=1'>".lang(113)."</a>"."<td>".lang(114)."<td>".lang(115)."<td>".lang(116)." - <a href='".h(ME)."dbsize=1'>".lang(117)."</a>".script("qsl('a').onclick = partial(ajaxSetHtml, '".js_escape(ME)."script=connect');","")."</thead>\n";$l=($_GET["dbsize"]?count_tables($l):array_flip($l));foreach($l
as$m=>$T){$sg=h(ME)."db=".urlencode($m);$t=h("Db-".$m);echo"<tr".odd().">".(support("database")?"<td>".checkbox("db[]",$m,in_array($m,(array)$_POST["db"]),"","","",$t):""),"<th><a href='$sg' id='$m'>".h($m)."</a>";$nb=nbsp(db_collation($m,$ob));echo"<td>".(support("database")?"<a href='$sg".($_g?"&amp;ns=":"")."&amp;database=' title='".lang(64)."'>$nb</a>":$nb),"<td align='right'><a href='$sg&amp;schema=' id='tables-".h($m)."' title='".lang(67)."'>".($_GET["dbsize"]?$T:"?")."</a>","<td align='right' id='size-".h($m)."'>".($_GET["dbsize"]?db_size($m):"?"),"\n";}echo"</table>\n",(support("database")?"<fieldset><legend>".lang(118)." <span id='selected'></span></legend><div>\n"."<input type='hidden' name='all' value=''>".script("qsl('input').onclick = function () { selectCount('selected', formChecked(this, /^db/)); };")."<input type='submit' name='drop' value='".lang(119)."'>".confirm()."\n"."</div></fieldset>\n":""),script("tableCheck();"),"<input type='hidden' name='token' value='$Eh'>\n","</form>\n";}}page_footer("db");}if(isset($_GET["status"]))$_GET["variables"]=$_GET["status"];if(isset($_GET["import"]))$_GET["sql"]=$_GET["import"];if(!(DB!=""?$g->select_db(DB):isset($_GET["sql"])||isset($_GET["dump"])||isset($_GET["database"])||isset($_GET["processlist"])||isset($_GET["privileges"])||isset($_GET["user"])||isset($_GET["variables"])||$_GET["script"]=="connect"||$_GET["script"]=="kill")){if(DB!=""||$_GET["refresh"]){restart_session();set_session("dbs",null);}connect_error();exit;}if(support("scheme")&&DB!=""&&$_GET["ns"]!==""){if(!isset($_GET["ns"]))redirect(preg_replace('~ns=[^&]*&~','',ME)."ns=".get_schema());if(!set_schema($_GET["ns"])){header("HTTP/1.1 404 Not Found");page_header(lang(73).": ".h($_GET["ns"]),lang(120),true);page_footer("ns");exit;}}$Ve="RESTRICT|NO ACTION|CASCADE|SET NULL|SET DEFAULT";class
TmpFile{var$handler;var$size;function
__construct(){$this->handler=tmpfile();}function
write($yb){$this->size+=strlen($yb);fwrite($this->handler,$yb);}function
send(){fseek($this->handler,0);fpassthru($this->handler);fclose($this->handler);}}$rc="'(?:''|[^'\\\\]|\\\\.)*'";$_d="IN|OUT|INOUT";if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"])$_GET["edit"]=$_GET["select"];if(isset($_GET["callf"]))$_GET["call"]=$_GET["callf"];if(isset($_GET["function"]))$_GET["procedure"]=$_GET["function"];if(isset($_GET["download"])){$a=$_GET["download"];$p=fields($a);header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$a-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));$M=array(idf_escape($_GET["field"]));$I=$Yb->select($a,$M,array(where($_GET,$p)),$M);$K=($I?$I->fetch_row():array());echo$K[0];exit;}elseif(isset($_GET["table"])){$a=$_GET["table"];$p=fields($a);if(!$p)$n=error();$S=table_status1($a,true);page_header(($p&&is_view($S)?$S['Engine']=='materialized view'?lang(121):lang(122):lang(123)).": ".h($a),$n);$b->selectLinks($S);$sb=$S["Comment"];if($sb!="")echo"<p>".lang(47).": ".h($sb)."\n";if($p)$b->tableStructurePrint($p);if(!is_view($S)){if(support("indexes")){echo"<h3 id='indexes'>".lang(124)."</h3>\n";$w=indexes($a);if($w)$b->tableIndexesPrint($w);echo'<p class="links"><a href="'.h(ME).'indexes='.urlencode($a).'">'.lang(125)."</a>\n";}if(fk_support($S)){echo"<h3 id='foreign-keys'>".lang(92)."</h3>\n";$Uc=foreign_keys($a);if($Uc){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(126)."<td>".lang(127)."<td>".lang(95)."<td>".lang(94)."<td>&nbsp;</thead>\n";foreach($Uc
as$C=>$q){echo"<tr title='".h($C)."'>","<th><i>".implode("</i>, <i>",array_map('h',$q["source"]))."</i>","<td><a href='".h($q["db"]!=""?preg_replace('~db=[^&]*~',"db=".urlencode($q["db"]),ME):($q["ns"]!=""?preg_replace('~ns=[^&]*~',"ns=".urlencode($q["ns"]),ME):ME))."table=".urlencode($q["table"])."'>".($q["db"]!=""?"<b>".h($q["db"])."</b>.":"").($q["ns"]!=""?"<b>".h($q["ns"])."</b>.":"").h($q["table"])."</a>","(<i>".implode("</i>, <i>",array_map('h',$q["target"]))."</i>)","<td>".nbsp($q["on_delete"])."\n","<td>".nbsp($q["on_update"])."\n",'<td><a href="'.h(ME.'foreign='.urlencode($a).'&name='.urlencode($C)).'">'.lang(128).'</a>';}echo"</table>\n";}echo'<p class="links"><a href="'.h(ME).'foreign='.urlencode($a).'">'.lang(129)."</a>\n";}}if(support(is_view($S)?"view_trigger":"trigger")){echo"<h3 id='triggers'>".lang(130)."</h3>\n";$Qh=triggers($a);if($Qh){echo"<table cellspacing='0'>\n";foreach($Qh
as$y=>$X)echo"<tr valign='top'><td>".h($X[0])."<td>".h($X[1])."<th>".h($y)."<td><a href='".h(ME.'trigger='.urlencode($a).'&name='.urlencode($y))."'>".lang(128)."</a>\n";echo"</table>\n";}echo'<p class="links"><a href="'.h(ME).'trigger='.urlencode($a).'">'.lang(131)."</a>\n";}}elseif(isset($_GET["schema"])){page_header(lang(67),"",array(),h(DB.($_GET["ns"]?".$_GET[ns]":"")));$jh=array();$kh=array();$ea=($_GET["schema"]?$_GET["schema"]:$_COOKIE["adminer_schema-".str_replace(".","_",DB)]);preg_match_all('~([^:]+):([-0-9.]+)x([-0-9.]+)(_|$)~',$ea,$le,PREG_SET_ORDER);foreach($le
as$s=>$B){$jh[$B[1]]=array($B[2],$B[3]);$kh[]="\n\t'".js_escape($B[1])."': [ $B[2], $B[3] ]";}$Fh=0;$Qa=-1;$zg=array();$gg=array();$be=array();foreach(table_status('',true)as$R=>$S){if(is_view($S))continue;$Gf=0;$zg[$R]["fields"]=array();foreach(fields($R)as$C=>$o){$Gf+=1.25;$o["pos"]=$Gf;$zg[$R]["fields"][$C]=$o;}$zg[$R]["pos"]=($jh[$R]?$jh[$R]:array($Fh,0));foreach($b->foreignKeys($R)as$X){if(!$X["db"]){$Zd=$Qa;if($jh[$R][1]||$jh[$X["table"]][1])$Zd=min(floatval($jh[$R][1]),floatval($jh[$X["table"]][1]))-1;else$Qa-=.1;while($be[(string)$Zd])$Zd-=.0001;$zg[$R]["references"][$X["table"]][(string)$Zd]=array($X["source"],$X["target"]);$gg[$X["table"]][$R][(string)$Zd]=$X["target"];$be[(string)$Zd]=true;}}$Fh=max($Fh,$zg[$R]["pos"][0]+2.5+$Gf);}echo'<div id="schema" style="height: ',$Fh,'em;">
<script',nonce(),'>
qs(\'#schema\').onselectstart = function () { return false; };
var tablePos = {',implode(",",$kh)."\n",'};
var em = qs(\'#schema\').offsetHeight / ',$Fh,';
document.onmousemove = schemaMousemove;
document.onmouseup = partialArg(schemaMouseup, \'',js_escape(DB),'\');
</script>
';foreach($zg
as$C=>$R){echo"<div class='table' style='top: ".$R["pos"][0]."em; left: ".$R["pos"][1]."em;'>",'<a href="'.h(ME).'table='.urlencode($C).'"><b>'.h($C)."</b></a>",script("qsl('div').onmousedown = schemaMousedown;");foreach($R["fields"]as$o){$X='<span'.type_class($o["type"]).' title="'.h($o["full_type"].($o["null"]?" NULL":'')).'">'.h($o["field"]).'</span>';echo"<br>".($o["primary"]?"<i>$X</i>":$X);}foreach((array)$R["references"]as$qh=>$hg){foreach($hg
as$Zd=>$dg){$ae=$Zd-$jh[$C][1];$s=0;foreach($dg[0]as$Rg)echo"\n<div class='references' title='".h($qh)."' id='refs$Zd-".($s++)."' style='left: $ae"."em; top: ".$R["fields"][$Rg]["pos"]."em; padding-top: .5em;'><div style='border-top: 1px solid Gray; width: ".(-$ae)."em;'></div></div>";}}foreach((array)$gg[$C]as$qh=>$hg){foreach($hg
as$Zd=>$e){$ae=$Zd-$jh[$C][1];$s=0;foreach($e
as$ph)echo"\n<div class='references' title='".h($qh)."' id='refd$Zd-".($s++)."' style='left: $ae"."em; top: ".$R["fields"][$ph]["pos"]."em; height: 1.25em; background: url(".h(preg_replace("~\\?.*~","",ME)."?file=arrow.gif) no-repeat right center;&version=4.4.0")."'><div style='height: .5em; border-bottom: 1px solid Gray; width: ".(-$ae)."em;'></div></div>";}}echo"\n</div>\n";}foreach($zg
as$C=>$R){foreach((array)$R["references"]as$qh=>$hg){foreach($hg
as$Zd=>$dg){$_e=$Fh;$pe=-10;foreach($dg[0]as$y=>$Rg){$Hf=$R["pos"][0]+$R["fields"][$Rg]["pos"];$If=$zg[$qh]["pos"][0]+$zg[$qh]["fields"][$dg[1][$y]]["pos"];$_e=min($_e,$Hf,$If);$pe=max($pe,$Hf,$If);}echo"<div class='references' id='refl$Zd' style='left: $Zd"."em; top: $_e"."em; padding: .5em 0;'><div style='border-right: 1px solid Gray; margin-top: 1px; height: ".($pe-$_e)."em;'></div></div>\n";}}}echo'</div>
<p class="links"><a href="',h(ME."schema=".urlencode($ea)),'" id="schema-link">',lang(132),'</a>
';}elseif(isset($_GET["dump"])){$a=$_GET["dump"];if($_POST&&!$n){$Ab="";foreach(array("output","format","db_style","routines","events","table_style","auto_increment","triggers","data_style")as$y)$Ab.="&$y=".urlencode($_POST[$y]);cookie("adminer_export",substr($Ab,1));$T=array_flip((array)$_POST["tables"])+array_flip((array)$_POST["data"]);$Cc=dump_headers((count($T)==1?key($T):DB),(DB==""||count($T)>1));$Hd=preg_match('~sql~',$_POST["format"]);if($Hd){echo"-- Adminer $ia ".$Zb[DRIVER]." dump\n\n";if($x=="sql"){echo"SET NAMES utf8;
SET time_zone = '+00:00';
".($_POST["data_style"]?"SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';
":"")."
";$g->query("SET time_zone = '+00:00';");}}$ah=$_POST["db_style"];$l=array(DB);if(DB==""){$l=$_POST["databases"];if(is_string($l))$l=explode("\n",rtrim(str_replace("\r","",$l),"\n"));}foreach((array)$l
as$m){$b->dumpDatabase($m);if($g->select_db($m)){if($Hd&&preg_match('~CREATE~',$ah)&&($i=$g->result("SHOW CREATE DATABASE ".idf_escape($m),1))){set_utf8mb4($i);if($ah=="DROP+CREATE")echo"DROP DATABASE IF EXISTS ".idf_escape($m).";\n";echo"$i;\n";}if($Hd){if($ah)echo
use_sql($m).";\n\n";$pf="";if($_POST["routines"]){foreach(array("FUNCTION","PROCEDURE")as$tg){foreach(get_rows("SHOW $tg STATUS WHERE Db = ".q($m),null,"-- ")as$K){$i=remove_definer($g->result("SHOW CREATE $tg ".idf_escape($K["Name"]),2));set_utf8mb4($i);$pf.=($ah!='DROP+CREATE'?"DROP $tg IF EXISTS ".idf_escape($K["Name"]).";;\n":"")."$i;;\n\n";}}}if($_POST["events"]){foreach(get_rows("SHOW EVENTS",null,"-- ")as$K){$i=remove_definer($g->result("SHOW CREATE EVENT ".idf_escape($K["Name"]),3));set_utf8mb4($i);$pf.=($ah!='DROP+CREATE'?"DROP EVENT IF EXISTS ".idf_escape($K["Name"]).";;\n":"")."$i;;\n\n";}}if($pf)echo"DELIMITER ;;\n\n$pf"."DELIMITER ;\n\n";}if($_POST["table_style"]||$_POST["data_style"]){$ri=array();foreach(table_status('',true)as$C=>$S){$R=(DB==""||in_array($C,(array)$_POST["tables"]));$Hb=(DB==""||in_array($C,(array)$_POST["data"]));if($R||$Hb){if($Cc=="tar"){$Ch=new
TmpFile;ob_start(array($Ch,'write'),1e5);}$b->dumpTable($C,($R?$_POST["table_style"]:""),(is_view($S)?2:0));if(is_view($S))$ri[]=$C;elseif($Hb){$p=fields($C);$b->dumpData($C,$_POST["data_style"],"SELECT *".convert_fields($p,$p)." FROM ".table($C));}if($Hd&&$_POST["triggers"]&&$R&&($Qh=trigger_sql($C,$_POST["table_style"])))echo"\nDELIMITER ;;\n$Qh\nDELIMITER ;\n";if($Cc=="tar"){ob_end_flush();tar_file((DB!=""?"":"$m/")."$C.csv",$Ch);}elseif($Hd)echo"\n";}}foreach($ri
as$qi)$b->dumpTable($qi,$_POST["table_style"],1);if($Cc=="tar")echo
pack("x512");}}}if($Hd)echo"-- ".$g->result("SELECT NOW()")."\n";exit;}page_header(lang(70),$n,($_GET["export"]!=""?array("table"=>$_GET["export"]):array()),h(DB));echo'
<form action="" method="post">
<table cellspacing="0">
';$Kb=array('','USE','DROP+CREATE','CREATE');$lh=array('','DROP+CREATE','CREATE');$Ib=array('','TRUNCATE+INSERT','INSERT');if($x=="sql")$Ib[]='INSERT+UPDATE';parse_str($_COOKIE["adminer_export"],$K);if(!$K)$K=array("output"=>"text","format"=>"sql","db_style"=>(DB!=""?"":"CREATE"),"table_style"=>"DROP+CREATE","data_style"=>"INSERT");if(!isset($K["events"])){$K["routines"]=$K["events"]=($_GET["dump"]=="");$K["triggers"]=$K["table_style"];}echo"<tr><th>".lang(133)."<td>".html_select("output",$b->dumpOutput(),$K["output"],0)."\n";echo"<tr><th>".lang(134)."<td>".html_select("format",$b->dumpFormat(),$K["format"],0)."\n";echo($x=="sqlite"?"":"<tr><th>".lang(35)."<td>".html_select('db_style',$Kb,$K["db_style"]).(support("routine")?checkbox("routines",1,$K["routines"],lang(135)):"").(support("event")?checkbox("events",1,$K["events"],lang(136)):"")),"<tr><th>".lang(115)."<td>".html_select('table_style',$lh,$K["table_style"]).checkbox("auto_increment",1,$K["auto_increment"],lang(48)).(support("trigger")?checkbox("triggers",1,$K["triggers"],lang(130)):""),"<tr><th>".lang(137)."<td>".html_select('data_style',$Ib,$K["data_style"]),'</table>
<p><input type="submit" value="',lang(70),'">
<input type="hidden" name="token" value="',$Eh,'">

<table cellspacing="0">
';$Lf=array();if(DB!=""){$db=($a!=""?"":" checked");echo"<thead><tr>","<th style='text-align: left;'><label class='block'><input type='checkbox' id='check-tables'$db>".lang(115)."</label>".script("qs('#check-tables').onclick = partial(formCheck, /^tables\\[/);",""),"<th style='text-align: right;'><label class='block'>".lang(137)."<input type='checkbox' id='check-data'$db></label>".script("qs('#check-data').onclick = partial(formCheck, /^data\\[/);",""),"</thead>\n";$ri="";$mh=tables_list();foreach($mh
as$C=>$U){$Kf=preg_replace('~_.*~','',$C);$db=($a==""||$a==(substr($a,-1)=="%"?"$Kf%":$C));$Of="<tr><td>".checkbox("tables[]",$C,$db,$C,"checkboxClick.call(this, event); formUncheck('check-tables');","block");if($U!==null&&!preg_match('~table~i',$U))$ri.="$Of\n";else
echo"$Of<td align='right'><label class='block'><span id='Rows-".h($C)."'></span>".checkbox("data[]",$C,$db,"","checkboxClick.call(this, event); formUncheck('check-data');")."</label>\n";$Lf[$Kf]++;}echo$ri;if($mh)echo
script("ajaxSetHtml('".js_escape(ME)."script=db');");}else{echo"<thead><tr><th style='text-align: left;'>","<label class='block'><input type='checkbox' id='check-databases'".($a==""?" checked":"").">".lang(35)."</label>",script("qs('#check-databases').onclick = partial(formCheck, /^databases\\[/);",""),"</thead>\n";$l=$b->databases();if($l){foreach($l
as$m){if(!information_schema($m)){$Kf=preg_replace('~_.*~','',$m);echo"<tr><td>".checkbox("databases[]",$m,$a==""||$a=="$Kf%",$m,"formUncheck('check-databases');","block")."\n";$Lf[$Kf]++;}}}else
echo"<tr><td><textarea name='databases' rows='10' cols='20'></textarea>";}echo'</table>
</form>
';$Nc=true;foreach($Lf
as$y=>$X){if($y!=""&&$X>1){echo($Nc?"<p>":" ")."<a href='".h(ME)."dump=".urlencode("$y%")."'>".h($y)."</a>";$Nc=false;}}}elseif(isset($_GET["privileges"])){page_header(lang(68));echo'<p class="links"><a href="'.h(ME).'user=">'.lang(138)."</a>";$I=$g->query("SELECT User, Host FROM mysql.".(DB==""?"user":"db WHERE ".q(DB)." LIKE Db")." ORDER BY Host, User");$bd=$I;if(!$I)$I=$g->query("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1) AS User, SUBSTRING_INDEX(CURRENT_USER, '@', -1) AS Host");echo"<form action=''><p>\n";hidden_fields_get();echo"<input type='hidden' name='db' value='".h(DB)."'>\n",($bd?"":"<input type='hidden' name='grant' value=''>\n"),"<table cellspacing='0'>\n","<thead><tr><th>".lang(33)."<th>".lang(32)."<th>&nbsp;</thead>\n";while($K=$I->fetch_assoc())echo'<tr'.odd().'><td>'.h($K["User"])."<td>".h($K["Host"]).'<td><a href="'.h(ME.'user='.urlencode($K["User"]).'&host='.urlencode($K["Host"])).'">'.lang(10)."</a>\n";if(!$bd||DB!="")echo"<tr".odd()."><td><input name='user' autocapitalize='off'><td><input name='host' value='localhost' autocapitalize='off'><td><input type='submit' value='".lang(10)."'>\n";echo"</table>\n","</form>\n";}elseif(isset($_GET["sql"])){if(!$n&&$_POST["export"]){dump_headers("sql");$b->dumpTable("","");$b->dumpData("","table",$_POST["query"]);exit;}restart_session();$md=&get_session("queries");$ld=&$md[DB];if(!$n&&$_POST["clear"]){$ld=array();redirect(remove_from_uri("history"));}page_header((isset($_GET["import"])?lang(69):lang(61)),$n);if(!$n&&$_POST){$Yc=false;if(!isset($_GET["import"]))$H=$_POST["query"];elseif($_POST["webfile"]){$Yc=@fopen((file_exists("adminer.sql")?"adminer.sql":"compress.zlib://adminer.sql.gz"),"rb");$H=($Yc?fread($Yc,1e6):false);}else$H=get_file("sql_file",true);if(is_string($H)){if(function_exists('memory_get_usage'))@ini_set("memory_limit",max(ini_bytes("memory_limit"),2*strlen($H)+memory_get_usage()+8e6));if($H!=""&&strlen($H)<1e6){$Vf=$H.(preg_match("~;[ \t\r\n]*\$~",$H)?"":";");if(!$ld||reset(end($ld))!=$Vf){restart_session();$ld[]=array($Vf,time());set_session("queries",$md);stop_session();}}$Sg="(?:\\s|/\\*[\s\S]*?\\*/|(?:#|-- )[^\n]*\n?|--\r?\n)";$Pb=";";$D=0;$oc=true;$h=connect();if(is_object($h)&&DB!="")$h->select_db(DB);$rb=0;$tc=array();$uf='[\'"'.($x=="sql"?'`#':($x=="sqlite"?'`[':($x=="mssql"?'[':''))).']|/\\*|-- |$'.($x=="pgsql"?'|\\$[^$]*\\$':'');$Gh=microtime(true);parse_str($_COOKIE["adminer_export"],$xa);$fc=$b->dumpFormat();unset($fc["sql"]);while($H!=""){if(!$D&&preg_match("~^$Sg*+DELIMITER\\s+(\\S+)~i",$H,$B)){$Pb=$B[1];$H=substr($H,strlen($B[0]));}else{preg_match('('.preg_quote($Pb)."\\s*|$uf)",$H,$B,PREG_OFFSET_CAPTURE,$D);list($Wc,$Gf)=$B[0];if(!$Wc&&$Yc&&!feof($Yc))$H.=fread($Yc,1e5);else{if(!$Wc&&rtrim($H)=="")break;$D=$Gf+strlen($Wc);if($Wc&&rtrim($Wc)!=$Pb){while(preg_match('('.($Wc=='/*'?'\\*/':($Wc=='['?']':(preg_match('~^-- |^#~',$Wc)?"\n":preg_quote($Wc)."|\\\\."))).'|$)s',$H,$B,PREG_OFFSET_CAPTURE,$D)){$xg=$B[0][0];if(!$xg&&$Yc&&!feof($Yc))$H.=fread($Yc,1e5);else{$D=$B[0][1]+strlen($xg);if($xg[0]!="\\")break;}}}else{$oc=false;$Vf=substr($H,0,$Gf);$rb++;$Of="<pre id='sql-$rb'><code class='jush-$x'>".$b->sqlCommandQuery($Vf)."</code></pre>\n";if($x=="sqlite"&&preg_match("~^$Sg*+ATTACH\\b~i",$Vf,$B)){echo$Of,"<p class='error'>".lang(139)."\n";$tc[]=" <a href='#sql-$rb'>$rb</a>";if($_POST["error_stops"])break;}else{if(!$_POST["only_errors"]){echo$Of;ob_flush();flush();}$Wg=microtime(true);if($g->multi_query($Vf)&&is_object($h)&&preg_match("~^$Sg*+USE\\b~i",$Vf))$h->query($Vf);do{$I=$g->store_result();$wh=" <span class='time'>(".format_time($Wg).")</span>".(strlen($Vf)<1000?" <a href='".h(ME)."sql=".urlencode(trim($Vf))."'>".lang(10)."</a>":"");if($g->error){echo($_POST["only_errors"]?$Of:""),"<p class='error'>".lang(140).($g->errno?" ($g->errno)":"").": ".error()."\n";$tc[]=" <a href='#sql-$rb'>$rb</a>";if($_POST["error_stops"])break
2;}elseif(is_object($I)){$z=$_POST["limit"];$if=select($I,$h,array(),$z);if(!$_POST["only_errors"]){echo"<form action='' method='post'>\n";$Le=$I->num_rows;echo"<p>".($Le?($z&&$Le>$z?lang(141,$z):"").lang(142,$Le):""),$wh;$t="export-$rb";$Bc=", <a href='#$t'>".lang(70)."</a>".script("qsl('a').onclick = partial(toggle, '$t');","")."<span id='$t' class='hidden'>: ".html_select("output",$b->dumpOutput(),$xa["output"])." ".html_select("format",$fc,$xa["format"])."<input type='hidden' name='query' value='".h($Vf)."'>"." <input type='submit' name='export' value='".lang(70)."'><input type='hidden' name='token' value='$Eh'></span>\n";if($h&&preg_match("~^($Sg|\\()*+SELECT\\b~i",$Vf)&&($Ac=explain($h,$Vf))){$t="explain-$rb";echo", <a href='#$t'>EXPLAIN</a>".script("qsl('a').onclick = partial(toggle, '$t');","").$Bc,"<div id='$t' class='hidden'>\n";select($Ac,$h,$if);echo"</div>\n";}else
echo$Bc;echo"</form>\n";}}else{if(preg_match("~^$Sg*+(CREATE|DROP|ALTER)$Sg++(DATABASE|SCHEMA)\\b~i",$Vf)){restart_session();set_session("dbs",null);stop_session();}if(!$_POST["only_errors"])echo"<p class='message' title='".h($g->info)."'>".lang(143,$g->affected_rows)."$wh\n";}$Wg=microtime(true);}while($g->next_result());}$H=substr($H,$D);$D=0;}}}}if($oc)echo"<p class='message'>".lang(144)."\n";elseif($_POST["only_errors"]){echo"<p class='message'>".lang(145,$rb-count($tc))," <span class='time'>(".format_time($Gh).")</span>\n";}elseif($tc&&$rb>1)echo"<p class='error'>".lang(140).": ".implode("",$tc)."\n";}else
echo"<p class='error'>".upload_error($H)."\n";}echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
';$yc="<input type='submit' value='".lang(146)."' title='Ctrl+Enter'>";if(!isset($_GET["import"])){$Vf=$_GET["sql"];if($_POST)$Vf=$_POST["query"];elseif($_GET["history"]=="all")$Vf=$ld;elseif($_GET["history"]!="")$Vf=$ld[$_GET["history"]][0];echo"<p>";textarea("query",$Vf,20);echo($_POST?"":script("qs('textarea').focus();")),"<p>$yc\n",lang(147).": <input type='number' name='limit' class='size' value='".h($_POST?$_POST["limit"]:$_GET["limit"])."'>\n";}else{echo"<fieldset><legend>".lang(148)."</legend><div>",(ini_bool("file_uploads")?"SQL (&lt; ".ini_get("upload_max_filesize")."B): <input type='file' name='sql_file[]' multiple>\n$yc":lang(149)),"</div></fieldset>\n","<fieldset><legend>".lang(150)."</legend><div>",lang(151,"<code>adminer.sql".(extension_loaded("zlib")?"[.gz]":"")."</code>"),' <input type="submit" name="webfile" value="'.lang(152).'">',"</div></fieldset>\n","<p>";}echo
checkbox("error_stops",1,($_POST?$_POST["error_stops"]:isset($_GET["import"])),lang(153))."\n",checkbox("only_errors",1,($_POST?$_POST["only_errors"]:isset($_GET["import"])),lang(154))."\n","<input type='hidden' name='token' value='$Eh'>\n";if(!isset($_GET["import"])&&$ld){print_fieldset("history",lang(155),$_GET["history"]!="");for($X=end($ld);$X;$X=prev($ld)){$y=key($ld);list($Vf,$wh,$jc)=$X;echo'<a href="'.h(ME."sql=&history=$y").'">'.lang(10)."</a>"." <span class='time' title='".@date('Y-m-d',$wh)."'>".@date("H:i:s",$wh)."</span>"." <code class='jush-$x'>".shorten_utf8(ltrim(str_replace("\n"," ",str_replace("\r","",preg_replace('~^(#|-- ).*~m','',$Vf)))),80,"</code>").($jc?" <span class='time'>($jc)</span>":"")."<br>\n";}echo"<input type='submit' name='clear' value='".lang(156)."'>\n","<a href='".h(ME."sql=&history=all")."'>".lang(157)."</a>\n","</div></fieldset>\n";}echo'</form>
';}elseif(isset($_GET["edit"])){$a=$_GET["edit"];$p=fields($a);$Z=(isset($_GET["select"])?($_POST["check"]&&count($_POST["check"])==1?where_check($_POST["check"][0],$p):""):where($_GET,$p));$bi=(isset($_GET["select"])?$_POST["edit"]:$Z);foreach($p
as$C=>$o){if(!isset($o["privileges"][$bi?"update":"insert"])||$b->fieldName($o)=="")unset($p[$C]);}if($_POST&&!$n&&!isset($_GET["select"])){$A=$_POST["referer"];if($_POST["insert"])$A=($bi?null:$_SERVER["REQUEST_URI"]);elseif(!preg_match('~^.+&select=.+$~',$A))$A=ME."select=".urlencode($a);$w=indexes($a);$Wh=unique_array($_GET["where"],$w);$Yf="\nWHERE $Z";if(isset($_POST["delete"]))queries_redirect($A,lang(158),$Yb->delete($a,$Yf,!$Wh));else{$O=array();foreach($p
as$C=>$o){$X=process_input($o);if($X!==false&&$X!==null)$O[idf_escape($C)]=$X;}if($bi){if(!$O)redirect($A);queries_redirect($A,lang(159),$Yb->update($a,$O,$Yf,!$Wh));if(is_ajax()){page_headers();page_messages($n);exit;}}else{$I=$Yb->insert($a,$O);$Yd=($I?last_id():0);queries_redirect($A,lang(160,($Yd?" $Yd":"")),$I);}}}$K=null;if($_POST["save"])$K=(array)$_POST["fields"];elseif($Z){$M=array();foreach($p
as$C=>$o){if(isset($o["privileges"]["select"])){$Ga=convert_field($o);if($_POST["clone"]&&$o["auto_increment"])$Ga="''";if($x=="sql"&&preg_match("~enum|set~",$o["type"]))$Ga="1*".idf_escape($C);$M[]=($Ga?"$Ga AS ":"").idf_escape($C);}}$K=array();if(!support("table"))$M=array("*");if($M){$I=$Yb->select($a,$M,array($Z),$M,array(),(isset($_GET["select"])?2:1));$K=$I->fetch_assoc();if(!$K)$K=false;if(isset($_GET["select"])&&(!$K||$I->fetch_assoc()))$K=null;}}if(!support("table")&&!$p){if(!$Z){$I=$Yb->select($a,array("*"),$Z,array("*"));$K=($I?$I->fetch_assoc():false);if(!$K)$K=array($Yb->primary=>"");}if($K){foreach($K
as$y=>$X){if(!$Z)$K[$y]=null;$p[$y]=array("field"=>$y,"null"=>($y!=$Yb->primary),"auto_increment"=>($y==$Yb->primary));}}}edit_form($a,$p,$K,$bi);}elseif(isset($_GET["create"])){$a=$_GET["create"];$wf=array();foreach(array('HASH','LINEAR HASH','KEY','LINEAR KEY','RANGE','LIST')as$y)$wf[$y]=$y;$fg=referencable_primary($a);$Uc=array();foreach($fg
as$hh=>$o)$Uc[str_replace("`","``",$hh)."`".str_replace("`","``",$o["field"])]=$hh;$lf=array();$S=array();if($a!=""){$lf=fields($a);$S=table_status($a);if(!$S)$n=lang(9);}$K=$_POST;$K["fields"]=(array)$K["fields"];if($K["auto_increment_col"])$K["fields"][$K["auto_increment_col"]]["auto_increment"]=true;if($_POST&&!process_fields($K["fields"])&&!$n){if($_POST["drop"])queries_redirect(substr(ME,0,-1),lang(161),drop_tables(array($a)));else{$p=array();$Da=array();$gi=false;$Sc=array();$kf=reset($lf);$Aa=" FIRST";foreach($K["fields"]as$y=>$o){$q=$Uc[$o["type"]];$Rh=($q!==null?$fg[$q]:$o);if($o["field"]!=""){if(!$o["has_default"])$o["default"]=null;if($y==$K["auto_increment_col"])$o["auto_increment"]=true;$Tf=process_field($o,$Rh);$Da[]=array($o["orig"],$Tf,$Aa);if($Tf!=process_field($kf,$kf)){$p[]=array($o["orig"],$Tf,$Aa);if($o["orig"]!=""||$Aa)$gi=true;}if($q!==null)$Sc[idf_escape($o["field"])]=($a!=""&&$x!="sqlite"?"ADD":" ").format_foreign_key(array('table'=>$Uc[$o["type"]],'source'=>array($o["field"]),'target'=>array($Rh["field"]),'on_delete'=>$o["on_delete"],));$Aa=" AFTER ".idf_escape($o["field"]);}elseif($o["orig"]!=""){$gi=true;$p[]=array($o["orig"]);}if($o["orig"]!=""){$kf=next($lf);if(!$kf)$Aa="";}}$yf="";if($wf[$K["partition_by"]]){$zf=array();if($K["partition_by"]=='RANGE'||$K["partition_by"]=='LIST'){foreach(array_filter($K["partition_names"])as$y=>$X){$Y=$K["partition_values"][$y];$zf[]="\n  PARTITION ".idf_escape($X)." VALUES ".($K["partition_by"]=='RANGE'?"LESS THAN":"IN").($Y!=""?" ($Y)":" MAXVALUE");}}$yf.="\nPARTITION BY $K[partition_by]($K[partition])".($zf?" (".implode(",",$zf)."\n)":($K["partitions"]?" PARTITIONS ".(+$K["partitions"]):""));}elseif(support("partitioning")&&preg_match("~partitioned~",$S["Create_options"]))$yf.="\nREMOVE PARTITIONING";$te=lang(162);if($a==""){cookie("adminer_engine",$K["Engine"]);$te=lang(163);}$C=trim($K["name"]);queries_redirect(ME.(support("table")?"table=":"select=").urlencode($C),$te,alter_table($a,$C,($x=="sqlite"&&($gi||$Sc)?$Da:$p),$Sc,($K["Comment"]!=$S["Comment"]?$K["Comment"]:null),($K["Engine"]&&$K["Engine"]!=$S["Engine"]?$K["Engine"]:""),($K["Collation"]&&$K["Collation"]!=$S["Collation"]?$K["Collation"]:""),($K["Auto_increment"]!=""?number($K["Auto_increment"]):""),$yf));}}page_header(($a!=""?lang(42):lang(71)),$n,array("table"=>$a),h($a));if(!$_POST){$K=array("Engine"=>$_COOKIE["adminer_engine"],"fields"=>array(array("field"=>"","type"=>(isset($Th["int"])?"int":(isset($Th["integer"])?"integer":"")))),"partition_names"=>array(""),);if($a!=""){$K=$S;$K["name"]=$a;$K["fields"]=array();if(!$_GET["auto_increment"])$K["Auto_increment"]="";foreach($lf
as$o){$o["has_default"]=isset($o["default"]);$K["fields"][]=$o;}if(support("partitioning")){$Zc="FROM information_schema.PARTITIONS WHERE TABLE_SCHEMA = ".q(DB)." AND TABLE_NAME = ".q($a);$I=$g->query("SELECT PARTITION_METHOD, PARTITION_ORDINAL_POSITION, PARTITION_EXPRESSION $Zc ORDER BY PARTITION_ORDINAL_POSITION DESC LIMIT 1");list($K["partition_by"],$K["partitions"],$K["partition"])=$I->fetch_row();$zf=get_key_vals("SELECT PARTITION_NAME, PARTITION_DESCRIPTION $Zc AND PARTITION_NAME != '' ORDER BY PARTITION_ORDINAL_POSITION");$zf[""]="";$K["partition_names"]=array_keys($zf);$K["partition_values"]=array_values($zf);}}}$ob=collations();$qc=engines();foreach($qc
as$pc){if(!strcasecmp($pc,$K["Engine"])){$K["Engine"]=$pc;break;}}echo'
<form action="" method="post" id="form">
<p>
';if(support("columns")||$a==""){echo
lang(164),': <input name="name" maxlength="64" value="',h($K["name"]),'" autocapitalize="off">
';if($a==""&&!$_POST)echo
script("focus(qs('#form')['name']);");echo($qc?"<select name='Engine'>".optionlist(array(""=>"(".lang(165).")")+$qc,$K["Engine"])."</select>".on_help("getTarget(event).value",1).script("qsl('select').onchange = helpClose;"):""),' ',($ob&&!preg_match("~sqlite|mssql~",$x)?html_select("Collation",array(""=>"(".lang(93).")")+$ob,$K["Collation"]):""),' <input type="submit" value="',lang(14),'">
';}echo'
';if(support("columns")){echo'<table cellspacing="0" id="edit-fields" class="nowrap">
';$tb=($_POST?$_POST["comments"]:$K["Comment"]!="");if(!$_POST&&!$tb){foreach($K["fields"]as$o){if($o["comment"]!=""){$tb=true;break;}}}edit_fields($K["fields"],$ob,"TABLE",$Uc,$tb);echo'</table>
<p>
',lang(48),': <input type="number" name="Auto_increment" size="6" value="',h($K["Auto_increment"]),'">
',checkbox("defaults",1,true,lang(166),"columnShow(this.checked, 5)","jsonly");if(!$_POST["defaults"])echo
script("editingHideDefaults();");echo(support("comment")?"<label><input type='checkbox' name='comments' value='1' class='jsonly'".($tb?" checked":"").">".lang(47)."</label>".script("qsl('input').onclick = function () { columnShow(this.checked, 6); toggle('Comment'); if (this.checked) this.form['Comment'].focus(); };").' <input name="Comment" id="Comment" value="'.h($K["Comment"]).'" maxlength="'.($g->server_info>=5.5?2048:60).'"'.($tb?'':' class="hidden"').'>':''),'<p>
<input type="submit" value="',lang(14),'">
';}echo'
';if($a!=""){echo'<input type="submit" name="drop" value="',lang(119),'">',confirm();}if(support("partitioning")){$xf=preg_match('~RANGE|LIST~',$K["partition_by"]);print_fieldset("partition",lang(167),$K["partition_by"]);echo'<p>
',"<select name='partition_by'>".optionlist(array(""=>"")+$wf,$K["partition_by"])."</select>".on_help("getTarget(event).value.replace(/./, 'PARTITION BY \$&')",1).script("qsl('select').onchange = partitionByChange;"),'(<input name="partition" value="',h($K["partition"]),'">)
',lang(168),': <input type="number" name="partitions" class="size',($xf||!$K["partition_by"]?" hidden":""),'" value="',h($K["partitions"]),'">
<table cellspacing="0" id="partition-table"',($xf?"":" class='hidden'"),'>
<thead><tr><th>',lang(169),'<th>',lang(170),'</thead>
';foreach($K["partition_names"]as$y=>$X){echo'<tr>','<td><input name="partition_names[]" value="'.h($X).'" autocapitalize="off">',($y==count($K["partition_names"])-1?script("qsl('input').oninput = partitionNameChange;"):''),'<td><input name="partition_values[]" value="'.h($K["partition_values"][$y]).'">';}echo'</table>
</div></fieldset>
';}echo'<input type="hidden" name="token" value="',$Eh,'">
</form>
';}elseif(isset($_GET["indexes"])){$a=$_GET["indexes"];$vd=array("PRIMARY","UNIQUE","INDEX");$S=table_status($a,true);if(preg_match('~MyISAM|M?aria'.($g->server_info>=5.6?'|InnoDB':'').'~i',$S["Engine"]))$vd[]="FULLTEXT";if(preg_match('~MyISAM|M?aria'.($g->server_info>=5.7?'|InnoDB':'').'~i',$S["Engine"]))$vd[]="SPATIAL";$w=indexes($a);$Mf=array();if($x=="mongo"){$Mf=$w["_id_"];unset($vd[0]);unset($w["_id_"]);}$K=$_POST;if($_POST&&!$n&&!$_POST["add"]&&!$_POST["drop_col"]){$c=array();foreach($K["indexes"]as$v){$C=$v["name"];if(in_array($v["type"],$vd)){$e=array();$ee=array();$Rb=array();$O=array();ksort($v["columns"]);foreach($v["columns"]as$y=>$d){if($d!=""){$de=$v["lengths"][$y];$Qb=$v["descs"][$y];$O[]=idf_escape($d).($de?"(".(+$de).")":"").($Qb?" DESC":"");$e[]=$d;$ee[]=($de?$de:null);$Rb[]=$Qb;}}if($e){$zc=$w[$C];if($zc){ksort($zc["columns"]);ksort($zc["lengths"]);ksort($zc["descs"]);if($v["type"]==$zc["type"]&&array_values($zc["columns"])===$e&&(!$zc["lengths"]||array_values($zc["lengths"])===$ee)&&array_values($zc["descs"])===$Rb){unset($w[$C]);continue;}}$c[]=array($v["type"],$C,$O);}}}foreach($w
as$C=>$zc)$c[]=array($zc["type"],$C,"DROP");if(!$c)redirect(ME."table=".urlencode($a));queries_redirect(ME."table=".urlencode($a),lang(171),alter_indexes($a,$c));}page_header(lang(124),$n,array("table"=>$a),h($a));$p=array_keys(fields($a));if($_POST["add"]){foreach($K["indexes"]as$y=>$v){if($v["columns"][count($v["columns"])]!="")$K["indexes"][$y]["columns"][]="";}$v=end($K["indexes"]);if($v["type"]||array_filter($v["columns"],'strlen'))$K["indexes"][]=array("columns"=>array(1=>""));}if(!$K){foreach($w
as$y=>$v){$w[$y]["name"]=$y;$w[$y]["columns"][]="";}$w[]=array("columns"=>array(1=>""));$K["indexes"]=$w;}echo'
<form action="" method="post">
<table cellspacing="0" class="nowrap">
<thead><tr>
<th id="label-type">',lang(172),'<th><input type="submit" class="wayoff">',lang(173),'<th id="label-name">',lang(174);?>
<th><noscript><input type='image' class='icon' name='add[0]' src='" . h(preg_replace("~\\?.*~", "", ME) . "?file=plus.gif&version=4.4.0") . "' alt='+' title='<?php echo
lang(100),'\'></noscript>&nbsp;
</thead>
';if($Mf){echo"<tr><td>PRIMARY<td>";foreach($Mf["columns"]as$y=>$d){echo
select_input(" disabled",$p,$d),"<label><input disabled type='checkbox'>".lang(56)."</label> ";}echo"<td><td>\n";}$Ld=1;foreach($K["indexes"]as$v){if(!$_POST["drop_col"]||$Ld!=key($_POST["drop_col"])){echo"<tr><td>".html_select("indexes[$Ld][type]",array(-1=>"")+$vd,$v["type"],($Ld==count($K["indexes"])?"indexesAddRow.call(this);":1),"label-type"),"<td>";ksort($v["columns"]);$s=1;foreach($v["columns"]as$y=>$d){echo"<span>".select_input(" name='indexes[$Ld][columns][$s]' title='".lang(45)."'",($p?array_combine($p,$p):$p),$d,"partial(".($s==count($v["columns"])?"indexesAddColumn":"indexesChangeColumn").", '".js_escape($x=="sql"?"":$_GET["indexes"]."_")."')"),($x=="sql"||$x=="mssql"?"<input type='number' name='indexes[$Ld][lengths][$s]' class='size' value='".h($v["lengths"][$y])."' title='".lang(98)."'>":""),($x!="sql"?checkbox("indexes[$Ld][descs][$s]",1,$v["descs"][$y],lang(56)):"")," </span>";$s++;}echo"<td><input name='indexes[$Ld][name]' value='".h($v["name"])."' autocapitalize='off' aria-labelledby='label-name'>\n","<td><input type='image' class='icon' name='drop_col[$Ld]' src='".h(preg_replace("~\\?.*~","",ME)."?file=cross.gif&version=4.4.0")."' alt='x' title='".lang(103)."'>".script("qsl('input').onclick = partial(editingRemoveRow, 'indexes\$1[type]');");}$Ld++;}echo'</table>
<p>
<input type="submit" value="',lang(14),'">
<input type="hidden" name="token" value="',$Eh,'">
</form>
';}elseif(isset($_GET["database"])){$K=$_POST;if($_POST&&!$n&&!isset($_POST["add_x"])){$C=trim($K["name"]);if($_POST["drop"]){$_GET["db"]="";queries_redirect(remove_from_uri("db|database"),lang(175),drop_databases(array(DB)));}elseif(DB!==$C){if(DB!=""){$_GET["db"]=$C;queries_redirect(preg_replace('~\bdb=[^&]*&~','',ME)."db=".urlencode($C),lang(176),rename_database($C,$K["collation"]));}else{$l=explode("\n",str_replace("\r","",$C));$bh=true;$Xd="";foreach($l
as$m){if(count($l)==1||$m!=""){if(!create_database($m,$K["collation"]))$bh=false;$Xd=$m;}}restart_session();set_session("dbs",null);queries_redirect(ME."db=".urlencode($Xd),lang(177),$bh);}}else{if(!$K["collation"])redirect(substr(ME,0,-1));query_redirect("ALTER DATABASE ".idf_escape($C).(preg_match('~^[a-z0-9_]+$~i',$K["collation"])?" COLLATE $K[collation]":""),substr(ME,0,-1),lang(178));}}page_header(DB!=""?lang(64):lang(107),$n,array(),h(DB));$ob=collations();$C=DB;if($_POST)$C=$K["name"];elseif(DB!="")$K["collation"]=db_collation(DB,$ob);elseif($x=="sql"){foreach(get_vals("SHOW GRANTS")as$bd){if(preg_match('~ ON (`(([^\\\\`]|``|\\\\.)*)%`\\.\\*)?~',$bd,$B)&&$B[1]){$C=stripcslashes(idf_unescape("`$B[2]`"));break;}}}echo'
<form action="" method="post">
<p>
',($_POST["add_x"]||strpos($C,"\n")?'<textarea id="name" name="name" rows="10" cols="40">'.h($C).'</textarea><br>':'<input name="name" id="name" value="'.h($C).'" maxlength="64" autocapitalize="off">')."\n".($ob?html_select("collation",array(""=>"(".lang(93).")")+$ob,$K["collation"]).doc_link(array('sql'=>"charset-charsets.html",'mssql'=>"ms187963.aspx",)):""),script("focus(qs('#name'));"),'<input type="submit" value="',lang(14),'">
';if(DB!="")echo"<input type='submit' name='drop' value='".lang(119)."'>".confirm()."\n";elseif(!$_POST["add_x"]&&$_GET["db"]=="")echo"<input type='image' class='icon' name='add' src='".h(preg_replace("~\\?.*~","",ME)."?file=plus.gif&version=4.4.0")."' alt='+' title='".lang(100)."'>\n";echo'<input type="hidden" name="token" value="',$Eh,'">
</form>
';}elseif(isset($_GET["scheme"])){$K=$_POST;if($_POST&&!$n){$_=preg_replace('~ns=[^&]*&~','',ME)."ns=";if($_POST["drop"])query_redirect("DROP SCHEMA ".idf_escape($_GET["ns"]),$_,lang(179));else{$C=trim($K["name"]);$_.=urlencode($C);if($_GET["ns"]=="")query_redirect("CREATE SCHEMA ".idf_escape($C),$_,lang(180));elseif($_GET["ns"]!=$C)query_redirect("ALTER SCHEMA ".idf_escape($_GET["ns"])." RENAME TO ".idf_escape($C),$_,lang(181));else
redirect($_);}}page_header($_GET["ns"]!=""?lang(65):lang(66),$n);if(!$K)$K["name"]=$_GET["ns"];echo'
<form action="" method="post">
<p><input name="name" id="name" value="',h($K["name"]),'" autocapitalize="off">
',script("focus(qs('#name'));"),'<input type="submit" value="',lang(14),'">
';if($_GET["ns"]!="")echo"<input type='submit' name='drop' value='".lang(119)."'>".confirm()."\n";echo'<input type="hidden" name="token" value="',$Eh,'">
</form>
';}elseif(isset($_GET["call"])){$da=$_GET["call"];page_header(lang(182).": ".h($da),$n);$tg=routine($da,(isset($_GET["callf"])?"FUNCTION":"PROCEDURE"));$td=array();$pf=array();foreach($tg["fields"]as$s=>$o){if(substr($o["inout"],-3)=="OUT")$pf[$s]="@".idf_escape($o["field"])." AS ".idf_escape($o["field"]);if(!$o["inout"]||substr($o["inout"],0,2)=="IN")$td[]=$s;}if(!$n&&$_POST){$Ya=array();foreach($tg["fields"]as$y=>$o){if(in_array($y,$td)){$X=process_input($o);if($X===false)$X="''";if(isset($pf[$y]))$g->query("SET @".idf_escape($o["field"])." = $X");}$Ya[]=(isset($pf[$y])?"@".idf_escape($o["field"]):$X);}$H=(isset($_GET["callf"])?"SELECT":"CALL")." ".table($da)."(".implode(", ",$Ya).")";echo"<p><code class='jush-$x'>".h($H)."</code> <a href='".h(ME)."sql=".urlencode($H)."'>".lang(10)."</a>\n";if(!$g->multi_query($H))echo"<p class='error'>".error()."\n";else{$h=connect();if(is_object($h))$h->select_db(DB);do{$I=$g->store_result();if(is_object($I))select($I,$h);else
echo"<p class='message'>".lang(183,$g->affected_rows)."\n";}while($g->next_result());if($pf)select($g->query("SELECT ".implode(", ",$pf)));}}echo'
<form action="" method="post">
';if($td){echo"<table cellspacing='0'>\n";foreach($td
as$y){$o=$tg["fields"][$y];$C=$o["field"];echo"<tr><th>".$b->fieldName($o);$Y=$_POST["fields"][$C];if($Y!=""){if($o["type"]=="enum")$Y=+$Y;if($o["type"]=="set")$Y=array_sum($Y);}input($o,$Y,(string)$_POST["function"][$C]);echo"\n";}echo"</table>\n";}echo'<p>
<input type="submit" value="',lang(182),'">
<input type="hidden" name="token" value="',$Eh,'">
</form>
';}elseif(isset($_GET["foreign"])){$a=$_GET["foreign"];$C=$_GET["name"];$K=$_POST;if($_POST&&!$n&&!$_POST["add"]&&!$_POST["change"]&&!$_POST["change-js"]){$te=($_POST["drop"]?lang(184):($C!=""?lang(185):lang(186)));$A=ME."table=".urlencode($a);if(!$_POST["drop"]){$K["source"]=array_filter($K["source"],'strlen');ksort($K["source"]);$ph=array();foreach($K["source"]as$y=>$X)$ph[$y]=$K["target"][$y];$K["target"]=$ph;}if($x=="sqlite")queries_redirect($A,$te,recreate_table($a,$a,array(),array(),array(" $C"=>($_POST["drop"]?"":" ".format_foreign_key($K)))));else{$c="ALTER TABLE ".table($a);$ac="\nDROP ".($x=="sql"?"FOREIGN KEY ":"CONSTRAINT ").idf_escape($C);if($_POST["drop"])query_redirect($c.$ac,$A,$te);else{query_redirect($c.($C!=""?"$ac,":"")."\nADD".format_foreign_key($K),$A,$te);$n=lang(187)."<br>$n";}}}page_header(lang(188),$n,array("table"=>$a),h($a));if($_POST){ksort($K["source"]);if($_POST["add"])$K["source"][]="";elseif($_POST["change"]||$_POST["change-js"])$K["target"]=array();}elseif($C!=""){$Uc=foreign_keys($a);$K=$Uc[$C];$K["source"][]="";}else{$K["table"]=$a;$K["source"]=array("");}$Rg=array_keys(fields($a));$ph=($a===$K["table"]?$Rg:array_keys(fields($K["table"])));$eg=array_keys(array_filter(table_status('',true),'fk_support'));echo'
<form action="" method="post">
<p>
';if($K["db"]==""&&$K["ns"]==""){echo
lang(189),':
',html_select("table",$eg,$K["table"],"this.form['change-js'].value = '1'; this.form.submit();"),'<input type="hidden" name="change-js" value="">
<noscript><p><input type="submit" name="change" value="',lang(190),'"></noscript>
<table cellspacing="0">
<thead><tr><th id="label-source">',lang(126),'<th id="label-target">',lang(127),'</thead>
';$Ld=0;foreach($K["source"]as$y=>$X){echo"<tr>","<td>".html_select("source[".(+$y)."]",array(-1=>"")+$Rg,$X,($Ld==count($K["source"])-1?"foreignAddRow.call(this);":1),"label-source"),"<td>".html_select("target[".(+$y)."]",$ph,$K["target"][$y],1,"label-target");$Ld++;}echo'</table>
<p>
',lang(95),': ',html_select("on_delete",array(-1=>"")+explode("|",$Ve),$K["on_delete"]),' ',lang(94),': ',html_select("on_update",array(-1=>"")+explode("|",$Ve),$K["on_update"]),doc_link(array('sql'=>"innodb-foreign-key-constraints.html",'pgsql'=>"sql-createtable.html#SQL-CREATETABLE-REFERENCES",'mssql'=>"ms174979.aspx",'oracle'=>"clauses002.htm#sthref2903",)),'<p>
<input type="submit" value="',lang(14),'">
<noscript><p><input type="submit" name="add" value="',lang(191),'"></noscript>
';}if($C!=""){echo'<input type="submit" name="drop" value="',lang(119),'">',confirm();}echo'<input type="hidden" name="token" value="',$Eh,'">
</form>
';}elseif(isset($_GET["view"])){$a=$_GET["view"];$K=$_POST;$mf="VIEW";if($x=="pgsql"&&$a!=""){$P=table_status($a);$mf=strtoupper($P["Engine"]);}if($_POST&&!$n){$C=trim($K["name"]);$Ga=" AS\n$K[select]";$A=ME."table=".urlencode($C);$te=lang(192);$U=($_POST["materialized"]?"MATERIALIZED VIEW":"VIEW");if(!$_POST["drop"]&&$a==$C&&$x!="sqlite"&&$U=="VIEW"&&$mf=="VIEW")query_redirect(($x=="mssql"?"ALTER":"CREATE OR REPLACE")." VIEW ".table($C).$Ga,$A,$te);else{$rh=$C."_adminer_".uniqid();drop_create("DROP $mf ".table($a),"CREATE $U ".table($C).$Ga,"DROP $U ".table($C),"CREATE $U ".table($rh).$Ga,"DROP $U ".table($rh),($_POST["drop"]?substr(ME,0,-1):$A),lang(193),$te,lang(194),$a,$C);}}if(!$_POST&&$a!=""){$K=view($a);$K["name"]=$a;$K["materialized"]=($mf!="VIEW");if(!$n)$n=error();}page_header(($a!=""?lang(41):lang(195)),$n,array("table"=>$a),h($a));echo'
<form action="" method="post">
<p>',lang(174),': <input name="name" value="',h($K["name"]),'" maxlength="64" autocapitalize="off">
',(support("materializedview")?" ".checkbox("materialized",1,$K["materialized"],lang(121)):""),'<p>';textarea("select",$K["select"]);echo'<p>
<input type="submit" value="',lang(14),'">
';if($_GET["view"]!=""){echo'<input type="submit" name="drop" value="',lang(119),'">',confirm();}echo'<input type="hidden" name="token" value="',$Eh,'">
</form>
';}elseif(isset($_GET["event"])){$aa=$_GET["event"];$Cd=array("YEAR","QUARTER","MONTH","DAY","HOUR","MINUTE","WEEK","SECOND","YEAR_MONTH","DAY_HOUR","DAY_MINUTE","DAY_SECOND","HOUR_MINUTE","HOUR_SECOND","MINUTE_SECOND");$Xg=array("ENABLED"=>"ENABLE","DISABLED"=>"DISABLE","SLAVESIDE_DISABLED"=>"DISABLE ON SLAVE");$K=$_POST;if($_POST&&!$n){if($_POST["drop"])query_redirect("DROP EVENT ".idf_escape($aa),substr(ME,0,-1),lang(196));elseif(in_array($K["INTERVAL_FIELD"],$Cd)&&isset($Xg[$K["STATUS"]])){$yg="\nON SCHEDULE ".($K["INTERVAL_VALUE"]?"EVERY ".q($K["INTERVAL_VALUE"])." $K[INTERVAL_FIELD]".($K["STARTS"]?" STARTS ".q($K["STARTS"]):"").($K["ENDS"]?" ENDS ".q($K["ENDS"]):""):"AT ".q($K["STARTS"]))." ON COMPLETION".($K["ON_COMPLETION"]?"":" NOT")." PRESERVE";queries_redirect(substr(ME,0,-1),($aa!=""?lang(197):lang(198)),queries(($aa!=""?"ALTER EVENT ".idf_escape($aa).$yg.($aa!=$K["EVENT_NAME"]?"\nRENAME TO ".idf_escape($K["EVENT_NAME"]):""):"CREATE EVENT ".idf_escape($K["EVENT_NAME"]).$yg)."\n".$Xg[$K["STATUS"]]." COMMENT ".q($K["EVENT_COMMENT"]).rtrim(" DO\n$K[EVENT_DEFINITION]",";").";"));}}page_header(($aa!=""?lang(199).": ".h($aa):lang(200)),$n);if(!$K&&$aa!=""){$L=get_rows("SELECT * FROM information_schema.EVENTS WHERE EVENT_SCHEMA = ".q(DB)." AND EVENT_NAME = ".q($aa));$K=reset($L);}echo'
<form action="" method="post">
<table cellspacing="0">
<tr><th>',lang(174),'<td><input name="EVENT_NAME" value="',h($K["EVENT_NAME"]),'" maxlength="64" autocapitalize="off">
<tr><th title="datetime">',lang(201),'<td><input name="STARTS" value="',h("$K[EXECUTE_AT]$K[STARTS]"),'">
<tr><th title="datetime">',lang(202),'<td><input name="ENDS" value="',h($K["ENDS"]),'">
<tr><th>',lang(203),'<td><input type="number" name="INTERVAL_VALUE" value="',h($K["INTERVAL_VALUE"]),'" class="size"> ',html_select("INTERVAL_FIELD",$Cd,$K["INTERVAL_FIELD"]),'<tr><th>',lang(110),'<td>',html_select("STATUS",$Xg,$K["STATUS"]),'<tr><th>',lang(47),'<td><input name="EVENT_COMMENT" value="',h($K["EVENT_COMMENT"]),'" maxlength="64">
<tr><th>&nbsp;<td>',checkbox("ON_COMPLETION","PRESERVE",$K["ON_COMPLETION"]=="PRESERVE",lang(204)),'</table>
<p>';textarea("EVENT_DEFINITION",$K["EVENT_DEFINITION"]);echo'<p>
<input type="submit" value="',lang(14),'">
';if($aa!=""){echo'<input type="submit" name="drop" value="',lang(119),'">',confirm();}echo'<input type="hidden" name="token" value="',$Eh,'">
</form>
';}elseif(isset($_GET["procedure"])){$da=$_GET["procedure"];$tg=(isset($_GET["function"])?"FUNCTION":"PROCEDURE");$K=$_POST;$K["fields"]=(array)$K["fields"];if($_POST&&!process_fields($K["fields"])&&!$n){$rh="$K[name]_adminer_".uniqid();drop_create("DROP $tg ".idf_escape($da),create_routine($tg,$K),"DROP $tg ".idf_escape($K["name"]),create_routine($tg,array("name"=>$rh)+$K),"DROP $tg ".idf_escape($rh),substr(ME,0,-1),lang(205),lang(206),lang(207),$da,$K["name"]);}page_header(($da!=""?(isset($_GET["function"])?lang(208):lang(209)).": ".h($da):(isset($_GET["function"])?lang(210):lang(211))),$n);if(!$_POST&&$da!=""){$K=routine($da,$tg);$K["name"]=$da;}$ob=get_vals("SHOW CHARACTER SET");sort($ob);$ug=routine_languages();echo'
<form action="" method="post" id="form">
<p>',lang(174),': <input name="name" value="',h($K["name"]),'" maxlength="64" autocapitalize="off">
',($ug?lang(19).": ".html_select("language",$ug,$K["language"]):""),'<input type="submit" value="',lang(14),'">
<table cellspacing="0" class="nowrap">
';edit_fields($K["fields"],$ob,$tg);if(isset($_GET["function"])){echo"<tr><td>".lang(212);edit_type("returns",$K["returns"],$ob);}echo'</table>
<p>';textarea("definition",$K["definition"]);echo'<p>
<input type="submit" value="',lang(14),'">
';if($da!=""){echo'<input type="submit" name="drop" value="',lang(119),'">',confirm();}echo'<input type="hidden" name="token" value="',$Eh,'">
</form>
';}elseif(isset($_GET["sequence"])){$fa=$_GET["sequence"];$K=$_POST;if($_POST&&!$n){$_=substr(ME,0,-1);$C=trim($K["name"]);if($_POST["drop"])query_redirect("DROP SEQUENCE ".idf_escape($fa),$_,lang(213));elseif($fa=="")query_redirect("CREATE SEQUENCE ".idf_escape($C),$_,lang(214));elseif($fa!=$C)query_redirect("ALTER SEQUENCE ".idf_escape($fa)." RENAME TO ".idf_escape($C),$_,lang(215));else
redirect($_);}page_header($fa!=""?lang(216).": ".h($fa):lang(217),$n);if(!$K)$K["name"]=$fa;echo'
<form action="" method="post">
<p><input name="name" value="',h($K["name"]),'" autocapitalize="off">
<input type="submit" value="',lang(14),'">
';if($fa!="")echo"<input type='submit' name='drop' value='".lang(119)."'>".confirm()."\n";echo'<input type="hidden" name="token" value="',$Eh,'">
</form>
';}elseif(isset($_GET["type"])){$ga=$_GET["type"];$K=$_POST;if($_POST&&!$n){$_=substr(ME,0,-1);if($_POST["drop"])query_redirect("DROP TYPE ".idf_escape($ga),$_,lang(218));else
query_redirect("CREATE TYPE ".idf_escape(trim($K["name"]))." $K[as]",$_,lang(219));}page_header($ga!=""?lang(220).": ".h($ga):lang(221),$n);if(!$K)$K["as"]="AS ";echo'
<form action="" method="post">
<p>
';if($ga!="")echo"<input type='submit' name='drop' value='".lang(119)."'>".confirm()."\n";else{echo"<input name='name' value='".h($K['name'])."' autocapitalize='off'>\n";textarea("as",$K["as"]);echo"<p><input type='submit' value='".lang(14)."'>\n";}echo'<input type="hidden" name="token" value="',$Eh,'">
</form>
';}elseif(isset($_GET["trigger"])){$a=$_GET["trigger"];$C=$_GET["name"];$Ph=trigger_options();$K=(array)trigger($C)+array("Trigger"=>$a."_bi");if($_POST){if(!$n&&in_array($_POST["Timing"],$Ph["Timing"])&&in_array($_POST["Event"],$Ph["Event"])&&in_array($_POST["Type"],$Ph["Type"])){$Ue=" ON ".table($a);$ac="DROP TRIGGER ".idf_escape($C).($x=="pgsql"?$Ue:"");$A=ME."table=".urlencode($a);if($_POST["drop"])query_redirect($ac,$A,lang(222));else{if($C!="")queries($ac);queries_redirect($A,($C!=""?lang(223):lang(224)),queries(create_trigger($Ue,$_POST)));if($C!="")queries(create_trigger($Ue,$K+array("Type"=>reset($Ph["Type"]))));}}$K=$_POST;}page_header(($C!=""?lang(225).": ".h($C):lang(226)),$n,array("table"=>$a));echo'
<form action="" method="post" id="form">
<table cellspacing="0">
<tr><th>',lang(227),'<td>',html_select("Timing",$Ph["Timing"],$K["Timing"],"triggerChange(/^".preg_quote($a,"/")."_[ba][iud]$/, '".js_escape($a)."', this.form);"),'<tr><th>',lang(228),'<td>',html_select("Event",$Ph["Event"],$K["Event"],"this.form['Timing'].onchange();"),(in_array("UPDATE OF",$Ph["Event"])?" <input name='Of' value='".h($K["Of"])."' class='hidden'>":""),'<tr><th>',lang(46),'<td>',html_select("Type",$Ph["Type"],$K["Type"]),'</table>
<p>',lang(174),': <input name="Trigger" value="',h($K["Trigger"]),'" maxlength="64" autocapitalize="off">
',script("qs('#form')['Timing'].onchange();"),'<p>';textarea("Statement",$K["Statement"]);echo'<p>
<input type="submit" value="',lang(14),'">
';if($C!=""){echo'<input type="submit" name="drop" value="',lang(119),'">',confirm();}echo'<input type="hidden" name="token" value="',$Eh,'">
</form>
';}elseif(isset($_GET["user"])){$ha=$_GET["user"];$Rf=array(""=>array("All privileges"=>""));foreach(get_rows("SHOW PRIVILEGES")as$K){foreach(explode(",",($K["Privilege"]=="Grant option"?"":$K["Context"]))as$zb)$Rf[$zb][$K["Privilege"]]=$K["Comment"];}$Rf["Server Admin"]+=$Rf["File access on server"];$Rf["Databases"]["Create routine"]=$Rf["Procedures"]["Create routine"];unset($Rf["Procedures"]["Create routine"]);$Rf["Columns"]=array();foreach(array("Select","Insert","Update","References")as$X)$Rf["Columns"][$X]=$Rf["Tables"][$X];unset($Rf["Server Admin"]["Usage"]);foreach($Rf["Tables"]as$y=>$X)unset($Rf["Databases"][$y]);$Fe=array();if($_POST){foreach($_POST["objects"]as$y=>$X)$Fe[$X]=(array)$Fe[$X]+(array)$_POST["grants"][$y];}$cd=array();$Se="";if(isset($_GET["host"])&&($I=$g->query("SHOW GRANTS FOR ".q($ha)."@".q($_GET["host"])))){while($K=$I->fetch_row()){if(preg_match('~GRANT (.*) ON (.*) TO ~',$K[0],$B)&&preg_match_all('~ *([^(,]*[^ ,(])( *\\([^)]+\\))?~',$B[1],$le,PREG_SET_ORDER)){foreach($le
as$X){if($X[1]!="USAGE")$cd["$B[2]$X[2]"][$X[1]]=true;if(preg_match('~ WITH GRANT OPTION~',$K[0]))$cd["$B[2]$X[2]"]["GRANT OPTION"]=true;}}if(preg_match("~ IDENTIFIED BY PASSWORD '([^']+)~",$K[0],$B))$Se=$B[1];}}if($_POST&&!$n){$Te=(isset($_GET["host"])?q($ha)."@".q($_GET["host"]):"''");if($_POST["drop"])query_redirect("DROP USER $Te",ME."privileges=",lang(229));else{$He=q($_POST["user"])."@".q($_POST["host"]);$_f=$_POST["pass"];if($_f!=''&&!$_POST["hashed"]){$_f=$g->result("SELECT PASSWORD(".q($_f).")");$n=!$_f;}$Db=false;if(!$n){if($Te!=$He){$Db=queries(($g->server_info<5?"GRANT USAGE ON *.* TO":"CREATE USER")." $He IDENTIFIED BY PASSWORD ".q($_f));$n=!$Db;}elseif($_f!=$Se)queries("SET PASSWORD FOR $He = ".q($_f));}if(!$n){$qg=array();foreach($Fe
as$Ne=>$bd){if(isset($_GET["grant"]))$bd=array_filter($bd);$bd=array_keys($bd);if(isset($_GET["grant"]))$qg=array_diff(array_keys(array_filter($Fe[$Ne],'strlen')),$bd);elseif($Te==$He){$Qe=array_keys((array)$cd[$Ne]);$qg=array_diff($Qe,$bd);$bd=array_diff($bd,$Qe);unset($cd[$Ne]);}if(preg_match('~^(.+)\\s*(\\(.*\\))?$~U',$Ne,$B)&&(!grant("REVOKE",$qg,$B[2]," ON $B[1] FROM $He")||!grant("GRANT",$bd,$B[2]," ON $B[1] TO $He"))){$n=true;break;}}}if(!$n&&isset($_GET["host"])){if($Te!=$He)queries("DROP USER $Te");elseif(!isset($_GET["grant"])){foreach($cd
as$Ne=>$qg){if(preg_match('~^(.+)(\\(.*\\))?$~U',$Ne,$B))grant("REVOKE",array_keys($qg),$B[2]," ON $B[1] FROM $He");}}}queries_redirect(ME."privileges=",(isset($_GET["host"])?lang(230):lang(231)),!$n);if($Db)$g->query("DROP USER $He");}}page_header((isset($_GET["host"])?lang(33).": ".h("$ha@$_GET[host]"):lang(138)),$n,array("privileges"=>array('',lang(68))));if($_POST){$K=$_POST;$cd=$Fe;}else{$K=$_GET+array("host"=>$g->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', -1)"));$K["pass"]=$Se;if($Se!="")$K["hashed"]=true;$cd[(DB==""||$cd?"":idf_escape(addcslashes(DB,"%_\\"))).".*"]=array();}echo'<form action="" method="post">
<table cellspacing="0">
<tr><th>',lang(32),'<td><input name="host" maxlength="60" value="',h($K["host"]),'" autocapitalize="off">
<tr><th>',lang(33),'<td><input name="user" maxlength="16" value="',h($K["user"]),'" autocapitalize="off">
<tr><th>',lang(34),'<td><input name="pass" id="pass" value="',h($K["pass"]),'">
';if(!$K["hashed"])echo
script("typePassword(qs('#pass'));");echo
checkbox("hashed",1,$K["hashed"],lang(232),"typePassword(this.form['pass'], this.checked);"),'</table>

';echo"<table cellspacing='0'>\n","<thead><tr><th colspan='2'>".lang(68).doc_link(array('sql'=>"grant.html#priv_level"));$s=0;foreach($cd
as$Ne=>$bd){echo'<th>'.($Ne!="*.*"?"<input name='objects[$s]' value='".h($Ne)."' size='10' autocapitalize='off'>":"<input type='hidden' name='objects[$s]' value='*.*' size='10'>*.*");$s++;}echo"</thead>\n";foreach(array(""=>"","Server Admin"=>lang(32),"Databases"=>lang(35),"Tables"=>lang(123),"Columns"=>lang(45),"Procedures"=>lang(233),)as$zb=>$Qb){foreach((array)$Rf[$zb]as$Qf=>$sb){echo"<tr".odd()."><td".($Qb?">$Qb<td":" colspan='2'").' lang="en" title="'.h($sb).'">'.h($Qf);$s=0;foreach($cd
as$Ne=>$bd){$C="'grants[$s][".h(strtoupper($Qf))."]'";$Y=$bd[strtoupper($Qf)];if($zb=="Server Admin"&&$Ne!=(isset($cd["*.*"])?"*.*":".*"))echo"<td>&nbsp;";elseif(isset($_GET["grant"]))echo"<td><select name=$C><option><option value='1'".($Y?" selected":"").">".lang(234)."<option value='0'".($Y=="0"?" selected":"").">".lang(235)."</select>";else{echo"<td align='center'><label class='block'>","<input type='checkbox' name=$C value='1'".($Y?" checked":"").($Qf=="All privileges"?" id='grants-$s-all'>":">".($Qf=="Grant option"?"":script("qsl('input').onclick = function () { if (this.checked) formUncheck('grants-$s-all'); };"))),"</label>";}$s++;}}}echo"</table>\n",'<p>
<input type="submit" value="',lang(14),'">
';if(isset($_GET["host"])){echo'<input type="submit" name="drop" value="',lang(119),'">',confirm();}echo'<input type="hidden" name="token" value="',$Eh,'">
</form>
';}elseif(isset($_GET["processlist"])){if(support("kill")&&$_POST&&!$n){$Sd=0;foreach((array)$_POST["kill"]as$X){if(kill_process($X))$Sd++;}queries_redirect(ME."processlist=",lang(236,$Sd),$Sd||!$_POST["kill"]);}page_header(lang(108),$n);echo'
<form action="" method="post">
<table cellspacing="0" class="nowrap checkable">
',script("mixin(qsl('table'), {onclick: tableClick, ondblclick: partialArg(tableClick, true)});");$s=-1;foreach(process_list()as$s=>$K){if(!$s){echo"<thead><tr lang='en'>".(support("kill")?"<th>&nbsp;":"");foreach($K
as$y=>$X)echo"<th>$y".doc_link(array('sql'=>"show-processlist.html#processlist_".strtolower($y),'pgsql'=>"monitoring-stats.html#PG-STAT-ACTIVITY-VIEW",'oracle'=>"../b14237/dynviews_2088.htm",));echo"</thead>\n";}echo"<tr".odd().">".(support("kill")?"<td>".checkbox("kill[]",$K[$x=="sql"?"Id":"pid"],0):"");foreach($K
as$y=>$X)echo"<td>".(($x=="sql"&&$y=="Info"&&preg_match("~Query|Killed~",$K["Command"])&&$X!="")||($x=="pgsql"&&$y=="current_query"&&$X!="<IDLE>")||($x=="oracle"&&$y=="sql_text"&&$X!="")?"<code class='jush-$x'>".shorten_utf8($X,100,"</code>").' <a href="'.h(ME.($K["db"]!=""?"db=".urlencode($K["db"])."&":"")."sql=".urlencode($X)).'">'.lang(237).'</a>':nbsp($X));echo"\n";}echo'</table>
',script("tableCheck();"),'<p>
';if(support("kill")){echo($s+1)."/".lang(238,max_connections()),"<p><input type='submit' value='".lang(239)."'>\n";}echo'<input type="hidden" name="token" value="',$Eh,'">
</form>
';}elseif(isset($_GET["select"])){$a=$_GET["select"];$S=table_status1($a);$w=indexes($a);$p=fields($a);$Uc=column_foreign_keys($a);$Pe="";if($S["Oid"]){$Pe=($x=="sqlite"?"rowid":"oid");$w[]=array("type"=>"PRIMARY","columns"=>array($Pe));}parse_str($_COOKIE["adminer_import"],$ya);$rg=array();$e=array();$vh=null;foreach($p
as$y=>$o){$C=$b->fieldName($o);if(isset($o["privileges"]["select"])&&$C!=""){$e[$y]=html_entity_decode(strip_tags($C),ENT_QUOTES);if(is_shortable($o))$vh=$b->selectLengthProcess();}$rg+=$o["privileges"];}list($M,$dd)=$b->selectColumnsProcess($e,$w);$Gd=count($dd)<count($M);$Z=$b->selectSearchProcess($p,$w);$ff=$b->selectOrderProcess($p,$w);$z=$b->selectLimitProcess();$Zc=($M?implode(", ",$M):"*".($Pe?", $Pe":"")).convert_fields($e,$p,$M)."\nFROM ".table($a);$ed=($dd&&$Gd?"\nGROUP BY ".implode(", ",$dd):"").($ff?"\nORDER BY ".implode(", ",$ff):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$Xh=>$K){$Ga=convert_field($p[key($K)]);$M=array($Ga?$Ga:idf_escape(key($K)));$Z[]=where_check($Xh,$p);$J=$Yb->select($a,$M,$Z,$M);if($J)echo
reset($J->fetch_row());}exit;}if($_POST&&!$n){$vi=$Z;if(!$_POST["all"]&&is_array($_POST["check"])){$eb=array();foreach($_POST["check"]as$bb)$eb[]=where_check($bb,$p);$vi[]="((".implode(") OR (",$eb)."))";}$vi=($vi?"\nWHERE ".implode(" AND ",$vi):"");$Mf=$Zh=null;foreach($w
as$v){if($v["type"]=="PRIMARY"){$Mf=array_flip($v["columns"]);$Zh=($M?$Mf:array());break;}}foreach((array)$Zh
as$y=>$X){if(in_array(idf_escape($y),$M))unset($Zh[$y]);}if($_POST["export"]){cookie("adminer_import","output=".urlencode($_POST["output"])."&format=".urlencode($_POST["format"]));dump_headers($a);$b->dumpTable($a,"");if(!is_array($_POST["check"])||$Zh===array())$H="SELECT $Zc$vi$ed";else{$Vh=array();foreach($_POST["check"]as$X)$Vh[]="(SELECT".limit($Zc,"\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X,$p).$ed,1).")";$H=implode(" UNION ALL ",$Vh);}$b->dumpData($a,"table",$H);exit;}if(!$b->selectEmailProcess($Z,$Uc)){if($_POST["save"]||$_POST["delete"]){$I=true;$za=0;$O=array();if(!$_POST["delete"]){foreach($e
as$C=>$X){$X=process_input($p[$C]);if($X!==null&&($_POST["clone"]||$X!==false))$O[idf_escape($C)]=($X!==false?$X:idf_escape($C));}}if($_POST["delete"]||$O){if($_POST["clone"])$H="INTO ".table($a)." (".implode(", ",array_keys($O)).")\nSELECT ".implode(", ",$O)."\nFROM ".table($a);if($_POST["all"]||($Zh===array()&&is_array($_POST["check"]))||$Gd){$I=($_POST["delete"]?$Yb->delete($a,$vi):($_POST["clone"]?queries("INSERT $H$vi"):$Yb->update($a,$O,$vi)));$za=$g->affected_rows;}else{foreach((array)$_POST["check"]as$X){$ui="\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X,$p);$I=($_POST["delete"]?$Yb->delete($a,$ui,1):($_POST["clone"]?queries("INSERT".limit1($H,$ui)):$Yb->update($a,$O,$ui)));if(!$I)break;$za+=$g->affected_rows;}}}$te=lang(240,$za);if($_POST["clone"]&&$I&&$za==1){$Yd=last_id();if($Yd)$te=lang(160," $Yd");}queries_redirect(remove_from_uri($_POST["all"]&&$_POST["delete"]?"page":""),$te,$I);if(!$_POST["delete"]){edit_form($a,$p,(array)$_POST["fields"],!$_POST["clone"]);page_footer();exit;}}elseif(!$_POST["import"]){if(!$_POST["val"])$n=lang(241);else{$I=true;$za=0;foreach($_POST["val"]as$Xh=>$K){$O=array();foreach($K
as$y=>$X){$y=bracket_escape($y,1);$O[idf_escape($y)]=(preg_match('~char|text~',$p[$y]["type"])||$X!=""?$b->processInput($p[$y],$X):"NULL");}$I=$Yb->update($a,$O," WHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($Xh,$p),!($Gd||$Zh===array())," ");if(!$I)break;$za+=$g->affected_rows;}queries_redirect(remove_from_uri(),lang(240,$za),$I);}}elseif(!is_string($Kc=get_file("csv_file",true)))$n=upload_error($Kc);elseif(!preg_match('~~u',$Kc))$n=lang(242);else{cookie("adminer_import","output=".urlencode($ya["output"])."&format=".urlencode($_POST["separator"]));$I=true;$pb=array_keys($p);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$Kc,$le);$za=count($le[0]);$Yb->begin();$Gg=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));$L=array();foreach($le[0]as$y=>$X){preg_match_all("~((?>\"[^\"]*\")+|[^$Gg]*)$Gg~",$X.$Gg,$me);if(!$y&&!array_diff($me[1],$pb)){$pb=$me[1];$za--;}else{$O=array();foreach($me[1]as$s=>$lb)$O[idf_escape($pb[$s])]=($lb==""&&$p[$pb[$s]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$lb))));$L[]=$O;}}$I=(!$L||$Yb->insertUpdate($a,$L,$Mf));if($I)$I=$Yb->commit();queries_redirect(remove_from_uri("page"),lang(243,$za),$I);$Yb->rollback();}}}$hh=$b->tableName($S);if(is_ajax()){page_headers();ob_start();}else
page_header(lang(50).": $hh",$n);$O=null;if(isset($rg["insert"])||!support("table")){$O="";foreach((array)$_GET["where"]as$X){if($Uc[$X["col"]]&&count($Uc[$X["col"]])==1&&($X["op"]=="="||(!$X["op"]&&!preg_match('~[_%]~',$X["val"]))))$O.="&set".urlencode("[".bracket_escape($X["col"])."]")."=".urlencode($X["val"]);}}$b->selectLinks($S,$O);if(!$e&&support("table"))echo"<p class='error'>".lang(244).($p?".":": ".error())."\n";else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($a).'">',"</div>\n";$b->selectColumnsPrint($M,$e);$b->selectSearchPrint($Z,$e,$w);$b->selectOrderPrint($ff,$e,$w);$b->selectLimitPrint($z);$b->selectLengthPrint($vh);$b->selectActionPrint($w);echo"</form>\n";$E=$_GET["page"];if($E=="last"){$Xc=$g->result(count_rows($a,$Z,$Gd,$dd));$E=floor(max(0,$Xc-1)/$z);}$Cg=$M;if(!$Cg){$Cg[]="*";if($Pe)$Cg[]=$Pe;}$_b=convert_fields($e,$p,$M);if($_b)$Cg[]=substr($_b,2);$I=$Yb->select($a,$Cg,$Z,$dd,$ff,$z,$E,true);if(!$I)echo"<p class='error'>".error()."\n";else{if($x=="mssql"&&$E)$I->seek($z*$E);$nc=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$L=array();while($K=$I->fetch_assoc()){if($E&&$x=="oracle")unset($K["RNUM"]);$L[]=$K;}if($_GET["page"]!="last"&&$z!=""&&$dd&&$Gd&&$x=="sql")$Xc=$g->result(" SELECT FOUND_ROWS()");if(!$L)echo"<p class='message'>".lang(12)."\n";else{$Pa=$b->backwardKeys($a,$hh);echo"<table id='table' cellspacing='0' class='nowrap checkable'>",script("mixin(qs('#table'), {onclick: tableClick, ondblclick: partialArg(tableClick, true), onkeydown: editingKeydown});"),"<thead><tr>".(!$dd&&$M?"":"<td><input type='checkbox' id='all-page' class='jsonly'>".script("qs('#all-page').onclick = partial(formCheck, /check/);","")." <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".lang(245)."</a>");$Ee=array();$ad=array();reset($M);$ag=1;foreach($L[0]as$y=>$X){if($y!=$Pe){$X=$_GET["columns"][key($M)];$o=$p[$M?($X?$X["col"]:current($M)):$y];$C=($o?$b->fieldName($o,$ag):($X["fun"]?"*":$y));if($C!=""){$ag++;$Ee[$y]=$C;$d=idf_escape($y);$pd=remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($y);$Qb="&desc%5B0%5D=1";echo"<th>".script("mixin(qsl('th'), {onmouseover: partial(columnMouse), onmouseout: partial(columnMouse, ' hidden')});",""),'<a href="'.h($pd.($ff[0]==$d||$ff[0]==$y||(!$ff&&$Gd&&$dd[0]==$d)?$Qb:'')).'">';echo
apply_sql_function($X["fun"],$C)."</a>";echo"<span class='column hidden'>","<a href='".h($pd.$Qb)."' title='".lang(56)."' class='text'> â†“</a>";if(!$X["fun"]){echo'<a href="#fieldset-search" title="'.lang(53).'" class="text jsonly"> =</a>',script("qsl('a').onclick = partial(selectSearch, '".js_escape($y)."');");}echo"</span>";}$ad[$y]=$X["fun"];next($M);}}$ee=array();if($_GET["modify"]){foreach($L
as$K){foreach($K
as$y=>$X)$ee[$y]=max($ee[$y],min(40,strlen(utf8_decode($X))));}}echo($Pa?"<th>".lang(246):"")."</thead>\n";if(is_ajax()){if($z%2==1&&$E%2==1)odd();ob_end_clean();}foreach($b->rowDescriptions($L,$Uc)as$De=>$K){$Wh=unique_array($L[$De],$w);if(!$Wh){$Wh=array();foreach($L[$De]as$y=>$X){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$y))$Wh[$y]=$X;}}$Xh="";foreach($Wh
as$y=>$X){if(($x=="sql"||$x=="pgsql")&&strlen($X)>64){$y=(strpos($y,'(')?$y:idf_escape($y));$y="MD5(".($x=='sql'&&preg_match("~^utf8_~",$p[$y]["collation"])?$y:"CONVERT($y USING ".charset($g).")").")";$X=md5($X);}$Xh.="&".($X!==null?urlencode("where[".bracket_escape($y)."]")."=".urlencode($X):"null%5B%5D=".urlencode($y));}echo"<tr".odd().">".(!$dd&&$M?"":"<td>".checkbox("check[]",substr($Xh,1),in_array(substr($Xh,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").($Gd||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($a).$Xh)."'>".lang(247)."</a>"));foreach($K
as$y=>$X){if(isset($Ee[$y])){$o=$p[$y];if($X!=""&&(!isset($nc[$y])||$nc[$y]!=""))$nc[$y]=(is_mail($X)?$Ee[$y]:"");$_="";if(preg_match('~blob|bytea|raw|file~',$o["type"])&&$X!="")$_=ME.'download='.urlencode($a).'&field='.urlencode($y).$Xh;if(!$_&&$X!==null){foreach((array)$Uc[$y]as$q){if(count($Uc[$y])==1||end($q["source"])==$y){$_="";foreach($q["source"]as$s=>$Rg)$_.=where_link($s,$q["target"][$s],$L[$De][$Rg]);$_=($q["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($q["db"]),ME):ME).'select='.urlencode($q["table"]).$_;if($q["ns"])$_=preg_replace('~([?&]ns=)[^&]+~','\\1'.urlencode($q["ns"]),$_);if(count($q["source"])==1)break;}}}if($y=="COUNT(*)"){$_=ME."select=".urlencode($a);$s=0;foreach((array)$_GET["where"]as$W){if(!array_key_exists($W["col"],$Wh))$_.=where_link($s++,$W["col"],$W["val"],$W["op"]);}foreach($Wh
as$Md=>$W)$_.=where_link($s++,$Md,$W);}$X=select_value($X,$_,$o,$vh);$t=h("val[$Xh][".bracket_escape($y)."]");$Y=$_POST["val"][$Xh][bracket_escape($y)];$ic=!is_array($K[$y])&&is_utf8($X)&&$L[$De][$y]==$K[$y]&&!$ad[$y];$uh=preg_match('~text|lob~',$o["type"]);if(($_GET["modify"]&&$ic)||$Y!==null){$gd=h($Y!==null?$Y:$K[$y]);echo"<td>".($uh?"<textarea name='$t' cols='30' rows='".(substr_count($K[$y],"\n")+1)."'>$gd</textarea>":"<input name='$t' value='$gd' size='$ee[$y]'>");}else{$ie=strpos($X,"<i>...</i>");echo"<td id='$t'>$X</td>",script("qsl('td').onclick = partialArg(selectClick, ".($ie?2:($uh?1:0)).($ic?"":", '".h(lang(248))."'").");","");}}}if($Pa)echo"<td>";$b->backwardKeysPrint($Pa,$L[$De]);echo"</tr>\n";}if(is_ajax())exit;echo"</table>\n";}if(($L||$E)&&!is_ajax()){$xc=true;if($_GET["page"]!="last"){if($z=="")$Xc=count($L);elseif($x!="sql"||!$Gd){$Xc=($Gd?false:found_rows($S,$Z));if($Xc<max(1e4,2*($E+1)*$z))$Xc=reset(slow_query(count_rows($a,$Z,$Gd,$dd)));else$xc=false;}}if($z!=""&&($Xc===false||$Xc>$z||$E)){echo"<p class='pages'>";$oe=($Xc===false?$E+(count($L)>=$z?2:1):floor(($Xc-1)/$z));if($x!="simpledb"){echo'<a href="'.h(remove_from_uri("page")).'">'.lang(249)."</a>:",script("qsl('a').onclick = function () { pageClick(this.href, +prompt('".lang(249)."', '".($E+1)."')); return false; };"),pagination(0,$E).($E>5?" ...":"");for($s=max(1,$E-4);$s<min($oe,$E+5);$s++)echo
pagination($s,$E);if($oe>0){echo($E+5<$oe?" ...":""),($xc&&$Xc!==false?pagination($oe,$E):" <a href='".h(remove_from_uri("page")."&page=last")."' title='~$oe'>".lang(250)."</a>");}echo(($Xc===false?count($L)+1:$Xc-$E*$z)>$z?' <a href="'.h(remove_from_uri("page")."&page=".($E+1)).'" class="loadmore">'.lang(251).'</a>'.script("qsl('a').onclick = partial(selectLoadMore, ".(+$z).", '".lang(252)."...');",""):'');}else{echo
lang(249).":",pagination(0,$E).($E>1?" ...":""),($E?pagination($E,$E):""),($oe>$E?pagination($E+1,$E).($oe>$E+1?" ...":""):"");}}echo"<p class='count'>\n",($Xc!==false?"(".($xc?"":"~ ").lang(142,$Xc).") ":"");$Vb=($xc?"":"~ ").$Xc;echo
checkbox("all",1,0,lang(253),"var checked = formChecked(this, /check/); selectCount('selected', this.checked ? '$Vb' : checked); selectCount('selected2', this.checked || !checked ? '$Vb' : checked);")."\n";if($b->selectCommandPrint()){echo'<fieldset',($_GET["modify"]?'':' class="jsonly"'),'><legend>',lang(245),'</legend><div>
<input type="submit" value="',lang(14),'"',($_GET["modify"]?'':' title="'.lang(241).'"'),'>
</div></fieldset>
<fieldset><legend>',lang(118),' <span id="selected"></span></legend><div>
<input type="submit" name="edit" value="',lang(10),'">
<input type="submit" name="clone" value="',lang(237),'">
<input type="submit" name="delete" value="',lang(18),'">',confirm(),'</div></fieldset>
';}$Vc=$b->dumpFormat();foreach((array)$_GET["columns"]as$d){if($d["fun"]){unset($Vc['sql']);break;}}if($Vc){print_fieldset("export",lang(70)." <span id='selected2'></span>");$qf=$b->dumpOutput();echo($qf?html_select("output",$qf,$ya["output"])." ":""),html_select("format",$Vc,$ya["format"])," <input type='submit' name='export' value='".lang(70)."'>\n","</div></fieldset>\n";}echo(!$dd&&$M?"":script("tableCheck();"));}if($b->selectImportPrint()){print_fieldset("import",lang(69),!$L);echo"<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$ya["format"],1);echo" <input type='submit' name='import' value='".lang(69)."'>","</div></fieldset>\n";}$b->selectEmailPrint(array_filter($nc,'strlen'),$e);echo"<p><input type='hidden' name='token' value='$Eh'></p>\n","</form>\n";}}if(is_ajax()){ob_end_clean();exit;}}elseif(isset($_GET["variables"])){$P=isset($_GET["status"]);page_header($P?lang(110):lang(109));$ni=($P?show_status():show_variables());if(!$ni)echo"<p class='message'>".lang(12)."\n";else{echo"<table cellspacing='0'>\n";foreach($ni
as$y=>$X){echo"<tr>","<th><code class='jush-".$x.($P?"status":"set")."'>".h($y)."</code>","<td>".nbsp($X);}echo"</table>\n";}}elseif(isset($_GET["script"])){header("Content-Type: text/javascript; charset=utf-8");if($_GET["script"]=="db"){$eh=array("Data_length"=>0,"Index_length"=>0,"Data_free"=>0);foreach(table_status()as$C=>$S){json_row("Comment-$C",nbsp($S["Comment"]));if(!is_view($S)){foreach(array("Engine","Collation")as$y)json_row("$y-$C",nbsp($S[$y]));foreach($eh+array("Auto_increment"=>0,"Rows"=>0)as$y=>$X){if($S[$y]!=""){$X=format_number($S[$y]);json_row("$y-$C",($y=="Rows"&&$X&&$S["Engine"]==($Ug=="pgsql"?"table":"InnoDB")?"~ $X":$X));if(isset($eh[$y]))$eh[$y]+=($S["Engine"]!="InnoDB"||$y!="Data_free"?$S[$y]:0);}elseif(array_key_exists($y,$S))json_row("$y-$C");}}}foreach($eh
as$y=>$X)json_row("sum-$y",format_number($X));json_row("");}elseif($_GET["script"]=="kill")$g->query("KILL ".number($_POST["kill"]));else{foreach(count_tables($b->databases())as$m=>$X){json_row("tables-$m",$X);json_row("size-$m",db_size($m));}json_row("");}exit;}else{$nh=array_merge((array)$_POST["tables"],(array)$_POST["views"]);if($nh&&!$n&&!$_POST["search"]){$I=true;$te="";if($x=="sql"&&$_POST["tables"]&&count($_POST["tables"])>1&&($_POST["drop"]||$_POST["truncate"]||$_POST["copy"]))queries("SET foreign_key_checks = 0");if($_POST["truncate"]){if($_POST["tables"])$I=truncate_tables($_POST["tables"]);$te=lang(254);}elseif($_POST["move"]){$I=move_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$te=lang(255);}elseif($_POST["copy"]){$I=copy_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$te=lang(256);}elseif($_POST["drop"]){if($_POST["views"])$I=drop_views($_POST["views"]);if($I&&$_POST["tables"])$I=drop_tables($_POST["tables"]);$te=lang(257);}elseif($x!="sql"){$I=($x=="sqlite"?queries("VACUUM"):apply_queries("VACUUM".($_POST["optimize"]?"":" ANALYZE"),$_POST["tables"]));$te=lang(258);}elseif(!$_POST["tables"])$te=lang(9);elseif($I=queries(($_POST["optimize"]?"OPTIMIZE":($_POST["check"]?"CHECK":($_POST["repair"]?"REPAIR":"ANALYZE")))." TABLE ".implode(", ",array_map('idf_escape',$_POST["tables"])))){while($K=$I->fetch_assoc())$te.="<b>".h($K["Table"])."</b>: ".h($K["Msg_text"])."<br>";}queries_redirect(substr(ME,0,-1),$te,$I);}page_header(($_GET["ns"]==""?lang(35).": ".h(DB):lang(73).": ".h($_GET["ns"])),$n,true);if($b->homepage()){if($_GET["ns"]!==""){echo"<h3 id='tables-views'>".lang(259)."</h3>\n";$mh=tables_list();if(!$mh)echo"<p class='message'>".lang(9)."\n";else{echo"<form action='' method='post'>\n";if(support("table")){echo"<fieldset><legend>".lang(260)." <span id='selected2'></span></legend><div>","<input type='search' name='query' value='".h($_POST["query"])."'>",script("qsl('input').onkeydown = partialArg(bodyKeydown, 'search');","")," <input type='submit' name='search' value='".lang(53)."'>\n","</div></fieldset>\n";if($_POST["search"]&&$_POST["query"]!="")search_tables();}$Wb=doc_link(array('sql'=>'show-table-status.html'));echo"<table cellspacing='0' class='nowrap checkable'>\n",script("mixin(qsl('table'), {onclick: tableClick, ondblclick: partialArg(tableClick, true)});"),'<thead><tr class="wrap">','<td><input id="check-all" type="checkbox" class="jsonly">'.script("qs('#check-all').onclick = partial(formCheck, /^(tables|views)\[/);",""),'<th>'.lang(123),'<td>'.lang(261).doc_link(array('sql'=>'storage-engines.html')),'<td>'.lang(114).doc_link(array('sql'=>'charset-mysql.html')),'<td>'.lang(262).$Wb,'<td>'.lang(263).$Wb,'<td>'.lang(264).$Wb,'<td>'.lang(48).doc_link(array('sql'=>'example-auto-increment.html')),'<td>'.lang(265).$Wb,(support("comment")?'<td>'.lang(47).$Wb:''),"</thead>\n";$T=0;foreach($mh
as$C=>$U){$qi=($U!==null&&!preg_match('~table~i',$U));$t=h("Table-".$C);echo'<tr'.odd().'><td>'.checkbox(($qi?"views[]":"tables[]"),$C,in_array($C,$nh,true),"","formUncheck('check-all');","",$t),'<th>'.(support("table")||support("indexes")?"<a href='".h(ME)."table=".urlencode($C)."' title='".lang(40)."' id='$t'>".h($C).'</a>':h($C));if($qi){echo'<td colspan="6"><a href="'.h(ME)."view=".urlencode($C).'" title="'.lang(41).'">'.(preg_match('~materialized~i',$U)?lang(121):lang(122)).'</a>','<td align="right"><a href="'.h(ME)."select=".urlencode($C).'" title="'.lang(39).'">?</a>';}else{foreach(array("Engine"=>array(),"Collation"=>array(),"Data_length"=>array("create",lang(42)),"Index_length"=>array("indexes",lang(125)),"Data_free"=>array("edit",lang(43)),"Auto_increment"=>array("auto_increment=1&create",lang(42)),"Rows"=>array("select",lang(39)),)as$y=>$_){$t=" id='$y-".h($C)."'";echo($_?"<td align='right'>".(support("table")||$y=="Rows"||(support("indexes")&&$y!="Data_length")?"<a href='".h(ME."$_[0]=").urlencode($C)."'$t title='$_[1]'>?</a>":"<span$t>?</span>"):"<td id='$y-".h($C)."'>&nbsp;");}$T++;}echo(support("comment")?"<td id='Comment-".h($C)."'>&nbsp;":"");}echo"<tr><td>&nbsp;<th>".lang(238,count($mh)),"<td>".nbsp($x=="sql"?$g->result("SELECT @@storage_engine"):""),"<td>".nbsp(db_collation(DB,collations()));foreach(array("Data_length","Index_length","Data_free")as$y)echo"<td align='right' id='sum-$y'>&nbsp;";echo"</table>\n";if(!information_schema(DB)){$ki="<input type='submit' value='".lang(266)."'> ".on_help("'VACUUM'");$bf="<input type='submit' name='optimize' value='".lang(267)."'> ".on_help($x=="sql"?"'OPTIMIZE TABLE'":"'VACUUM OPTIMIZE'");echo"<fieldset><legend>".lang(118)." <span id='selected'></span></legend><div>".($x=="sqlite"?$ki:($x=="pgsql"?$ki.$bf:($x=="sql"?"<input type='submit' value='".lang(268)."'> ".on_help("'ANALYZE TABLE'").$bf."<input type='submit' name='check' value='".lang(269)."'> ".on_help("'CHECK TABLE'")."<input type='submit' name='repair' value='".lang(270)."'> ".on_help("'REPAIR TABLE'"):"")))."<input type='submit' name='truncate' value='".lang(271)."'> ".on_help($x=="sqlite"?"'DELETE'":"'TRUNCATE".($x=="pgsql"?"'":" TABLE'")).confirm()."<input type='submit' name='drop' value='".lang(119)."'>".on_help("'DROP TABLE'").confirm()."\n";$l=(support("scheme")?$b->schemas():$b->databases());if(count($l)!=1&&$x!="sqlite"){$m=(isset($_POST["target"])?$_POST["target"]:(support("scheme")?$_GET["ns"]:DB));echo"<p>".lang(272).": ",($l?html_select("target",$l,$m):'<input name="target" value="'.h($m).'" autocapitalize="off">')," <input type='submit' name='move' value='".lang(273)."'>",(support("copy")?" <input type='submit' name='copy' value='".lang(274)."'>":""),"\n";}echo"<input type='hidden' name='all' value=''>";echo
script("qsl('input').onclick = function () { selectCount('selected', formChecked(this, /^(tables|views)\[/));".(support("table")?" selectCount('selected2', formChecked(this, /^tables\[/) || $T);":"")." }"),"<input type='hidden' name='token' value='$Eh'>\n","</div></fieldset>\n";}echo"</form>\n",script("tableCheck();");}echo'<p class="links"><a href="'.h(ME).'create=">'.lang(71)."</a>\n",(support("view")?'<a href="'.h(ME).'view=">'.lang(195)."</a>\n":"");if(support("routine")){echo"<h3 id='routines'>".lang(135)."</h3>\n";$vg=routines();if($vg){echo"<table cellspacing='0'>\n",'<thead><tr><th>'.lang(174).'<td>'.lang(46).'<td>'.lang(212)."<td>&nbsp;</thead>\n";odd('');foreach($vg
as$K){echo'<tr'.odd().'>','<th><a href="'.h(ME).($K["ROUTINE_TYPE"]!="PROCEDURE"?'callf=':'call=').urlencode($K["ROUTINE_NAME"]).'">'.h($K["ROUTINE_NAME"]).'</a>','<td>'.h($K["ROUTINE_TYPE"]),'<td>'.h($K["DTD_IDENTIFIER"]),'<td><a href="'.h(ME).($K["ROUTINE_TYPE"]!="PROCEDURE"?'function=':'procedure=').urlencode($K["ROUTINE_NAME"]).'">'.lang(128)."</a>";}echo"</table>\n";}echo'<p class="links">'.(support("procedure")?'<a href="'.h(ME).'procedure=">'.lang(211).'</a>':'').'<a href="'.h(ME).'function=">'.lang(210)."</a>\n";}if(support("sequence")){echo"<h3 id='sequences'>".lang(275)."</h3>\n";$Ig=get_vals("SELECT sequence_name FROM information_schema.sequences WHERE sequence_schema = current_schema() ORDER BY sequence_name");if($Ig){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(174)."</thead>\n";odd('');foreach($Ig
as$X)echo"<tr".odd()."><th><a href='".h(ME)."sequence=".urlencode($X)."'>".h($X)."</a>\n";echo"</table>\n";}echo"<p class='links'><a href='".h(ME)."sequence='>".lang(217)."</a>\n";}if(support("type")){echo"<h3 id='user-types'>".lang(24)."</h3>\n";$ii=types();if($ii){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(174)."</thead>\n";odd('');foreach($ii
as$X)echo"<tr".odd()."><th><a href='".h(ME)."type=".urlencode($X)."'>".h($X)."</a>\n";echo"</table>\n";}echo"<p class='links'><a href='".h(ME)."type='>".lang(221)."</a>\n";}if(support("event")){echo"<h3 id='events'>".lang(136)."</h3>\n";$L=get_rows("SHOW EVENTS");if($L){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(174)."<td>".lang(276)."<td>".lang(201)."<td>".lang(202)."<td></thead>\n";foreach($L
as$K){echo"<tr>","<th>".h($K["Name"]),"<td>".($K["Execute at"]?lang(277)."<td>".$K["Execute at"]:lang(203)." ".$K["Interval value"]." ".$K["Interval field"]."<td>$K[Starts]"),"<td>$K[Ends]",'<td><a href="'.h(ME).'event='.urlencode($K["Name"]).'">'.lang(128).'</a>';}echo"</table>\n";$vc=$g->result("SELECT @@event_scheduler");if($vc&&$vc!="ON")echo"<p class='error'><code class='jush-sqlset'>event_scheduler</code>: ".h($vc)."\n";}echo'<p class="links"><a href="'.h(ME).'event=">'.lang(200)."</a>\n";}if($mh)echo
script("ajaxSetHtml('".js_escape(ME)."script=db');");}}}page_footer();