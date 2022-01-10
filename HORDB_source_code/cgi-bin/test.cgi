#!/usr/bin/perl -w
use strict;

use CGI;

print "content-type: text/html","\n\n";
my $line;
my $database="\./database/bacteriocins";

my $query="./bin/fasta36 -Q -s BL62 -b 10 -d 10 -E 20.0 -F 1 -T 8 ../simi_search_tmp/query.in  ./database/bacteriocins >../simi_search_tmp/tmp.out";
system($query);
open EOF,"</devdata/www/Bacteriocins/simi_search_tmp/tmp.out";
my @my_line=<EOF>;
$line=join "\n",@my_line;
close EOF;
print qq($line);

