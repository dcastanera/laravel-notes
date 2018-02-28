# Notes
This Laravel package is a simple morphable object for attaching notes to any object class in your system.

## Installation
To install this package you must use composer. Enter the following:


    composer require dcastanera/notes


### Service Provider
Next we want to register the service provider in the /config/app.php file. Go to
the array for providers and enter the following:


    DCastanera\Roles\RolesServiceProvider::class,


### Migrations
Next we need to copy the migrations to add the notes table to the database:


    php artisan vendor:publish


Next we need to run the migration.


    php artisan migrate


## Usage
In order to use the notes model you need to reference the package like so:


    use DCastanera\Notes\Note;


### Add to Model
In order for you to access notes we need to add the notes method to the desired
object you wish to attach notes to.  You can do that by adding the following
function to your object.


    public function notes()
    {
        return $this->morphMany('DCastanera\Notes\Note', 'noteable');
    }



### Creating a note
In order to create a note you need to first create the note and attach it to the
object in order to save the relationship.


    $note = new Note;
    $note->note = 'This is the actual note content.';
    $note->user_id = $user->id;

    $object = new SomeObject;
    $object->notes()->save($note);


### Deleting a note
To delete a note, you can simply call the note object by ID and delete:


    $note = Note::find(1);
    $note->delete();
