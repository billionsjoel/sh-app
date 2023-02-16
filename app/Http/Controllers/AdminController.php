<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BookCover;
use App\Models\Comments;
use App\Models\Messages;
use App\Models\subscriptions;
use App\Models\Testimonials;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function publishBlog(Request $request)
    {
        $blog = new Blog;
        $blog->title = request()->title;
        $blog->body = request()->body;
        $blog->author = request()->author;
        $blog->category = request()->category;

        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
            $blog->image = $name;

            $blog->save();
        }

        session()->flash('message', 'Article published successfully! ✅');

        return redirect('/create-article');
    }

    public function editBlog(Request $request, $id)
    {
        $blog = Blog::find($id);

        Blog::where('id', $id)
            ->update([
                'title' => request()->title,
                'body' => request()->body,
                'author' => request()->author,
                'category' => request()->category,
            ]);


        session()->flash('message', 'Blog Updated Successfully! ✅');

        return redirect('/create-article');
    }
    public function editBookCover(Request $request, $id)
    {
        $bookCover = BookCover::find($id);

        $request->validate([
            'title' => ['required', 'max:200'],
            'description' => ['required'],
            'genre' => ['required'],
            'design' => ['required'],
            'publisher' => ['required'],
            'author' => ['required'],
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $bookCover->title = $request->title;
        $bookCover->description = $request->description;
        $bookCover->genre = $request->genre;
        $bookCover->design = $request->design;
        $bookCover->publisher = $request->publisher;
        $bookCover->author = $request->author;

        if ($request->hasFile('image')) {
            $image = $request->file('image');

            $name = time() . '.' . $image->getClientOriginalExtension();

            $destinationPath = public_path('/images/bookcovers');

            $image->move($destinationPath, $name);

            // Remove the old image file from the server
            if ($bookCover->image && file_exists($destinationPath . '/' . $bookCover->image)) {
                unlink($destinationPath . '/' . $bookCover->image);
            }

            $bookCover->image = $name;
        }

        $bookCover->save();

        session()->flash('message', 'Book Cover Updated Successfully! ✅');

        return redirect('/create-book-cover');
    }


    public function publishBookCover(Request $request)
    {

        $request->validate([
            'title' => ['required', 'max:200'],
            'description' => ['required'],
            'genre' => ['required'],
            'design' => ['required'],
            'publisher' => ['required'],
            'author' => ['required'],
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);

        $bookCover = new BookCover;

        $bookCover->title = request()->title;
        $bookCover->description = request()->description;
        $bookCover->genre = request()->genre;
        $bookCover->design = request()->design;
        $bookCover->publisher = request()->publisher;
        $bookCover->author = request()->author;

        if ($request->hasFile('image')) {
            $image = $request->file('image');

            $name = time() . '.' . $image->getClientOriginalExtension();

            $destinationPath = public_path('/images/bookcovers');

            $image->move($destinationPath, $name);

            $bookCover->image = $name;

            $bookCover->save();
        }

        session()->flash('message', 'Book Cover added successfully! ✅ ');

        // $covers = BookCover::paginate(5);

        return redirect('/create-book-cover');
    }

    public function deleteCover($id)
    {
        $bookCover = BookCover::find($id);

        // Check if the book cover exists
        if (!$bookCover) {
            session()->flash('message', 'Book Cover Not Found ❌');
            return redirect('/create-book-cover');
        }

        $imagePath = public_path('/images/bookcovers/' . $bookCover->image);

        // Remove the image file from the server
        if ($bookCover->image && file_exists($imagePath)) {
            unlink($imagePath);
        }

        // Delete the book cover from the database
        $bookCover->delete();

        session()->flash('message', 'Book Cover Deleted Successfully! ✅');

        return redirect('/create-book-cover');
    }

    public function deleteBlog($id)
    {
        Blog::destroy($id);

        session()->flash('message', 'Blog deleted successfully! ✅ ');

        return redirect('/create-article');
    }

    public function viewSubscriptions()
    {
        $subscriptions = new subscriptions();

        $subscriptions = subscriptions::all();

        return view('admin.viewSubscriptions', compact('subscriptions'));
    }

    public function createTestimonial(Request $request)
    {
        $testimonials = new Testimonials();

        $testimonials->text = request()->description;

        $testimonials->author = request()->author;

        $this->validate($request, [

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');

            $name = time() . '.' . $image->getClientOriginalExtension();

            $destinationPath = public_path('/images');

            $image->move($destinationPath, $name);

            $testimonials->image = $name;

            $testimonials->save();
        }

        session()->flash('message', 'Testimonial added successfully! ✅ ');

        return redirect('/create-testimonial');
    }

    public function deleteTestimony($id)
    {
        Testimonials::destroy($id);

        session()->flash('message', 'Testimonial deleted successfully! ✅ ');

        return redirect('/create-testimonial');
    }

    public function deleteMessage($id)
    {
        Messages::destroy($id);

        session()->flash('message', 'Message deleted successfully! ✅ ');

        return redirect('/view-messages');
    }

    public function deleteComment($id)
    {
        Comments::destroy($id);

        session()->flash('comment', 'comment deleted successfully! ✅ ');

        return redirect('/view-comments');
    }
}
