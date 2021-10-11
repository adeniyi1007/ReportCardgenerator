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
 $f_tr=$_POST["e_tr"];

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










?>




<html xmlns:v="urn:schemas-microsoft-com:vml"
xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:w="urn:schemas-microsoft-com:office:word"
xmlns:m="http://schemas.microsoft.com/office/2004/12/omml"
xmlns="http://www.w3.org/TR/REC-html40">

<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<meta name=ProgId content=Word.Document>
<meta name=Generator content="Microsoft Word 15">
<meta name=Originator content="Microsoft Word 15">
<link rel=File-List href="result_template_files/filelist.xml">
<!--[if gte mso 9]><xml>
 <o:DocumentProperties>
  <o:Author>ROTCIV</o:Author>
  <o:Template>Normal</o:Template>
  <o:LastAuthor>ROTCIV</o:LastAuthor>
  <o:Revision>12</o:Revision>
  <o:TotalTime>99</o:TotalTime>
  <o:Created>2017-03-19T18:24:00Z</o:Created>
  <o:LastSaved>2017-03-19T18:45:00Z</o:LastSaved>
  <o:Pages>1</o:Pages>
  <o:Words>221</o:Words>
  <o:Characters>1263</o:Characters>
  <o:Lines>10</o:Lines>
  <o:Paragraphs>2</o:Paragraphs>
  <o:CharactersWithSpaces>1482</o:CharactersWithSpaces>
  <o:Version>15.00</o:Version>
 </o:DocumentProperties>
 <o:OfficeDocumentSettings>
  <o:AllowPNG/>
 </o:OfficeDocumentSettings>
</xml><![endif]-->
<link rel=themeData href="result_template_files/themedata.thmx">
<link rel=colorSchemeMapping href="result_template_files/colorschememapping.xml">
<!--[if gte mso 9]><xml>
 <w:WordDocument>
  <w:Zoom>50</w:Zoom>
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
	mso-font-charset:0;
	mso-generic-font-family:roman;
	mso-font-pitch:variable;
	mso-font-signature:-536870145 1107305727 0 0 415 0;}
@font-face
	{font-family:Calibri;
	panose-1:2 15 5 2 2 2 4 3 2 4;
	mso-font-charset:0;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:-520092929 1073786111 9 0 415 0;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	margin-top:0in;
	margin-right:0in;
	margin-bottom:8.0pt;
	margin-left:0in;
	line-height:107%;
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
span.SpellE
	{mso-style-name:"";
	mso-spl-e:yes;}
.MsoChpDefault
	{mso-style-type:export-only;
	mso-default-props:yes;
	font-family:"Calibri","sans-serif";
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
.MsoPapDefault
	{mso-style-type:export-only;
	margin-bottom:8.0pt;
	line-height:107%;}
@page WordSection1
	{size:8.5in 11.0in;
	margin:1.0in 1.0in 0in 1.0in;
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
	mso-para-margin-top:0in;
	mso-para-margin-right:0in;
	mso-para-margin-bottom:8.0pt;
	mso-para-margin-left:0in;
	line-height:107%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
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
 
 
 <title> Report</title>
</head>

<body lang=EN-US style='tab-interval:.5in'>

<div class=WordSection1>

<p class=MsoNormal align=center style='text-align:center'><span
style='font-size:28.0pt;mso-bidi-font-size:11.0pt;line-height:107%'>Queen <span
class=SpellE>Jolade</span> Preparatory School<o:p></o:p></span></p>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 align=left
 width=942 style='width:706.6pt;border-collapse:collapse;border:none;
 mso-border-alt:solid windowtext .5pt;mso-table-lspace:9.0pt;margin-left:6.75pt;
 mso-table-rspace:9.0pt;margin-right:6.75pt;mso-table-anchor-vertical:margin;
 mso-table-anchor-horizontal:margin;mso-table-left:left;mso-table-top:-33.1pt;
 mso-padding-alt:0in 5.4pt 0in 5.4pt;mso-border-insideh:.5pt solid windowtext;
 mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:21.1pt'>
  <td width=626 colspan=4 valign=top style='width:469.4pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:21.1pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -33.1pt;mso-height-rule:exactly'><span style='font-size:15.0pt;mso-bidi-font-size:
  11.0pt;line-height:107%'>Name of Pupil :</span><span style='font-size:19.0pt;
  mso-bidi-font-size:11.0pt;line-height:107%'> </span><span class=SpellE><b
  style='mso-bidi-font-weight:normal'><span style='font-size:16.0pt;mso-bidi-font-size:
  11.0pt;line-height:107%'><?php echo @$student_surname_name;?></span></b></span><b style='mso-bidi-font-weight:
  normal'><span style='font-size:16.0pt;mso-bidi-font-size:11.0pt;line-height:
  107%'> <?php echo @$student_name;?></span></b><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt;
  line-height:107%'><o:p></o:p></span></p>
  </td>
  <td width=135 colspan=2 valign=top style='width:101.25pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:21.1pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
  11.0pt;line-height:107%'>Age: <?php echo @$student_age;?><o:p></o:p></span></p>
  </td>
  <td width=181 colspan=6 valign=top style='width:135.9pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:21.1pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
  11.0pt;line-height:107%'>Class: <?php echo @$student_class;?><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:26.55pt'>
  <td width=255 valign=top style='width:190.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:26.55pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -33.1pt;mso-height-rule:exactly'><span style='font-size:13.0pt;mso-bidi-font-size:
  11.0pt;line-height:107%'>Number in class : <?php echo @$student_no_inclass;?> <o:p></o:p></span></p>
  </td>
  <td width=335 colspan=2 valign=top style='width:250.95pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:26.55pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-horizontal:
  margin;mso-element-top:-33.1pt;mso-height-rule:exactly'><span
  style='font-size:13.0pt;mso-bidi-font-size:11.0pt;line-height:107%'>Admission
  Number<o:p></o:p></span></p>
  </td>
  <td width=172 colspan=3 valign=top style='width:128.8pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:26.55pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -33.1pt;mso-height-rule:exactly'><span style='font-size:13.0pt;mso-bidi-font-size:
  11.0pt;line-height:107%'>Term: <?php echo @$student_term;?><o:p></o:p></span></p>
  </td>
  <td width=181 colspan=6 valign=top style='width:135.9pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:26.55pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -33.1pt;mso-height-rule:exactly'>Session:<span style='font-size:13.0pt;
  mso-bidi-font-size:11.0pt;line-height:107%'> </span><span style='font-size:
  10.0pt;mso-bidi-font-size:11.0pt;line-height:107%'><?php echo @$student_session;?></span><span
  style='font-size:13.0pt;mso-bidi-font-size:11.0pt;line-height:107%'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:22.3pt'>
  <td width=279 colspan=2 valign=top style='width:209.4pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:22.3pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -33.1pt;mso-height-rule:exactly'><span style='font-size:13.0pt;mso-bidi-font-size:
  11.0pt;line-height:107%'>Total Mark Obtainable: 1000</span><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:107%'><o:p></o:p></span></p>
  </td>
  <td width=310 valign=top style='width:232.45pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:22.3pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -33.1pt;mso-height-rule:exactly'><span style='font-size:13.0pt;mso-bidi-font-size:
  11.0pt;line-height:107%'>Total Marks Obtained:<?php echo @$student_mark_obtained;?></span><span
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:107%'><o:p></o:p></span></p>
  </td>
  <td width=172 colspan=3 valign=top style='width:128.8pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:22.3pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -33.1pt;mso-height-rule:exactly'><span style='font-size:13.0pt;mso-bidi-font-size:
  11.0pt;line-height:107%'>Average</span><span style='font-size:9.0pt;
  mso-bidi-font-size:11.0pt;line-height:107%'><o:p></o:p></span></p>
  </td>
  <td width=181 colspan=6 valign=top style='width:135.9pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:22.3pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -33.1pt;mso-height-rule:exactly'><span style='font-size:13.0pt;mso-bidi-font-size:
  11.0pt;line-height:107%'>Percentage: <?php echo @$student_percentage;?></span><span style='font-size:9.0pt;
  mso-bidi-font-size:11.0pt;line-height:107%'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:138.9pt'>
  <td width=942 colspan=12 valign=top style='width:706.6pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:138.9pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
  11.0pt;line-height:107%'><o:p>&nbsp;</o:p></span></p>
  <table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 align=left
   style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
   mso-table-overlap:never;mso-table-lspace:9.0pt;margin-left:6.75pt;
   mso-table-rspace:9.0pt;margin-right:6.75pt;mso-table-anchor-vertical:page;
   mso-table-anchor-horizontal:margin;mso-table-left:left;mso-table-top:13.55pt;
   mso-padding-alt:0in 5.4pt 0in 5.4pt;mso-border-insideh:.5pt solid windowtext;
   mso-border-insidev:.5pt solid windowtext'>
   <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:29.5pt'>
    <td width=436 colspan=5 valign=top style='width:327.35pt;border:solid windowtext 1.0pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:29.5pt'>
    <p class=MsoNormal align=center style='text-align:center;mso-element:frame;
    mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-horizontal:
    margin;mso-element-top:-33.1pt;mso-height-rule:exactly'><span
    style='font-size:15.0pt;mso-bidi-font-size:11.0pt;line-height:107%'>Attendance
    Record</span><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt;
    line-height:107%'><o:p></o:p></span></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:1;height:50.35pt'>
    <td width=137 valign=top style='width:102.8pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:50.35pt'>
    <p class=MsoNormal align=center style='text-align:center;mso-element:frame;
    mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-horizontal:
    margin;mso-element-top:-33.1pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:107%'>No Of
    Times<o:p></o:p></span></p>
    <p class=MsoNormal align=center style='text-align:center;mso-element:frame;
    mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-horizontal:
    margin;mso-element-top:-33.1pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:107%'>School
    Opened<o:p></o:p></span></p>
    </td>
    <td width=97 colspan=2 valign=top style='width:72.9pt;border-top:none;
    border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:50.35pt'>
    <p class=MsoNormal align=center style='text-align:center;mso-element:frame;
    mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-horizontal:
    margin;mso-element-top:-33.1pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:107%'>No Of
    Times Present<o:p></o:p></span></p>
    </td>
    <td width=107 valign=top style='width:80.35pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:50.35pt'>
    <p class=MsoNormal align=center style='text-align:center;mso-element:frame;
    mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-horizontal:
    margin;mso-element-top:-33.1pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:107%'>No Of
    Times Absent<o:p></o:p></span></p>
    </td>
    <td width=95 valign=top style='width:71.3pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:50.35pt'>
    <p class=MsoNormal align=center style='text-align:center;mso-element:frame;
    mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-horizontal:
    margin;mso-element-top:-33.1pt;mso-height-rule:exactly'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:107%'>No Of
    Times Late<o:p></o:p></span></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:2;mso-yfti-lastrow:yes;height:22.2pt'>
    <td width=137 valign=top style='width:102.8pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:22.2pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'>58<o:p></o:p></span></p>
    </td>
    <td width=96 valign=top style='width:72.1pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:22.2pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'>58<o:p></o:p></span></p>
    </td>
    <td width=108 colspan=2 valign=top style='width:81.15pt;border-top:none;
    border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:22.2pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span class=SpellE><span style='font-size:
    9.0pt;mso-bidi-font-size:11.0pt;line-height:107%'>Nill</span></span><span
    style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:107%'><o:p></o:p></span></p>
    </td>
    <td width=95 valign=top style='width:71.3pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:22.2pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span class=SpellE><span style='font-size:
    9.0pt;mso-bidi-font-size:11.0pt;line-height:107%'>Nill</span></span><span
    style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:107%'><o:p></o:p></span></p>
    </td>
   </tr>
   <![if !supportMisalignedColumns]>
   <tr height=0>
    <td width=137 style='border:none'></td>
    <td width=96 style='border:none'></td>
    <td width=1 style='border:none'></td>
    <td width=107 style='border:none'></td>
    <td width=95 style='border:none'></td>
   </tr>
   <![endif]>
  </table>
  <table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 align=left
   style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
   mso-table-overlap:never;mso-table-lspace:9.0pt;margin-left:6.75pt;
   mso-table-rspace:9.0pt;margin-right:6.75pt;mso-table-anchor-vertical:margin;
   mso-table-anchor-horizontal:margin;mso-table-left:left;mso-table-top:.9pt;
   mso-padding-alt:0in 5.4pt 0in 5.4pt;mso-border-insideh:.5pt solid windowtext;
   mso-border-insidev:.5pt solid windowtext'>
   <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:20.7pt'>
    <td width=425 colspan=4 valign=top style='width:319.05pt;border:solid windowtext 1.0pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:20.7pt'>
    <p class=MsoNormal align=center style='text-align:center;mso-element:frame;
    mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-horizontal:
    margin;mso-element-top:-33.1pt;mso-height-rule:exactly'><span
    style='font-size:15.0pt;mso-bidi-font-size:11.0pt;line-height:107%'>Health
    And Physical Development</span><span style='font-size:9.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'><o:p></o:p></span></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:1;height:11.15pt'>
    <td width=103 valign=top style='width:77.05pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.15pt'>
    <p class=MsoNormal align=center style='text-align:center;mso-element:frame;
    mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-horizontal:
    margin;mso-element-top:-33.1pt;mso-height-rule:exactly'><b
    style='mso-bidi-font-weight:normal'><span style='font-size:5.0pt;
    mso-bidi-font-size:11.0pt;line-height:107%'>Beginning of Term<o:p></o:p></span></b></p>
    </td>
    <td width=69 valign=top style='width:52.1pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:11.15pt'>
    <p class=MsoNormal align=center style='text-align:center;mso-element:frame;
    mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-horizontal:
    margin;mso-element-top:-33.1pt;mso-height-rule:exactly'><b
    style='mso-bidi-font-weight:normal'><span style='font-size:5.0pt;
    mso-bidi-font-size:11.0pt;line-height:107%'>Height<o:p></o:p></span></b></p>
    </td>
    <td width=69 valign=top style='width:51.7pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:11.15pt'>
    <p class=MsoNormal align=center style='text-align:center;mso-element:frame;
    mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-horizontal:
    margin;mso-element-top:-33.1pt;mso-height-rule:exactly'><b
    style='mso-bidi-font-weight:normal'><span style='font-size:5.0pt;
    mso-bidi-font-size:11.0pt;line-height:107%'>Weight<o:p></o:p></span></b></p>
    </td>
    <td width=184 valign=top style='width:138.05pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:11.15pt'>
    <p class=MsoNormal align=center style='text-align:center;mso-element:frame;
    mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-horizontal:
    margin;mso-element-top:-33.1pt;mso-height-rule:exactly'><b
    style='mso-bidi-font-weight:normal'><span style='font-size:5.0pt;
    mso-bidi-font-size:11.0pt;line-height:107%'>No Of Days Absent due to
    Illness<o:p></o:p></span></b></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:2;height:23.9pt'>
    <td width=103 valign=top style='width:77.05pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:23.9pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'>End of Term <o:p></o:p></span></p>
    </td>
    <td width=69 valign=top style='width:52.1pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:23.9pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'><o:p>&nbsp;</o:p></span></p>
    </td>
    <td width=69 valign=top style='width:51.7pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:23.9pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'><o:p>&nbsp;</o:p></span></p>
    </td>
    <td width=184 rowspan=2 valign=top style='width:138.05pt;border-top:none;
    border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:23.9pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'><o:p>&nbsp;</o:p></span></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:3;height:20.15pt'>
    <td width=103 valign=top style='width:77.05pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:20.15pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'>Comment<o:p></o:p></span></p>
    </td>
    <td width=69 valign=top style='width:52.1pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:20.15pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'><o:p>&nbsp;</o:p></span></p>
    </td>
    <td width=69 valign=top style='width:51.7pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:20.15pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'><o:p>&nbsp;</o:p></span></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:4;mso-yfti-lastrow:yes;height:11.65pt'>
    <td width=103 valign=top style='width:77.05pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.65pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'><o:p>&nbsp;</o:p></span></p>
    </td>
    <td width=323 colspan=3 valign=top style='width:241.9pt;border-top:none;
    border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:11.65pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'><o:p>&nbsp;</o:p></span></p>
    </td>
   </tr>
  </table>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
  11.0pt;line-height:107%'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:37.6pt'>
  <td width=672 colspan=5 rowspan=13 valign=top style='width:504.25pt;
  border:solid windowtext 1.0pt;border-top:none;mso-border-top-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:37.6pt'>
  <table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 align=left
   width=653 style='width:489.4pt;border-collapse:collapse;border:none;
   mso-border-alt:solid windowtext .5pt;mso-table-overlap:never;mso-table-lspace:
   9.0pt;margin-left:6.75pt;mso-table-rspace:9.0pt;margin-right:6.75pt;
   mso-table-anchor-vertical:page;mso-table-anchor-horizontal:margin;
   mso-table-left:left;mso-table-top:9.8pt;mso-padding-alt:0in 5.4pt 0in 5.4pt;
   mso-border-insideh:.5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>
   <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:39.7pt'>
    <td width=170 valign=top style='width:127.75pt;border:solid windowtext 1.0pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:39.7pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'><o:p>&nbsp;</o:p></span></p>
    </td>
    <td width=56 valign=top style='width:42.35pt;border:solid windowtext 1.0pt;
    border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:39.7pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'>CA Test<o:p></o:p></span></p>
    </td>
    <td width=62 valign=top style='width:46.65pt;border:solid windowtext 1.0pt;
    border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:39.7pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'>Home Work<o:p></o:p></span></p>
    </td>
    <td width=71 valign=top style='width:53.25pt;border:solid windowtext 1.0pt;
    border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:39.7pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'>Terms Exam<o:p></o:p></span></p>
    </td>
    <td width=55 valign=top style='width:41.35pt;border:solid windowtext 1.0pt;
    border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:39.7pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'>Total<o:p></o:p></span></p>
    </td>
    <td width=64 valign=top style='width:47.7pt;border:solid windowtext 1.0pt;
    border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:39.7pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'>Grade<o:p></o:p></span></p>
    </td>
    <td width=77 valign=top style='width:57.95pt;border:solid windowtext 1.0pt;
    border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:39.7pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'>Subject Position<o:p></o:p></span></p>
    </td>
    <td width=97 valign=top style='width:72.4pt;border:solid windowtext 1.0pt;
    border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:39.7pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'>Teachers Remark<o:p></o:p></span></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:1;height:22.95pt'>
    <td width=170 valign=top style='width:127.75pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:22.95pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:normal'><span
    style='font-size:8.0pt;mso-bidi-font-size:11.0pt;line-height:107%;
    font-family:"Arial","sans-serif"'>Marks Obtainable<o:p></o:p></span></b></p>
    </td>
    <td width=56 valign=top style='width:42.35pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:22.95pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:normal'><span
    style='font-size:8.0pt;mso-bidi-font-size:11.0pt;line-height:107%;
    font-family:"Arial","sans-serif"'>30<o:p></o:p></span></b></p>
    </td>
    <td width=62 valign=top style='width:46.65pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:22.95pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:normal'><span
    style='font-size:8.0pt;mso-bidi-font-size:11.0pt;line-height:107%;
    font-family:"Arial","sans-serif"'>10<o:p></o:p></span></b></p>
    </td>
    <td width=71 valign=top style='width:53.25pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:22.95pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:normal'><span
    style='font-size:8.0pt;mso-bidi-font-size:11.0pt;line-height:107%;
    font-family:"Arial","sans-serif"'>60<o:p></o:p></span></b></p>
    </td>
    <td width=55 valign=top style='width:41.35pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:22.95pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:normal'><span
    style='font-size:8.0pt;mso-bidi-font-size:11.0pt;line-height:107%;
    font-family:"Arial","sans-serif"'>100<o:p></o:p></span></b></p>
    </td>
    <td width=64 valign=top style='width:47.7pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:22.95pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'><o:p>&nbsp;</o:p></span></p>
    </td>
    <td width=77 valign=top style='width:57.95pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:22.95pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'><o:p>&nbsp;</o:p></span></p>
    </td>
    <td width=97 valign=top style='width:72.4pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:22.95pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'><o:p>&nbsp;</o:p></span></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:2;height:20.85pt'>
    <td width=170 valign=top style='width:127.75pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:20.85pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:normal'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:107%'>English
    Language<o:p></o:p></span></b></p>
    </td>
    <td width=56 valign=top style='width:42.35pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:20.85pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'><?php echo @$e_ca;?><o:p></o:p></span></p>
    </td>
    <td width=62 valign=top style='width:46.65pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:20.85pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'><?php echo @$e_hw;?><o:p></o:p></span></p>
    </td>
    <td width=71 valign=top style='width:53.25pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:20.85pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'><?php echo @$e_te;?><o:p></o:p></span></p>
    </td>
    <td width=55 valign=top style='width:41.35pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:20.85pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'><?php echo @$e_total;?><o:p></o:p></span></p>
    </td>
    <td width=64 valign=top style='width:47.7pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:20.85pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'><?php echo @$e_grade;?><o:p></o:p></span></p>
    </td>
    <td width=77 valign=top style='width:57.95pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:20.85pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'><?php echo @$e_sp;?><o:p></o:p></span></p>
    </td>
    <td width=97 valign=top style='width:72.4pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:20.85pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:8.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'><?php echo @$e_tr;?><o:p></o:p></span></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:3;height:23.15pt'>
    <td width=170 valign=top style='width:127.75pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:23.15pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:normal'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:107%'>Mathematics<o:p></o:p></span></b></p>
    </td>
    <td width=56 valign=top style='width:42.35pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:23.15pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'><?php echo @$m_ca;?><o:p></o:p></span></p>
    </td>
    <td width=62 valign=top style='width:46.65pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:23.15pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'><?php echo @$m_hw;?><o:p></o:p></span></p>
    </td>
    <td width=71 valign=top style='width:53.25pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:23.15pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'><?php echo @$m_te;?><o:p></o:p></span></p>
    </td>
    <td width=55 valign=top style='width:41.35pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:23.15pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'><?php echo @$m_total;?><o:p></o:p></span></p>
    </td>
    <td width=64 valign=top style='width:47.7pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:23.15pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'><?php echo @$m_grade;?><o:p></o:p></span></p>
    </td>
    <td width=77 valign=top style='width:57.95pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:23.15pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'><?php echo @$m_sp;?><o:p></o:p></span></p>
    </td>
    <td width=97 valign=top style='width:72.4pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:23.15pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:8.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'><?php echo @$m_tr;?><o:p></o:p></span></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:4;height:24.95pt'>
    <td width=170 valign=top style='width:127.75pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:24.95pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:normal'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:107%'>Social
    Studies<o:p></o:p></span></b></p>
    </td>
    <td width=56 valign=top style='width:42.35pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:24.95pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'><?php echo @$s_ca;?><o:p></o:p></span></p>
    </td>
    <td width=62 valign=top style='width:46.65pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:24.95pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'><?php echo @$s_hw;?><o:p></o:p></span></p>
    </td>
    <td width=71 valign=top style='width:53.25pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:24.95pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'><?php echo @$s_te;?><o:p></o:p></span></p>
    </td>
    <td width=55 valign=top style='width:41.35pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:24.95pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'><?php echo @$s_total;?><o:p></o:p></span></p>
    </td>
    <td width=64 valign=top style='width:47.7pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:24.95pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'><?php echo @$s_grade;?><o:p></o:p></span></p>
    </td>
    <td width=77 valign=top style='width:57.95pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:24.95pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'><?php echo @$s_sp;?><o:p></o:p></span></p>
    </td>
    <td width=97 valign=top style='width:72.4pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:24.95pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:8.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'><?php echo @$s_tr;?><o:p></o:p></span></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:5;height:21.4pt'>
    <td width=170 valign=top style='width:127.75pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:21.4pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:normal'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:107%'>Science<o:p></o:p></span></b></p>
    </td>
    <td width=56 valign=top style='width:42.35pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:21.4pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'><?php echo @$sc_ca;?><o:p></o:p></span></p>
    </td>
    <td width=62 valign=top style='width:46.65pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:21.4pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'><?php echo @$sc_hw;?><o:p></o:p></span></p>
    </td>
    <td width=71 valign=top style='width:53.25pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:21.4pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'><?php echo @$sc_te;?><o:p></o:p></span></p>
    </td>
    <td width=55 valign=top style='width:41.35pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:21.4pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'><?php echo @$sc_total;?><o:p></o:p></span></p>
    </td>
    <td width=64 valign=top style='width:47.7pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:21.4pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'><?php echo @$sc_grade;?><o:p></o:p></span></p>
    </td>
    <td width=77 valign=top style='width:57.95pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:21.4pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'><?php echo @$sc_sp;?><o:p></o:p></span></p>
    </td>
    <td width=97 valign=top style='width:72.4pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:21.4pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:8.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'><?php echo @$sc_tr;?><o:p></o:p></span></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:6;height:20.25pt'>
    <td width=170 valign=top style='width:127.75pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:20.25pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:normal'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:107%'>Reading
    Readiness<o:p></o:p></span></b></p>
    </td>
    <td width=56 valign=top style='width:42.35pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:20.25pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'><?php echo @$r_ca;?><o:p></o:p></span></p>
    </td>
    <td width=62 valign=top style='width:46.65pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:20.25pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'><?php echo @$r_hw;?><o:p></o:p></span></p>
    </td>
    <td width=71 valign=top style='width:53.25pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:20.25pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'><?php echo @$r_te;?><o:p></o:p></span></p>
    </td>
    <td width=55 valign=top style='width:41.35pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:20.25pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'><?php echo @$r_total;?><o:p></o:p></span></p>
    </td>
    <td width=64 valign=top style='width:47.7pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:20.25pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'><?php echo @$r_grade;?><o:p></o:p></span></p>
    </td>
    <td width=77 valign=top style='width:57.95pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:20.25pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'><?php echo @$r_sp;?><o:p></o:p></span></p>
    </td>
    <td width=97 valign=top style='width:72.4pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:20.25pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:8.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'><?php echo @$r_tr;?><o:p></o:p></span></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:7;height:21.4pt'>
    <td width=170 valign=top style='width:127.75pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:21.4pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:normal'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:107%'>Arts
    And Crafts<o:p></o:p></span></b></p>
    </td>
    <td width=56 valign=top style='width:42.35pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:21.4pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'><?php echo @$a_ca;?><o:p></o:p></span></p>
    </td>
    <td width=62 valign=top style='width:46.65pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:21.4pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'><?php echo @$a_hw;?><o:p></o:p></span></p>
    </td>
    <td width=71 valign=top style='width:53.25pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:21.4pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'><?php echo @$a_te;?><o:p></o:p></span></p>
    </td>
    <td width=55 valign=top style='width:41.35pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:21.4pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'><?php echo @$a_total;?><o:p></o:p></span></p>
    </td>
    <td width=64 valign=top style='width:47.7pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:21.4pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'><?php echo @$a_grade;?><o:p></o:p></span></p>
    </td>
    <td width=77 valign=top style='width:57.95pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:21.4pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'><?php echo @$a_sp;?><o:p></o:p></span></p>
    </td>
    <td width=97 valign=top style='width:72.4pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:21.4pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:8.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'><?php echo @$a_tr;?><o:p></o:p></span></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:8;height:17.4pt'>
    <td width=170 valign=top style='width:127.75pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:17.4pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:normal'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:107%'>French<o:p></o:p></span></b></p>
    </td>
    <td width=56 valign=top style='width:42.35pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:17.4pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'><?php echo @$f_ca;?><o:p></o:p></span></p>
    </td>
    <td width=62 valign=top style='width:46.65pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:17.4pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'><?php echo @$f_hw;?><o:p></o:p></span></p>
    </td>
    <td width=71 valign=top style='width:53.25pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:17.4pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'><?php echo @$f_te;?><o:p></o:p></span></p>
    </td>
    <td width=55 valign=top style='width:41.35pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:17.4pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'><?php echo @$f_total;?><o:p></o:p></span></p>
    </td>
    <td width=64 valign=top style='width:47.7pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:17.4pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'><?php echo @$f_grade;?><o:p></o:p></span></p>
    </td>
    <td width=77 valign=top style='width:57.95pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:17.4pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'><?php echo @$f_sp;?><o:p></o:p></span></p>
    </td>
    <td width=97 valign=top style='width:72.4pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:17.4pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:8.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'><?php echo @$f_tr;?><o:p></o:p></span></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:9;height:20.25pt'>
    <td width=170 valign=top style='width:127.75pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:20.25pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:normal'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:107%'>ICT<o:p></o:p></span></b></p>
    </td>
    <td width=56 valign=top style='width:42.35pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:20.25pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'><?php echo @$i_ca;?><o:p></o:p></span></p>
    </td>
    <td width=62 valign=top style='width:46.65pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:20.25pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'><?php echo @$i_hw;?><o:p></o:p></span></p>
    </td>
    <td width=71 valign=top style='width:53.25pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:20.25pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'><?php echo @$i_te;?><o:p></o:p></span></p>
    </td>
    <td width=55 valign=top style='width:41.35pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:20.25pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'><?php echo @$i_total;?><o:p></o:p></span></p>
    </td>
    <td width=64 valign=top style='width:47.7pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:20.25pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'><?php echo @$i_grade;?><o:p></o:p></span></p>
    </td>
    <td width=77 valign=top style='width:57.95pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:20.25pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'><?php echo @$i_sp;?><o:p></o:p></span></p>
    </td>
    <td width=97 valign=top style='width:72.4pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:20.25pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:8.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'><?php echo @$i_tr;?><o:p></o:p></span></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:10;mso-yfti-lastrow:yes;height:19.55pt'>
    <td width=170 valign=top style='width:127.75pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:19.55pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:normal'><span
    style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:107%'>Arabic
    Language<o:p></o:p></span></b></p>
    </td>
    <td width=56 valign=top style='width:42.35pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:19.55pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'><?php echo @$ar_ca;?><o:p></o:p></span></p>
    </td>
    <td width=62 valign=top style='width:46.65pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:19.55pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'><?php echo @$ar_hw;?><o:p></o:p></span></p>
    </td>
    <td width=71 valign=top style='width:53.25pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:19.55pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'><?php echo @$ar_te;?><o:p></o:p></span></p>
    </td>
    <td width=55 valign=top style='width:41.35pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:19.55pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'><?php echo @$ar_total;?><o:p></o:p></span></p>
    </td>
    <td width=64 valign=top style='width:47.7pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:19.55pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'><?php echo @$ar_grade;?><o:p></o:p></span></p>
    </td>
    <td width=77 valign=top style='width:57.95pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:19.55pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:9.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'><?php echo @$ar_sp;?><o:p></o:p></span></p>
    </td>
    <td width=97 valign=top style='width:72.4pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:19.55pt'>
    <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:8.0pt;mso-bidi-font-size:
    11.0pt;line-height:107%'><?php echo @$ar_tr;?><o:p></o:p></span></p>
    </td>
   </tr>
  </table>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -33.1pt;mso-height-rule:exactly'><span style='font-size:17.0pt;mso-bidi-font-size:
  11.0pt;line-height:107%'><o:p>&nbsp;</o:p></span></p>
  <table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 align=left
   style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
   mso-table-overlap:never;mso-yfti-tbllook:1184;mso-table-lspace:9.0pt;
   margin-left:6.75pt;mso-table-rspace:9.0pt;margin-right:6.75pt;mso-table-anchor-vertical:
   page;mso-table-anchor-horizontal:margin;mso-table-left:left;mso-table-top:
   300.05pt;mso-padding-alt:0in 5.4pt 0in 5.4pt'>
   <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:28.95pt'>
    <td width=209 valign=top style='width:156.7pt;border:solid windowtext 1.0pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:28.95pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal;mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:17.0pt;mso-bidi-font-size:
    11.0pt'>Teacher<o:p></o:p></span></p>
    </td>
    <td width=427 valign=top style='width:320.55pt;border:solid windowtext 1.0pt;
    border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:28.95pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal;mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><?php echo @$teacher_coment;?><span style='font-size:17.0pt;mso-bidi-font-size:
    11.0pt'><o:p></o:p></span></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:1;height:21.35pt'>
    <td width=209 valign=top style='width:156.7pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:21.35pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal;mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:14.0pt;mso-bidi-font-size:
    11.0pt'>Program Director</span><span style='font-size:17.0pt;mso-bidi-font-size:
    11.0pt'><o:p></o:p></span></p>
    </td>
    <td width=427 valign=top style='width:320.55pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:21.35pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal;mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:17.0pt;mso-bidi-font-size:
    11.0pt'><?php echo @$program_director;?><o:p>&nbsp;</o:p></span></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:2;height:21.35pt'>
    <td width=209 valign=top style='width:156.7pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:21.35pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal;mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:14.0pt;mso-bidi-font-size:
    11.0pt'>Next Term Begins<o:p></o:p></span></p>
    </td>
    <td width=427 valign=top style='width:320.55pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:21.35pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal;mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:17.0pt;mso-bidi-font-size:
    11.0pt'><?php echo @$next_term_begins;?><o:p></o:p></span></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes;height:21.35pt'>
    <td width=209 valign=top style='width:156.7pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:21.35pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal;mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:14.0pt;mso-bidi-font-size:
    11.0pt'>This Term Ends<o:p></o:p></span></p>
    </td>
    <td width=427 valign=top style='width:320.55pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:21.35pt'>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal;mso-element:frame;mso-element-frame-hspace:9.0pt;
    mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
    -33.1pt;mso-height-rule:exactly'><span style='font-size:17.0pt;mso-bidi-font-size:
    11.0pt'><?php echo @$this_term_ends;?><o:p></o:p></span></p>
    </td>
   </tr>
  </table>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -33.1pt;mso-height-rule:exactly'><span style='font-size:17.0pt;mso-bidi-font-size:
  11.0pt;line-height:107%'><o:p></o:p></span></p>
  </td>
  <td width=139 colspan=2 valign=top style='width:104.3pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:37.6pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-horizontal:
  margin;mso-element-top:-33.1pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;line-height:
  107%'>Observation on Conduct</span></b><b style='mso-bidi-font-weight:normal'><span
  style='font-size:17.0pt;mso-bidi-font-size:11.0pt;line-height:107%'><o:p></o:p></span></b></p>
  </td>
  <td width=29 valign=top style='width:21.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:37.6pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -33.1pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:7.0pt;mso-bidi-font-size:11.0pt;line-height:107%'>1<o:p></o:p></span></b></p>
  </td>
  <td width=25 valign=top style='width:19.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:37.6pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -33.1pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:7.0pt;mso-bidi-font-size:11.0pt;line-height:107%'>2<o:p></o:p></span></b></p>
  </td>
  <td width=25 valign=top style='width:19.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:37.6pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -33.1pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:7.0pt;mso-bidi-font-size:11.0pt;line-height:107%'>3<o:p></o:p></span></b></p>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -33.1pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:7.0pt;mso-bidi-font-size:11.0pt;line-height:107%'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=25 valign=top style='width:19.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:37.6pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -33.1pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:7.0pt;mso-bidi-font-size:11.0pt;line-height:107%'>4<o:p></o:p></span></b></p>
  </td>
  <td width=26 valign=top style='width:19.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:37.6pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -33.1pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:7.0pt;mso-bidi-font-size:11.0pt;line-height:107%'>5<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;height:34.0pt'>
  <td width=139 colspan=2 valign=top style='width:104.3pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:34.0pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -33.1pt;mso-height-rule:exactly'><span style='font-size:8.0pt;mso-bidi-font-size:
  11.0pt;line-height:107%'>Handwriting<o:p></o:p></span></p>
  </td>
  <td width=29 valign=top style='width:21.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:34.0pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -33.1pt;mso-height-rule:exactly'><span style='font-size:8.0pt;mso-bidi-font-size:
  11.0pt;line-height:107%'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=25 valign=top style='width:19.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:34.0pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -33.1pt;mso-height-rule:exactly'><span style='font-size:8.0pt;mso-bidi-font-size:
  11.0pt;line-height:107%'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=25 valign=top style='width:19.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:34.0pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -33.1pt;mso-height-rule:exactly'><span style='font-size:8.0pt;mso-bidi-font-size:
  11.0pt;line-height:107%'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=25 valign=top style='width:19.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:34.0pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -33.1pt;mso-height-rule:exactly'><span style='font-size:8.0pt;mso-bidi-font-size:
  11.0pt;line-height:107%'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=26 valign=top style='width:19.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:34.0pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -33.1pt;mso-height-rule:exactly'><span style='font-size:8.0pt;mso-bidi-font-size:
  11.0pt;line-height:107%'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;height:34.0pt'>
  <td width=139 colspan=2 valign=top style='width:104.3pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:34.0pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -33.1pt;mso-height-rule:exactly'><span style='font-size:8.0pt;mso-bidi-font-size:
  11.0pt;line-height:107%'>Performance <span
  style='mso-spacerun:yes'> </span>in Physical Skills<o:p></o:p></span></p>
  </td>
  <td width=29 valign=top style='width:21.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:34.0pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -33.1pt;mso-height-rule:exactly'><span style='font-size:8.0pt;mso-bidi-font-size:
  11.0pt;line-height:107%'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=25 valign=top style='width:19.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:34.0pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -33.1pt;mso-height-rule:exactly'><span style='font-size:8.0pt;mso-bidi-font-size:
  11.0pt;line-height:107%'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=25 valign=top style='width:19.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:34.0pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -33.1pt;mso-height-rule:exactly'><span style='font-size:8.0pt;mso-bidi-font-size:
  11.0pt;line-height:107%'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=25 valign=top style='width:19.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:34.0pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -33.1pt;mso-height-rule:exactly'><span style='font-size:8.0pt;mso-bidi-font-size:
  11.0pt;line-height:107%'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=26 valign=top style='width:19.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:34.0pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -33.1pt;mso-height-rule:exactly'><span style='font-size:8.0pt;mso-bidi-font-size:
  11.0pt;line-height:107%'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;height:36.5pt'>
  <td width=139 colspan=2 valign=top style='width:104.3pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:36.5pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -33.1pt;mso-height-rule:exactly'><span style='font-size:8.0pt;mso-bidi-font-size:
  11.0pt;line-height:107%'>Uses Time To Good Advantage<o:p></o:p></span></p>
  </td>
  <td width=29 valign=top style='width:21.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:36.5pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -33.1pt;mso-height-rule:exactly'><span style='font-size:8.0pt;mso-bidi-font-size:
  11.0pt;line-height:107%'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=25 valign=top style='width:19.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:36.5pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -33.1pt;mso-height-rule:exactly'><span style='font-size:8.0pt;mso-bidi-font-size:
  11.0pt;line-height:107%'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=25 valign=top style='width:19.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:36.5pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -33.1pt;mso-height-rule:exactly'><span style='font-size:8.0pt;mso-bidi-font-size:
  11.0pt;line-height:107%'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=25 valign=top style='width:19.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:36.5pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -33.1pt;mso-height-rule:exactly'><span style='font-size:8.0pt;mso-bidi-font-size:
  11.0pt;line-height:107%'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=26 valign=top style='width:19.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:36.5pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -33.1pt;mso-height-rule:exactly'><span style='font-size:8.0pt;mso-bidi-font-size:
  11.0pt;line-height:107%'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8;height:39.0pt'>
  <td width=139 colspan=2 valign=top style='width:104.3pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:39.0pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -33.1pt;mso-height-rule:exactly'><span style='font-size:8.0pt;mso-bidi-font-size:
  11.0pt;line-height:107%'>Does Neal Work<o:p></o:p></span></p>
  </td>
  <td width=29 valign=top style='width:21.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:39.0pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -33.1pt;mso-height-rule:exactly'><span style='font-size:8.0pt;mso-bidi-font-size:
  11.0pt;line-height:107%'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=25 valign=top style='width:19.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:39.0pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -33.1pt;mso-height-rule:exactly'><span style='font-size:8.0pt;mso-bidi-font-size:
  11.0pt;line-height:107%'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=25 valign=top style='width:19.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:39.0pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -33.1pt;mso-height-rule:exactly'><span style='font-size:8.0pt;mso-bidi-font-size:
  11.0pt;line-height:107%'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=25 valign=top style='width:19.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:39.0pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -33.1pt;mso-height-rule:exactly'><span style='font-size:8.0pt;mso-bidi-font-size:
  11.0pt;line-height:107%'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=26 valign=top style='width:19.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:39.0pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -33.1pt;mso-height-rule:exactly'><span style='font-size:8.0pt;mso-bidi-font-size:
  11.0pt;line-height:107%'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9;height:32.35pt'>
  <td width=139 colspan=2 valign=top style='width:104.3pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:32.35pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -33.1pt;mso-height-rule:exactly'><span style='font-size:8.0pt;mso-bidi-font-size:
  11.0pt;line-height:107%'>Does Home Work Regularly<o:p></o:p></span></p>
  </td>
  <td width=29 valign=top style='width:21.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:32.35pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -33.1pt;mso-height-rule:exactly'><span style='font-size:8.0pt;mso-bidi-font-size:
  11.0pt;line-height:107%'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=25 valign=top style='width:19.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:32.35pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -33.1pt;mso-height-rule:exactly'><span style='font-size:8.0pt;mso-bidi-font-size:
  11.0pt;line-height:107%'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=25 valign=top style='width:19.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:32.35pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -33.1pt;mso-height-rule:exactly'><span style='font-size:8.0pt;mso-bidi-font-size:
  11.0pt;line-height:107%'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=25 valign=top style='width:19.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:32.35pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -33.1pt;mso-height-rule:exactly'><span style='font-size:8.0pt;mso-bidi-font-size:
  11.0pt;line-height:107%'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=26 valign=top style='width:19.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:32.35pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -33.1pt;mso-height-rule:exactly'><span style='font-size:8.0pt;mso-bidi-font-size:
  11.0pt;line-height:107%'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:10;height:34.85pt'>
  <td width=139 colspan=2 valign=top style='width:104.3pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:34.85pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -33.1pt;mso-height-rule:exactly'><span style='font-size:8.0pt;mso-bidi-font-size:
  11.0pt;line-height:107%'>Respect Authority<o:p></o:p></span></p>
  </td>
  <td width=29 valign=top style='width:21.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:34.85pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -33.1pt;mso-height-rule:exactly'><span style='font-size:8.0pt;mso-bidi-font-size:
  11.0pt;line-height:107%'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=25 valign=top style='width:19.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:34.85pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -33.1pt;mso-height-rule:exactly'><span style='font-size:8.0pt;mso-bidi-font-size:
  11.0pt;line-height:107%'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=25 valign=top style='width:19.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:34.85pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -33.1pt;mso-height-rule:exactly'><span style='font-size:8.0pt;mso-bidi-font-size:
  11.0pt;line-height:107%'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=25 valign=top style='width:19.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:34.85pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -33.1pt;mso-height-rule:exactly'><span style='font-size:8.0pt;mso-bidi-font-size:
  11.0pt;line-height:107%'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=26 valign=top style='width:19.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:34.85pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -33.1pt;mso-height-rule:exactly'><span style='font-size:8.0pt;mso-bidi-font-size:
  11.0pt;line-height:107%'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:11;height:27.8pt'>
  <td width=139 colspan=2 valign=top style='width:104.3pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:27.8pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-horizontal:
  margin;mso-element-top:-33.1pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:7.0pt;mso-bidi-font-size:11.0pt;line-height:
  107%'>KEYS TO RATINGS<o:p></o:p></span></b></p>
  </td>
  <td width=29 valign=top style='width:21.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:27.8pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -33.1pt;mso-height-rule:exactly'><span style='font-size:7.0pt;mso-bidi-font-size:
  11.0pt;line-height:107%'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=102 colspan=4 rowspan=6 valign=top style='width:76.3pt;border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:27.8pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -33.1pt;mso-height-rule:exactly'><span style='font-size:17.0pt;mso-bidi-font-size:
  11.0pt;line-height:107%'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:12;height:29.85pt'>
  <td width=139 colspan=2 valign=top style='width:104.3pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:29.85pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -33.1pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:11.0pt;line-height:107%'>Excellent<o:p></o:p></span></b></p>
  </td>
  <td width=29 valign=top style='width:21.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:29.85pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -33.1pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:11.0pt;line-height:107%'>5<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:13;height:29.85pt'>
  <td width=139 colspan=2 valign=top style='width:104.3pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:29.85pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -33.1pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:11.0pt;line-height:107%'>Good In
  Trait<o:p></o:p></span></b></p>
  </td>
  <td width=29 valign=top style='width:21.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:29.85pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -33.1pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:11.0pt;line-height:107%'>4<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:14;height:29.05pt'>
  <td width=139 colspan=2 valign=top style='width:104.3pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:29.05pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -33.1pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:11.0pt;line-height:107%'>Satisfactory
  In Trait<o:p></o:p></span></b></p>
  </td>
  <td width=29 valign=top style='width:21.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:29.05pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -33.1pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:11.0pt;line-height:107%'>3<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:15;height:18.2pt'>
  <td width=139 colspan=2 valign=top style='width:104.3pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:18.2pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -33.1pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:11.0pt;line-height:107%'>Fair In
  Trait<o:p></o:p></span></b></p>
  </td>
  <td width=29 valign=top style='width:21.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:18.2pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -33.1pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:11.0pt;line-height:107%'>2<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:16;mso-yfti-lastrow:yes;height:24.9pt'>
  <td width=139 colspan=2 valign=top style='width:104.3pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:24.9pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -33.1pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:11.0pt;line-height:107%'>Poor in
  Trait<o:p></o:p></span></b></p>
  </td>
  <td width=29 valign=top style='width:21.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:24.9pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -33.1pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:11.0pt;line-height:107%'>1<o:p></o:p></span></b></p>
  </td>
 </tr>
 <![if !supportMisalignedColumns]>
 <tr height=0>
  <td width=255 style='border:none'></td>
  <td width=25 style='border:none'></td>
  <td width=310 style='border:none'></td>
  <td width=37 style='border:none'></td>
  <td width=46 style='border:none'></td>
  <td width=89 style='border:none'></td>
  <td width=51 style='border:none'></td>
  <td width=29 style='border:none'></td>
  <td width=25 style='border:none'></td>
  <td width=25 style='border:none'></td>
  <td width=25 style='border:none'></td>
  <td width=26 style='border:none'></td>
 </tr>
 <![endif]>
</table>

<p class=MsoNormal align=center style='text-align:center'><span
style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:107%'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt;
line-height:107%'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt;
line-height:107%'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt;
line-height:107%'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt;
line-height:107%'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt;
line-height:107%'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt;
line-height:107%'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt;
line-height:107%'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt;
line-height:107%'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt;
line-height:107%'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt;
line-height:107%'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt;
line-height:107%'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt;
line-height:107%'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt;
line-height:107%'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt;
line-height:107%'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt;
line-height:107%'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt;
line-height:107%'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt;
line-height:107%'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt;
line-height:107%'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt;
line-height:107%'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt;
line-height:107%'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt;
line-height:107%'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt;
line-height:107%'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt;
line-height:107%'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt;
line-height:107%'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt;
line-height:107%'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt;
line-height:107%'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt;
line-height:107%'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt;
line-height:107%'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt;
line-height:107%'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt;
line-height:107%'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt;
line-height:107%'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt;
line-height:107%'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:9.0pt;mso-bidi-font-size:11.0pt;
line-height:107%'><o:p>&nbsp;</o:p></span></p>

</div>

</body>

</html>
