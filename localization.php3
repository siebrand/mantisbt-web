<?
	$g_mantis_version = "";

	function print_lang( $p_language, $p_version, $p_state ) {
		global $g_mantis_version;

		$t_file_name = "mantis/lang/strings_".strtolower( $p_language ).".txt";

		PRINT "<tr bgcolor=#ffffff>";
			PRINT "<td>";
				echo $p_language;
			PRINT "</td>";
			PRINT "<td>";
				if ( $p_version=="latest" ) {
					echo $g_mantis_version;
				} else {
					echo $p_version;
				}
			PRINT "</td>";
			PRINT "<td>";
				if ( file_exists( $t_file_name ) ) {
					echo date( "M d, Y", filemtime( $t_file_name ) );
				}
			PRINT "</td>";
			PRINT "<td>";
				if (( file_exists( $t_file_name ) )&&( $p_state=="active" )) {
					PRINT "<a href=\"$t_file_name\">download</a>";
				} else if ( $p_state=="active" ) {
					PRINT "in progress";
				} else {
					PRINT"&nbsp;";
				}
			PRINT "</td>";
			PRINT "<td>";
				$t_lang = strtolower($p_language);
				PRINT "<a href=\"local_diff.php3?f_lang=$t_lang\">view diff</a>";
			PRINT "</td>";

		PRINT "</tr>";
	}
?>
<? include( "top.php3" ); ?>

<span class="page_title">Localization</span>
<hr size=1 noshade width="100%">
<p>
Here you can see the latest localization files.  Some of them are included with a release (as indicated).  Others tend to lag slightly behind the newest releases so if your language isn't supported check back a few days after a big release.
<p>
What to do if you see some errors?  Just <a href="mailto:kenito@300baud.org">send me an email</a> with the corrected strings.
<p>

<div align=center>
<table width=100% cellpadding=5 cellspacing=1 bgcolor=#ffffff>
<tr bgcolor=#ffffff>
	<td>
		<b>Language</b>
	</td>
	<td>
		<b>Version</b>
	</td>
	<td>
		<b>Date Updated</b>
	</td>
	<td>
		&nbsp;
	</td>
</tr>
<?
	print_lang( "English",				"latest",  "active" );
	print_lang( "Chinese_Traditional",	"latest",  "active" );
	print_lang( "Danish",				"latest",  "active" );
	print_lang( "Dutch",				"latest",  "active" );
	print_lang( "French",				"latest",  "active" );
	print_lang( "French2",				"latest",  "active" );
	print_lang( "German",				"latest",  "active" );
	print_lang( "Hungarian",			"latest",  "active" );
	print_lang( "Italian",				"latest",  "active" );
	print_lang( "Korean",				"latest",  "active" );
	print_lang( "Norwegian",			"latest",  "active" );
	print_lang( "Polish",				"latest",  "active" );
	print_lang( "Portuguese_Brazil",	"latest",  "active" );
	print_lang( "Portuguese_Standard",	"latest",  "active" );
	print_lang( "Romanian",				"latest",  "active" );
	print_lang( "Russian",				"latest",  "active" );
	print_lang( "Spanish",				"latest",  "active" );
	print_lang( "Turkish",				"latest",  "active" );
?>
</table>

</div>

<p>
<span class="section">Translating</span>
<p>
Don't see your language?  Translate one of the files!  It's really quite simple.  Just take the strings file and convert away.  Then <a href="mailto:kenito@300baud.org">submit it</a> back to me.
<p>
<span class="section">Updating</span>
<p>
Also, you can update them when new strings make it in.  The file won't change drastically so it shouldn't be too much work to keep the files updated. Just click on the "view diff" link to see what strings might need translating.  I'll usually send a email out to translators when a new bunch of strings is ready.
<p>
<span class="section">Notes</span>
<p>
Currently some strings are hard-coded into the database tables or the code.  This should be fixed after the 0.15.0 release.

<? include( "bot.php3" ); ?>