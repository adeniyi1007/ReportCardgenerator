<?php
#### This file takes input from submited form data
error_reporting(0);


##Personal Datas

 @$student_name=$_POST["student_name"];
 @$student_age=$_POST["student_age"];
 @$student_no=$_POST["student_no"];
 @$student_no_inclass=$_POST["student_no_inclass"];
 @$student_percentage=$_POST["student_percentage"];
 @$student_=$_POST["student_mark_obtained"];
 @$student_term=$_POST["student_term"];
 @$student_session=$_POST["student_session"];
 @$student_class=$_POST["class"];
 @$no_s_op=$_POST["no_s_op"];
 @$no_s_closed=$_POST["no_s_closed"];
 @$student_mark_obtained=$_POST["student_mark_obtained"];
 @$student_mark_obtaineable=$_POST["total_mark_set_by_calcl"];



@$course_1=$_POST["1"];
@$course_2=$_POST["2"];
@$course_3=$_POST["3"];
@$course_4=$_POST["4"];
@$course_5=$_POST["5"];
@$course_6=$_POST["6"];
@$course_7=$_POST["7"];
@$course_8=$_POST["8"];
@$course_9=$_POST["9"];
@$course_10=$_POST["10"];
@$course_11=$_POST["11"];
@$course_12=$_POST["12"];
 


 
 @$handwriting=$_POST["haw"];
 @$physical_skills=$_POST["hps"];
 @$uses_time=$_POST["ut"];
 @$neatwork=$_POST["dn"];
 @$respect_authority=$_POST["rau"];


#### STudent Result
 @$e_ca=$_POST["e_ca"];
 @$e_hw=$_POST["e_hw"];
 @$e_te=$_POST["e_te"];
 @$e_total=$_POST["e_total"];
 @$e_grade=$_POST["e_grade"];
 @$e_sp=$_POST["e_sp"];
 @$e_tr=$_POST["e_tr"];


 @$m_ca=$_POST["m_ca"];
 @$m_hw=$_POST["m_hw"];
 @$m_te=$_POST["m_te"];
 @$m_total=$_POST["m_total"];
 @$m_grade=$_POST["m_grade"];
 @$m_sp=$_POST["m_sp"];
 @$m_tr=$_POST["m_tr"];


@$h_ca=$_POST["h_ca"];
 @$h_hw=$_POST["h_hw"];
 @$h_te=$_POST["h_te"];
 @$h_total=$_POST["h_total"];
 @$h_grade=$_POST["h_grade"];
 @$h_sp=$_POST["h_sp"];
 @$h_tr=$_POST["h_tr"];

 @$s_ca=$_POST["s_ca"];
 @$s_hw=$_POST["s_hw"];
 @$s_te=$_POST["s_te"];
 @$s_total=$_POST["s_total"];
 @$s_grade=$_POST["s_grade"];
 @$s_sp=$_POST["s_sp"];
 @$s_tr=$_POST["s_tr"];

 @$sc_ca=$_POST["sc_ca"];
 @$sc_hw=$_POST["sc_hw"];
 @$sc_te=$_POST["sc_te"];
 @$sc_total=$_POST["sc_total"];
 @$sc_grade=$_POST["sc_grade"];
 @$sc_sp=$_POST["sc_sp"];
 @$sc_tr=$_POST["sc_tr"];


 @$r_ca=$_POST["r_ca"];
 @$r_hw=$_POST["r_hw"];
 @$r_te=$_POST["r_te"];
 @$r_total=$_POST["r_total"];
 @$r_grade=$_POST["r_grade"];
 @$r_sp=$_POST["r_sp"];
 @$r_tr=$_POST["r_tr"];

 @$a_ca=$_POST["a_ca"];
 @$a_hw=$_POST["a_hw"];
 @$a_te=$_POST["a_te"];
 @$a_total=$_POST["a_total"];
 @$a_grade=$_POST["a_grade"];
 @$a_sp=$_POST["a_sp"];
 @$a_tr=$_POST["a_tr"];

 @$f_ca=$_POST["f_ca"];
 $f_hw=$_POST["f_hw"];
 $f_te=$_POST["f_te"];
 $f_total=$_POST["f_total"];
 $f_grade=$_POST["f_grade"];
 $f_sp=$_POST["f_sp"];
 $f_tr=$_POST["f_tr"];

 $i_ca=$_POST["i_ca"];
 $i_hw=$_POST["i_hw"];
 $i_te=$_POST["i_te"];
 $i_total=$_POST["i_total"];
 $i_grade=$_POST["i_grade"];
 $i_sp=$_POST["i_sp"];
 $i_tr=$_POST["i_tr"];


 $ar_ca=$_POST["ar_ca"];
 $ar_hw=$_POST["ar_hw"];
 $ar_te=$_POST["ar_te"];
 $ar_total=$_POST["ar_total"];
 $ar_grade=$_POST["ar_grade"];
 $ar_sp=$_POST["ar_sp"];
 $ar_tr=$_POST["ar_tr"];

#Comment
 $teacher_coment=$_POST["teacher_coment"];
 $program_director=$_POST["program_director"];
 $next_term_begins=$_POST["next_term_begins"];
 $this_term_ends=$_POST["this_term_ends"];

#### otehrs
$handwriting=$_POST["haw"];
$ps=$_POST["ps"];
$ut=$_POST["ut"];
$dn=$_POST["dn"];
$rau=$_POST["rau"];
$hwr=$_POST["hwr"];



    







?>

<html xmlns:v="urn:schemas-microsoft-com:vml"
xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:w="urn:schemas-microsoft-com:office:word"
xmlns:m="http://schemas.microsoft.com/office/2004/12/omml"
xmlns="http://www.w3.org/TR/REC-html40">

<head>
    

    <!-- Global styles BEGIN -->
<link href="style/css/bootstrap.css" rel="stylesheet">
<!-- Global styles END -->

         <style>
        @media print{
            
            
            .qp {   
                
                color:#a94442 !important;
                -webkit-print-color-adjust:exact;
                    
            
                    }
        }
    
    </style>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<meta name=ProgId content=Word.Document>
<meta name=Generator content="Microsoft Word 15">
<meta name=Originator content="Microsoft Word 15">
<link rel=File-List href="result_files/filelist.xml">
<!--[if gte mso 9]><xml>
 <o:DocumentProperties>
  <o:Author>ROTCIV</o:Author>
  <o:LastAuthor>solomon yemi</o:LastAuthor>
  <o:Revision>7</o:Revision>
  <o:TotalTime>27</o:TotalTime>
  <o:Created>2017-03-22T12:21:00Z</o:Created>
  <o:LastSaved>2017-03-22T12:52:00Z</o:LastSaved>
  <o:Pages>1</o:Pages>
  <o:Words>222</o:Words>
  <o:Characters>1270</o:Characters>
  <o:Lines>10</o:Lines>
  <o:Paragraphs>2</o:Paragraphs>
  <o:CharactersWithSpaces>1490</o:CharactersWithSpaces>
  <o:Version>15.00</o:Version>
 </o:DocumentProperties>
 <o:OfficeDocumentSettings>
  <o:AllowPNG/>
 </o:OfficeDocumentSettings>
</xml><![endif]-->
<link rel=dataStoreItem href="result_files/item0006.xml"
target="result_files/props007.xml">
<link rel=themeData href="result_files/themedata.thmx">
<link rel=colorSchemeMapping href="result_files/colorschememapping.xml">
<!--[if gte mso 9]><xml>
 <w:WordDocument>
  <w:Zoom>124</w:Zoom>
  <w:SpellingState>Clean</w:SpellingState>
  <w:GrammarState>Clean</w:GrammarState>
  <w:TrackMoves>false</w:TrackMoves>
  <w:TrackFormatting/>
  <w:PunctuationKerning/>
  <w:ValidateAgainstSchemas/>
  <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>
  <w:IgnoreMixedContent>false</w:IgnoreMixedContent>
  <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>
  <w:DoNotPromoteQF/>
  <w:LidThemeOther>EN-US</w:LidThemeOther>
  <w:LidThemeAsian>X-NONE</w:LidThemeAsian>
  <w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>
  <w:Compatibility>
   <w:BreakWrappedTables/>
   <w:SnapToGridInCell/>
   <w:WrapTextWithPunct/>
   <w:UseAsianBreakRules/>
   <w:DontGrowAutofit/>
   <w:SplitPgBreakAndParaMark/>
   <w:EnableOpenTypeKerning/>
   <w:DontFlipMirrorIndents/>
   <w:OverrideTableStyleHps/>
  </w:Compatibility>
  <w:BrowserLevel>MicrosoftInternetExplorer4</w:BrowserLevel>
  <m:mathPr>
   <m:mathFont m:val="Cambria Math"/>
   <m:brkBin m:val="before"/>
   <m:brkBinSub m:val="&#45;-"/>
   <m:smallFrac m:val="off"/>
   <m:dispDef/>
   <m:lMargin m:val="0"/>
   <m:rMargin m:val="0"/>
   <m:defJc m:val="centerGroup"/>
   <m:wrapIndent m:val="1440"/>
   <m:intLim m:val="subSup"/>
   <m:naryLim m:val="undOvr"/>
  </m:mathPr></w:WordDocument>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <w:LatentStyles DefLockedState="false" DefUnhideWhenUsed="false"
  DefSemiHidden="false" DefQFormat="false" DefPriority="99"
  LatentStyleCount="371">
  <w:LsdException Locked="false" Priority="0" QFormat="true" Name="Normal"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 1"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 2"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 3"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 4"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 5"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 6"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 7"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 8"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 9"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 6"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 7"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 8"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 9"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 1"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 2"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 3"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 4"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 5"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 6"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 7"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 8"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 9"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Normal Indent"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="footnote text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="annotation text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="header"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="footer"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index heading"/>
  <w:LsdException Locked="false" Priority="35" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="caption"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="table of figures"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="envelope address"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="envelope return"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="footnote reference"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="annotation reference"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="line number"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="page number"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="endnote reference"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="endnote text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="table of authorities"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="macro"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="toa heading"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Bullet"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Number"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Bullet 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Bullet 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Bullet 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Bullet 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Number 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Number 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Number 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Number 5"/>
  <w:LsdException Locked="false" Priority="10" QFormat="true" Name="Title"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Closing"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Signature"/>
  <w:LsdException Locked="false" Priority="1" SemiHidden="true"
   UnhideWhenUsed="true" Name="Default Paragraph Font"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text Indent"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Continue"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Continue 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Continue 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Continue 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Continue 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Message Header"/>
  <w:LsdException Locked="false" Priority="11" QFormat="true" Name="Subtitle"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Salutation"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Date"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text First Indent"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text First Indent 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Note Heading"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text Indent 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text Indent 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Block Text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Hyperlink"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="FollowedHyperlink"/>
  <w:LsdException Locked="false" Priority="22" QFormat="true" Name="Strong"/>
  <w:LsdException Locked="false" Priority="20" QFormat="true" Name="Emphasis"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Document Map"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Plain Text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="E-mail Signature"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Top of Form"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Bottom of Form"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Normal (Web)"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Acronym"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Address"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Cite"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Code"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Definition"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Keyboard"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Preformatted"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Sample"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Typewriter"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Variable"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Normal Table"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="annotation subject"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="No List"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Outline List 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Outline List 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Outline List 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Simple 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Simple 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Simple 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Classic 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Classic 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Classic 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Classic 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Colorful 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Colorful 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Colorful 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Columns 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Columns 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Columns 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Columns 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Columns 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 6"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 7"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 8"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 6"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 7"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 8"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table 3D effects 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table 3D effects 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table 3D effects 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Contemporary"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Elegant"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Professional"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Subtle 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Subtle 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Web 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Web 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Web 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Balloon Text"/>
  <w:LsdException Locked="false" Priority="39" Name="Table Grid"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Theme"/>
  <w:LsdException Locked="false" SemiHidden="true" Name="Placeholder Text"/>
  <w:LsdException Locked="false" Priority="1" QFormat="true" Name="No Spacing"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 1"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 1"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 1"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 1"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 1"/>
  <w:LsdException Locked="false" SemiHidden="true" Name="Revision"/>
  <w:LsdException Locked="false" Priority="34" QFormat="true"
   Name="List Paragraph"/>
  <w:LsdException Locked="false" Priority="29" QFormat="true" Name="Quote"/>
  <w:LsdException Locked="false" Priority="30" QFormat="true"
   Name="Intense Quote"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 1"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 1"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 1"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 1"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 1"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 1"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 2"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 2"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 2"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 2"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 2"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 2"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 2"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 2"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 2"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 2"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 2"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 3"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 3"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 3"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 3"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 3"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 3"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 3"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 3"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 3"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 3"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 3"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 4"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 4"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 4"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 4"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 4"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 4"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 4"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 4"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 4"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 4"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 4"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 5"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 5"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 5"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 5"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 5"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 5"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 5"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 5"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 5"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 5"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 5"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 6"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 6"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 6"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 6"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 6"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 6"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 6"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 6"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 6"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 6"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 6"/>
  <w:LsdException Locked="false" Priority="19" QFormat="true"
   Name="Subtle Emphasis"/>
  <w:LsdException Locked="false" Priority="21" QFormat="true"
   Name="Intense Emphasis"/>
  <w:LsdException Locked="false" Priority="31" QFormat="true"
   Name="Subtle Reference"/>
  <w:LsdException Locked="false" Priority="32" QFormat="true"
   Name="Intense Reference"/>
  <w:LsdException Locked="false" Priority="33" QFormat="true" Name="Book Title"/>
  <w:LsdException Locked="false" Priority="37" SemiHidden="true"
   UnhideWhenUsed="true" Name="Bibliography"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="TOC Heading"/>
  <w:LsdException Locked="false" Priority="41" Name="Plain Table 1"/>
  <w:LsdException Locked="false" Priority="42" Name="Plain Table 2"/>
  <w:LsdException Locked="false" Priority="43" Name="Plain Table 3"/>
  <w:LsdException Locked="false" Priority="44" Name="Plain Table 4"/>
  <w:LsdException Locked="false" Priority="45" Name="Plain Table 5"/>
  <w:LsdException Locked="false" Priority="40" Name="Grid Table Light"/>
  <w:LsdException Locked="false" Priority="46" Name="Grid Table 1 Light"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark"/>
  <w:LsdException Locked="false" Priority="51" Name="Grid Table 6 Colorful"/>
  <w:LsdException Locked="false" Priority="52" Name="Grid Table 7 Colorful"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 1"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 1"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 1"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 1"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 1"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 1"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 2"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 2"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 2"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 2"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 2"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 2"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 3"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 3"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 3"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 3"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 3"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 3"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 4"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 4"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 4"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 4"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 4"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 4"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 5"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 5"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 5"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 5"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 5"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 5"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 6"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 6"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 6"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 6"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 6"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 6"/>
  <w:LsdException Locked="false" Priority="46" Name="List Table 1 Light"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark"/>
  <w:LsdException Locked="false" Priority="51" Name="List Table 6 Colorful"/>
  <w:LsdException Locked="false" Priority="52" Name="List Table 7 Colorful"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 1"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 1"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 1"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 1"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 1"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 1"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 2"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 2"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 2"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 2"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 2"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 2"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 3"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 3"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 3"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 3"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 3"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 3"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 4"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 4"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 4"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 4"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 4"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 4"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 5"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 5"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 5"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 5"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 5"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 5"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 6"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 6"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 6"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 6"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 6"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 6"/>
 </w:LatentStyles>
</xml><![endif]-->
<style>
<!--
 /* Font Definitions */
 @font-face
	{font-family:"Cambria Math";
	panose-1:2 4 5 3 5 4 6 3 2 4;
	mso-font-charset:1;
	mso-generic-font-family:roman;
	mso-font-format:other;
	mso-font-pitch:variable;
	mso-font-signature:0 0 0 0 0 0;}
@font-face
	{font-family:Calibri;
	panose-1:2 15 5 2 2 2 4 3 2 4;
	mso-font-charset:0;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:-536859905 -1073732485 9 0 511 0;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	margin-top:0in;
	margin-right:0in;
	margin-bottom:8.0pt;
	margin-left:0in;
	line-height:106%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
.MsoChpDefault
	{mso-style-type:export-only;
	mso-default-props:yes;
	font-size:10.0pt;
	mso-ansi-font-size:10.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:"Calibri","sans-serif";
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
@page WordSection1
	{size:8.5in 11.0in;
	margin:1.0in 0in 0in 0in;
	mso-header-margin:.5in;
	mso-footer-margin:.5in;
	mso-paper-source:0;}
div.WordSection1
	{page:WordSection1;}
-->
</style>
<!--[if gte mso 10]>
<style>
 /* Style Definitions */
 table.MsoNormalTable
	{mso-style-name:"Table Normal";
	mso-tstyle-rowband-size:0;
	mso-tstyle-colband-size:0;
	mso-style-noshow:yes;
	mso-style-priority:99;
	mso-style-parent:"";
	mso-padding-alt:0in 5.4pt 0in 5.4pt;
	mso-para-margin:0in;
	mso-para-margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:10.0pt;
	font-family:"Calibri","sans-serif";
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
table.MsoTableGrid
	{mso-style-name:"Table Grid";
	mso-tstyle-rowband-size:0;
	mso-tstyle-colband-size:0;
	mso-style-priority:39;
	mso-style-unhide:no;
	border:solid windowtext 1.0pt;
	mso-border-alt:solid windowtext .5pt;
	mso-padding-alt:0in 5.4pt 0in 5.4pt;
	mso-border-insideh:.5pt solid windowtext;
	mso-border-insidev:.5pt solid windowtext;
	mso-para-margin:0in;
	mso-para-margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
</style>
<![endif]--><!--[if gte mso 9]><xml>
 <o:shapedefaults v:ext="edit" spidmax="1026"/>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <o:shapelayout v:ext="edit">
  <o:idmap v:ext="edit" data="1"/>
 </o:shapelayout></xml><![endif]-->
    
   
</head>

<body lang=EN-US style='tab-interval:.5in'>

<div class=WordSection1>
<center>
<img src="school logo.png" height=""/>
<h1 style="text-align:center;font-family:ar julian;font-size:35px;text-transform:uppercase" class="text-danger qp">Queen Jolade Preparatory School </h1>
<h3 style="text-align:center;font-family:ar julian;font-size:25px" class="text-danger qp"> Nurturing Early Learners</h3>
    

<p class=MsoNormal><span style='font-size:10.0pt;mso-bidi-font-size:11.0pt;
line-height:90%'><o:p>&nbsp;</o:p></span></p>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 align=center
 width=797 style='width:598.1pt;border-collapse:collapse;border:none;
 mso-border-alt:solid windowtext .5pt;mso-yfti-tbllook:1184;mso-table-lspace:
 9.0pt;margin-left:6.75pt;mso-table-rspace:9.0pt;margin-right:6.75pt;
 mso-table-bspace:8.0pt;margin-bottom:5.75pt;mso-table-anchor-vertical:page;
 mso-table-anchor-horizontal:margin;mso-table-left:left;mso-table-top:10.55pt;
 mso-padding-alt:0in 5.4pt 0in 5.4pt;mso-border-insideh:.5pt solid windowtext;
 mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:21.3pt'>
  <td width=499 colspan=2 valign=top style='width:374.3pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:21.3pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:14.0pt;mso-bidi-font-size:12.0pt;line-height:
  106%'>Name of Pupil :</span></b><b style='mso-bidi-font-weight:normal'><span
  style='font-size:16.0pt;mso-bidi-font-size:12.0pt;line-height:106%'> <?php echo @$student_name;?></span></b><b style='mso-bidi-font-weight:normal'><span
  style='mso-bidi-font-size:12.0pt;line-height:106%'><o:p></o:p></span></b></p>
  </td>
  <td width=154 colspan=2 valign=top style='width:115.6pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:21.3pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:
  normal'><span style='mso-bidi-font-size:12.0pt;line-height:106%'>Age: <?php echo @$student_age;?><o:p></o:p></span></b></p>
  </td>
  <td width=144 colspan=6 valign=top style='width:108.2pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:21.3pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:
  normal'><span style='mso-bidi-font-size:12.0pt;line-height:106%'>Class:
  <?php echo @$student_class;?><o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:17.05pt'>
  <td width=286 valign=top style='width:214.55pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:17.05pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:
  normal'><span style='mso-bidi-font-size:12.0pt;line-height:106%'>Number in
  class: <?php echo @$student_no_inclass;?><o:p></o:p></span></b></p>
  </td>
  <td width=213 valign=top style='width:159.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:17.05pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:
  normal'><span style='mso-bidi-font-size:12.0pt;line-height:106%'>Admission
  Number: <?php echo @$student_no;?><o:p></o:p></span></b></p>
  </td>
  <td width=154 colspan=2 valign=top style='width:115.6pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:17.05pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:
  normal'><span style='mso-bidi-font-size:12.0pt;line-height:106%'>Term: <?php echo @$student_term;?><o:p></o:p></span></b></p>
  </td>
  <td width=144 colspan=6 valign=top style='width:108.2pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:17.05pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:
  normal'><span style='mso-bidi-font-size:12.0pt;line-height:106%'>Session:
  <?php echo @$student_session;?><o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:22.5pt'>
  <td width=286 valign=top style='width:214.55pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:22.5pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:
  normal'><span style='mso-bidi-font-size:12.0pt;line-height:106%'>Total Mark
  Obtainable: <?php echo $student_mark_obtaineable;?><o:p></o:p></span></b></p>
  </td>
  <td width=213 valign=top style='width:159.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:22.5pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:
  normal'><span style='mso-bidi-font-size:12.0pt;line-height:106%'>Total Marks
  Obtained: <?php echo @$student_mark_obtained;?><o:p></o:p></span></b></p>
  </td>
  <td width=154 colspan=2 valign=top style='width:115.6pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:22.5pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:
  normal'><span style='mso-bidi-font-size:12.0pt;line-height:106%'>Average:<o:p></o:p></span></b></p>
  </td>
  <td width=144 colspan=6 valign=top style='width:108.2pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:22.5pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:
  normal'><span style='mso-bidi-font-size:12.0pt;line-height:106%'>Percentage: <?php echo @$student_percentage;?><o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:85.0pt'>
  <td width=797 colspan=10 valign=top style='width:598.1pt;border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:85.0pt'>
  <p class=MsoNormal style='tab-stops:46.5pt;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
  style='font-size:1.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><o:p>&nbsp;</o:p></span></p>
  <table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 align=left
   style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
   mso-table-overlap:never;mso-yfti-tbllook:1184;mso-table-lspace:9.0pt;
   margin-left:6.75pt;mso-table-rspace:9.0pt;margin-right:6.75pt;mso-table-bspace:
   8.0pt;margin-bottom:5.75pt;mso-table-anchor-vertical:page;mso-table-anchor-horizontal:
   margin;mso-table-left:left;mso-table-top:.05pt;mso-padding-alt:0in 5.4pt 0in 5.4pt;
   mso-border-insideh:.5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>
   <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:15.95pt'>
    <td width=331 colspan=2 valign=top style='width:248.0pt;border:solid windowtext 1.0pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:15.95pt'>
    <p class=MsoNormal align=center style='text-align:center;mso-element:frame;
    mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
    page;mso-element-anchor-horizontal:margin;mso-element-top:10.55pt;
    mso-height-rule:exactly'><span style='font-size:16.0pt;mso-bidi-font-size:
    11.0pt;line-height:106%'>Attendance Record<o:p></o:p></span></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:1;height:15.45pt'>
    <td width=175 valign=top style='width:130.9pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:15.45pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'>No of
    times School Opened<o:p></o:p></span></p>
    </td>
    <td width=156 valign=top style='width:117.1pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:15.45pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'>Student
    Punctuality<o:p></o:p></span></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:2;mso-yfti-lastrow:yes;height:11.1pt'>
    <td width=175 valign=top style='width:130.9pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.1pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><?php echo @$no_s_op;?><o:p>&nbsp;</o:p></span></p>
    </td>
    <td width=156 valign=top style='width:117.1pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:11.1pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><?php echo @$no_s_closed;?><o:p>&nbsp;</o:p></span></p>
    </td>
   </tr>
  </table>
  <table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 align=left
   style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
   mso-table-overlap:never;mso-yfti-tbllook:1184;mso-table-lspace:9.0pt;
   margin-left:6.75pt;mso-table-rspace:9.0pt;margin-right:6.75pt;mso-table-bspace:
   8.0pt;margin-bottom:5.75pt;mso-table-anchor-vertical:page;mso-table-anchor-horizontal:
   margin;mso-table-left:left;mso-table-top:7.55pt;mso-padding-alt:0in 5.4pt 0in 5.4pt;
   mso-border-insideh:.5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>
   <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:23.15pt'>
    <td width=359 colspan=4 valign=top style='width:269.15pt;border:solid windowtext 1.0pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:23.15pt'>
    <p class=MsoNormal align=center style='text-align:center;mso-element:frame;
    mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
    page;mso-element-anchor-horizontal:margin;mso-element-top:10.55pt;
    mso-height-rule:exactly'><span style='font-size:16.0pt;mso-bidi-font-size:
    11.0pt;line-height:106%'>Health And Physical Development</span><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><o:p></o:p></span></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:1;height:18.1pt'>
    <td width=126 valign=top style='width:94.25pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:18.1pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%;
    mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin'>Beginning of
    Term<o:p></o:p></span></p>
    </td>
    <td width=42 valign=top style='width:31.5pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:18.1pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><b
    style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;
    mso-bidi-font-size:11.0pt;line-height:106%'>Height<o:p></o:p></span></b></p>
    </td>
    <td width=48 valign=top style='width:.5in;border-top:none;border-left:none;
    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:18.1pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><b
    style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;
    mso-bidi-font-size:11.0pt;line-height:106%'>Weight<o:p></o:p></span></b></p>
    </td>
    <td width=143 valign=top style='width:107.4pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:18.1pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><b
    style='mso-bidi-font-weight:normal'><span style='font-size:6.0pt;
    mso-bidi-font-size:11.0pt;line-height:106%'>No Of Days Absent due to
    Illness<o:p></o:p></span></b></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:2;mso-yfti-lastrow:yes;height:17.65pt'>
    <td width=126 valign=top style='width:94.25pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:17.65pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'>End of
    Term<o:p></o:p></span></p>
    </td>
    <td width=42 valign=top style='width:31.5pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:17.65pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><o:p>&nbsp;</o:p></span></p>
    </td>
    <td width=48 valign=top style='width:.5in;border-top:none;border-left:none;
    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:17.65pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><o:p>&nbsp;</o:p></span></p>
    </td>
    <td width=143 valign=top style='width:107.4pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:17.65pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'>Nature
    of Illness;<o:p></o:p></span></p>
    </td>
   </tr>
  </table>
  <p class=MsoNormal style='tab-stops:46.5pt;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
  style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:37.95pt'>
  <td width=557 colspan=3 rowspan=14 valign=top style='width:418.1pt;
  border:solid windowtext 1.0pt;border-top:none;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:37.95pt'>
  <table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 align=left
   width=494 style='width:370.75pt;border-collapse:collapse;border:none;
   mso-border-alt:solid windowtext .5pt;mso-table-overlap:never;mso-yfti-tbllook:
   1184;mso-table-lspace:9.0pt;margin-left:6.75pt;mso-table-rspace:9.0pt;
   margin-right:6.75pt;mso-table-bspace:8.0pt;margin-bottom:5.75pt;mso-table-anchor-vertical:
   margin;mso-table-anchor-horizontal:margin;mso-table-left:left;mso-table-top:
   4.55pt;mso-padding-alt:0in 5.4pt 0in 5.4pt;mso-border-insideh:.5pt solid windowtext;
   mso-border-insidev:.5pt solid windowtext'>
   <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:17.85pt'>
    <td width=123 valign=top style='width:92.4pt;border:solid windowtext 1.0pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:17.85pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><o:p>&nbsp;</o:p></span></p>
    </td>
    <td width=47 valign=top style='width:35.35pt;border:solid windowtext 1.0pt;
    border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:17.85pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'>CA Test<o:p></o:p></span></p>
    </td>
    <td width=48 valign=top style='width:36.1pt;border:solid windowtext 1.0pt;
    border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:17.85pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'>Home
    Work<o:p></o:p></span></p>
    </td>
    <td width=54 valign=top style='width:40.2pt;border:solid windowtext 1.0pt;
    border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:17.85pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'>Terms
    Exam<o:p></o:p></span></p>
    </td>
    <td width=42 valign=top style='width:31.35pt;border:solid windowtext 1.0pt;
    border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:17.85pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'>Total<o:p></o:p></span></p>
    </td>
    <td width=49 valign=top style='width:36.8pt;border:solid windowtext 1.0pt;
    border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:17.85pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'>Grade<o:p></o:p></span></p>
    </td>
    <td width=64 valign=top style='width:48.0pt;border:solid windowtext 1.0pt;
    border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:17.85pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'>Subject
    Position<o:p></o:p></span></p>
    </td>
    <td width=67 valign=top style='width:50.55pt;border:solid windowtext 1.0pt;
    border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:17.85pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'>Teachers
    Remark<o:p></o:p></span></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:1;height:22.8pt'>
    <td width=123 valign=top style='width:92.4pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:22.8pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><b
    style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;
    mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Arial","sans-serif"'>Marks
    Obtainable<o:p></o:p></span></b></p>
    </td>
    <td width=47 valign=top style='width:35.35pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:22.8pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><b
    style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;
    mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Arial","sans-serif"'>30<o:p></o:p></span></b></p>
    </td>
    <td width=48 valign=top style='width:36.1pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:22.8pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><b
    style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;
    mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Arial","sans-serif"'>10<o:p></o:p></span></b></p>
    </td>
    <td width=54 valign=top style='width:40.2pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:22.8pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><b
    style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;
    mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Arial","sans-serif"'>60<o:p></o:p></span></b></p>
    </td>
    <td width=42 valign=top style='width:31.35pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:22.8pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><b
    style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;
    mso-bidi-font-size:11.0pt;line-height:106%;font-family:"Arial","sans-serif"'>100<o:p></o:p></span></b></p>
    </td>
    <td width=49 valign=top style='width:36.8pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:22.8pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><o:p>&nbsp;</o:p></span></p>
    </td>
    <td width=64 valign=top style='width:48.0pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:22.8pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><o:p>&nbsp;</o:p></span></p>
    </td>
    <td width=67 valign=top style='width:50.55pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:22.8pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><o:p>&nbsp;</o:p></span></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:2;height:20.7pt'>
    <td width=123 valign=top style='width:92.4pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:20.7pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><b
    style='mso-bidi-font-weight:normal'><?php echo @$course_1;?> <o:p></o:p></b></p>
    </td>
    <td width=47 valign=top style='width:35.35pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:20.7pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><?php echo @$e_ca;?><o:p></o:p></span></p>
    </td>
    <td width=48 valign=top style='width:36.1pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:20.7pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><?php echo @$e_hw;?><o:p></o:p></span></p>
    </td>
    <td width=54 valign=top style='width:40.2pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:20.7pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><?php echo @$e_te;?><o:p></o:p></span></p>
    </td>
    <td width=42 valign=top style='width:31.35pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:20.7pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><?php echo @$e_total;?><o:p></o:p></span></p>
    </td>
    <td width=49 valign=top style='width:36.8pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:20.7pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><?php echo @$e_grade;?><o:p></o:p></span></p>
    </td>
    <td width=64 valign=top style='width:48.0pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:20.7pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><?php echo @$e_sp;?><o:p></o:p></span></p>
    </td>
    <td width=67 valign=top style='width:50.55pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:20.7pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><?php echo @$e_tr;?><o:p></o:p></span></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:3;height:14.35pt'>
    <td width=123 valign=top style='width:92.4pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:14.35pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><b
    style='mso-bidi-font-weight:normal'><?php echo @$course_2;?><o:p></o:p></b></p>
    </td>
    <td width=47 valign=top style='width:35.35pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:14.35pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><?php echo @$m_ca;?><o:p></o:p></span></p>
    </td>
    <td width=48 valign=top style='width:36.1pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:14.35pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><?php echo @$m_hw;?><o:p></o:p></span></p>
    </td>
    <td width=54 valign=top style='width:40.2pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:14.35pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><?php echo @$m_te;?><o:p></o:p></span></p>
    </td>
    <td width=42 valign=top style='width:31.35pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:14.35pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><?php echo @$m_total;?><o:p></o:p></span></p>
    </td>
    <td width=49 valign=top style='width:36.8pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:14.35pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><?php echo @$m_grade;?><o:p></o:p></span></p>
    </td>
    <td width=64 valign=top style='width:48.0pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:14.35pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><?php echo @$m_sp;?><o:p></o:p></span></p>
    </td>
    <td width=67 valign=top style='width:50.55pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:14.35pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><?php echo @$m_tr;?><o:p></o:p></span></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:4;height:12.6pt'>
    <td width=123 valign=top style='width:92.4pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:12.6pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><b
    style='mso-bidi-font-weight:normal'><?php echo @$course_3;?><o:p></o:p></b></p>
    </td>
    <td width=47 valign=top style='width:35.35pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:12.6pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><?php echo @$h_ca;?><o:p></o:p></span></p>
    </td>
    <td width=48 valign=top style='width:36.1pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:12.6pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><?php echo @$h_hw;?><o:p></o:p></span></p>
    </td>
    <td width=54 valign=top style='width:40.2pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:12.6pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><?php echo @$h_te;?><o:p></o:p></span></p>
    </td>
    <td width=42 valign=top style='width:31.35pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:12.6pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><?php echo @$h_total;?><o:p></o:p></span></p>
    </td>
    <td width=49 valign=top style='width:36.8pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:12.6pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><?php echo @$h_grade;?><o:p></o:p></span></p>
    </td>
    <td width=64 valign=top style='width:48.0pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:12.6pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><?php echo @$h_sp;?><o:p></o:p></span></p>
    </td>
    <td width=67 valign=top style='width:50.55pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:12.6pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><?php echo @$h_tr;?><o:p></o:p></span></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:5;height:24.8pt'>
    <td width=123 valign=top style='width:92.4pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:24.8pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><b
    style='mso-bidi-font-weight:normal'><?php echo @$course_4;?><o:p></o:p></b></p>
    </td>
    <td width=47 valign=top style='width:35.35pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:24.8pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><?php echo @$s_ca;?><o:p></o:p></span></p>
    </td>
    <td width=48 valign=top style='width:36.1pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:24.8pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><?php echo @$s_hw;?><o:p></o:p></span></p>
    </td>
    <td width=54 valign=top style='width:40.2pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:24.8pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><?php echo @$s_te;?><o:p></o:p></span></p>
    </td>
    <td width=42 valign=top style='width:31.35pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:24.8pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><?php echo @$s_total;?><o:p></o:p></span></p>
    </td>
    <td width=49 valign=top style='width:36.8pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:24.8pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><?php echo @$s_grade;?><o:p></o:p></span></p>
    </td>
    <td width=64 valign=top style='width:48.0pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:24.8pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><?php echo @$s_sp;?><o:p></o:p></span></p>
    </td>
    <td width=67 valign=top style='width:50.55pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:24.8pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><?php echo @$s_tr;?><o:p></o:p></span></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:6;height:12.15pt'>
    <td width=123 valign=top style='width:92.4pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:12.15pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><b
    style='mso-bidi-font-weight:normal'><?php echo @$course_5;?><o:p></o:p></b></p>
    </td>
    <td width=47 valign=top style='width:35.35pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:12.15pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><?php echo @$sc_ca;?><o:p></o:p></span></p>
    </td>
    <td width=48 valign=top style='width:36.1pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:12.15pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><?php echo @$sc_hw;?><o:p></o:p></span></p>
    </td>
    <td width=54 valign=top style='width:40.2pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:12.15pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><?php echo @$sc_te;?><o:p></o:p></span></p>
    </td>
    <td width=42 valign=top style='width:31.35pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:12.15pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><?php echo @$sc_total;?><o:p></o:p></span></p>
    </td>
    <td width=49 valign=top style='width:36.8pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:12.15pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><?php echo @$sc_grade;?><o:p></o:p></span></p>
    </td>
    <td width=64 valign=top style='width:48.0pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:12.15pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><?php echo @$sc_sp;?><o:p></o:p></span></p>
    </td>
    <td width=67 valign=top style='width:50.55pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:12.15pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><?php echo @$sc_tr;?><o:p></o:p></span></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:7;height:32.55pt'>
    <td width=123 valign=top style='width:92.4pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:32.55pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><b
    style='mso-bidi-font-weight:normal'><?php echo @$course_6;?><o:p></o:p></b></p>
    </td>
    <td width=47 valign=top style='width:35.35pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:32.55pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><?php echo @$r_ca;?><o:p></o:p></span></p>
    </td>
    <td width=48 valign=top style='width:36.1pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:32.55pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><?php echo @$r_hw;?><o:p></o:p></span></p>
    </td>
    <td width=54 valign=top style='width:40.2pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:32.55pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><?php echo @$r_te;?><o:p></o:p></span></p>
    </td>
    <td width=42 valign=top style='width:31.35pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:32.55pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><?php echo @$r_total;?><o:p></o:p></span></p>
    </td>
    <td width=49 valign=top style='width:36.8pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:32.55pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><?php echo @$r_grade;?><o:p></o:p></span></p>
    </td>
    <td width=64 valign=top style='width:48.0pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:32.55pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><?php echo @$r_sp;?><o:p></o:p></span></p>
    </td>
    <td width=67 valign=top style='width:50.55pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:32.55pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><?php echo @$r_tr;?><o:p></o:p></span></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:8;height:21.25pt'>
    <td width=123 valign=top style='width:92.4pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:21.25pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><b
    style='mso-bidi-font-weight:normal'><?php echo @$course_7;?><o:p></o:p></b></p>
    </td>
    <td width=47 valign=top style='width:35.35pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:21.25pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><?php echo @$a_ca;?><o:p></o:p></span></p>
    </td>
    <td width=48 valign=top style='width:36.1pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:21.25pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><?php echo @$a_hw;?><o:p></o:p></span></p>
    </td>
    <td width=54 valign=top style='width:40.2pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:21.25pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><?php echo @$a_te;?><o:p></o:p></span></p>
    </td>
    <td width=42 valign=top style='width:31.35pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:21.25pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><?php echo @$a_total;?><o:p></o:p></span></p>
    </td>
    <td width=49 valign=top style='width:36.8pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:21.25pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><?php echo @$a_grade;?><o:p></o:p></span></p>
    </td>
    <td width=64 valign=top style='width:48.0pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:21.25pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><?php echo @$a_sp;?><o:p></o:p></span></p>
    </td>
    <td width=67 valign=top style='width:50.55pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:21.25pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><?php echo @$a_tr;?><o:p></o:p></span></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:9;height:17.25pt'>
    <td width=123 valign=top style='width:92.4pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:17.25pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><b
    style='mso-bidi-font-weight:normal'><?php echo @$course_8;?><o:p></o:p></b></p>
    </td>
    <td width=47 valign=top style='width:35.35pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:17.25pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><?php echo @$f_ca;?><o:p></o:p></span></p>
    </td>
    <td width=48 valign=top style='width:36.1pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:17.25pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><?php echo @$f_hw;?><o:p></o:p></span></p>
    </td>
    <td width=54 valign=top style='width:40.2pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:17.25pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><?php echo @$f_te;?><o:p></o:p></span></p>
    </td>
    <td width=42 valign=top style='width:31.35pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:17.25pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><?php echo @$f_total;?><o:p></o:p></span></p>
    </td>
    <td width=49 valign=top style='width:36.8pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:17.25pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><?php echo @$f_grade;?><o:p></o:p></span></p>
    </td>
    <td width=64 valign=top style='width:48.0pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:17.25pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><?php echo @$f_sp;?><o:p></o:p></span></p>
    </td>
    <td width=67 valign=top style='width:50.55pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:17.25pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><?php echo @$f_tr;?><o:p></o:p></span></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:10;height:20.1pt'>
    <td width=123 valign=top style='width:92.4pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:20.1pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><b
    style='mso-bidi-font-weight:normal'><?php echo @$course_9;?><o:p></o:p></b></p>
    </td>
    <td width=47 valign=top style='width:35.35pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:20.1pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><?php echo @$i_ca;?><o:p></o:p></span></p>
    </td>
    <td width=48 valign=top style='width:36.1pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:20.1pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><?php echo @$i_hw;?><o:p></o:p></span></p>
    </td>
    <td width=54 valign=top style='width:40.2pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:20.1pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><?php echo @$i_te;?><o:p></o:p></span></p>
    </td>
    <td width=42 valign=top style='width:31.35pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:20.1pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><?php echo @$i_total;?><o:p></o:p></span></p>
    </td>
    <td width=49 valign=top style='width:36.8pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:20.1pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><?php echo @$i_grade;?><o:p></o:p></span></p>
    </td>
    <td width=64 valign=top style='width:48.0pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:20.1pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><?php echo @$i_sp;?><o:p></o:p></span></p>
    </td>
    <td width=67 valign=top style='width:50.55pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:20.1pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><?php echo @$i_tr;?><o:p></o:p></span></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:11;mso-yfti-lastrow:yes;height:19.45pt'>
    <td width=123 valign=top style='width:92.4pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:19.45pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><b
    style='mso-bidi-font-weight:normal'><?php echo @$course_10;?><o:p></o:p></b></p>
    </td>
    <td width=47 valign=top style='width:35.35pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:19.45pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><?php echo @$ar_ca;?><o:p></o:p></span></p>
    </td>
    <td width=48 valign=top style='width:36.1pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:19.45pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><?php echo @$ar_hw;?><o:p></o:p></span></p>
    </td>
    <td width=54 valign=top style='width:40.2pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:19.45pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><?php echo @$ar_te;?><o:p></o:p></span></p>
    </td>
    <td width=42 valign=top style='width:31.35pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:19.45pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><?php echo @$ar_total;?><o:p></o:p></span></p>
    </td>
    <td width=49 valign=top style='width:36.8pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:19.45pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><?php echo @$ar_grade;?><o:p></o:p></span></p>
    </td>
    <td width=64 valign=top style='width:48.0pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:19.45pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><?php echo @$ar_sp;?><o:p></o:p></span></p>
    </td>
    <td width=67 valign=top style='width:50.55pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:19.45pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><?php echo @$ar_tr;?><o:p></o:p></span></p>
    </td>
   </tr>
  </table>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
  style='mso-bidi-font-size:12.0pt;line-height:106%'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
  style='mso-bidi-font-size:12.0pt;line-height:106%'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
  style='mso-bidi-font-size:12.0pt;line-height:106%'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
  style='mso-bidi-font-size:12.0pt;line-height:106%'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
  style='mso-bidi-font-size:12.0pt;line-height:106%'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
  style='mso-bidi-font-size:12.0pt;line-height:106%'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
  style='mso-bidi-font-size:12.0pt;line-height:106%'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
  style='mso-bidi-font-size:12.0pt;line-height:106%'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
  style='mso-bidi-font-size:12.0pt;line-height:106%'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
  style='mso-bidi-font-size:12.0pt;line-height:106%'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
  style='mso-bidi-font-size:12.0pt;line-height:106%'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
  style='mso-bidi-font-size:12.0pt;line-height:106%'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
  style='mso-bidi-font-size:12.0pt;line-height:106%'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
  style='mso-bidi-font-size:12.0pt;line-height:106%'><o:p>&nbsp;</o:p></span></p>
  <table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 align=left
   style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
   mso-table-overlap:never;mso-yfti-tbllook:1184;mso-table-lspace:9.0pt;
   margin-left:6.75pt;mso-table-rspace:9.0pt;margin-right:6.75pt;mso-table-anchor-vertical:
   page;mso-table-anchor-horizontal:margin;mso-table-left:left;mso-table-top:
   345.8pt;mso-padding-alt:0in 5.4pt 0in 5.4pt'>
   <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:15.8pt'>
    <td width=173 valign=top style='width:129.8pt;border:solid windowtext 1.0pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:15.8pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal;mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='mso-bidi-font-size:12.0pt'>Teacher<o:p></o:p></span></p>
    </td>
    <td width=354 valign=top style='width:265.5pt;border:solid windowtext 1.0pt;
    border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:15.8pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal;mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='mso-bidi-font-size:12.0pt'><?php echo @$teacher_coment;?><o:p></o:p></span></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:1;height:15.8pt'>
    <td width=173 valign=top style='width:129.8pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:15.8pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal;mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='mso-bidi-font-size:12.0pt'>Program Director<o:p></o:p></span></p>
    </td>
    <td width=354 valign=top style='width:265.5pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:15.8pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal;mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='mso-bidi-font-size:12.0pt'><?php echo @$program_director;?><o:p></o:p></span></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:2;height:15.8pt'>
    <td width=173 valign=top style='width:129.8pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:15.8pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal;mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='mso-bidi-font-size:12.0pt'>Next Term Begins<o:p></o:p></span></p>
    </td>
    <td width=354 valign=top style='width:265.5pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:15.8pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal;mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='mso-bidi-font-size:12.0pt'><?php echo @$next_term_begins;?><o:p></o:p></span></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes;height:17.65pt'>
    <td width=173 valign=top style='width:129.8pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:17.65pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal;mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='mso-bidi-font-size:12.0pt'>This Term Ends<o:p></o:p></span></p>
    </td>
    <td width=354 valign=top style='width:265.5pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:17.65pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal;mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
    margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
    style='mso-bidi-font-size:12.0pt'><?php echo @$this_term_ends;?><o:p></o:p></span></p>
    </td>
   </tr>
  </table>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
  style='mso-bidi-font-size:12.0pt;line-height:106%'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
  style='mso-bidi-font-size:12.0pt;line-height:106%'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
  style='mso-bidi-font-size:12.0pt;line-height:106%'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
  style='mso-bidi-font-size:12.0pt;line-height:106%'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
  style='mso-bidi-font-size:12.0pt;line-height:106%'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
  style='mso-bidi-font-size:12.0pt;line-height:106%'>School Stamp and
  Authorized Signature:____________________________<o:p></o:p></span></p>
  </td>
  <td width=138 colspan=2 valign=top style='width:103.45pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:37.95pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  page;mso-element-anchor-horizontal:margin;mso-element-top:10.55pt;mso-height-rule:
  exactly'><b style='mso-bidi-font-weight:normal'><span style='font-size:13.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%'>Observation on Conduct</span></b><b
  style='mso-bidi-font-weight:normal'><span style='font-size:18.0pt;mso-bidi-font-size:
  11.0pt;line-height:106%'><o:p></o:p></span></b></p>
  </td>
  <td width=20 valign=top style='width:15.35pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:37.95pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:8.0pt;mso-bidi-font-size:11.0pt;line-height:
  106%'>1<o:p></o:p></span></b></p>
  </td>
  <td width=20 valign=top style='width:15.3pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:37.95pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:8.0pt;mso-bidi-font-size:11.0pt;line-height:
  106%'>2<o:p></o:p></span></b></p>
  </td>
  <td width=20 valign=top style='width:15.3pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:37.95pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:8.0pt;mso-bidi-font-size:11.0pt;line-height:
  106%'>3<o:p></o:p></span></b></p>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:8.0pt;mso-bidi-font-size:11.0pt;line-height:
  106%'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=20 valign=top style='width:15.3pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:37.95pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:8.0pt;mso-bidi-font-size:11.0pt;line-height:
  106%'>4<o:p></o:p></span></b></p>
  </td>
  <td width=20 valign=top style='width:15.3pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:37.95pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:8.0pt;mso-bidi-font-size:11.0pt;line-height:
  106%'>5<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;height:34.3pt'>
  <td width=138 colspan=2 valign=top style='width:103.45pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:34.3pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%'>Handwriting<o:p></o:p></span></p>
  </td>
  <td width=20 valign=top style='width:15.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:34.3pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%'>
      
      <?php 
      if($handwriting>=1)
          echo '<i class="glyphicon glyphicon-ok"></i>';
      ?>
      <o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=20 valign=top style='width:15.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:34.3pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%'>
      <?php 
      if($handwriting>=2)
          echo '<i class="glyphicon glyphicon-ok"></i>';
      ?>
      <o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=20 valign=top style='width:15.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:34.3pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%'>
      <?php 
      if($handwriting>=3)
          echo '<i class="glyphicon glyphicon-ok"></i>';
      ?>
      <o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=20 valign=top style='width:15.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:34.3pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%'>
      <?php 
      if($handwriting>=4)
          echo '<i class="glyphicon glyphicon-ok"></i>';
      ?>
      <o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=20 valign=top style='width:15.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:34.3pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%'>
      <?php 
      if($handwriting>=5)
          echo '<i class="glyphicon glyphicon-ok"></i>';
      ?>
      <o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;height:34.3pt'>
  <td width=138 colspan=2 valign=top style='width:103.45pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:34.3pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%'>Performance in Physical Skills<o:p></o:p></span></p>
  </td>
  <td width=20 valign=top style='width:15.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:34.3pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%'>
      <?php 
      if($ps>=1)
          echo '<i class="glyphicon glyphicon-ok"></i>';
      ?>
      <o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=20 valign=top style='width:15.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:34.3pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%'>
      <?php 
      if($ps>=2)
          echo '<i class="glyphicon glyphicon-ok"></i>';
      ?>
      <o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=20 valign=top style='width:15.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:34.3pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%'>
      <?php 
      if($ps>=3)
          echo '<i class="glyphicon glyphicon-ok"></i>';
      ?>
      <o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=20 valign=top style='width:15.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:34.3pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%'>
      <?php 
      if($ps>=4)
          echo '<i class="glyphicon glyphicon-ok"></i>';
      ?>
      <o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=20 valign=top style='width:15.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:34.3pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%'>
      <?php 
      if($ps>=5)
          echo '<i class="glyphicon glyphicon-ok"></i>';
      ?>
      <o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;height:36.85pt'>
  <td width=138 colspan=2 valign=top style='width:103.45pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:36.85pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%'>Uses Time
  To Good Advantage<o:p></o:p></span></p>
  </td>
  <td width=20 valign=top style='width:15.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:36.85pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%'>
      <?php 
      if($ut>=1)
          echo '<i class="glyphicon glyphicon-ok"></i>';
      ?>
      <o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=20 valign=top style='width:15.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:36.85pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%'>
      <?php 
      if($ut>=2)
          echo '<i class="glyphicon glyphicon-ok"></i>';
      ?>
      <o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=20 valign=top style='width:15.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:36.85pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%'>
      <?php 
      if($ut>=3)
          echo '<i class="glyphicon glyphicon-ok"></i>';
      ?>
      <o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=20 valign=top style='width:15.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:36.85pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%'>
      <?php 
      if($ut>=4)
          echo '<i class="glyphicon glyphicon-ok"></i>';
      ?>
      <o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=20 valign=top style='width:15.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:36.85pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%'>
      <?php 
      if($ut>=5)
          echo '<i class="glyphicon glyphicon-ok"></i>';
      ?>
      <o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8;height:39.35pt'>
  <td width=138 colspan=2 valign=top style='width:103.45pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:39.35pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%'>Does Neat
  Work<o:p></o:p></span></p>
  </td>
  <td width=20 valign=top style='width:15.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:39.35pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%'>
      <?php 
      if($dn>=1)
          echo '<i class="glyphicon glyphicon-ok"></i>';
      ?>
      <o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=20 valign=top style='width:15.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:39.35pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%'>
      <?php 
      if($dn>=2)
          echo '<i class="glyphicon glyphicon-ok"></i>';
      ?>
      <o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=20 valign=top style='width:15.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:39.35pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%'>
      <?php 
      if($dn>=3)
          echo '<i class="glyphicon glyphicon-ok"></i>';
      ?>
      <o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=20 valign=top style='width:15.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:39.35pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%'>
      <?php 
      if($dn>=4)
          echo '<i class="glyphicon glyphicon-ok"></i>';
      ?>
      <o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=20 valign=top style='width:15.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:39.35pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%'>
      <?php 
      if($dn>=5)
          echo '<i class="glyphicon glyphicon-ok"></i>';
      ?>
      <o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9;height:32.65pt'>
  <td width=138 colspan=2 valign=top style='width:103.45pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:32.65pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%'>Does Home
  Work Regularly<o:p></o:p></span></p>
  </td>
  <td width=20 valign=top style='width:15.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:32.65pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%'>
      <?php 
      if($hwr>=1)
          echo '<i class="glyphicon glyphicon-ok"></i>';
      ?>
      <o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=20 valign=top style='width:15.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:32.65pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%'>
      <?php 
      if($hwr>=2)
          echo '<i class="glyphicon glyphicon-ok"></i>';
      ?>
      <o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=20 valign=top style='width:15.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:32.65pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%'>
      <?php 
      if($hwr>=3)
          echo '<i class="glyphicon glyphicon-ok"></i>';
      ?>
      <o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=20 valign=top style='width:15.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:32.65pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%'>
      <?php 
      if($hwr>=4)
          echo '<i class="glyphicon glyphicon-ok"></i>';
      ?>
      <o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=20 valign=top style='width:15.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:32.65pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%'>
      <?php 
      if($hwr>=5)
          echo '<i class="glyphicon glyphicon-ok"></i>';
      ?>
      <o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:10;height:28.3pt'>
  <td width=138 colspan=2 valign=top style='width:103.45pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:28.3pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%'>Respect
  Authority<o:p></o:p></span></p>
  </td>
  <td width=20 valign=top style='width:15.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:28.3pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%'>
      <?php 
      if($rau>=1)
          echo '<i class="glyphicon glyphicon-ok"></i>';
      ?>
      <o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=20 valign=top style='width:15.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:28.3pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%'>
      <?php 
      if($rau>=2)
          echo '<i class="glyphicon glyphicon-ok"></i>';
      ?>
      <o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=20 valign=top style='width:15.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:28.3pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%'>
      <?php 
      if($rau>=3)
          echo '<i class="glyphicon glyphicon-ok"></i>';
      ?>
      <o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=20 valign=top style='width:15.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:28.3pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%'>
      <?php 
      if($rau>=4)
          echo '<i class="glyphicon glyphicon-ok"></i>';
      ?>
      <o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=20 valign=top style='width:15.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:28.3pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%'>
      <?php 
      if($rau>=5)
          echo '<i class="glyphicon glyphicon-ok"></i>';
      ?>
      <o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:11;height:11.2pt'>
  <td width=138 colspan=2 valign=top style='width:103.45pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.2pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  page;mso-element-anchor-horizontal:margin;mso-element-top:10.55pt;mso-height-rule:
  exactly'><b style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;
  mso-bidi-font-size:11.0pt;line-height:106%'>KEYS TO RATINGS<o:p></o:p></span></b></p>
  </td>
  <td width=20 valign=top style='width:15.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.2pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
  style='font-size:8.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=82 colspan=4 rowspan=7 valign=top style='width:.85in;border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.2pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><span
  style='font-size:18.0pt;mso-bidi-font-size:11.0pt;line-height:106%'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:12;height:13.0pt'>
  <td width=138 colspan=2 valign=top style='width:103.45pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:13.0pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:7.0pt;mso-bidi-font-size:11.0pt;line-height:
  106%'>Excellent<o:p></o:p></span></b></p>
  </td>
  <td width=20 valign=top style='width:15.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:13.0pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:7.0pt;mso-bidi-font-size:11.0pt;line-height:
  106%'>5<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:13;height:7.6pt'>
  <td width=138 colspan=2 valign=top style='width:103.45pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:7.6pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:7.0pt;mso-bidi-font-size:11.0pt;line-height:
  106%'>Good In Trait<o:p></o:p></span></b></p>
  </td>
  <td width=20 valign=top style='width:15.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:7.6pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:7.0pt;mso-bidi-font-size:11.0pt;line-height:
  106%'>4<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:14;height:7.15pt'>
  <td width=138 colspan=2 valign=top style='width:103.45pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:7.15pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:7.0pt;mso-bidi-font-size:11.0pt;line-height:
  106%'>Satisfactory In Trait<o:p></o:p></span></b></p>
  </td>
  <td width=20 valign=top style='width:15.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:7.15pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:7.0pt;mso-bidi-font-size:11.0pt;line-height:
  106%'>3<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:15;height:18.4pt'>
  <td width=138 colspan=2 valign=top style='width:103.45pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:18.4pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:7.0pt;mso-bidi-font-size:11.0pt;line-height:
  106%'>Fair In Trait<o:p></o:p></span></b></p>
  </td>
  <td width=20 valign=top style='width:15.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:18.4pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:7.0pt;mso-bidi-font-size:11.0pt;line-height:
  106%'>2<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:16;height:16.35pt'>
  <td width=138 colspan=2 valign=top style='width:103.45pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:16.35pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:7.0pt;mso-bidi-font-size:11.0pt;line-height:
  106%'>Poor in Trait<o:p></o:p></span></b></p>
  </td>
  <td width=20 valign=top style='width:15.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:16.35pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:7.0pt;mso-bidi-font-size:11.0pt;line-height:
  106%'>1<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:17;mso-yfti-lastrow:yes;height:53.25pt'>
  <td width=158 colspan=3 valign=top style='width:1.65in;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:53.25pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  margin;mso-element-top:10.55pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:7.0pt;mso-bidi-font-size:11.0pt;line-height:
  106%'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <![if !supportMisalignedColumns]>
 <tr height=0>
  <td width=286 style='border:none'></td>
  <td width=213 style='border:none'></td>
  <td width=58 style='border:none'></td>
  <td width=96 style='border:none'></td>
  <td width=42 style='border:none'></td>
  <td width=20 style='border:none'></td>
  <td width=20 style='border:none'></td>
  <td width=20 style='border:none'></td>
  <td width=20 style='border:none'></td>
  <td width=20 style='border:none'></td>
 </tr>
 <![endif]>
</table>


</center>
</div>

</body>

</html>
