<?php
// Greek translation by Vergerakis Panagiotis
// Read our wiki on how to translate: https://bitbucket.org/phpliteadmin/public/wiki/Localization
$lang = array(
	"direction" => "LTR",
	"date_format" => 'g:ia \o\n F j, Y (T)',  // see http://php.net/manual/en/function.date.php for what the letters stand for
	"ver" => "έκδοση",
	"for" => "για",
	"to" => "έως",
	"go" => "Πήγαινε",
	"yes" => "Ναι",
	"no" => "Όχι",
	"sql" => "SQL",
	"csv" => "CSV",
	"csv_tbl" => "Πίνακας που το CSV σχετίζεται",
	"srch" => "Αναζήτηση",
	"srch_again" => "Άλλη Αναζήτηση",
	"login" => "Είσοδος",
	"logout" => "Έξοδος",
	"view" => "View",
	"confirm" => "Επιβεβαίωση",
	"cancel" => "Ακύρωση",
	"save_as" => "Αποθήκευση ως",
	"options" => "Επιλογές",
	"no_opt" => "Χωρίς επιλογές",
	"help" => "Βοήθεια",
	"installed" => "εγκατεστημένο",
	"not_installed" => "όχι εγκατεστημένο",
	"done" => "ολοκληρώθηκε",
	"insert" => "Προσθήκη",
	"export" => "Εξαγωγή",
	"import" => "Εισαγωγή",
	"rename" => "Μετονομασία",
	"empty" => "Άδειασμα",
	"drop" => "Διαγραφή(Drop)",
	"tbl" => "Πίνακας",
	"chart" => "Γράφημα(Chart)",
	"err" => "ΛΑΘΟΣ",
	"act" => "Ενέργεια",
	"rec" => "Εγγραφές",
	"col" => "Στήλη",
	"cols" => "Στήλες",
	"rows" => "γραμμή(ές)",
	"edit" => "Επεξεργασία",
	"del" => "Διαγραφή",
	"add" => "Προσθήκη",
	"backup" => "Κατέβασμα Βάσης Δεδομένων",
	"before" => "Πριν",
	"after" => "Μετά",
	"passwd" => "Κωδικός",
	"passwd_incorrect" => "Λάθος κωδικός.",
	"chk_ext" => "Έλεγχος υποστηριζόμενης SQLite PHP επέκτασης",
	"autoincrement" => "Αυτόματη αρίθμηση",
	"not_null" => "όχι Κενό",
	"attention" => "Προσοχή",
	"none" => "Τίποτα",
	"as_defined" => "Όπως ορίστηκε",
	"expression" => "Έκφραση",
	
	"sqlite_ext" => "SQLite επέκταση",
	"sqlite_ext_support" => "Φαίνεται ότι καμία από τις υποστηριζόμενες επεκτάσεις SQLite δεν είναι διαθέσιμη στην εγκατάσταση του PHP. Μάλλον δεν θα μπορείτε να χρησιμοποιήσετε το %s μέχρι να εγκατασταθεί τουλάχιστον μία.",
	"sqlite_v" => "SQLite έκδοση",
	"sqlite_v_error" => "Φαίνεται ότι η ΒΔ είναι σε SQLite έκδοση %s αλλά η εγκατάσταση της PHP δεν περιέχει τις απαιτούμενες επεκτάσεις για χειριστεί αυτή την έκδοση. Για να διορθώσετε αυτό το πρόβλημα είτε διαγράψτε τη ΒΔ και επιτρέψτε στο %s να τη δημιουργήσει αυτόματα ή αναδημιουργήστε τη χειροκίνητα σας SQLite έκδοση %s.",
	"report_issue" => "Το πρόβλημα δεν μπορεί να διαγνωστεί σωστά. Παρακαλώ δηλώστε το πρόβλημα στο ",
	"sqlite_limit" => "Βάσει των περιορισμών της SQLite, μόνο ένα όνομα πεδίου και τύπος πεδίου μπορεί να μεταβληθεί.",
	
	"php_v" => "PHP έκδοση",
	
	"db_dump" => "database dump",
	"db_f" => "αρχείο ΒΔ",
	"db_ch" => "Άλλαξε ΒΔ",
	"db_event" => "Συμβάν(event) ΒΔ",
	"db_name" => "Όνομα ΒΔ",
	"db_rename" => "Μετονομασία ΒΔ",
	"db_renamed" => "Η ΒΔ '%s' μετονομάστηκε σε",
	"db_del" => "Διαγραφή ΒΔ",
	"db_path" => "Διαδρομή αρχείου ΒΔ",
	"db_size" => "Μέγεθος ΒΔ",
	"db_mod" => "Τελευταία Αλλαγή ΒΔ",
	"db_create" => "Δημιουργία νέας ΒΔ",
	"db_vac" => "Η ΒΔ, '%s', έχει ΚΑΘΑΡΙΣΤΕΙ .",
	"db_not_writeable" => "Η ΒΔ, '%s', δεν μπορεί να δημιουργηθεί επειδή ο φάκελος, '%s', δεν έχει δικαιώματα εγγραφής. Αλλάξτε τα δικαιώματα του φακέλου ώστε να μπορείτε να χρησιμοποιήσετε την εφαρμογή.",
	"db_setup" => "Υπάρχει πρόβλημα ορισμού της ΒΔ, %s. Θα γίνει μία προσπάθεια να βρεθεί το πρόβλημα ώστε να μπορείτε να το διορθώσετε",
	"db_exists" => "Μία άλλη ΒΔ, άλλο αρχείο ή φάκελος με το όνομα '%s' υπάρχει ήδη.",
	
	"exported" => "Εξαγωγή",
	"struct" => "Δομή",
	"struct_for" => "δομή για",
	"on_tbl" => "στον πίνακα",
	"data_dump" => "Data dump for",
	"backup_hint" => "Βοήθεια: Για να κάνετε αντίγραφο της ΒΔ, ο ευκολότερος τρόπος είναι να %s.",
	"backup_hint_linktext" => "μεταφόρτωση του αρχείου της ΒΔ",
	"total_rows" => "σύνολο %s γραμμές",
	"total" => "Σύνολο",
	"not_dir" => "Ο φάκελος που ορίσατε για αναζήτηση ΒΔ δεν υπάρχει ή δεν είναι φάκελος.",
	"bad_php_directive" => "Φαίνεται ότι το PHP directive, 'register_globals' είναι ενεργό. Αυτό είναι πρόβλημα. Παρακαλώ απενεργοποιήστε για να συνεχίσετε.",
	"page_gen" => "Η σελίδα δημιουργήθηκε σε %s δεύτερα.",
	"powered" => "Powered by",
	"remember" => "Να με θυμάσαι",
	"no_db" => "Καλώς ήρθατε στο %s. Φαίνεται ότι έχετε επιλέξει έναν φάκελο για αναζήτηση ΒΔ που θα διαχειριστείτε. Πάντως,το %s δεν μπορεί να βρει καμία έγκυρη SQLite ΒΔ. Μπορείτε να χρησιμοποιήσετε την παρακάτω φόρμα για να δημιουργήσετε την πρώτη σας ΒΔ.",
	"no_db2" => "Ο φάκελος που επιλέξατε δεν περιέχει καμία ΒΔ για διαχείριση, και ο φάκελος δεν είναι εγγράψιμος. Αυτό σημαίνει ότι δεν μπορείτε να δημιουργήσετε καμία ΒΔ χρησιμοποιώντας το %s. Είτε κάντε το φάκελο εγγράψιμο ή χειροκίνητα ανεβάστε μία ΒΔ στο φάκελο.",
	
	"create" => "Δημιουργία",
	"created" => "δημιουργήθηκε",
	"create_tbl" => "Δημιουργία νέου πίνακα",
	"create_tbl_db" => "Δημιουργία νέου πίνακα στη ΒΔ",
	"create_trigger" => "Δημιουργία νέου trigger για τον πίνακα",
	"create_index" => "Δημιουργία νέου Ευρετηρίου για τον πίνακα",
	"create_index1" => "Δημιουργία Ευρετηρίου",
	"create_view" => "Δημιουργία νέου view για την ΒΔ",
	
	"trigger" => "Trigger",
	"triggers" => "Triggers",
	"trigger_name" => "Trigger όνομα",
	"trigger_act" => "Trigger Ενέργεια",
	"trigger_step" => "Trigger Βήματα (τερματισμός με ;)",
	"when_exp" => "έκφραση WHEN  (δώστε την έκφραση χωρίς 'WHEN')",
	"index" => "Ευρετήριο",
	"indexes" => "Ευρετήρια",
	"index_name" => "Όνομα ευρετηρίου",
	"name" => "Όνομα",
	"unique" => "Μοναδικό",
	"seq_no" => "Seq. No.",
	"emptied" => "έχει αδειάσει",
	"dropped" => "έχει διαγραφεί",
	"renamed" => "έχει μετονομαστεί σε",
	"altered" => "έχει αλλάξει επιτυχώς",
	"inserted" => "εισήχθηκαν",
	"deleted" => "διαγράφηκαν",
	"affected" => "επηρεάστηκαν",
	"blank_index" => "Το όνομα Ευρετηρίου δεν μπορεί να είναι κενό.",
	"one_index" => "Πρέπει να ορίσετε τουλάχιστον μία στήλη για ευρετήριο.",
	"docu" => "Τεκμηρίωση",
	"license" => "Άδεια",
	"proj_site" => "Project Site",
	"bug_report" => "This may be a bug that needs to be reported at",
	"return" => "Επιστροφή",
	"browse" => "Περιήγηση",
	"fld" => "Πεδίο",
	"fld_num" => "Αριθμός Πεδίων",
	"fields" => "Πεδία",
	"type" => "Τύπος",
	"operator" => "Τελεστής",
	"val" => "Τιμή",
	"update" => "Ενημέρωση",
	"comments" => "Σχόλια",
	
	"specify_fields" => "Πρέπει να ορίσετε τον αριθμό των πεδίων του πίνακα.",
	"specify_tbl" => "Πρέπει να ορίσετε το όνομα του πίνακα.",
	"specify_col" => "Πρέπει να ορίσετε μία στήλη.",
	
	"tbl_exists" => "Το όνομα πίνακα υπάρχει ήδη.",
	"show" => "Εμφάνισε",
	"show_rows" => "Εμφάνισε %s γραμμή(ές). ",
	"showing" => "Εμφάνισε",
	"showing_rows" => "Εμφάνισε γραμμές",
	"query_time" => "(Το ερώτημα χρειάστηκε %s δεύτερα)",
	"syntax_err" => "Υπάρχει πρόβλημα με τη σύνταξη της εντολής (Η αναζήτηση δεν εκτελέστηκε)",
	"run_sql" => "Εκτέλεση κώδικα SQL στη ΒΔ '%s'",
	
	"ques_empty" => "Είστε σίγουροι ότι θέλετε να αδειάσετε τον πίνακα '%s'?",
	"ques_drop" => "Είστε σίγουροι ότι θέλετε να διαγράψετε τον πίνακα '%s'?",
	"ques_drop_view" => "Είστε σίγουροι ότι θέλετε να διαγράψετε το view '%s'?",
	"ques_del_rows" => "Είστε σίγουροι ότι θέλετε να διαγράψετε την %s γραμμή από τον πίνακα '%s'?",
	"ques_del_db" => "Είστε σίγουροι ότι θέλετε να διαγράψετε τη ΒΔ '%s'?",
	"ques_column_delete" => "Είστε σίγουροι ότι θέλετε να διαγράψετε %s στήλη(ες) από τον πίνακα '%s'?",
	"ques_del_index" => "Είστε σίγουροι ότι θέλετε να διαγράψετε το ευρετήριο '%s'?",
	"ques_del_trigger" => "Είστε σίγουροι ότι θέλετε να διαγράψετε το trigger '%s'?",
	"ques_primarykey_add" => "Είστε σίγουροι ότι θέλετε προσθέσετε ένα Πρωτεύον Κλειδί για τη στήλη(ες) %s στον πίνακα '%s'?",
	
	"export_struct" => "Εξαγωγή με τη δομή",
	"export_data" => "Εξαγωγή με τα δεδομένα",
	"add_drop" => "Προσθήκη DROP TABLE",
	"add_transact" => "Προσθήκη TRANSACTION",
	"fld_terminated" => "Τα πεδία τελειώνουν με",
	"fld_enclosed" => "Τα πεδία συμπεριλαμβάνονται στα",
	"fld_escaped" => "Τα πεδία escaped με",
	"fld_names" => "Στην πρώτη γραμμή είναι τα ονόματα των πεδίων",
	"rep_null" => "Αντικατάσταση του NULL με",
	"rem_crlf" => "Αφαίρεση CRLF χαρακτήρων μέσα στα πεδία",
	"put_fld" => "Βάλε τα ονόματα των πεδίων στην πρώτη γραμμή",
	"null_represent" => "Το NULL εμφανίζεται ως",
	"import_suc" => "Εισαγωγή επιτυχής.",
	"import_into" => "Εισαγωγή στο",
	"import_f" => "Αρχείο για εισαγωγή",
	"rename_tbl" => "Μετονομασία πίνακα '%s' σε",
	
	"rows_records" => "γραμμή(ες) που αρχίζουν από την εγγραφή # ",
	"rows_aff" => "γραμμή(ες) επηρεάστηκαν. ",
	
	"as_a" => "ως",
	"readonly_tbl" => "'%s' είναι ένα view, που σημαίνει ότι είναι μία εντολή SELECT που εμφανίζεται σαν πίνακας μόνο για ανάγνωση. Δεν μπορείτε να αλλάξετε ή να συμπληρώσετε εγγραφές.",
	"chk_all" => "Επιλογή όλων",
	"unchk_all" => "Απεπιλογή όλων",
	"with_sel" => "Με τα επιλεγμένα",
	
	"no_tbl" => "Κανείς πίνακας στη ΒΔ.",
	"no_chart" => "If you can read this, it means the chart could not be generated. The data you are trying to view may not be appropriate for a chart.",
	"no_rows" => "Δεν υπάρχουν γραμμές πίνακας για το διάστημα που επιλέξατε.",
	"no_sel" => "Δεν επιλέξατε τίποτα.",
	
	"chart_type" => "Τύπος γραφήματος",
	"chart_bar" => "Γράφημα Στήλης",
	"chart_pie" => "Γράφημα Πίτας",
	"chart_line" => "Γράφημα Γραμμής",
	"lbl" => "Ετικέτες",
	"empty_tbl" => "Αυτός ο πίνακας είναι άδειος.",
	"click" => "ΠΑτήστε εδώ",
	"insert_rows" => " για εισαγωγή γραμμών.",
	"restart_insert" => "Εισαγωγή για ",
	"ignore" => "Αγνόησε",
	"func" => "Συνάρτηση",
	"new_insert" => "Εισαγωγή νέας γραμμής",
	"save_ch" => "Αποθήκευσε αλλαγές",
	"def_val" => "Προεπιλογή",
	"prim_key" => "Πρωτεύον Κλειδί",
	"tbl_end" => "γραμμή(ες) στο τέλος του πίνακα",
	"query_used_table" => "Ερώτημα δημιουργίας αυτού του πίνακα",
	"query_used_view" => "Ερώτημα δημιουργίας αυτού του view",
	"create_index2" => "Δημιουργία ευρετηρίου στο",
	"create_trigger2" => "Δημιουργία νέου trigger",
	"new_fld" => "Προσθήκη νέας γραμμής(ων) στον πίνακα '%s'",
	"add_flds" => "Προσθήκη Πεδίων",
	"edit_col" => "Επεξεργασία στήλης '%s'",
	"vac" => "Καθάρισμα",
	"vac_desc" => "Μεγάλες ΒΔ μερικές φορές χρειάζονται ΚΑΘΑΡΙΣΜΑ για να μειωθεί το μέγεθός τους. Πατήστε το κουμπί ΚΑΘΑΡΙΣΜΑ για καθάρισμα της ΒΔ '%s'.",
	"event" => "Event",
	"each_row" => "Για κάθε γραμμή",
	"define_index" => "Ορισμός ιδιοτήτων ευρετηρίου",
	"dup_val" => "Διπλές τιμές",
	"allow" => "Επιτρέπεται",
	"not_allow" => "Δεν επιτρέπεται",
	"asc" => "Αύξουσα σειρά",
	"desc" => "Φθίνουσα σειρά",
	"warn0" => "Προειδοποίηση.",
	"warn_passwd" => "Προσοχή δεν έχετε αλλάξει το αρχικό password. Μπορείτε να κάνετε την αλλαγή στο αρχείο %s.",
	"warn_dumbass" => "Δεν αλλάξατε την τιμή dumbass ;-)",
	"counting_skipped" => "Η καταμέτρηση των εγγραφών παραλήφθηκε για κάποιους πίνακες επειδή η ΒΔ είναι σχετικά μεγάλη και μερικοί πίνακες δεν έχουν πρωτεύον κλειδί οπότε η καταμέτρηση αργεί. Προσθέστε πρωτεύον κλειδί σε αυτούς τους πίνακες ή %s εξαναγκασμένη καταμέτρηση%s.",
	"sel_state" => "Επιλογή Statement",
	"delimit" => "Διαχωριστικό",
	"back_top" => "Αρχή",
	"choose_f" => "Επιλογή αρχείου",
	"instead" => "Αντί του",
	"define_in_col" => "Ορισμός στήλης(ων) ευρετηρίου",
	
	"delete_only_managed" => "Μπορείτε να διαγράψετε μόνο ΒΔ που διαχειρίζονται από αυτό το εργαλείο!",
	"rename_only_managed" => "Μπορείτε να μετονομάσετε μόνο ΒΔ που διαχειρίζονται από αυτό το εργαλείο!",
	"db_moved_outside" => "Είτε προσπαθήσατε να μετακινήσετε τη ΒΔ σε φάκελο που δεν μπορεί να τον διαχειριστείτε πλέον, ή αν κάνατε έλεγχο φακέλου απέτυχε λόγω ελλιπών δικαιωμάτων.",
	"extension_not_allowed" => "Η επέκταση που επιλέξατε δεν είναι ανάμεσα στις επιτρεπτές. Παρακαλώ επιλέξτε μία από τις παρακάτω",
	"add_allowed_extension" => "Μπορείτε να προσθέσετε τις δικές σας επεκτάσεις στο αρχείο ρυθμίσεων στο σημείο \$allowed_extensions.",
	"directory_not_writable" => "Το αρχείο της ΒΔ έχει δικαιώματα εγγραφής αλλά για να γράψετε μέσα στη ΒΔ πρέπει και ο φάκελος που την περιέχει να έχει ανάλογα δικαιώματα. Αυτό διότι η SQLite δημιουργεί προσωρινά αρχεία στο φάκελο για να επιτύχει το κλείδωμα της ΒΔ κατά την εγγραφή.",
	"tbl_inexistent" => "Ο πίνακας %s δεν υπάρχει",

	// errors that can happen when ALTER TABLE fails. You don't necessarily have to translate these.
	"alter_failed" => "Altering of Table %s failed",
	"alter_tbl_name_not_replacable" => "could not replace the table name with the temporary one",
	"alter_no_def" => "no ALTER definition",
	"alter_parse_failed" =>"failed to parse ALTER definition",
	"alter_action_not_recognized" => "ALTER action could not be recognized",
	"alter_no_add_col" => "no column to add detected in ALTER statement",
	"alter_pattern_mismatch"=>"Pattern did not match on your original CREATE TABLE statement",
	"alter_col_not_recognized" => "could not recognize new or old column name",
	"alter_unknown_operation" => "Unknown ALTER operation!",
	
	/* Help documentation */
	"help_doc" => "Help Documentation",
	"help1" => "SQLite Library Extensions",
	"help1_x" => "%s uses PHP library extensions that allow interaction with SQLite databases. Currently, %s supports PDO, SQLite3, and SQLiteDatabase. Both PDO and SQLite3 deal with version 3 of SQLite, while SQLiteDatabase deals with version 2. So, if your PHP installation includes more than one SQLite library extension, PDO and SQLite3 will take precedence to make use of the better technology. However, if you have existing databases that are of version 2 of SQLite, %s will be forced to use SQLiteDatabase for only those databases. Not all databases need to be of the same version. During the database creation, however, the most advanced extension will be used.",
	"help2" => "Creating a New Database",
	"help2_x" => "When you create a new database, the name you entered will be appended with the appropriate file extension (.db, .db3, .sqlite, etc.) if you do not include it yourself. The database will be created in the directory you specified as the \$directory variable.",
	"help3" => "Tables vs. Views",
	"help3_x" => "On the main database page, there is a list of tables and views. Since views are read-only, certain operations will be disabled. These disabled operations will be apparent by their omission in the location where they should appear on the row for a view. If you want to change the data for a view, you need to drop that view and create a new view with the appropriate SELECT statement that queries other existing tables. For more information, see <a href='http://en.wikipedia.org/wiki/View_(database)' target='_blank'>http://en.wikipedia.org/wiki/View_(database)</a>",
	"help4" => "Writing a Select Statement for a New View",
	"help4_x" => "When you create a new view, you must write an SQL SELECT statement that it will use as its data. A view is simply a read-only table that can be accessed and queried like a regular table, except it cannot be modified through insertion, column editing, or row editing. It is only used for conveniently fetching data.",
	"help5" => "Export Structure to SQL File",
	"help5_x" => "During the process for exporting to an SQL file, you may choose to include the queries that create the table and columns.",
	"help6" => "Export Data to SQL File",
	"help6_x" => "During the process for exporting to an SQL file, you may choose to include the queries that populate the table(s) with the current records of the table(s).",
	"help7" => "Add Drop Table to Exported SQL File",
	"help7_x" => "During the process for exporting to an SQL file, you may choose to include queries to DROP the existing tables before adding them so that problems do not occur when trying to create tables that already exist.",
	"help8" => "Add Transaction to Exported SQL File",
	"help8_x" => "During the process for exporting to an SQL file, you may choose to wrap the queries around a TRANSACTION so that if an error occurs at any time during the importation process using the exported file, the database can be reverted to its previous state, preventing partially updated data from populating the database.",
	"help9" => "Add Comments to Exported SQL File",
	"help9_x" => "During the process for exporting to an SQL file, you may choose to include comments that explain each step of the process so that a human can better understand what is happening."

);
