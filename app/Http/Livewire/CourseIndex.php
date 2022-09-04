<?php

namespace App\Http\Livewire;

use App\Models\{
    Category,
    Course,
    Level,
};
use Livewire\{
    Component,
    WithPagination,
};

class CourseIndex extends Component
{
    use WithPagination;

    public $category, $level;
    public $categories = [];
    public $levels = [];

    // Hooks
    public function mount()
    {
        $this->categories = Category::all();
        $this->levels = Level::all();
    }

    public function render()
    {
        $category = $this->category;
        $level = $this->level;
        $courses = Course::whereStatus(3)
            ->when($category, function ($query) use ($category) {
                $query->where('category_id', $category);
            })
            ->when($level, function ($query) use ($level) {
                $query->where('level_id', $level);
            })
            ->latest()
            ->paginate(8);
        return view('livewire.course-index', compact('courses'));
    }

    // Methods
    public function resetFilters()
    {
        $this->reset(['category', 'level']);
    }
}
