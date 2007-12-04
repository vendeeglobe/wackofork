==WackoWiki R4.2==

===��� ���?===

���������, ������, �������, ��������������� ���� Wiki �� php.

������ ����������� ���������� �� WakkaWiki.

����������� �� RSS-��� http://wackowiki.de/wackowiki/updates/revisions.xml, ����� ������, ����� ������ ����� ������ ����.

===������===

� ������� ������������� **WackoWiki**:
  * RomanIvanov - maintainer, lead developer
  * KusoMendokusee - ideologist, designer, co-developer
  * YuliaShabunio - co-developer
  * AlekseyKulakov - designer

��������� ��. http://wackowiki.de/Team

===��� ������ � R4.2 �� ��������� � R4?===
  * WackoWiki ������ �������� ��� PHP5
  * WackoWiki ������ �������� ��� mysql 4.1 (������ � ������� �� Latin-1)
  * ��������� ��� XSS
  * ��������� ������� (���� ""{{import}}"") � �������� (�������� �� ������ ������� ��������).
  * ���������� ����� ����� ��������� ������ � �����������, � ��� �����:
    * ������ �� ����� ������� ��������� ��������� �����
    * ���������� ������ anchor � ~InterWiki-�������
    * html- � css-���������� ������� ������� �����
    * ��������� ������� �������� ������������ XHTML
  * Safehtml ������� �� ������ 1.3.1
  * ��� ����������� � ���������� ���������� �� ����������
  * ��������� RSS autodiscovery
  * �����:
    * ��������� �������� � �������� (���� ##pageindex##)
    * ��������� ##backlinks## -- ������ � ��� �� ����� ������ ������
    * ����� ���� ##UserGroups## -- ������� ������ ����� �������������
  * ��������:
    * ���������
    * �������������
    * ����������
  * ����������:
    * ##icq## formatter now works with History++ Miranda plugin logs
    * WackoFormatter ������ ������������ ������ � ����������� �������� � ������� ����� ������ ����� ""!!(blue) ���������!!""
    * ��������� ����������� ���������
    * ��������� ������������ �� ������ � �� ������� ���� ��� ������ ���������.
    * WackoFormatter ������ ��������� ��� �������, � ������������ ����� ������ ������� ���������� ��������
  * � ������ ������.


===��� ������ � R4 �� ��������� � R3.5?===

  * ��������� XSS � ������
  * �������� ��������� ((http://www.npj.ru/kukutz/safehtml SafeHTML)) - ������ ������� HTML � """<# #>"" ����� ������������ ���������
  * ��������� ������ �������������� ������:
    1. ������ � ���������� ������ �� ����������� ������ ���� ����� �� ���������� ������ "="
    2. ��������� ������������ ����������� - ���� ��� ������ ������ ">" � ������ ������
    3. ������ ��� ������ ����� ~ ����� ������������ ���� ������� �������, ""{{ � %%"".
    4. � ICQ � Email ����������� ������ �������������� ������ URL.
  * ��������� � �������� �������� ����� ��� ����������� � ��������� ������.
  * ���� ""{{admincache}}"" ��� ������� ����.
  * ��� ���������� ��������� ##debug=1## ���� ��������, ������� ������ "��������" ������������ ������ ��������.
  * ������������� ������ ����� ������ ACL ����� ��������.
  * ""%%(box align=... width=...) text %%""
  * ��� ������ ������������� � XHTML
  * �������������� ������� ��������� ��� �������� �� ������ � �������� ����� ��������.
  * ����������� ������ ������������ ���������� ���� ��������� XHTML 1.0 Transitional.
  * ����������� ��� ������� ��� �������������������� �������������. ���������� ������ ����������������� ����� ##cache=1##
  * ����������� ���������� ������������ � ���������� ��������: ""{{nocomment}}""
  * ����������� ����� ACL ��� ������ ��������.
  * ����� ���������� ����������� ##allow_registration##
  * Hurrah! ����� **preview** ��������.
  * ����� ����� ##owners_can_remove_comments## - ��������� ��������� �������� ������� ����������� � ���
  * �� �������� ���������� �� "������������" ���������� - ����������.
  * ����� ����� yellow: by Konstantin Kolomeetz.
  * ��������� ��������� css, diff, dtd, php, javascript, mysql, sql, python, xml.
  * ��������� ��������� ini, html � css.
  * ���������� ��������� ����� ���������� ������
  * ���������� �������� � ~Apache1 � lowercase ��� ������� (������� Bolk-�)
  * ������ WikiEdit 2.0 
  * ��������� ��� "����������" ������: ""++small++""
  * ��������� ��� "���������": ""(?RTFM Read The Fcuking Manual?)""
  * ��������� ��� "����������": ""�����[[*]] ��� �����[[*1]]"" --- ""[[#*]] ������ ��������"" --- ""[[#1]] ������ �������""
  * ������������ ��������� �� �������� ������
  * ���������� acl �� rename: ##rename_globalacl##
  * ����� ���������������� ��������� ##outlook_workaround##, ##disable_autosubscribe##
  * ����������� ������
  * �����������, ������������� ������
  * ������ ����� ����� (it, fr, pl, nl).
  * Javascript-�������� WikiEdit, ����������� ������������ ��������� ������ ��� ������� ������� wiki-��������
  * ��������� ������ � ������������ ����� (����� ������ �������� � ����� ���� ����� ����� ������ ����, �, �������������, ������ ���������)
  * �������������� ������:
    * ��������� ������ �������������, ��� ��������� ��� ������ ���������
    * paragrafica - ������ HTML ����������� �� <br>-���, � ������ �� ������ (���, ��������, ��������� �� ��������������)
    * ����������, �������������� ��������� SQL-���� � �������� �� ����� Pascal ��� Delphi.
    * ���������� ��� ���� Trillian � ��� email-�����
    * ��������� ��� <blockquote>
    * ��������� ������ ���� Actions.NewManual
    * ��������� ""\\LAN\Path � ��������� file://""
  * ��������� ������
  * ����� ������, "����� ������?"
  * ������� ������ �� ������������ "������", ��. ����� ������������ �� /Actions/NewManual. ��� ���������, ������ ����� ������ �������� � ��������� ��������� (��������, ����� �������� ~RecentChanges ���������� ��������, � �.�.)
  * �������������� "���������" ������ ��������, ��� ����� ������� ����, META keywords � description
  * ����� �����
    * flash, ��� ������� ����-�������
    * hits, mostpopular - ������� � ����������� ���������� �������� � ���������
  * ��������� ��������� ������������: ��������, ������ �� ����� ��� ������� ���� "����" (������) ���� �� �������������.
  * ������ ��� IIS, ����� �����������.
  * ����������� ����� ������

===������ ��������?===

��������� ���������, �������� ���� license � ������������.
�� ���� ���� ������� - ���� �� ������ ������ � �������� ��� ���������,
��������� �� ����, ����� ���� ��������� ����� � ��������� �����. 

������ ������ WackoWiki ������ ����� ������� �� WackoCVS.

===��� ������� ������?===

php4.1+, mysql, ��������� apache+mod_rewrite.

===��� �������?===

��� ���: http://wackowiki.de/

===����������===

http://bugs.wackowiki.de