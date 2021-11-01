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
 * The language file.
 *
 * @package block_behaviour
 * @author Ted Krahn
 * @copyright 2019 Athabasca University
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['title'] = 'Behaviour Analytics';
$string['pluginname'] = 'Behaviour Analytics';
$string['behaviour'] = 'Behaviour Analytics';
$string['behaviour:view'] = 'View Behaviour Analytics';
$string['behaviour:addinstance'] = 'Add a new Behaviour Analytics block';
$string['behaviour:myaddinstance'] = 'Add a new Behaviour Analytics block to My Moodle page';
$string['behaviour:export'] = 'Export';
$string['launchplugin'] = 'View student behaviour';
$string['launchconfiguration'] = 'Configure resource nodes';
$string['launchreplay'] = 'Replay clustering';
$string['eventbehaviourviewed'] = 'Behaviour Analytics viewed';
$string['viewed'] = 'The user with id \'{$a->uid}\' viewed Behaviour Analytics for the course with id \'{$a->cid}\'.';
$string['eventbehaviourimported'] = 'Behaviour Analytics log file imported';
$string['imported'] = 'The user with id \'{$a->uid}\' imported a log file for the course with id \'{$a->cid}\'.';
$string['eventbehaviourexported'] = 'Behaviour Analytics log file exported';
$string['exported'] = 'The user with id \'{$a->uid}\' exported a log file for the course with id \'{$a->cid}\'.';
$string['exportlogs'] = 'Export student logs';
$string['exportdata'] = 'Export all data (anonymized)';
$string['exportdatafn'] = '{$a}_complete';
$string['importlogs'] = 'Import student logs';
$string['exportcliout'] = 'Exporting logs to {$a}';
$string['exportall'] = '_all';
$string['exportcurrent'] = '_current';
$string['exportpast'] = '_past';
$string['exportlogprefix'] = 'logs_';
$string['exportcurlabel'] = 'Current';
$string['exportpastlabel'] = 'Past';
$string['exportbutlabel'] = 'Export';
$string['importbutlabel'] = 'Import';
$string['invalidcourse'] = 'Course id number {$a} is not valid. Course does not exist.';
$string['nullexport'] = 'Nothing to export.';
$string['alreadyexists'] = 'File {$a} already exists, please choose another file name.';
$string['exportcliusage'] = 'Usage: ./export-cli.php courseid past(0|1) current(0|1) [filename]';
$string['badfile'] = 'Unknown file fields, got the right file?';
$string['goodfile'] = 'File import successful.';
$string['wrongfile'] = 'Course name not in file name, got the right file?';
$string['nofile'] = 'No file selected, please choose a file.';
$string['nonodes'] = 'Import failed: need to configure resource nodes first.';
$string['cluster'] = 'Cluster';
$string['graph'] = 'Graph';
$string['numclusters'] = 'Num clusters';
$string['randcentroids'] = 'Random centroids';
$string['convergence'] = 'Convergence';
$string['runkmeans'] = 'Run k-means';
$string['showcentroids'] = 'Show centroids';
$string['removegraph'] = 'Remove graph';
$string['iteration'] = 'Iteration';
$string['section'] = 'Section';
$string['hide'] = 'Hide';
$string['copy'] = 'Copy';
$string['print'] = 'Print';
$string['reset'] = 'Reset';
$string['dragon'] = 'Drag students ON';
$string['dragoff'] = 'Drag students OFF';
$string['numstudents'] = 'Number of students';
$string['numofclusters'] = 'Number of clusters';
$string['disttocluster'] = 'Distance to cluster';
$string['members'] = 'members';
$string['manualcluster'] = 'Manual clustering';
$string['clusterreplay'] = 'Cluster replay';
$string['totalmeasures'] = 'Total measures';
$string['precision'] = 'Precision';
$string['recall'] = 'Recall';
$string['f1'] = 'F1';
$string['fhalf'] = 'F0.5';
$string['f2'] = 'F2';
$string['nogroup'] = 'No group';
$string['update'] = 'Update Behaviour Analytics';
$string['adminheader'] = 'Grant or revoke researcher role to user by course';
$string['researchrole'] = 'Grant researcher role to {$a->username} for {$a->coursename}';
$string['adminheaderstudyid'] = 'Show or hide the student study ID';
$string['studyid'] = 'Your study ID: {$a}';
$string['studyidlabel'] = 'Allow students to see their study ID?';
$string['studyiddesc'] = 'This will show the student study ID in all courses.';
$string['adminheadershownames'] = 'Show names or sequential numbers for students';
$string['shownameslabel'] = 'Show student names?';
$string['shownamesdesc'] = 'This will show first and last name or sequential ids for students.';
$string['allowshownameslabel'] = 'Allow teachers to choose to show student names?';
$string['allowshownamesdesc'] = 'This will allow teachers the choice to show first and last name or sequential ids for students.';
$string['adminheaderuselord'] = 'Integrate with the LORD plugin';
$string['adminuselordlabel'] = 'Allow use of the graph from LORD?';
$string['adminuselorddesc'] = 'This will give teachers the option to take the learning object graph from the Learning Object Relation Discovery (LORD) block plugin.';
$string['custom'] = 'Custom';
$string['system'] = 'System';
$string['noname'] = 'No name';
$string['userid'] = 'User ID';
$string['graphid'] = 'Graph ID';
$string['analysisname'] = 'Analysis name';
$string['lordgraph'] = 'LORD graph';
$string['manual'] = 'Manual';
$string['total'] = 'Total';
$string['graphsummary'] = 'Summary by graph';
$string['itersummary'] = 'Summary by iteration';
$string['downloaddata'] = 'Download shown data';
$string['selectgraph'] = 'Select graph';
$string['select'] = 'Select';
$string['diff'] = 'Diff';
$string['nosurvey'] = 'No survey with that ID.';
$string['surveylink'] = 'Surveys';
$string['newsurvey'] = 'Create new survey';
$string['editsurvey'] = 'Edit survey';
$string['viewsurvey'] = 'View responses';
$string['surveytitle'] = 'Title for new survey';
$string['surveyresponses'] = 'Survey responses';
$string['student'] = 'Student';
$string['attempt'] = 'Attempt';
$string['question'] = 'Question';
$string['response'] = 'Response';
$string['questionstitle'] = 'Questions for this survey';
$string['addquestion'] = 'Add a question';
$string['surveytitleerr'] = 'Please enter a title for the survey';
$string['addqerr'] = 'Please enter text for the question';
$string['addopterr'] = 'Please enter text for each option';
$string['qtype'] = 'Select question type';
$string['qtext'] = 'Question text';
$string['surveyadmin'] = 'Enable or disable each survey by course';
$string['surveyadmindesc'] = 'Enter the number of times you will allow the student to take the survey. A value of 0 (default) does not show the survey to students, while a negative number means no limit.';
$string['showsurvey'] = 'Allow students in {$a->coursename} to take {$a->survey}';
$string['likertscale'] = 'Strongly agree,Agree,Neither agree nor disagree,Disagree,Strongly disagree';
$string['delete'] = 'Delete';
$string['titleofsurvey'] = 'Title of survey';
$string['qsinsurvey'] = 'Questions in survey';
$string['edit'] = 'Edit';
$string['url'] = 'URL';
$string['donesurvey'] = 'You have already completed this survey. Thank you.';
$string['predictionbox'] = 'Use analysis for prediction?';
$string['underconst'] = 'Welcome to the Behaviour Analytics dashboard. This feature is still under construction, but you can try it out. Please send us your feedback and comments via email to {vip.researchgroup@gmail.com}';
$string['uselordlabel'] = 'Use the graph from LORD?';
$string['uselorddesc'] = 'This will take the learning object graph from the Learning Object Relation Discovery (LORD) block plugin.';
$string['uselordcustomlabel'] = 'Use the manipulated LORD graph?';
$string['uselordcustomdesc'] = 'This will use the graph from LORD that has been manipulated. Otherwise the system generated graph will be used.';
$string['settings'] = 'LORD integration options';
$string['save'] = 'Save';
$string['close'] = 'Close';
$string['linksweight'] = 'Links weight';
$string['geometrics'] = 'Geometric centroids';
$string['decomposed'] = 'Decomposed centroids';
$string['delbutton'] = 'Delete selected data';
$string['delconfirm'] = 'Are you sure you want to delete the selected clustering data? This action can not be undone.';
$string['deldata'] = 'Delete data';
$string['deleteall'] = 'Delete clustering, graph configuration, and/or student log data';
$string['delcluster'] = 'Delete clustering data';
$string['delclusterdesc'] = 'Deletes all clustering, manual clustering, cluster membership, and centroid comment data for all users in this course.';
$string['delgraph'] = 'Delete graphing data';
$string['delgraphdesc'] = 'Deletes all graph configuration data for all users in this course.';
$string['deluser'] = 'Delete student data';
$string['deluserdesc'] = 'Deletes all student log data for this course. These logs are a duplicate of the Moodle logs that Behaviour Analytics extracts. No data is deleted from the Moodle logs.';
$string['clusteringname'] = 'Name this analysis';
$string['clusteringnamebutton'] = 'Save';
$string['dashanchor'] = 'Clustering dashboard';
$string['docsanchor'] = 'Documentation';
$string['docsissues'] = 'Report an issue.';
$string['docswhatis'] = 'What is Behaviour Analytics?';
$string['docsdescription'] = 'Behaviour Analytics is a Moodle block plugin that is intended for extracting sequential behaviour patterns of students from course access logs. Behaviour Analytics considers all the activities on a course page as nodes in a graph. The links between nodes are the student accesses of those activities. Each student then has a centroid point derived from their accesses to activities and the coordinates of the nodes. The student centroids can be clustered to group students and find common access patterns. The nodes of the graph can be manually positioned and/or removed from the graph, which will affect the student centroids. When students create new data for the system, the clustering results get updated and can be replayed to visually verify the grouping remains correct with the addition of the new data. Incorrect groupings can be manually altered. The plugin is intended for teacher use and will not be seen by students.';
$string['docshowset'] = 'How to change global settings.';
$string['docssettings'] = 'The plugin contains some global settings that affect what a user sees when they use the program. There is an option to allow the students to see their study IDs and to show student names in the graphing menu rather than sequential numbers. If the LORD plugin is installed, there is an option to allow integration with it. The settings also give the option to grant or revoke the role of researcher to any non-student user enrolled in a course the plugin is installed in. The researcher role allows the user to see the current graph configurations and clustering results of other users in that course. The researcher can only see another user\'s data, they can not change it. The settings can be accessed as administrator from Site administration -> Plugins overview, then searching for "Behaviour Analytics" and clicking the associated settings link.';
$string['docshowtask'] = 'How to use the scheduled task.';
$string['docstask'] = 'The block has a scheduled task that is, by default, set to run once a day. The frequency that the task runs can be changed by going to Site administration -> Server -> Scheduled tasks, then clicking the settings icon for "Update Behaviour Analytics." From here, it is also possible to run the task manually.';
$string['docshowview'] = 'How to view the student behaviour graph and run clustering.';
$string['docsview1'] = 'If the resource nodes are not configured prior to viewing the graph, the nodes are given automatic positions. The view interface consists of the graph, a menu of student groups, a menu of students, and a time slider. The group and student menus allow selection of which students to view on the graph. The time slider allows selection of which links to view. All users have their time start at access 1, so not all students will have links at the far end of the time slider. The two handles control the slice of time that is viewed. Hovering over a node will produce the name of the associated resource and a preview of the activity in an interactive window. Moving the mouse outside the preview removes it.';
$string['docsview2'] = 'There is a button labelled "Cluster" above the student menu that moves from the graph viewing stage to the clustering stage. Clicking the button will show the same graph and student links, but with each student centroid denoted by a triangle. There are two radio buttons at the bottom left that determine the centroid type, which are weighted geometric (default) and decomposed. The slider in the clustering interface controls the stages of clustering. Moving the slider to the second position removes the graph and scales the student centroids to the edge of the viewing area. The third position on the slider allows clustering to be performed. A text box takes the number of clusters to use or the default of 3 will be used. The k-means clustering can then be stepped through one iteration at a time with the step button or it can be played to convergence by using the play button. The reset button will reset the clustering stage, clearing the current clustering results. All the clustering results are logged in the right side panel, which shows which cluster each student belongs to.';
$string['docsview3'] = 'During clustering, student centroids and clustering centroids can have comments added to them. Clicking a centroid will bring up a comment box to record any notes about the cluster or its members. Hovering over a student centroid will show that student\'s graph. Hovering over a clustering centroid will show a graph of common links among members of that cluster. Unlike the student graph, the common links graph will remain visible until the mouse is clicked outside the graph. While the common links graph is visible, hovering over a node will produce a preview of that node and hovering over a link will produce previews of both nodes attached to that link.';
$string['docsview4'] = 'During clustering, it is also possible to assist the clustering algorithm by dragging and dropping student centroids. When a student centroid is dragged away from its original location and dropped elsewhere, the clustering centroid closest to where the student was dropped will have that student included in the cluster. This feature can assist the clustering algorithm when its results are not quite what is desired based on the user\'s perception of the visualization. The clustering algorithm will still need to run again and may override the manual clustering at this point.';
$string['docshowconfig'] = 'How to configure the resource nodes.';
$string['docsconfig1'] = 'The interface includes the graph of all course activities, a weight slider, and a hierarchical legend of the nodes. Researchers will also have a menu of the other user\'s graph configurations which they can view, but not alter. The weight slider controls the link weights where positive values produce nodes that pull together and the negative value will push the nodes apart. A value of zero causes all the nodes to remain stationary. The nodes can then be dragged into position. Unwanted nodes can be removed by right clicking and choosing the remove option or by unchecking the associated box in the hierarchical legend. Hovering over a node will show the type and name of the activity as well as bring up an interactive preview. Moving the mouse outside the preview makes it disappear.';
$string['docshowreplay'] = 'How to replay clustering results.';
$string['docsreplay1'] = 'If no clustering has been done, only the interface is shown. The interface consists of a menu of clustering runs sorted by user, graph configuration, and clustering run. Selecting an item from the menu will bring up the same graph shown at the onset of clustering. The play and step buttons control the replay and determine which iteration is seen. The replay can be stepped through forward or back, but can only be played forward. Clicking a centroid will allow notes to be added or viewed if any comment was made for that centroid during clustering.';
$string['docsreplay2'] = 'When a clustering run has used the full time slice of the time slider and also run to convergence, that clustering run will be updated with new student data when it is available. This updating will change student centroids, add iterations to the replay, and can alter the cluster membership. Using decomposed centroids causes the centroid to align on a node and can make the student centroid highly mobile. Geometric centroids tend to move less as there is more data.';
$string['docsreplay3'] = 'Manual clustering is possible during the replay, but behaves slightly differently than during clustering. Once the replay has reached initial convergence, student centroids can be dragged and dropped to place them in another cluster. The manual clustering produces a second set of clustering centroids that are the same colour as the originals. The original set is unchanged while the manual clusters are more transparent and represent the changes the user has made. Both sets of clusters are updated with new data as it is available.';
$string['docshowimport'] = 'How to export and import data.';
$string['docsexport'] = 'Teacher users will see an "Export" button to export a complete anonymized data set, which will export everything the plugin has, but change all student IDs to their study IDs. Additionally, administrator users will see export and import forms in the block which are used to export or import student resource access data. The export form has two check boxes, one for currently enrolled students and the other for previously enrolled students. Clicking the export button allows the data to be downloaded. Exporting can also be done through Moodle\'s reports interface by navigating to Site Administration -> Reports -> Logs. Pick the course to export for and set the actions to "View", then click the "Get these logs" button. Once the logs are retrieved, scroll down to the bottom of the page and download the logs as a JavaScript Object Notation (.json) file. Exporting from the command line is also possible by running the export-cli.php script located in the cli directory. Running the script without parameters will show a usage message.';
$string['docsimport'] = 'The import form can take a dragged and dropped file or a file can be chosen using the "Choose a file" button. Only JavaScript Object Notation (.json) file types are accepted. The file name must also contain the first word of the course short name to ensure that the user is importing the right data into the right course. Either a file exported through the export form or through Moodle\'s report interface can be imported.';
$string['docshowlord'] = 'How to integrate with the Learning Object Relation Discovery (LORD) plugin.';
$string['docslord1'] = 'First, the LORD plugin must be installed in Moodle. Then, there is an administrator option to allow the integration. With the administrator option enabled, an extra link will appear in the block to configure the integration. There are 2 settings available from within the block. The first causes Behaviour Analytics to use the latest graph made in the LORD plugin. The second switches between using the system generated graph and the user manipulated graph. If there is no LORD graph to use, the graph made with Behaviour Analytics will be used instead.';
$string['docslord2'] = 'When using the LORD generated graph, it is possible to manipulate the nodes using the "Configure resource nodes" feature. The graph will appear slightly different, as it will have grouping nodes and their associated links. If a LORD graph is manipulated within Behaviour Analytics, it will cease to be a LORD graph. This means that LORD integration must be switched off to use the newly manipulated graph. Such a graph will have all the nodes in the correct positions, but the links will appear differently, as there will no longer be links between nodes.';
$string['docshowdelete'] = 'How to delete data.';
$string['docsdelete1'] = 'Administrators can delete course data stored by the plugin. This may be useful when teaching a course with a new group of students. Or you may just want to delete old data and start clean. The delete data page has 3 options to delete clustering, graph configuration, or student log data. The clustering data is what is made when viewing and clustering students. This includes the clustering and membership data, as well as comment data. The graph configuration data is made when positioning the graph nodes. Deleting this data removes all graph configurations for the course as well as student centroid data associated with those graph configurations. The student log data is extracted from the Moodle logs and copied into another database table. It is the duplicated data that is deleted, not the Moodle log data itself. Data for all users in the course is deleted.';
$string['docshowdashboard'] = 'How to use the dashboard.';
$string['docsdash1'] = 'The dashboard is still under construction, but has some working features. The dashboard consists of a number of links at the top of the page that will show different data. These include the summary tables, by graph and by iteration. The summary by graph shows the latest iteration of clustering and its results, while the summary by iteration shows results for all iterations. To view the summary for a single graph configuration, the graph can be selected from the select graph menu. Multiple configurations may be selected at once for comparison. When viewing graph summaries it is possible to download the shown data as a CSV file, less the bar graphs.';
$string['docsdash2'] = 'There is also a surveys link that allows for survey management. There are 3 surveys installed by default and there is the option to make custom surveys. Currently only Likert scale and binary choice questions are available. The link in the surveys menu can be used in a URL type course module to give students access to the survey. The course id needs to be passed in the URL as well, which is done in the settings under URL variables, where the value is "id". Currently, a student may only take a survey once. When viewing survey responses, it is possible to download the shown data as a CSV file.';
$string['ilstitle'] = 'Index of Learning Styles Questionnaire (Felder & Soloman)';
$string['ilsq1'] = 'I understand something better after I';
$string['ilsq1a0'] = 'try it out.';
$string['ilsq1a1'] = 'think it through.';
$string['ilsq2'] = 'I would rather be considered';
$string['ilsq2a0'] = 'realistic.';
$string['ilsq2a1'] = 'innovative.';
$string['ilsq3'] = 'When I think about what I did yesterday, I am most likely to get';
$string['ilsq3a0'] = 'a picture.';
$string['ilsq3a1'] = 'words.';
$string['ilsq4'] = 'I tend to';
$string['ilsq4a0'] = 'understand details of a subject but may be fuzzy about its overall structure.';
$string['ilsq4a1'] = 'understand the overall structure but may be fuzzy about details.';
$string['ilsq5'] = 'When I am learning something new, it helps me to';
$string['ilsq5a0'] = ' talk about it.';
$string['ilsq5a1'] = 'think about it.';
$string['ilsq6'] = 'If I were a teacher, I would rather teach a course';
$string['ilsq6a0'] = 'that deals with facts and real life situations.';
$string['ilsq6a1'] = 'that deals with ideas and theories.';
$string['ilsq7'] = 'I prefer to get new information in';
$string['ilsq7a0'] = 'pictures, diagrams, graphs, or maps.';
$string['ilsq7a1'] = 'written directions or verbal information.';
$string['ilsq8'] = 'Once I understand';
$string['ilsq8a0'] = 'all the parts, I understand the whole thing.';
$string['ilsq8a1'] = 'the whole thing, I see how the parts fit.';
$string['ilsq9'] = 'In a study group working on difficult material, I am more likely to';
$string['ilsq9a0'] = 'jump in and contribute ideas.';
$string['ilsq9a1'] = 'sit back and listen.';
$string['ilsq10'] = '10. I find it easier';
$string['ilsq10a0'] = 'to learn facts.';
$string['ilsq10a1'] = 'to learn concepts.';
$string['ilsq11'] = 'In a book with lots of pictures and charts, I am likely to';
$string['ilsq11a0'] = 'look over the pictures and charts carefully.';
$string['ilsq11a1'] = 'focus on the written text.';
$string['ilsq12'] = 'When I solve math problems';
$string['ilsq12a0'] = 'I usually work my way to the solutions one step at a time.';
$string['ilsq12a1'] = 'I often just see the solutions but then have to struggle to figure out the steps to get to them.';
$string['ilsq13'] = 'In classes I have taken';
$string['ilsq13a0'] = 'I have usually gotten to know many of the students.';
$string['ilsq13a1'] = 'I have rarely gotten to know many of the students.';
$string['ilsq14'] = 'In reading nonfiction, I prefer';
$string['ilsq14a0'] = 'something that teaches me new facts or tells me how to do something.';
$string['ilsq14a1'] = 'something that gives me new ideas to think about.';
$string['ilsq15'] = 'I like teachers';
$string['ilsq15a0'] = 'who put a lot of diagrams on the board.';
$string['ilsq15a1'] = 'who spend a lot of time explaining.';
$string['ilsq16'] = 'When I\'m analyzing a story or a novel';
$string['ilsq16a0'] = 'I think of the incidents and try to put them together to figure out the themes.';
$string['ilsq16a1'] = 'I just know what the themes are when I finish reading and then I have to go back and find the incidents that demonstrate them.';
$string['ilsq17'] = 'When I start a homework problem, I am more likely to';
$string['ilsq17a0'] = 'start working on the solution immediately.';
$string['ilsq17a1'] = 'try to fully understand the problem first.';
$string['ilsq18'] = 'I prefer the idea of';
$string['ilsq18a0'] = 'certainty.';
$string['ilsq18a1'] = 'theory.';
$string['ilsq19'] = 'I remember best';
$string['ilsq19a0'] = 'what I see.';
$string['ilsq19a1'] = 'what I hear.';
$string['ilsq20'] = 'It is more important to me that an instructor';
$string['ilsq20a0'] = 'lay out the material in clear sequential steps.';
$string['ilsq20a1'] = 'give me an overall picture and relate the material to other subjects.';
$string['ilsq21'] = 'I prefer to study';
$string['ilsq21a0'] = 'in a study group.';
$string['ilsq21a1'] = 'alone.';
$string['ilsq22'] = 'I am more likely to be considered';
$string['ilsq22a0'] = 'careful about the details of my work.';
$string['ilsq22a1'] = 'creative about how to do my work.';
$string['ilsq23'] = 'When I get directions to a new place, I prefer';
$string['ilsq23a0'] = 'a map.';
$string['ilsq23a1'] = 'written instructions.';
$string['ilsq24'] = 'I learn';
$string['ilsq24a0'] = 'at a fairly regular pace. If I study hard, I\'ll "get it."';
$string['ilsq24a1'] = 'in fits and starts. I\'ll be totally confused and then suddenly it all "clicks."';
$string['ilsq25'] = 'I would rather first';
$string['ilsq25a0'] = 'try things out.';
$string['ilsq25a1'] = 'think about how I\'m going to do it.';
$string['ilsq26'] = 'When I am reading for enjoyment, I like writers to';
$string['ilsq26a0'] = 'clearly say what they mean.';
$string['ilsq26a1'] = 'say things in creative, interesting ways.';
$string['ilsq27'] = 'When I see a diagram or sketch in class, I am most likely to remember';
$string['ilsq27a0'] = 'the picture.';
$string['ilsq27a1'] = 'what the instructor said about it.';
$string['ilsq28'] = 'When considering a body of information, I am more likely to';
$string['ilsq28a0'] = 'focus on details and miss the big picture.';
$string['ilsq28a1'] = 'try to understand the big picture before getting into the details.';
$string['ilsq29'] = 'I more easily remember';
$string['ilsq29a0'] = 'something I have done.';
$string['ilsq29a1'] = 'something I have thought a lot about.';
$string['ilsq30'] = 'When I have to perform a task, I prefer to';
$string['ilsq30a0'] = 'master one way of doing it.';
$string['ilsq30a1'] = 'come up with new ways of doing it.';
$string['ilsq31'] = 'When someone is showing me data, I prefer';
$string['ilsq31a0'] = 'charts or graphs.';
$string['ilsq31a1'] = 'text summarizing the results.';
$string['ilsq32'] = 'When writing a paper, I am more likely to';
$string['ilsq32a0'] = 'work on (think about or write) the beginning of the paper and progress forward.';
$string['ilsq32a1'] = 'work on (think about or write) different parts of the paper and then order them.';
$string['ilsq33'] = 'When I have to work on a group project, I first want to';
$string['ilsq33a0'] = 'have "group brainstorming" where everyone contributes ideas.';
$string['ilsq33a1'] = 'brainstorm individually and then come together as a group to compare ideas.';
$string['ilsq34'] = 'I consider it higher praise to call someone';
$string['ilsq34a0'] = 'sensible.';
$string['ilsq34a1'] = 'imaginative.';
$string['ilsq35'] = 'When I meet people at a party, I am more likely to remember';
$string['ilsq35a0'] = 'what they looked like.';
$string['ilsq35a1'] = 'what they said about themselves.';
$string['ilsq36'] = 'When I am learning a new subject, I prefer to';
$string['ilsq36a0'] = 'stay focused on that subject, learning as much about it as I can.';
$string['ilsq36a1'] = 'try to make connections between that subject and related subjects.';
$string['ilsq37'] = 'I am more likely to be considered';
$string['ilsq37a0'] = 'outgoing.';
$string['ilsq37a1'] = 'reserved.';
$string['ilsq38'] = 'I prefer courses that emphasize';
$string['ilsq38a0'] = 'concrete material (facts, data).';
$string['ilsq38a1'] = 'abstract material (concepts, theories).';
$string['ilsq39'] = 'For entertainment, I would rather';
$string['ilsq39a0'] = 'watch television.';
$string['ilsq39a1'] = 'read a book.';
$string['ilsq40'] = 'Some teachers start their lectures with an outline of what they will cover. Such outlines are';
$string['ilsq40a0'] = 'somewhat helpful to me.';
$string['ilsq40a1'] = 'very helpful to me.';
$string['ilsq41'] = 'The idea of doing homework in groups, with one grade for the entire group,';
$string['ilsq41a0'] = 'appeals to me.';
$string['ilsq41a1'] = 'does not appeal to me.';
$string['ilsq42'] = 'When I am doing long calculations,';
$string['ilsq42a0'] = 'I tend to repeat all my steps and check my work carefully.';
$string['ilsq42a1'] = 'I find checking my work tiresome and have to force myself to do it.';
$string['ilsq43'] = 'I tend to picture places I have been';
$string['ilsq43a0'] = 'easily and fairly accurately.';
$string['ilsq43a1'] = 'with difficulty and without much detail.';
$string['ilsq44'] = 'When solving problems in a group, I would be more likely to';
$string['ilsq44a0'] = 'think of the steps in the solution process.';
$string['ilsq44a1'] = 'think of possible consequences or applications of the solution in a wide range of areas.';
$string['sustitle'] = 'System Usability Scale';
$string['susq1'] = 'I think that I would like to use this system frequently.';
$string['susq2'] = 'I found the system unnecessarily complex.';
$string['susq3'] = 'I thought the system was easy to use.';
$string['susq4'] = 'I think that I would need the support of a technical person to be able to use this system.';
$string['susq5'] = 'I found the various functions in this system were well integrated.';
$string['susq6'] = 'I thought there was too much inconsistency in this system.';
$string['susq7'] = 'I would imagine that most people would learn to use this system very quickly.';
$string['susq8'] = 'I found the system very cumbersome to use.';
$string['susq9'] = 'I felt very confident using the system.';
$string['susq10'] = 'I needed to learn a lot of things before I could get going with this system.';
$string['bfi1title'] = 'Big Five Inventory';
$string['bfi1heading'] = 'I am someone who...';
$string['bfi1q1'] = 'Is talkative';
$string['bfi1q2'] = 'Tends to find fault with others';
$string['bfi1q3'] = 'Does a thorough job';
$string['bfi1q4'] = 'Is depressed, blue';
$string['bfi1q5'] = 'Is original, comes up with new ideas';
$string['bfi1q6'] = 'Is reserved';
$string['bfi1q7'] = 's helpful and unselfish with others';
$string['bfi1q8'] = 'Can be somewhat careless';
$string['bfi1q9'] = 'Is relaxed, handles stress well';
$string['bfi1q10'] = 'Is curious about many different things';
$string['bfi1q11'] = 'Is full of energy';
$string['bfi1q12'] = 'Starts quarrels with others';
$string['bfi1q13'] = 'Is a reliable worker';
$string['bfi1q14'] = 'Can be tense';
$string['bfi1q15'] = 'Is ingenious, a deep thinker';
$string['bfi1q16'] = 'Generates a lot of enthusiasm';
$string['bfi1q17'] = 'Has a forgiving nature';
$string['bfi1q18'] = 'Tends to be disorganized';
$string['bfi1q19'] = 'Worries a lot';
$string['bfi1q20'] = 'Has an active imagination';
$string['bfi1q21'] = 'Tends to be quiet';
$string['bfi1q22'] = 'Is generally trusting';
$string['bfi1q23'] = 'Tends to be lazy';
$string['bfi1q24'] = 'Is emotionally stable, not easily upset';
$string['bfi1q25'] = 'Is inventive';
$string['bfi1q26'] = 'Has an assertive personality';
$string['bfi1q27'] = 'Can be cold and aloof';
$string['bfi1q28'] = 'Perseveres until the task is finished';
$string['bfi1q29'] = 'Can be moody';
$string['bfi1q30'] = 'Values artistic, aesthetic experiences';
$string['bfi1q31'] = 'Is sometimes shy, inhibited';
$string['bfi1q32'] = 'Is considerate and kind to almost everyone';
$string['bfi1q33'] = 'Does things efficiently';
$string['bfi1q34'] = 'Remains calm in tense situations';
$string['bfi1q35'] = 'Prefers work that is routine';
$string['bfi1q36'] = 'Is outgoing, sociable';
$string['bfi1q37'] = 'Is sometimes rude to others';
$string['bfi1q38'] = 'Makes plans and follows through with them';
$string['bfi1q39'] = 'Gets nervous easily';
$string['bfi1q40'] = 'Likes to reflect, play with ideas';
$string['bfi1q41'] = 'Has few artistic interests';
$string['bfi1q42'] = 'Likes to cooperate with others';
$string['bfi1q43'] = 'Is easily distracted';
$string['bfi1q44'] = 'Is sophisticated in art, music, or literature';
$string['privacy:metadata:block_behaviour_imported'] = 'Table to store a copy of the access logs, which includes both Moodle generated logs and those that have been imported from elsewhere using the import feature of the plugin.';
$string['privacy:metadata:block_behaviour_centroids'] = 'Table for storing accumulated centroid information.';
$string['privacy:metadata:block_behaviour_coords'] = 'Coordinates for the nodes of each course module in the graph.';
$string['privacy:metadata:block_behaviour_clusters'] = 'Table for storing clustering data.';
$string['privacy:metadata:block_behaviour_members'] = 'Table for storing clustering membership data.';
$string['privacy:metadata:block_behaviour_scales'] = 'Scaling data for the graph configurations.';
$string['privacy:metadata:block_behaviour_comments'] = 'Comment data that teachers have entered for clusters and cluster members.';
$string['privacy:metadata:block_behaviour_man_clusters'] = 'Data for clusters that have been manually altered during replay.';
$string['privacy:metadata:block_behaviour_man_members'] = 'Data for cluster members that have been manually altered during replay.';
$string['privacy:metadata:block_behaviour_centres'] = 'Decomposed student centroid values.';
$string['privacy:metadata:block_behaviour_studyids'] = 'A mapping of course and student ids to their respective study ids.';
$string['privacy:metadata:block_behaviour_lord_options'] = 'Stores the LORD plugin integration options.';
$string['privacy:metadata:block_behaviour_surveys'] = 'Stores the surveys for Behaviour Analytics.';
$string['privacy:metadata:block_behaviour_survey_qs'] = 'Stores the survey questions.';
$string['privacy:metadata:block_behaviour_survey_opts'] = 'Stores the options for the survey questions.';
$string['privacy:metadata:block_behaviour_survey_rsps'] = 'Stores the responses to the surveys.';
$string['privacy:metadata:block_behaviour_common_links'] = 'Stores the common links for a cluster.';
$string['privacy:metadata:block_behaviour:courseid'] = 'Unique identification number of the course this record belongs to.';
$string['privacy:metadata:block_behaviour:moduleid'] = 'Unique identification number of the course module this record belongs to.';
$string['privacy:metadata:block_behaviour:userid'] = 'Unique identification number of the student who left this record.';
$string['privacy:metadata:block_behaviour:time'] = 'Value representing the time this record was created, which is used solely for sorting.';
$string['privacy:metadata:block_behaviour:coordsid'] = 'Unique identifier for graph node coordinate configurations.';
$string['privacy:metadata:block_behaviour:studentid'] = 'Unique identifier for students.';
$string['privacy:metadata:block_behaviour:totalx'] = 'Accumulated x-coordinate value.';
$string['privacy:metadata:block_behaviour:totaly'] = 'Accumulated y-coordinate value.';
$string['privacy:metadata:block_behaviour:numnodes'] = 'The number of resource accesses.';
$string['privacy:metadata:block_behaviour:centroidx'] = 'The centroid x-coordinate value.';
$string['privacy:metadata:block_behaviour:centroidy'] = 'The centroid y-coordinate value.';
$string['privacy:metadata:block_behaviour:changed'] = 'The last time value that this graph node moved.';
$string['privacy:metadata:block_behaviour:moduleid'] = 'Unique identifier for course modules.';
$string['privacy:metadata:block_behaviour:xcoord'] = 'The x-coordinate value of the graph node.';
$string['privacy:metadata:block_behaviour:ycoord'] = 'The y-coordinate value of the graph node.';
$string['privacy:metadata:block_behaviour:visible'] = 'Whether or not the graph node is visible.';
$string['privacy:metadata:block_behaviour:clusterid'] = 'Unique identifier for clustering runs.';
$string['privacy:metadata:block_behaviour:iteration'] = 'The clustering iteration number.';
$string['privacy:metadata:block_behaviour:clusternum'] = 'Identifier for different clusters.';
$string['privacy:metadata:block_behaviour:usegeometric'] = 'Flag to use geometric or decomposed centroids.';
$string['privacy:metadata:block_behaviour:scale'] = 'The scaling value for denormalizing the graph nodes.';
$string['privacy:metadata:block_behaviour:commentid'] = 'Unique identifier for the comment.';
$string['privacy:metadata:block_behaviour:remark'] = 'The comment text.';
$string['privacy:metadata:block_behaviour:studyid'] = 'A unique anonymized identifier for students.';
$string['privacy:metadata:block_behaviour:uselord'] = 'Flag to use the graph from LORD plugin or not.';
$string['privacy:metadata:block_behaviour:usecustom'] = 'Flag to use the manipulated graph or not.';
$string['privacy:metadata:block_behaviour:title'] = 'The title of a survey.';
$string['privacy:metadata:block_behaviour:survey'] = 'The id of the survey these question belong to.';
$string['privacy:metadata:block_behaviour:qtype'] = 'The question type.';
$string['privacy:metadata:block_behaviour:qtext'] = 'The question text.';
$string['privacy:metadata:block_behaviour:ordering'] = 'The ordering value of the question or option.';
$string['privacy:metadata:block_behaviour:question'] = 'The question id for these options.';
$string['privacy:metadata:block_behaviour:text'] = 'The option text.';
$string['privacy:metadata:block_behaviour:attempt'] = 'The attempt number for this survey.';
$string['privacy:metadata:block_behaviour:response'] = 'The response to the question.';
$string['privacy:metadata:block_behaviour:link'] = 'The link between 2 graph nodes.';
$string['privacy:metadata:block_behaviour:weight'] = 'The weight value of the link.';
