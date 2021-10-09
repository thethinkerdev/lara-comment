# Intro

- this package helps you to add `comment system` for your product,article,...


# Usage

- in your model add this method

```php
  public function comments()
  {
    return $this->morphMany(Comment::class, "commentable");
  }
```

- for showing those comments are parents do this and also are enable.

```php
  public function comments()
  {
    return $this->morphMany(Comment::class, "commentable")->where(["answer_id" => 0, 'status' => 1]);
  }
```

- for showing childeren of comment do this

```blade
            @foreach ($comment->answers as $answer)
            {{-- ... --}}
            @endforeach
```


