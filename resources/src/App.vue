<template>
    <div class="card">
        <div class="row">
            <div class="col-9">
                <div class="card-header">
                    Panel de ventas
                </div>
            </div>
            <div class="col-3">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
                        data-bs-whatever="@getbootstrap">Open modal for @getbootstrap
                </button>

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Nueva orden de compra</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="mb-3">
                                        <div class="input-group input-group-outline my-3">
                                            <label class="form-label">Email</label>
                                            <input type="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="input-group input-group-outline my-3">
                                            <label class="form-label">Email</label>
                                            <input type="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="input-group input-group-outline my-3">
                                            <label class="form-label">Email</label>
                                            <input type="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="input-group input-group-outline my-3">
                                            <label class="form-label">Email</label>
                                            <input type="email" class="form-control">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Send message</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table align-items-center mb-0">
                <thead>
                <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Author</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Function</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        Technology
                    </th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        Employed
                    </th>
                    <th class="text-secondary opacity-7"></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <div class="d-flex px-2 py-1">
                            <div>
                                <img
                                    src="https://demos.creative-tim.com/test/material-dashboard-pro/assets/img/team-2.jpg"
                                    class="avatar avatar-sm me-3">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-xs">John Michael</h6>
                                <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                        <p class="text-xs text-secondary mb-0">Organization</p>
                    </td>
                    <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm badge-success">Online</span>
                    </td>
                    <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-normal">23/04/18</span>
                    </td>
                    <td class="align-middle">
                        <a href="javascript:;" class="text-secondary font-weight-normal text-xs" data-toggle="tooltip"
                           data-original-title="Edit user">
                            Edit
                        </a>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="d-flex px-2 py-1">
                            <div>
                                <img
                                    src="https://demos.creative-tim.com/test/material-dashboard-pro/assets/img/team-3.jpg"
                                    class="avatar avatar-sm me-3">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-xs">Alexa Liras</h6>
                                <p class="text-xs text-secondary mb-0">alexa@creative-tim.com</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <p class="text-xs font-weight-bold mb-0">Programator</p>
                        <p class="text-xs text-secondary mb-0">Developer</p>
                    </td>
                    <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm badge-secondary">Offline</span>
                    </td>
                    <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-normal">11/01/19</span>
                    </td>
                    <td class="align-middle">
                        <a href="#!" class="text-secondary font-weight-normal text-xs" data-toggle="tooltip"
                           data-original-title="Edit user">
                            Edit
                        </a>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="d-flex px-2 py-1">
                            <div>
                                <img
                                    src="https://demos.creative-tim.com/test/material-dashboard-pro/assets/img/team-4.jpg"
                                    class="avatar avatar-sm me-3">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-xs">Laurent Perrier</h6>
                                <p class="text-xs text-secondary mb-0">laurent@creative-tim.com</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <p class="text-xs font-weight-bold mb-0">Executive</p>
                        <p class="text-xs text-secondary mb-0">Projects</p>
                    </td>
                    <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm badge-success">Online</span>
                    </td>
                    <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-normal">19/09/17</span>
                    </td>
                    <td class="align-middle">
                        <a href="#!" class="text-secondary font-weight-normal text-xs" data-toggle="tooltip"
                           data-original-title="Edit user">
                            Edit
                        </a>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="d-flex px-2 py-1">
                            <div>
                                <img
                                    src="https://demos.creative-tim.com/test/material-dashboard-pro/assets/img/team-3.jpg"
                                    class="avatar avatar-sm me-3">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-xs">Michael Levi</h6>
                                <p class="text-xs text-secondary mb-0">michael@creative-tim.com</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <p class="text-xs font-weight-bold mb-0">Programator</p>
                        <p class="text-xs text-secondary mb-0">Developer</p>
                    </td>
                    <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm badge-success">Online</span>
                    </td>
                    <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-normal">24/12/08</span>
                    </td>
                    <td class="align-middle">
                        <a href="#!" class="text-secondary font-weight-normal text-xs" data-toggle="tooltip"
                           data-original-title="Edit user">
                            Edit
                        </a>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="d-flex px-2 py-1">
                            <div>
                                <img
                                    src="https://demos.creative-tim.com/test/material-dashboard-pro/assets/img/team-2.jpg"
                                    class="avatar avatar-sm me-3">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-xs">Richard Gran</h6>
                                <p class="text-xs text-secondary mb-0">richard@creative-tim.com</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                        <p class="text-xs text-secondary mb-0">Executive</p>
                    </td>
                    <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm badge-secondary">Offline</span>
                    </td>
                    <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-normal">04/10/21</span>
                    </td>
                    <td class="align-middle">
                        <a href="#!" class="text-secondary font-weight-normal text-xs" data-toggle="tooltip"
                           data-original-title="Edit user">
                            Edit
                        </a>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="d-flex px-2 py-1">
                            <div>
                                <img
                                    src="https://demos.creative-tim.com/test/material-dashboard-pro/assets/img/team-4.jpg"
                                    class="avatar avatar-sm me-3">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-xs">Miriam Eric</h6>
                                <p class="text-xs text-secondary mb-0">miriam@creative-tim.com</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <p class="text-xs font-weight-bold mb-0">Programtor</p>
                        <p class="text-xs text-secondary mb-0">Developer</p>
                    </td>
                    <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm badge-secondary">Offline</span>
                    </td>
                    <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-normal">14/09/20</span>
                    </td>
                    <td class="align-middle">
                        <a href="#!" class="text-secondary font-weight-normal text-xs" data-toggle="tooltip"
                           data-original-title="Edit user">
                            Edit
                        </a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

</template>

<script>
export default {}
</script>

<style scoped>

</style>
