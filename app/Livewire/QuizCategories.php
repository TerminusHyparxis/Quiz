<?php

namespace App\Livewire;

use Livewire\Component;

class QuizCategories extends Component
{
   public $categories = [
    ['id'=>1 , 'name'=>'General Knowledge'],
    ['id'=>2 , 'name'=>'Sports'],
    ['id'=>3 , 'name'=>'Geography'],
    ['id'=>4 , 'name'=>'History'],
   ]; 

   public $selectedCategory=null;
   
   public function selectCategory($categoryId){
         $this->selectedCategory=$categoryId;
         \Log::info("Selected category ID: {$categoryId}"); // Debug log
         // Later, you could redirect to the quiz page with this ID
        //  return redirect()->route('quiz.show',['categoryId'=>$categoryId]);
          $this->redirect(route('quiz.show', ['categoryId' => $categoryId]));
         // Forn now , categories are hardcoded . In a real app,fetch them from a database with a Category model
   }

    
    public function render()
    {
        return view('livewire.quiz-categories');
    }
}
