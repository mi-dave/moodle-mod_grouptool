<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * English strings for grouptool
 *
 * @package       mod
 * @subpackage    grouptool
 * @copyright     2012 onwards Philipp Hager {@link e0803285@gmail.com}
 * @since         Moodle 2.2.1+ (Build: 20120127)
 * @license       http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['active'] = 'aktiv';
$string['add_member'] = 'Füge {$a->fullname} zur Gruppe {$a->group} hinzu';
$string['added_member'] = '{$a->fullname} zur Gruppe {$a->group} hinzugefügt';
$string['administration'] = 'Administration';
$string['administration_alt'] = 'Gruppen und Gruppierungen erstellen, sowie Einstellungen, für die in dieser Instanz aktiven Gruppen, ändern';
$string['agroups'] = 'Aktive Gruppen';
$string['all_groups_full'] = 'Nutzer/in mit der ID {$a} kann nicht in Gruppe eingetragen werden, da alle Gruppen voll sind!';
$string['allowed'] = 'erlaubt';
$string['allow_multiple'] = 'multiple Anmeldungen zulassen';
$string['allow_multiple_help'] = 'Ermögliche es Studenten in mehr als 1 Gruppe zur gleichen Zeit angemeldet zu sein. Sie müssen spezifizieren wie viele Gruppen zumindest und maximal gewählt werden müssen.';
$string['allow_reg'] = 'Selbstanmeldung zulassen';
$string['allow_reg_help'] = 'Ermöglicht es Studenten sich selbst zu einer (oder mehrerer) der unten aktivierten Gruppen anzumelden.';
$string['allow_unreg'] = 'Abmeldung zulassen';
$string['allow_unreg_help'] = 'Ermöglicht Studenten sich von Gruppen ab- bzw. zu anderen Gruppen umzumelden, solange sie sich innerhalb eines (optionalen) Zeitlimits befinden.';
$string['already_member'] = '{$a->fullname} ist bereits Mitglied von Gruppe {$a->group}';
$string['already_queued'] = '{$a->username} ist bereits in der Warteliste von Gruppe {$a->groupname}!';
$string['already_registered'] = '{$a->username} ist bereits in Gruppe {$a->groupname} registriert!';
$string['you_are_already_queued'] = 'Sie sind bereits in der Warteliste von Gruppe {$a->groupname}!';
$string['you_are_already_registered'] = 'Sie sind bereits in der Gruppe {$a->groupname} registriert!';
$string['asterisk_marks_moodle_registrations'] = 'Benutzer mit führendem Asterisk/Stern sind bereits in den entsprechenden Moodle-Gruppen angemeldet.';
$string['availabledate'] = 'Verfügbar von';
$string['cant_enrol'] = 'Kann Nutzer nicht automatisch in Kurs einschreiben.';
$string['cfg_admin_head'] = 'Standardeinstellungen für die Administration';
$string['cfg_admin_head_info'] = 'Standardeinstellungen für den Administrationstab der Gruppenverwaltung.';
$string['cfg_instance_head'] = 'Standard-Instanz-Einstellungen';
$string['cfg_instance_head_info'] = 'Standardeinstellungen für neue Gruppenverwaltungsinstanzen.';
$string['cfg_allow_multiple'] = 'Mehrfache Anmeldungen';
$string['cfg_allow_multiple_desc'] = 'Ermöglicht Studenten sich standardmäßig in mehr als 1 Gruppe zur gleichen Zeit zu befinden.';
$string['cfg_allow_reg'] = 'Selbstanmeldung zulassen';
$string['cfg_allow_reg_desc'] = 'Ermöglicht es Studenten standardmäßig sich selbst anzumelden.';
$string['cfg_allow_unreg'] = 'Abmeldung zulassen';
$string['cfg_allow_unreg_desc'] = 'Erlaubt es Studenten standardmäßig sich selbst, innerhalb der Deadline, von Gruppen ab- und zu anderen Gruppen umzumelden.';
$string['cfg_choose_max'] = 'Maximalanzahl zu wählender Gruppen';
$string['cfg_choose_max_desc'] = 'In wie viele Gruppen sollen Studierende standardmäßig maximal zeitgleich angemeldet sein dürfen?';
$string['cfg_choose_min'] = 'Mindestanzahl zu wählender Gruppen';
$string['cfg_choose_min_desc'] = 'In wie vielen Gruppen sollen Studierende standardmäßig minimal angemeldet sein?';
$string['cfg_grpsize'] = 'Allgemeine Standardgruppengröße';
$string['cfg_grpsize_desc'] = 'Standardgruppengröße, die überall in der Gruppenverwaltung verwendet wird';
$string['cfg_ifgroupdeleted'] = 'Bei Gruppenlöschung';
$string['cfg_ifgroupdeleted_desc'] = 'Sollen in Moodle gelöschte Gruppen standardmäßig für die jeweiligen Instanzen wiederhergestellt oder aus den jeweiligen Instanzen (inkl. aller Anmeldungen & Wartelisten im Grouptool, etc.) entfernt werden?';
$string['cfg_ifmemberadded'] = 'Bei hinzugefügtem Gruppenmitglied';
$string['cfg_ifmemberadded_desc'] = 'Sollen neue Gruppenmitglieder standardmäßig auch in der Gruppenverwaltung hinzugefügt oder ignoriert werden?';
$string['cfg_ifmemberremoved'] = 'Bei gelöschtem Gruppenmitglied';
$string['cfg_ifmemberremoved_desc'] = 'Sollen Anmeldungen entfernter Gruppenmitglieder innerhalb der Gruppenverwaltungen standardmäßig gelöscht oder ignoriert werden?';
$string['cfg_immediate_reg'] = 'Sofortige Anmeldung';
$string['cfg_immediate_reg_desc'] = 'Soll jede Anmeldung automatisch zu den Moodle-Gruppen durchgereicht werden?';
$string['cfg_max_queues'] = 'Maximale gleichzeitige Wartelistenplätze';
$string['cfg_max_queues_desc'] = 'Gibt an in wie vielen Gruppen ein Nutzer standardmäßig zeitgleich in der Warteliste gereiht sein darf.';
$string['cfg_moodlesync_head'] = 'Synchronisationsverhalten';
$string['cfg_moodlesync_head_info'] = 'Wie sich die Gruppenverwaltungsinstanz bei hinzugefügten/gelöschten Mitgliedern/Gruppen in Moodle verhalten soll';
$string['cfg_name_scheme'] = 'Standard-Namensschema';
$string['cfg_name_scheme_desc'] = 'Standard-Namensschema für Gruppenerzeugung';
$string['cfg_show_members'] = 'Zeige Gruppenmitglieder';
$string['cfg_show_members_desc'] = 'Gibt an ob Gruppenmitglieder standardmäßig angezeigt werden sollen';
$string['cfg_use_individual'] = 'Unterschiedliche Gruppengrößen festlegen';
$string['cfg_use_individual_desc'] = 'Gibt an, ob standardmäßig eine individuelle Größe pro Gruppe definiert werden soll.';
$string['cfg_use_queue'] = 'Wartelisten verwenden';
$string['cfg_use_queue_desc'] = 'Gibt an, ob standardmäßig Wartelisten bei überfüllten Gruppen verwendet werden sollen';
$string['cfg_use_size'] = 'Begrenze Gruppengrößen';
$string['cfg_use_size_desc'] = 'Gibt an, ob standardmäßig nur begrenzte Plätze pro Gruppe verfügbar sein sollen.';
$string['change_group'] = 'Gruppe wechseln';
$string['change_group_to'] = 'Soll mit Gruppenwechsel zu {$a->groupname} fortgefahren werden?';
$string['change_group_to_success'] = 'Gruppenwechsel erfolgreich! {$a->username} ist nun in der Gruppe {$a->groupname} registriert!';
$string['you_change_group_to_success'] = 'Ihr Gruppenwechsel war erfolgreich! Sie sind nun in der Gruppe {$a->groupname} registriert!';
$string['checkbox_control_header'] = 'Gruppen/ruppierungen auswählen';
$string['choose_group'] = 'Sie müssen eine Zielgruppe auswählen!';
$string['choose_max'] = 'Maximalanzahl zu wählender Gruppen';
$string['choose_min'] = 'Mindestanzahl zu wählender Gruppen';
$string['choose_min_text'] = 'Sie müssen mindestens {$a} Gruppe(n) auswählen!';
$string['choose_max_text'] = 'Sie dürfen nicht mehr als {$a} Gruppe(n) auswählen!';
$string['choose_min_max_text'] = 'Sie müssen zwischen {$a->min} und {$a->max} Gruppen auswählen!';
$string['choose_targetgroup'] = 'Import in Gruppe';
$string['chooseactivity'] = 'Sie müssen eine Aktivität auswählen, bevor Daten angezeigt werden können!';
$string['create_1_person_groups'] = '1-Personen-Gruppen erstellen';
$string['create_fromto_groups'] = 'Gruppen von X bis Y erstellen (z.B. von 34 bis 89).';
$string['createGroups'] = 'Gruppen erstellen';
$string['createGroupings'] = 'Gruppierungen erstellen';
$string['create_groups_confirm'] = 'Gruppen erstellen, wie in der Vorschau gezeigt?';
$string['create_groups_confirm_problem'] = 'Mindestens 1 Fehler ist aufgetreten (siehe Vorschau)!<br />Es werden KEINE Änderungen vorgenommen!<br />Es existieren bereits Gruppen mit Namen, die aus dem Namensschema erzeugt wurden. Bitte wählen Sie ein anderes Namensschema!';
$string['create_groupings_confirm'] = 'Gruppierungen erstellen, wie in der Vorschau gezeigt?';
$string['create_groupings_confirm_problem'] = 'Zumindest 1 Fehler ist aufgetreten (siehe Vorschau)!<br />Es werden KEINE Änderungen vorgenommen!';
$string['copied_grade_feedback'] = 'Gruppenbenotung<br />
+Abgabe von: {$a->student}<br />
+Note von: {$a->teacher}<br />
+Original Datum/Zeit: {$a->date}<br />
<div class="indent">{$a->feedback}</div>';
$string['copy'] = 'Übertragen';
$string['copy_chosen'] = 'Übertrage Gewählte';
$string['copygrade'] = 'Bewertung kopieren';
$string['copy_refgrades_feedback'] = 'Übertrage Referenzbewertungen und Feedback der gewählten Gruppen auf andere Gruppenmitglieder';
$string['copy_grade_confirm'] = 'Sind Sie sich wirklich SICHER?';
$string['copy_grade_overwrite_confirm'] = 'Sind Sie sich wirklich SICHER? Existierende Bewertungen werden überschrieben!';
$string['copy_grades_confirm'] = 'Sind Sie sich wirklich SICHER?';
$string['copy_grades_overwrite_confirm'] = 'Sind Sie sich wirklich SICHER? Existierende Bewertungen werden überschrieben!';
$string['copy_grades_success'] = 'Die folgenden Bewertungen wurden erfolgreich aktualisiert:';
$string['copy_grades_errors'] = 'Zumindest 1 Fehler trat während des Übertragens der Bewertungen auf:';
$string['could_not_add'] = 'Konnte {$a->fullname} nicht zu Gruppe {$a->group} hinzufügen!';
$string['define_amount_groups'] = 'Gruppenanzahl festlegen';
$string['define_amount_members'] = 'Mitgliederanzahl festlegen';
$string['delete_reference'] = 'Lösche aus der Gruppenverwaltung';
$string['determinismerror'] = 'Das "Verfügbar bis" Datum, darf nicht vor dem "Verfügbar von" Datum oder in der Vergangenheit liegen!';
$string['digits'] = 'Mindestanzahl Stellen';
$string['disabled'] = 'deaktiviert';
$string['drag'] = 'verschiebe';
$string['due'] = 'Gruppenverwaltung Deadline';
$string['duedate'] = 'Verfügbar bis';
$string['duedateno'] = 'keine Deadline';
$string['early'] = '{$a} rechtzeitig';
$string['error_getting_data'] = 'Fehler beim Auslesen der Gruppendaten! Entweder keine oder mehrere Gruppen wurden zurückgegeben!';
$string['userlist'] = 'Teilnehmer/innenliste';
$string['userlist_alt'] = 'Zeige Liste aller Teilnehmer/innen und deren Anmeldungen. Exportiere Daten über Nutzer und deren Gruppen in verschiedene Formate (PDF, plain text, Excel, etc.).';
$string['feedbackplural'] = 'Rückmeldungen';
$string['filters_legend'] = 'Filtere Daten';
$string['followchanges'] = 'folge Änderungen';
$string['found_multiple'] = 'Kann Nutzer/in nicht einwandfrei identifizieren, mehrere Treffer:';
$string['free'] = 'frei';
$string['fullgroup'] = 'Gruppe ist voll';
$string['general_information'] = 'Allgemeine Informationen';
$string['global_userstats'] = '{$a->reg_users} von {$a->users} Nutzern sind angemeldet. {$a->notreg_users} (noch) ohne Anmeldung.';
$string['grading'] = 'Bewertung';
$string['grading_activity_title'] = 'Aktivität';
$string['grading_alt'] = 'Werkzeuge zum Kopieren von Bewertungen von 1 Gruppenmitglied zu (allen) anderen Gruppenmitgliedern entweder für 1 oder mehrere Gruppen.';
$string['grading_filter_select_title'] = 'Gruppe(n)';
$string['grading_filter_select_title_help'] = 'Auswählen welche Gruppe bzw. Gruppen bearbeitet werden:<ul><li>konfliktfrei - Alle Gruppen, bei denen nur 1 Gruppenmitglied eine Bewertung für die ausgewählte Aktivität erhalten hat.</li><li>Alle - Alle Gruppen</li><li>"Gruppenname" - nur die jeweils ausgewählte Gruppe</li></ul>';
$string['grading_grouping_select_title'] = 'Nach Gruppierung filtern';
$string['group_assign_error_prev'] = 'Kann nicht zu Gruppe hinzufügen!';
$string['group_assign_error'] = 'Kann nicht zu Gruppe hinzufügen!';
$string['groupcreation'] = 'Gruppen erstellen';
$string['groupcreationmode'] = 'Modus';
$string['groupcreationmode_help'] = 'Auswahl, wie Gruppen erstellt werden sollen:<br />
<ul>
<li>definiere Gruppenanzahl - Es wird ausgewählt aus welcher Rolle Benutzer/innen für die Gruppenerzeugung benutzt werden sollen und die gewünschte Anzahl an Gruppen im Textfeld angegeben. Im Namenschema wird das Schema für die Gruppennamen angegeben. Dabei können folgende Tags verwendet werden:
<ul>
<li># (wird durch die Gruppennummer ersetzt)</li>
<li>@ (wird durch eine Buchstabenrepräsentation der Gruppennummer ersetzt)</li>
</ul>
Die betroffenen Benutzer/innen werden automatisch auf die angegebene Anzahl an Gruppen verteilt.</li>
<li>
definiere Anzahl an Gruppenmitgliedern - Hier werden die ideale Gruppenmitgliedsanzahl sowie Namensschema und Rolle für die Nutzerauswahl angegeben. Die benötigte Gruppenanzahl wird automatisch errechnet. Wahlweise können kleine Gruppen (entspricht weniger als 70 % Füllung) auf die anderen Gruppen aufgeteilt werden.
</li>
<li>
1-Personen-Gruppen erzeugen - Hier wird für jeden ausgewählten Benutzer eine Gruppe erzeugt. Zusätzlich zu # und @ können Sie hier folgende Tags für das Namensschema benutzen:
<ul>
<li>[username] - der Benutzername</li>
<li>[firstname] - der Vorname</li>
<li>[lastname] - der Familienname</li>
<li>[idnumber] - die ID-Nummer</li>
</ul>
Wenn Daten für einen Benutzer nicht vorhanden sind, wird der Tag durch TagnameXX ersetzt (wobei XX für die laufende Gruppennummer steht).
</li>
</ul>';
$string['groupfromtodigits'] = 'Von, Bis &amp; Stellen im Namen:';
$string['groupinfo'] = 'Gruppeninformationen';
$string['grouping_exists_error_prev'] = 'Kann Gruppierung nicht anlegen, da bereits eine Gruppierung mit diesem Namen existiert!';
$string['grouping_exists_error'] = 'Konnte Gruppierung nicht anlegen, da bereits eine Gruppierung mit diesem Namen existiert!';
$string['grouping_creation_success'] = 'Gruppierung erfolgreich angelegt und Gruppe {$a} hinzugefügt!';
$string['grouping_creation_error_prev'] = 'Kann Gruppierung nicht anlegen!';
$string['grouping_creation_error'] = 'Konnte Gruppierung nicht anlegen!';
$string['groupingscreation'] = 'Gruppierungserzeugung';
$string['groupingscreatedesc'] = 'Gruppierungen für wahlweise jede Kursgruppe oder jede ausgewählte Kursgruppe erstellen und jeweilige Gruppe automatisch hinzufügen.';
$string['group_places'] = 'Gruppenplätze';
$string['group_places_help'] = 'Das Feld "Gruppenplätze" informiert (durch Schrägstrich getrennt) erstens über die Anzahl der gesamt verfügbaren Plätze, zweitens über die Anzahl der freien Gruppenplätze sowie drittens über die Anzahl jener Plätze, die bereits zum Zeitpunkt des Seitenaufrufs belegt waren.';
$string['groupoverview'] = 'Gruppenübersicht';
$string['groupselection'] = 'Gruppenauswahl';
$string['groupselection_help'] = 'Wählen Sie durch Selektieren der jeweiligen Kontrollkästchen jene Gruppen aus, für welche Sie die Übertragung der Referenzbewertungen sowie der Feedbacks durchführen möchten.';
$string['groupsize'] = 'Gruppengröße';
$string['grouptool'] = 'Gruppenverwaltung';
$string['grouptoolfieldset'] = 'Instanzeinstellungen';
$string['grouptoolname'] = 'Name der Gruppenverwaltung';
$string['grouptoolname_help'] = 'Der Name der zu erstellenden/bearbeitenden Gruppenverwaltungs-Instanz';
$string['grouptool:addinstance'] = 'Erstelle eine Gruppenverwaltungsinstanz im Kurs';
$string['grouptool:create_groupings'] = 'Erstelle Gruppierungen mit Hilfe der Gruppenverwaltung.';
$string['grouptool:create_groups'] = 'Erstelle Gruppen mit Hilfe der Gruppenverwaltung';
$string['grouptool:export'] = 'Exportiere Gruppen und Anmeldungen zu verschiedenen Formaten';
$string['grouptool:grade'] = 'Kopiere Bewertungen von einem Gruppenmitglied auf andere';
$string['grouptool:grade_own_group'] = 'Kopiere Bewertungen von einem Gruppenmitglied auf andere, sofern die ursprüngliche Bewertung von mir stammt.';
$string['grouptool:register'] = 'Selbstanmeldung in aktiver Gruppe mit Hilfe der Gruppenverwaltung';
$string['grouptool:register_students'] = 'Melde andere Benutzer in aktiven Gruppen unter Zuhilfenahme der Gruppenverwaltung an. (Wird auch zum Auflösen von Wartelisten benötigt)';
$string['grouptool:view_description'] = 'Zeige Gruppenverwaltungsbeschreibung';
$string['grouptool:view_groups'] = 'Zeige aktive Gruppen';
$string['grouptool:view_registrations'] = 'Zeige wer in welcher aktiven Gruppe angemeldet/in der Warteliste gereiht ist.';
$string['groupuser_import'] = 'Importiere Gruppenmitglieder';
$string['group_not_in_grouping'] = 'Gewählte Gruppe ist nicht in gewählter Gruppierung!';
$string['group_or_member_count'] = 'Gruppen- bzw. Mitgliederanzahl';
$string['ifgroupdeleted'] = 'Wenn Kursgruppen gelöscht werden';
$string['ifgroupdeleted_help'] = 'Sollen gelöschte Kursgruppen für die Gruppenverwaltung wiederhergestellt oder alle Referenzen (aktive Gruppe/Anmeldungen/Warteliste) gelöscht werden?';
$string['ifmemberadded'] = 'Wenn Mitglieder hinzugefügt werden';
$string['ifmemberadded_help'] = 'Sollen neue Gruppenmitglieder in die aktive Gruppe der Gruppenverwaltung übernommen oder ignoriert werden?';
$string['ifmemberremoved'] = 'Wenn Mitglieder gelöscht werden';
$string['ifmemberremoved_help'] = 'Sollen die Anmeldungen in den aktiven Gruppen gelöscht oder die Änderung ignoriert werden?';
$string['ignorechanges'] = 'Änderungen ignorieren';
$string['ignored_not_found_users'] = 'Zumindest 1 Benutzer konnte nicht zur Gruppe hinzugefügt werden!';
$string['ignoring_not_found_users'] = 'Zumindest 1 Benutzer kann nicht gefunden werden! Alle nicht gefundenen Benutzer werden ignoriert!';
$string['immediate_reg'] = 'sofortige Anmeldungen';
$string['immediate_reg_help'] = 'Wenn aktiviert, werden An-/Abmeldungen sofort in die Moodle-Gruppen übernommen. Wenn nicht aktiviert, können die Anmeldungen per Knopfdruck in die Moodle-Gruppen übernommen werden!';
$string['import'] = 'Import';
$string['importbutton'] = 'Benutzer/innen hinzufügen';
$string['import_desc'] = 'Importiere Benutzer per Liste von ID-Nummern in bestimmte Gruppe.';
$string['import_user'] = 'Importieren von {$a->fullname} ({$a->idnumber}) in Gruppe {$a->groupname} erfolgreich.';
$string['import_user_prev'] = 'Importiere {$a->fullname} ({$a->idnumber}) in Gruppe {$a->groupname}.';
$string['import_user_problem'] = 'Fehler beim Importieren von {$a->fullname} (ID-Nummer: {$a->idnumber}) in Gruppe {$a->groupname}.';
$string['incomplete_only_label'] = 'zeige nur Gruppen mit fehlenden Bewertungen';
$string['intro'] = 'Beschreibung';
$string['landscape'] = 'Querformat';
$string['late'] = '{$a} zu spät';
$string['maxmembers'] = 'globale Gruppengröße';
$string['max_queues_reached'] = 'maximale Wartelistenplätze erreicht!';
$string['max_regs_reached'] = 'maximale Anmeldungen erreicht!';
$string['messageprovider:grouptool_moveupreg'] = 'Anmeldung durch Nachrücken in der Warteschlange';
$string['missing_source_selection'] = 'keine Quelle ausgewählt!';
$string['modulename'] = 'Gruppenverwaltung';
$string['modulenameplural'] = 'Gruppenverwaltungen';
$string['modulename_help'] = 'Die Gruppenverwaltung umfasst mehrere Aufgabenbereiche in Verbindung mit Gruppen:<ul><li>Sie erlaubt es Gruppen auf verschiedene Art und Weise (Angabe von Anzahl an Gruppen/Gruppenmitgliedern, 1-Personen-Gruppen) sowie Gruppierungen für jede Kursgruppe zu erzeugen.</li><li>Weiters kann sie benutzt werden um es Studierenden zu ermöglichen sich selbst innerhalb eines gewissen Zeitraumes zu Gruppen anzumelden.</li><li>Mit ihrere Hilfe lassen sich Gruppenbenotungen durchführen, d.h. eine Aktivitätsbenotung von einem Studierenden auf andere Gruppenmitglieder zu übertragen.</li><li>Es ist auch möglich Gruppen schnell zu befüllen, indem Nutzer/innen mittels Liste mit Matrikelnummern in eine bestimmmte Gruppe importiert werden.</li><li>Überblick über alle Gruppen sowie deren Anmeldungen/Wartelisten/etc in verschiedene Formate (PDF/XLS/ODS/TXT) exportierbar.</li><li>Exportierbare Liste aller im Kurs eingeschriebener Benutzer/innen mit ihren Gruppenanmeldungen, Wartelistenplätzen, etc (ebenfalls exportierbar).</li></ul>';
$string['moodlesync'] = 'Verhalten bei Änderungen in Moodle-Gruppen';
$string['moodlesync_help'] = 'Wie sich die Gruppenverwaltung verhalten soll, wenn Gruppenmitglieder/Gruppen in Moodle hinzugefügt/entfernt werden';
$string['movedown'] = 'nach unten verschieben';
$string['moveup'] = 'nach oben verschieben';
$string['must_specify_groupingname'] = 'Sie müssen einen Namen für die Gruppierung angeben!';
$string['mygroups_only_label'] = 'zeige nur Quellen, die ich bewertet habe';
$string['name_scheme_tags'] = '<span class="tag firstname">[firstname]</span>
<span class="tag lastname">[lastname]</span>
<span class="tag idnumber">[idnumber]</span>
<span class="tag username">[username]</span>
<span class="tag alpha">@</span>
<span class="tag number">#</span>';
$string['namingscheme'] = 'Namensschema';
$string['no_conflictfree_to_display'] = 'Keine konfliktfreien Gruppen anzuzeigen. Stattdessen alle angezeigt!';
$string['no_data_to_display'] = 'Keine Gruppendaten anzuzeigen!';
$string['no_grades_present'] = 'Keine Bewertungen anzuzeigen';
$string['no_groups_to_display'] = 'Keine Gruppe(n) anzuzeigen!';
$string['no_queues_to_resolve'] = 'Keine Warteliste aufzulösen!';
$string['no_registrations'] = 'keine Anmeldungen';
$string['no_target_selected'] = 'Es wurde kein Ziel für den Kopiervorgang gewählt! Es muss zumindest 1 Ziel gewählt werden!';
$string['noaccess'] = 'Sie haben keinen Zugriff auf dieses Modul! Es ist möglich, dass Sie nicht zur richtigen Gruppe gehören.';
$string['nobody_queued'] = 'keine Wartelisteneinträge';
$string['nogrouptools'] = 'Es gibt keine Gruppenverwaltungen!';
$string['nonconflicting'] = 'konfliktfrei';
$string['nosmallgroups'] = 'Verhindere kleine Gruppen';
$string['nosmallgroups_help'] = 'Wenn aktiviert, wird sichergestellt, dass jede Gruppe zumindest zu 70% der angegebenen Größe gefüllt ist! Die Benutzer/innen der unter Umständen vorhandenen letzten kleineren Gruppe, werden auf die übrigen Gruppen aufgeteilt. Es kann daher vorkommen, dass diese Gruppen mehr Mitglieder als spezifiziert haben!';
$string['noregistrationdue'] = 'Anmeldung ist immer möglich!';
$string['not_allowed_to_show_members'] = 'Sie haben keine Berechtigung diese Information anzuzeigen!';
$string['not_in_queue_or_registered'] = '{$a->username} ist weder in der Gruppe {$a->groupname} angemeldet noch in deren Warteliste gereiht.';
$string['not_permitted'] = 'nicht erlaubt';
$string['not_registered'] = 'Sie sind noch nirgends angemeldet!';
$string['you_are_not_in_queue_or_registered'] = 'Sie sind weder in der Gruppe {$a->groupname} angemeldet noch in deren Warteliste gereiht.';
$string['nothing_to_push'] = 'Nichts zu übernehmen!';
$string['nowhere_queued'] = 'keine Wartelisteneinträge';
$string['number_of_students'] = 'Anzahl an Benutzer/innen';
$string['occupied'] = 'belegt';
$string['orientation'] = 'PDF-Ausrichtung';
$string['overview'] = 'Überblick';
$string['overview_alt'] = 'Überblick über Gruppen und deren Anmeldungen';
$string['overwrite_label'] = 'überschreibe vorhandene Bewertungen';
$string['pluginadministration'] = 'Gruppenverwaltungs Administration';
$string['pluginname'] = 'Gruppenverwaltung';
$string['portrait'] = 'Hochformat';
$string['preview'] = 'Vorschau';
$string['queue'] = 'Warteliste';
$string['queue_in_group'] = 'Trage {$a->username} in Warteliste der Gruppe {$a->groupname} ein?';
$string['queue_in_group_success'] = '{$a->username} erfolgreich in Warteliste der Gruppe {$a->groupname} eingetragen!';
$string['queue_you_in_group'] = 'Wollen Sie in die Warteliste der Gruppe {$a->groupname} eingetragen werden?';
$string['queue_you_in_group_success'] = 'Sie wurden erfolgreich in die Warteliste der Gruppe {$a->groupname} eingetragen!';
$string['queued'] = 'in Warteliste';
$string['queued_in_group_info'] = '{$a->username} in Warteliste von {$a->groupname}';
$string['queued_on_rank'] = 'in Warteliste auf Platz #{$a}';
$string['queues'] = 'Wartelisten';
$string['queues_max'] = 'max Plätze in Wartelisten';
$string['queues_max_help'] = 'Begrenzt die gleichzeitig einnehmbaren Plätze in Wartelisten pro Benutzer in diesem Grouptool.';
$string['queueing_is'] = 'Wartelisten sind';
$string['rank'] = 'Rang';
$string['recreate_group'] = 'Gruppe erneut erstellen';
$string['reference_grade_feedback'] = 'Referenzbewertung / Feedback';
$string['refresh_table_button'] = 'Vorschau aktualisieren';
$string['reg_in_full_group'] = 'Kann {$a->username} nicht in Gruppe {$a->groupname} anmelden, weil sie voll ist!';
$string['reg_you_in_full_group'] = 'Kann Sie nicht in Gruppe {$a->groupname} anmelden, weil sie voll ist!';
$string['reg_not_open'] = 'Die Anmeldung ist derzeit nicht möglich. Vielleicht ist der Anmeldezeitraum vorbei oder es war nie erlaubt.';
$string['register'] = 'Anmelden';
$string['registered'] = 'Angemeldet';
$string['registered_on_rank'] = 'Angemeldet auf Platz #{$a}';
$string['registered_in_group_info'] = '{$a->username} in Gruppe {$a->groupname} angemeldet';
$string['register_in_group'] = 'Sind Sie sicher, dass Sie {$a->username} in Gruppe {$a->groupname} anmelden möchten?';
$string['register_in_group_success'] = 'Anmeldung von {$a->username} in Gruppe {$a->groupname} war erfolgreich!';
$string['register_you_in_group'] = 'Sind Sie sicher, dass Sie sich zu Gruppe {$a->groupname} anmelden möchten?';
$string['register_you_in_group_success'] = 'Sie wurden erfolgreich in Gruppe {$a->groupname} angemeldet!';
$string['register_you_in_group_successmail'] = 'Sie wurden erfolgreich in Gruppe {$a->groupname} angemeldet!';
$string['register_you_in_group_successmailhtml'] = 'Sie wurden erfolgreich in Gruppe {$a->groupname} angemeldet!';
$string['registrationdue'] = 'Anmeldung bis:';
$string['registrations'] = 'Anmeldungen';
$string['registrations_missing'] = '{$a} Anmeldungen fehlen';
$string['registration_missing'] = '1 Anmeldung fehlt';
$string['registration_period'] = 'Anmeldezeitraum für';
$string['registration_period_start'] = 'Beginn der Anmeldung für';
$string['registration_period_end'] = 'Ende der Anmeldung für';
$string['reset_agrps'] = 'Setze aktive Gruppen zurück';
$string['reset_agrps_help'] = 'Setzt alle Kursgruppen inaktiv für die Gruppenverwaltungen und löscht jede Registrierung und jeden Wartelisteneintrag in den Gruppenverwaltungen des Kurses!';
$string['reset_registrations'] = 'setze Anmeldungen zurück';
$string['reset_registrations_help'] = 'Anmeldungen werden automatisch gelöscht, wenn aktive Gruppen zurückgesetzt werden.';
$string['reset_queues'] = 'setze Wartelisten zurück';
$string['reset_queues_help'] = 'Wartelisten werden automatisch gelöscht, wenn aktive Gruppen zurückgesetzt werden.';
$string['reset_transparent_unreg'] = 'Melde Moodle-Gruppen-Mitglieder ab';
$string['reset_transparent_unreg_help'] = 'Melde alle Moodle-Gruppen-Mitglieder ab, wenn Sie in entsprechenden aktiven Gruppen angemeldet sind.';
$string['resolve_queue_legend'] = 'Löse Wartelisten auf';
$string['resolve_queue_title'] = 'Löse Wartelisten auf';
$string['resolve_queue'] = 'Wartelisten auflösen';
$string['selected'] = 'Ausgewählt';
$string['select_all'] = 'alle';
$string['select_none'] = 'keine';
$string['select_inverse'] = 'invertieren';
$string['selectfromcohort'] = 'Mitglieder aus globaler Gruppe wählen';
$string['selfregistration'] = 'Anmeldung';
$string['selfregistration_alt'] = 'Selbstanmeldung zu einer oder mehreren Gruppen';
$string['show_members'] = 'Gruppenmitglieder anzeigen';
$string['show_members_help'] = 'Wenn aktiviert ist sichtbar, wer sich schon zur Gruppe angemeldet hat.';
$string['size'] = 'Gruppengröße';
$string['size_grp'] = 'globale Gruppengrößeneinstellung';
$string['size_grp_help'] = 'Wenn Gruppengröße verwendet wird, wird die maximale Anzahl an Gruppenanmeldungen für jede Gruppe begrenzt (für diese Instanz). Wenn zusätzlich die "individuelle Größe" aktiviert ist, wird die Gruppengröße für jede Gruppe gesondert festgelegt.';
$string['skipped'] = 'übersprungen';
$string['source_missing'] = 'Es gibt keine Quellen, von denen kopiert werden kann!';
$string['sources_missing'] = 'Es existiert zumindest 1 Gruppe, bei der keine Quelle ausgewählt wurde!';
$string['sortlist_no_data'] = 'Es gibt derzeit keine Gruppen anzuzeigen!';
$string['status'] = 'Status';
$string['status_help'] = '<ul><li><span style="font-weight:bold">✔</span> angemeldet in Moodle-Gruppe und Grouptool</li><li><span style="font-weight:bold">?</span> angemeldet in Moodle-Gruppe, nicht aber im Grouptool</li><li><span style="font-weight:bold">+</span> angemeldet im Grouptool, nicht aber in Moodle-Gruppe</li><li><span style="font-weight:bold">1, 2, 3...</span> auf Warteliste in Moodle-Gruppe</li></ul>';
$string['switched_to_all_groups'] = 'Ändere Gruppenfilter zu "Alle"!';
$string['tags'] = 'Verfügbare Tags';
$string['tags_help'] = 'Man kann diese Tags benutzen um Namensschemen zu definieren. Jeder Tag wird für die Gruppennamen durch (Benutzer-)Informationen ersetzt. Die Tags in [] sind mit Benutzerdaten verknüpft und die # und @ werden durch eine laufende Nummer bzw. alphabetische Repräsentation dieser ersetzt. Wenn JavaScript aktiviert ist, können Sie durch Klicken auf die Tags, diese dem Namensschema anhängen. Bitte beachten Sie, dass jeder Gruppenname innerhalb des Kurses einzigartig sein muss und ändern Sie bei entsprechenden Problemen das Namensschema!';
$string['too_many_queue_places'] = 'Kann {$a->username} nicht in Warteliste der Gruppe {$a->groupname} eintragen, weil {$a->username} bereits in zu vielen Wartelisten eingetragen ist!';
$string['you_have_too_many_queue_places'] = 'Kann Sie nicht in Warteliste der Gruppe {$a->groupname} eintragen, weil Sie bereits in zu vielen Wartelisten eingetragen sind!';
$string['total'] = 'gesamt';
$string['unqueue'] = 'trage aus Warteliste aus';
$string['unqueue_from_group'] = 'Wirklich mit Austragen von {$a->username} aus Warteliste der Gruppe {$a->groupname} fortfahren?';
$string['unqueue_from_group_success'] = 'Austragen von {$a->username} aus Warteliste der Gruppe {$a->groupname} erfolgreich!';
$string['unqueue_you_from_group'] = 'Wollen Sie sich wirklich aus der Warteliste der Gruppe {$a->groupname} austragen?';
$string['unqueue_you_from_group_success'] = 'Sie wurden erfolgreich aus der Warteliste der Gruppe {$a->groupname} ausgetragen!';
$string['unreg'] = 'Abmelden';
$string['unreg_from_group'] = 'Mit Abmeldung von {$a->username} aus Gruppe {$a->groupname} fortfahren?';
$string['unreg_from_group_success'] = 'Abmelden von {$a->username} aus Gruppe {$a->groupname} erfolgreich!';
$string['unreg_you_from_group'] = 'Mit Ihrer Abmeldung aus Gruppe {$a->groupname} fortfahren?';
$string['unreg_you_from_group_success'] = 'Ihre Abmeldung aus Gruppe {$a->groupname} war erfolgreich!';
$string['unreg_is'] = 'Abmeldung';
$string['updatemdlgrps'] = 'Anmeldungen in Moodle-Gruppen übertragen';
$string['update_grouplist_success'] = 'aktive Gruppen erfolgreich aktualisiert!';
$string['userlist'] = 'Teilnehmer/innenliste';
$string['user_move_prev'] = '"Nutzer/in mit ID {$a->user_id} wird von Gruppe {$a->agrp_id} nach Gruppe {$a->current_grp} verschoben ({$a->current_text})';
$string['user_moved'] = 'Nutzer/in mit ID {$a->user_id} wurde von Gruppe {$a->agrp_id} nach Gruppe {$a->current_grp} verschoben ({$a->current_text})';
$string['userlist_help'] = 'Liste von ID-Nummern durch eines oder mehrere der folgenden Zeichen getrennt<ul><li>[,] Beistrich</li><li>[;] Strichpunkt</li><li>[ ] Leerzeichen</li><li>[\n] Zeilensprung</li><li>[\r] Wagenrücklauf</li><li>[\t] Tabulator</li></ul>';
$string['user_not_found'] = 'Nutzer {$a} wurde nicht gefunden!';
$string['use_all_or_chosen'] = 'Alle/Ausgewählte';
$string['use_all_or_chosen_help'] = 'Wenn alle ausgewählt, wird eine Gruppierung für jede Kursgruppe erstellt. Bei "Ausgewählte" wird eine Gruppierung nur für in der Liste ausgewählte Gruppen erstellt.';
$string['use_individual'] = 'benutze individuelle Gruppengrößen';
$string['use_individual_help'] = 'Überschreibe globale Gruppengröße mit individuellen Werten für jede Gruppe. Diese werden per Gruppenliste weiter unten gesetzt.';
$string['use_size'] = 'aktivieren';
$string['use_queue'] = 'benutze Wartelisten';
$string['use_queue_help'] = 'Wenn Wartelisten aktiviert sind, werden Benutzer, die sich in einer vollen Gruppe anmelden wollen, auf deren Warteliste gesetzt bis sie durch die Abmeldung eines anderen in die Gruppe nachrücken. Nach der Deadline, kann der Lehrende die Wartelisten auflösen, wobei die Gruppen in der Reihenfolge der Sortierung in der Gruppenliste mit den restlichen Wartelisteneinträgen aufgefüllt werden. Man kann die gleichzeitigen Wartelistenplätze für Benutzer begrenzen.';
$string['you'] = 'Sie';
