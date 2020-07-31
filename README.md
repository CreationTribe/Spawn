SPAWN Word Generator
====================

Spawn is a word generator. I often find myself trying to think up names for
projects or products and have found the best names to be made up words.

This is a work in progress. Spawn is still a fairly rudimentary system; however
it does generate a fair amount of usable words. Some come out fairly perfect
(though not many); and some simply trigger the imagination, at which point
you can tweak the word as you see fit.

It turns out, a good random word generator that produces a large quantity of
well balanced usable words, is quite a bit trickier than I originally thought.

As it currently sits, I still get 1 or 2 fairly decent words out of about
50 - which really isn't all that bad.

::Sample::
----------
Here is a list of words Spawn generated in it's current state. It's not amazing yet, the rules are still
quite rudamentary, but there are some useful fun words here:

bleocwii
yjhodwoi
poox
uitionuw
zhuwngiiklow
eaoughey
aafleo
khuyzhullieppae
hiafhu
uucuesthiakkao
iniishchuwnwiu
lhauglewfoa
gheumrei
owniedwuechoe
iasmia
kwowrhiyg
vhowshaoshuu
uukhou
shchoosnuehwey
eesloyrei
dhaw
eac
awtchasky
so
waeqwayssiuphthiu
uustui
oqeyquaffuo
uuvloaciarrua
hweu
phthiytchi
spuemrii
iiscau
ieskowcwea
shchoyskovlao
swoumraappae
hiisni
uohruoflou
uhiysnuu
paidrziwkleot
nhuuchdoijhae
aiphousqiissao
iommowplaej
vhuacho
pwuingguoskiw
nnoypwuoughoubrue
uuchoynguu
dzhaekhuitchia
uoscauxeechdeo
froygwiosloysmay
awfeufruu
eikwuedrzea
whiikhiowui
ziu
iunoaclew
iuka
aarruikkii
vriyffeysvuw
swiwchdanreibweo
uineiswiu
vytoofwivvei
iyfwoy
qiijuetchei
zhuejiwblee
ayqreyngea
chthib
whiupaajhawclow
flowshiw
flewstio
ssiemriukhaw
awshowpuickoy
sqaeshealiy
nruknaa
tanggaenezhau
bhaajheikwuu
viunio
ootreahrewxxio
baigwawpwaw
eehoiqwuephiw
klairhawtreoqraw
achdoy
ivvoonggaotchuo
eysnuyggiwtchaa
iacrew
cwoakricwuy
vliewrowfweu
auzhieploa
ewvviobluickoo
ataockowzheo
op
xoynruuggiy
schoxe
uggaiwrir
owlleanhe
knoilheinwua
uaspi
orhewqwiu
eschiu
iwphaa
uotwuav
vroasmoa
uavhuy
mheibleu

::To-do List::
--------------

1. SQLite many-many database
  * vowel table with digraphs, trigraphs, and multigraphs
  * consonant table with digraphs, trigraphs, and multigraphs
  * rule-set table with rules such as:
    * prefix_only
    * prefix_only_except()
    * infix_only
    * infix_only_except()
    * suffix_only
    * suffix_only_except()
    * exception_vowel_infront(digraph|trigraph|multigraph,infront_rule_id)
    * exception_vowel_after(digraph|trigraph|multigraph,after_rule_id)
    * exception_consonant_infront(digraph|trigraph|multigraph,infront_rule_id)
    * exception_consonant_after(digraph|trigraph|multigraph,after_rule_id)
    * infront(vow)
    * infront(vow_vow)
    * infront(vow_con)
    * infront(vow_vow_con)
    * infront(con_con)
    * after(vow)
    * after(vow_vow)
    * after(vow_con)
    * after(vow_vow_con)
    * after(con_con)
    * not_allowed()
    * if_last()
    * if_first()
2. Flesh out SpellingRules.phc class for analyzing "letter(s)" and their rules
3. Flesh out RuledRandomizer.phc class which uses SpellingRules against the letter(s) as they are being randomly pulled from the database.

After the current to-do list has been completed, we can decide whether further refinement is needed.
