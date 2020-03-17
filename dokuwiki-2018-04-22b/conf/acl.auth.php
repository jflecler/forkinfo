# acl.auth.php
# <?php exit()?>
# Don't modify the lines above
#
# Access Control Lists
#
# Editing this file by hand shouldn't be necessary. Use the ACL
# Manager interface instead.
#
# If your auth backend allows special char like spaces in groups
# or user names you need to urlencode them (only chars <128, leave
# UTF-8 multibyte chars as is)
#
# none   0
# read   1
# edit   2
# create 4
# upload 8
# delete 16

*               @ALL        1
*               @REGISTERED 4

2007:dettes	@ALL	1
2007:finances_du_bar	@ALL	1
2007:internet_ci	@ALL	1
2010:bar	Steak	2
2010:bar	twodeath	2
2010:bar	@ALL	1
2010:bar	@REGISTERED	1
acl:*	@ALL	0
acl:faf	Dash	2
acl:guilde	Dash	2
acl:guilde	Kujovic	2
acl:guilde	Bram	2
acl:guilde	magg	2
acl:guilde	Kochary	2
acl:guilde	sheldon 2
acl:guilde	maribib 2
bapteme:*	@ALL	0
bapteme:*	@Baptisés	16
comite:*	@ALL	0
comite:*	@Comité	16
copyleft:*	@ALL	4
emploi:*	@ALL	0
emploi:*	@bureau	16
faf:*	@ALL	1
faf:*	@faf	16
guilde:*	@ALL	1
guilde:*	magg	2
guilde:*	Kochary	2
guilde:*	sheldon	2
osstv:*	bram	4
osstv:*	@ALL	0
osstv:*	hastake	4
osstv:*	Leonidas	4
osstv:*	Pornoricain	4
start	sheldon	2
