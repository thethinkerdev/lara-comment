# Intro

>this package helps you to add `comment system` for your product,article,...

# Installation

```bash
composer require samankhdev/lara-comment
```

# Usage

- you should run publish command

```bash
php artisan vendor:publish
php artisan migrate
```

- in your model add this method

```php
  public function comments()
  {
    return $this->morphMany(Comment::class, "commentable");
  }
```

- for showing those comments are parents , do this and also are enable.

```php
  public function comments()
  {
    return $this->morphMany(Comment::class, "commentable")->where(["answer_id" => 0, 'status' => 1]);
  }
```

- for showing children of comment do this if status is true

```blade
            @foreach ($comment->answers as $answer)
            {{-- ... --}}
            @endforeach
```

- Showing all Answers

```blade
        @foreach ($comment->allAnswers as $answer)
            {{-- ... --}}
        @endforeach
```


- Show the parent of Comment

```php
$comment->parent;
```

- Show past time since comment was made.
```php
<span>{{ $comment->ago }}</spaan>
```
