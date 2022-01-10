#! /usr/bin/perl -w
use strict;

use CGI;
print "content-type: text/html","\n\n";

my $line;
my $edit;
my $flag;
my $result_num=1;

my $q= CGI->new;
my $area= $q->param('simi_area');
my $cpp = $area;
$cpp =~ s/>.*\s//;
my $cpp_length = length($cpp);	
#my $matrix =$q->param('matrix');
#print $area;
#print $matrix;
my $database="\./database/hor.fasta";

open EOF,">/devdata/www/hordb/simi_search_tmp/query.in" or die "Couldn't open: $!";
 print EOF $area;
close EOF;

my $query="blastp -query ../simi_search_tmp/query.in -db $database -out ../simi_search_tmp/tmp.out";
system($query);

my $content_line;
open LOL,"</devdata/www/hordb/tools_result_static.html" or die "Counldn't open: $!";
	while (my $line = <LOL>){
		$content_line .= $line;
	}
close LOL;

if(-e "../simi_search_tmp/tmp.out"){
	open EOF,"</devdata/www/hordb/simi_search_tmp/tmp.out";
	my @my_line=<EOF>;
	
	foreach $edit(@my_line){
  		last if $edit =~ /Lambda/;
		$flag = "pp" if $edit=~/Query=/;
		if ($edit =~ />/){
			$edit =~ s/>/Database ID : hor/;
			$edit = "Result $result_num :<br>".$edit;
			$result_num ++ ;
                } 
		$edit =~  s/hor(\d+)/<a href\=\"http:\/\/hordb\.cpu-bioinfor.org\/all information.php\?id=hor$1\&dataset=\"\>$1\<\/a\>/ if $edit =~ /(\d+)/;
	    #$edit =~  s/Bac(\d+)/<a href\=\"http:\/\/bacteriocins\.cpu-bioinfor.org\/browse\/All_Information.php\?id=Bac$1\&dataset=\"\>Bac$1\<\/a\>/ if $edit =~ /Bac(\d+)/;
		$line = $line."</br>".$edit if ($flag);
		#last unless $edit =~ //;
	}
	close EOF;
}else{
	$line = "No Results";
}

my $result=$line;

my $content_command = $content_line;
$content_command =~ s/Lazysheep/$result/;
print qq($content_command);
