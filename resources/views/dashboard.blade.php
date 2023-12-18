@extends('layouts/admin_master')
@section('title')
    Dashboard
@endsection
@section('content')
    <br><br><br><br><br>
    <div class="container" style="margin-bottom: 50px" >
        <div class="row">
            <div class="col-lg-10 m-auto">
                <div class="row">
                    <div class="col-md-4">
                        <div class="dashboard-menu">
                            <ul class="nav flex-column" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="dashboard-tab" data-bs-toggle="tab" href="#dashboard" role="tab" aria-controls="dashboard" aria-selected="false"><i class="fi-rs-settings-sliders mr-10"></i>Dashboard</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="data-tab" data-bs-toggle="tab" href="#data" role="tab" aria-controls="data" aria-selected="true"><i class="fi-rs-database mr-10"></i>Personal Data</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="skills-tab" data-bs-toggle="tab" href="#skills" role="tab" aria-controls="skills" aria-selected="false"><i class="fi-rs-magic-wand mr-10 "></i>Skills</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="expertise-tab" data-bs-toggle="tab" href="#expertise" role="tab" aria-controls="expertise" aria-selected="false"><i class="fi-rs-angle-double-small-right mr-10 "></i>Expertise</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="education-tab" data-bs-toggle="tab" href="#education" role="tab" aria-controls="education" aria-selected="false"><i class="fi-rs-diploma mr-10 "></i>Education</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="certifications-tab" data-bs-toggle="tab" href="#certifications" role="tab" aria-controls="certifications" aria-selected="false"><i class="fi-rs-checkbox mr-10 "></i>Certifications</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="projects-tab" data-bs-toggle="tab" href="#projects" role="tab" aria-controls="projects" aria-selected="true"><i class="fi-rs-apps-add mr-10"></i>Projects</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="msg-tab" data-bs-toggle="tab" href="#msg" role="tab"aria-controls="msg" aria-selected="true"><i class="fi-rs-user mr-10"></i>Customer Messages</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="password-tab" data-bs-toggle="tab" href="#password" role="tab" aria-controls="password" aria-selected="true"><i class="fi-rs-password mr-10"></i>Change Password</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="color-tab" data-bs-toggle="tab" href="#color" role="tab" aria-controls="color" aria-selected="true"><i class="fi-rs-edit mr-10"></i>Change Main Color</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{'/logout'}}"><i class="fi-rs-sign-out mr-10"></i>Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
{{--          Personal Data section          --}}
                    <div class="col-md-8">
                        <div class="tab-content dashboard-content">
                            <div class="tab-pane fade" id="data" role="tabpanel" aria-labelledby="data-tab">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Your Data</h5>
                                    </div>
                                    <div class="card-body">
                                        <form method="post" action="{{'/sit'}}">
                                            @csrf
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label>Your Name <span class="required">*</span></label>
                                                    <input  required="" class="form-control square" name="name" type="text" placeholder="Name" value="{{$user['name']}}">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Phone <span class="required">*</span></label>
                                                    <input  required="" class="form-control square" name="phone" type="text" placeholder="Phone"value="{{$user['phone']}}">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Gmail <span class="required">*</span></label>
                                                    <input  required="" class="form-control square" name="gmail" type="text" placeholder="Gmail"value="{{$user['gmail']}}">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Facebook Link <span class="required">*</span></label>
                                                    <input  required="" class="form-control square" name="facebook" type="url" placeholder="Facebook Link" value="{{$user['facebook']}}">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>LinkedIn Link <span class="required">*</span></label>
                                                    <input  required="" class="form-control square" name="linkedin" type="url" placeholder="LinkedIn Link" value="{{$user['linkedin']}}">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>GitHub Link <span class="required">*</span></label>
                                                    <input  required="" class="form-control square" name="github" type="url" placeholder="GitHub Link" value="{{$user['github']}}">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Link <span class="required">*</span></label>
                                                    <input  required="" class="form-control square" name="link" type="url" placeholder="Link" value="{{$user['link']}}">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Resume <span class="required">*</span></label>
                                                    <input required="" class="form-control square" name="resume" type="file" placeholder="Resume" value="{{$user['resume_path']}}">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Photo <span class="required">*</span></label>
                                                    <input required="" class="form-control square" name="photo" type="file" placeholder="Photo" value="{{$user['photo_path']}}">
                                                </div>
                                                <div class="form-group col-md-12" >
                                                    <label>Bio <span class="required">*</span></label>
                                                    <input required="" class="form-control square" name="bio" placeholder="Bio"  value="{{$user['bio']}}">
                                                </div>
                                                <div class="col-md-12" >
                                                    <button  class="submit submit-auto-width" type="submit" style="margin-left: 230px">Save</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>


{{--          Dashboard intro          --}}
                            <div class="tab-pane fade active show" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="mb-0">Hello {{$user['name']}}! </h5>
                                    </div>
                                    <div class="card-body">
                                        <p>From your account dashboard you can easily check &amp; view your <span style="color: #F15412">Personal Data </span>and
                                            manage your <span style="color: #F15412">Skills</span>, <span style="color: #F15412">Expertise</span>, and <span style="color: #F15412">Certifications.</span></p>
                                        <p>From the dashboard you can easily check  <span style="color: #F15412">Customer Messages </span>&amp; <span style="color: #F15412">change your password.</span></p>
                                    </div>
                                </div>
                            </div>


{{--          Skills section          --}}
                            <div class="tab-pane fade" id="skills" role="tabpanel" aria-labelledby="skills-tab">
                                <div>
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0">Your skills</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                    <tr>
                                                        <th>Skill</th>
                                                        <th>Rate</th>
                                                        <th>Date</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($skills as $skill)
                                                            <tr>
                                                                <td>{{$skill['skill']}}</td>
                                                                <td>{{$skill['rate']}}%</td>
                                                                <td>{{$skill['created_at']}}</td>
                                                                <td><a href="delete_skill/{{$skill['id']}}" class="btn-small d-block">Delete</a></td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-md-12" >
                                                <a href="{{'/delete_skills'}}" class="submit submit-auto-width" >Delete All</a>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
{{--          Add Skills section          --}}
                                    <div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">Add A Skill</h5>
                                            </div>
                                            <div class="card-body">
                                                <form method="post" action="{{'/add_skill'}}">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="form-group col-md-6">
                                                            <label>Skill Name <span class="required">*</span></label>
                                                            <input required="" class="form-control square" name="skill" type="text" placeholder="Skill Name">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label>Skill Rate <span class="required">*</span></label>
                                                            <input required="" class="form-control square" name="rate" type="text" placeholder="Skill Rate">
                                                        </div>
                                                        <div class="col-md-12">
                                                            <button class="submit submit-auto-width" type="submit" style="margin-left: 260px">
                                                                Save
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
{{--          Expertise section          --}}
                            <div class="tab-pane fade" id="expertise" role="tabpanel" aria-labelledby="expertise-tab">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="mb-0">Expertise</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th>Period</th>
                                                    <th>Major</th>
                                                    <th>Company</th>
                                                    <th>Date</th>
                                                    <th>Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($expertise as $exp)
                                                        <tr>
                                                            <td>{{$exp['period']}}</td>
                                                            <td>{{$exp['title']}}</td>
                                                            <td>{{$exp['company']}}</td>
                                                            <td>{{$exp['created_at']}}</td>
                                                            <td><a href="delete_expertise/{{$exp['id']}}" class="btn-small d-block">Delete</a></td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-12" >
                                            <a href="{{'/clear_expertise'}}" class="submit submit-auto-width" >Delete All</a>
                                        </div>
                                    </div>
                                </div>
{{--          Add Expertise section          --}}
                                <br>
                                <div>
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0">Add A Skill</h5>
                                        </div>
                                        <div class="card-body">
                                            <form method="post" action="{{'/add_Expertise'}}">
                                                @csrf
                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <label>Period <span class="required">*</span></label>
                                                        <input required="" class="form-control square" name="period" type="text" placeholder="Period">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Major <span class="required">*</span></label>
                                                        <input required="" class="form-control square" name="major" type="text" placeholder="Major">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Company <span class="required">*</span></label>
                                                        <input required="" class="form-control square" name="company" type="text" placeholder="Company">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <button class="submit submit-auto-width" type="submit" style="margin-left: 260px">
                                                            Save
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
{{--           Education section          --}}
                            <div class="tab-pane fade" id="education" role="tabpanel" aria-labelledby="education-tab">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="mb-0">Education</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th>Period</th>
                                                    <th>Organization</th>
                                                    <th>Addition Date</th>
                                                    <th>Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($education as $ed)
                                                    <tr>
                                                        <td>{{$ed['period']}}</td>
                                                        <td>{{$ed['organization']}}</td>
                                                        <td>{{$ed['created_at']}}</td>
                                                        <td><a href="delete_education/{{$ed['id']}}" class="btn-small d-block">Delete</a></td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-12" >
                                            <a href="{{'/clear_education'}}" class="submit submit-auto-width" >Delete All</a>
                                        </div>
                                    </div>
                                </div>
{{--          Add Education section          --}}
                                <br>
                                <div>
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0">Add Education</h5>
                                        </div>
                                        <div class="card-body">
                                            <form method="post" action="{{'/add_education'}}">
                                                @csrf
                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <label>Period <span class="required">*</span></label>
                                                        <input required="" class="form-control square" name="period" type="text" placeholder="Period">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Organization <span class="required">*</span></label>
                                                        <input required="" class="form-control square" name="organization" type="text" placeholder="Organization">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <button class="submit submit-auto-width" type="submit" style="margin-left: 260px">
                                                            Save
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
{{--          Certifications section          --}}
                            <div class="tab-pane fade" id="certifications" role="tabpanel" aria-labelledby="certifications-tab">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="mb-0">Certifications</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th>Title</th>
                                                    <th>Company</th>
                                                    <th>Certificate Link</th>
                                                    <th>Date</th>
                                                    <th>Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($certifications as $cer)
                                                        <tr>
                                                            <td>{{$cer['course']}}</td>
                                                            <td>{{$cer['company']}}</td>
                                                            <td><a href="{{$cer['link']}}">Link</a></td>
                                                            <td>{{$cer['created_at']}}</td>
                                                            <td><a href="delete_certification/{{$cer->id}}" class="btn-small d-block">Delete</a></td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-12" >
                                            <a href="{{'/clear_certification'}}" class="submit submit-auto-width" >Delete All</a>
                                        </div>
                                    </div>
                                </div>
{{--          Certifications section          --}}
                                <br>
                                <div>
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0">Add A Certificate</h5>
                                        </div>
                                        <div class="card-body">
                                            <form method="post" action="{{'/add_certification'}}">
                                                @csrf
                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <label>Course Name <span class="required">*</span></label>
                                                        <input required="" class="form-control square" name="title" type="text" placeholder="Course Name">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Company <span class="required">*</span></label>
                                                        <input required="" class="form-control square" name="company" type="text" placeholder="Company">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Certificate Link <span class="required">*</span></label>
                                                        <input required="" class="form-control square" name="link" type="text" placeholder="Certificate Link">
                                                    </div>

                                                    <div class="col-md-12">
                                                        <button class="submit submit-auto-width" type="submit" style="margin-left: 260px">
                                                            Save
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
{{--                          Projects section                      --}}
                            <div class="tab-pane fade" id="projects" role="tabpanel" aria-labelledby="projects-tab">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="mb-0">Projects</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th>Project Name</th>
                                                    <th>Major</th>
                                                    <th>Link</th>
                                                    <th>Date</th>
                                                    <th>Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($projects as $project)
                                                        <tr>
                                                            <td>{{$project['name']}}</td>
                                                            <td>{{$project['major']}}</td>
                                                            <td>{{$project['link']}}</td>
                                                            <td><a href="{{$project['created_at']}}" >Link</a></td>
                                                            <td><a href="delete_project/{{$project->id}}" class="btn-small d-block">Delete</a></td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-12" >
                                            <a href="{{'/clear_project'}}" class="submit submit-auto-width" >Delete All</a>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div>
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0">Add A Project</h5>
                                        </div>
                                        <div class="card-body">
                                            <form method="post" action="{{'/add_project'}}">
                                                @csrf
                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <label>Project Name <span class="required">*</span></label>
                                                        <input required="" class="form-control square" name="name" type="text" placeholder="Project Name">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Major <span class="required">*</span></label>
                                                        <input required="" class="form-control square" name="major" type="text" placeholder="Major">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Project Link <span class="required">*</span></label>
                                                        <input required="" class="form-control square" name="link" type="text" placeholder="Project Link">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Project Photo<span class="required">*</span></label>
                                                        <input required="" class="form-control square" name="photo" type="file" placeholder="Project photo">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label>Project Bio <span class="required">*</span></label>
                                                        <input required="" class="form-control square" name="bio" type="text" placeholder="Project Bio">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <button class="submit submit-auto-width" type="submit" style="margin-left: 260px">
                                                            Save
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
{{--                          messages section                      --}}
                            <div class="tab-pane fade" id="msg" role="tabpanel" aria-labelledby="msg-tab">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="mb-0">Customer messages</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>email</th>
                                                    <th>Date</th>
                                                    <th>Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($msgs as $msg)
                                                        <tr>
                                                            <td>{{$msg['name']}}</td>
                                                            <td>{{$msg['email']}}</td>
                                                            <td>{{$msg['created_at']}}</td>
                                                            <td><a href="view_message/{{$msg['id']}}" class="btn-small d-block">View</a><a href="delete_message/{{$msg['id']}}" class="btn-small d-block">Delete</a></td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
{{--                          Password section                      --}}
                            <div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Change Password</h5>
                                    </div>
                                    <div class="card-body">
                                        <form method="post" action="{{'/change_password'}}">
                                            @csrf
                                            <div class="row">
                                                <div class="form-group col-md-12">
                                                    <label>Current Password <span class="required">*</span></label>
                                                    <input required="" class="form-control square" name="password" type="password" placeholder="Password">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>New Password <span class="required">*</span></label>
                                                    <input  required="" class="form-control square" name="new_password" type="password" placeholder="New Password">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Confirm Password <span class="required">*</span></label>
                                                    <input  required="" class="form-control square" name="new_password_confirmation" type="password" placeholder="Confirm Password">
                                                </div>
                                                <div class="col-md-12">
                                                    <button class="submit submit-auto-width" type="submit" style="margin-left: 230px">Save</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
{{--                          Color section                      --}}
                            <div class="tab-pane fade" id="color" role="tabpanel" aria-labelledby="color-tab">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Change Color</h5>
                                    </div>
                                    <div class="card-body">
                                        <form method="post" action="{{'/change_color'}}">
                                            @csrf
                                            <div class="row">

                                                <div class="form-group col-md-6">
                                                    <label>Color <span class="required">*</span></label>
                                                    <input  required="" class="form-control square" name="color" type="color"  value="{{$user['color']}}">
                                                </div>
                                                <div class="col-md-12">
                                                    <button class="submit submit-auto-width" type="submit" style="margin-left: 230px">Save</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
