<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/
Route::get('/home', function () {
    return view('web.home');
})->name('home');

// Route::get('/cours', function () {
//     return view('web.cours');
// })->name('cours');
// Route::get('/levels', function () {
//     return view('web.levels');
// })->name('levels');
// Route::get('/English', function () {
//     return view('web.English_student');
// })->name('English');
Route::get('/Exercice/content/{id}', 'exerciceController@allexercice')->name('content');
Route::post('/Exercice/reponse', 'exerciceController@verify')->name('verify');

Route::get('/English', 'englishController@allCategory')->name('English');

// Route::get('/cours/{id}/{title}', 'CoursController@index')->name('cours');
// Route::get('/levels', 'NiveauController@allniveau')->name('levels');

Route::get('/levels/{id}', 'NiveauController@allniveau')->name('levels');

Route::get('/section', function () {
    return view('web.section');
})->name('section');
Route::get('/home', function () {
    return view('web.home');
})->name('home');


Route::get('/contact', function () {
    return view('website.contact.contact');
})->name('contact');
Route::resource('/comments','CommentsController');
Route::resource('/replies','RepliesController');
Route::post('/replies/ajaxDelete','RepliesController@ajaxDelete');



Route::get('/', function () {
    return view('welcome');
})->name('welcome');
///cour
 Route::get('/cours/{idC}/{idN}', 'CourController@index')->name('cours');
 // Route::get('/C:/wamp64/www/E-Learning-Laravel--master/public/files/uploads/{file}', 'files.uploads')->name('pdf');


Route::get('/pdf', function () {
    return view('welcome');
})->name('welcome');

// Route::get('/download/{file}',[DocumentController::class,'download']);


     Route::get('/assets/{file}', 'DocumentController@downloadpdf')->name('pdff');
    Route::get('/section/{id}', 'SequenceController@allSectionC')->name('all-sectionC');
    Route::get('/section/cours/{id}', 'SequenceController@allbase')->name('all-base');







Auth::routes();

Route::name('website.')->namespace('Website')->group(function () {
    Route::get('/', 'HomePageController@index')->name('home');
    Route::get('/course/{id}/{title}', 'CoursesController@index')->name('course');
    Route::get('/about', 'AboutPageController@index')->name('about');
    // Route::get('/contact', 'ContactsController@index')->name('contact');
    Route::post('/contact/send-message', 'ContactsController@sendContactMessage')->name('send-contact-message');

    Route::get('/category/courses/{id}/{title}', 'CategoriesController@index')->name('courses-by-category');

    Route::post('/news-letter/subscribe', 'NewsLettersController@newsLetterSubscribe')->name('news-letter-subscribe');

    Route::middleware('auth')->group(function () {
        Route::get('/lesson/{id}/{title}', 'LessonsController@index')->name('lesson');
        Route::post('/lesson/comment', 'CommentsController@addComment')->name('comment');
        Route::post('/lesson/comment/reply', 'CommentsController@addCommentReply')->name('comment-reply');
        Route::get('/lesson/like/{id}/add', 'LessonsController@addLike')->name('add-like');
        Route::get('/course/{id}/{rating}/rating', 'CoursesController@addRating')->name('rating');
    });
});


// ------------------------------------------------------------------------------------------


Route::name('user.')->namespace('User')->middleware('auth')->group(function () {
    Route::get('/profile', 'ProfileController@profile')->name('profile')->middleware('student');
    Route::post('/profile/update', 'ProfileController@updateProfile')->name('profile-update');
    Route::get('/password/change', 'ProfileController@changePasswordForm')->name('change-password')->middleware('student');
    Route::post('/password/change', 'ProfileController@changePassword')->name('change-password');
});

// Users Route For Admin Panel
Route::name('admin.')->prefix('admin')->namespace('User')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/users', 'UsersController@userList')->name('users');
    Route::get('/user/{id}/details', 'UsersController@userDetails')->name('user-details');
    Route::delete('/user/delete', 'UsersController@deleteUser')->name('user-delete');
    Route::get('/user/{id}/approve', 'UsersController@userApprove')->name('user-approve');
    Route::get('users/print', 'UsersController@usersPrintToPDF')->name('users-print');
    // New contact message warning
    Route::get('/users/pending', 'UsersController@pendingUsers')->name('pending-users');
});

// Admin Routes
Route::name('admin.')->prefix('admin')->namespace('Admin')->middleware(['auth', 'admin'])->group(function () {
    // Dashboard Route
    Route::get('/', 'DashboardController@index')->name('dashboard');
    // Category Routes
    Route::get('/category/add', 'CategoriesController@addCategoryForm')->name('add-category');
    Route::post('/category/save', 'CategoriesController@saveCategoryInfo')->name('save-category');
    Route::get('/category/all', 'CategoriesController@allCategory')->name('all-category');
    Route::get('/category/{id}/edit', 'CategoriesController@editCategory')->name('edit-category');
    Route::put('/category/update', 'CategoriesController@updateCategory')->name('update-category');
    Route::delete('/category/delete', 'CategoriesController@deleteCategory')->name('delete-category');
      // levels route

 Route::get('/level/add', 'LevelController@addlevelForm')->name('add-level');
    Route::post('/level/save', 'LevelController@savelevelInfo')->name('save-level');
    Route::get('/level/all', 'LevelController@alllevel')->name('all-level');
    Route::get('/level/{id}/edit', 'LevelController@editlevel')->name('edit-level');
    Route::put('/level/update', 'LevelController@updatelevel')->name('update-level');
    Route::delete('/level/delete', 'LevelController@deletelevel')->name('delete-level');

 
 //cour route
Route::get('/exercice', 'questionController@addExerciceForm')->name('exercice');
Route::post('/exercice/add', 'questionController@saveExerciceInfo')->name('exercice-add');





 Route::get('/cour/add', 'CourController@addCourForm')->name('add-cour');
    Route::post('/cour/save', 'CourController@saveCourInfo')->name('save-cour');
    Route::get('/cour/all', 'CourController@allCour')->name('all-cour');
    Route::get('/cour/{id}/edit', 'CourController@editCour')->name('edit-cour');
    Route::put('/cour/update', 'CourController@updateCour')->name('update-cour');
    Route::delete('/cour/delete', 'CourController@deleteCour')->name('delete-cour');

    // Course Routes
    // Route::get('/course/add', 'CoursesController@addCourseForm')->name('add-course');
    // Route::post('/course/save', 'CoursesController@saveCourseInfo')->name('save-course');
    // Route::get('/course/all', 'CoursesController@allCourse')->name('all-course');
    // Route::get('/course/{id}/edit', 'CoursesController@editCourse')->name('edit-course');
    // Route::put('/course/update', 'CoursesController@updateCourse')->name('update-course');
    // Route::delete('/course/delete', 'CoursesController@deleteCourse')->name('delete-course');
    // Route::get('/course/{id}/approve', 'CoursesController@courseApprove')->name('approve-course');
    Route::get('/course/pending', 'CoursesController@pendingCourse')->name('pending-course');
    // Section Routes
    Route::get('/section/add', 'SequenceController@addSectionForm')->name('add-section');
    Route::post('/section/save', 'SequenceController@saveSectionInfo')->name('save-section');

    Route::get('/section/all', 'SequenceController@allSection')->name('all-section');
        Route::get('/section/affectation', 'SequenceController@allSections')->name('all-sections');

    Route::get('/section/{id}/edit', 'SequenceController@editSection')->name('edit-section');
    Route::put('/section/update', 'SequenceController@updateSection')->name('update-section');
    Route::post('/section/addaffectation', 'SequenceController@affectation')->name('affectation');

    Route::delete('/section/delete', 'SequenceController@deleteSection')->name('delete-section');
    Route::post('/sections-by-course-id', 'SequenceController@sectionsByCourseId')->name('sections-by-course-id');
    // Lesson Routes
    Route::get('/lesson/add', 'DocumentController@addDocumentForm')->name('add-lesson');
    Route::post('/lesson/save', 'DocumentController@saveDocumentInfo')->name('save-lesson');
    Route::get('/lesson/all', 'DocumentController@allDocument')->name('all-lesson');
    Route::get('/lesson/{id}/edit', 'DocumentController@editDocument')->name('edit-lesson');
    Route::put('/lesson/update', 'DocumentController@updateDocument')->name('update-lesson');
    Route::delete('/lesson/delete', 'DocumentController@deleteDocument')->name('delete-lesson');

    // Contact Routes
    Route::get('contacts', 'ContactsController@index')->name('contacts');
    Route::get('contact/{id}/reply', 'ContactsController@contactMessageReplyForm')->name('contact-reply-form');
    Route::post('contact/reply', 'ContactsController@contactMessageReply')->name('contact-reply');
    Route::delete('contact/delete', 'ContactsController@contactMessageDelete')->name('contact-delete');
    // New contact message warning
    Route::get('/contact/pending', 'ContactsController@pendingContactMessages')->name('pending-contact');
});


// --------------------------------------------------------------------------------------

// Instructor Routes
Route::name('instructor.')->prefix('instructor')->namespace('Instructor')->middleware(['auth', 'instructor'])->group(function () {
    // Dashboard Route
    Route::get('/', 'DashboardController@index')->name('dashboard');
    // Course Routes
    Route::get('/course/add', 'CoursesController@addCourseForm')->name('add-course');
    Route::post('/course/save', 'CoursesController@saveCourseInfo')->name('save-course');
    Route::get('/course/all', 'CoursesController@allCourse')->name('all-course');
    Route::get('/course/{id}/edit', 'CoursesController@editCourse')->name('edit-course');
    Route::put('/course/update', 'CoursesController@updateCourse')->name('update-course');
    Route::delete('/course/delete', 'CoursesController@deleteCourse')->name('delete-course');
    Route::get('/course/{id}/approve', 'CoursesController@courseApprove')->name('approve-course');
    // Section Routes
    Route::get('/section/add', 'SequenceController@addSectionForm')->name('add-section');
    Route::post('/section/save', 'SequenceController@saveSectionInfo')->name('save-section');
    Route::get('/section/all', 'SequenceController@allSection')->name('all-section');
    Route::get('/section/{id}/edit', 'SequenceController@editSection')->name('edit-section');
    Route::put('/section/update', 'SequenceController@updateSection')->name('update-section');
    Route::delete('/section/delete', 'SequenceController@deleteSection')->name('delete-section');
    Route::post('/sections-by-course-id', 'SequenceController@sectionsByCourseId')->name('sections-by-course-id');
    // Lesson Routes
    Route::get('/lesson/add', 'DocumentController@addDocumentForm')->name('add-lesson');
    Route::post('/lesson/save', 'DocumentController@saveDocumentInfo')->name('save-lesson');
    Route::get('/lesson/all', 'DocumentController@allDocument')->name('all-lesson');
    Route::get('/lesson/{id}/edit', 'DocumentController@editDocument')->name('edit-lesson');
    Route::put('/lesson/update', 'DocumentController@updateDocument')->name('update-lesson');
    Route::delete('/lesson/delete', 'DocumentController@deleteDocument')->name('delete-lesson');
});

Route::name('instructor.')->prefix('instructor')->namespace('User')->middleware(['auth', 'instructor'])->group(function () {
    Route::get('/{id}/profile', 'ProfileController@instructorProfile')->name('profile');
    Route::get('/password/change', 'ProfileController@instructorChangePasswordForm')->name('change-password');
    Route::post('/password/change', 'ProfileController@changePassword')->name('change-password');
});
