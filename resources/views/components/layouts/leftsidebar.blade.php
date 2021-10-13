<div class="left-side-bar">
    <div class="brand-logo">
        <a href="{{ url('/') }}">
            <h3>KGSL</h3>
        </a>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
              
                <!--Home-->
                <li>
                    <a href="{{ url('/') }}" class="dropdown-toggle no-arrow">
                        <span class="fa fa-home"></span><span class="mtext">Home</span>
                    </a>
                </li>
               
                <!--Shipments-->
                <li>
                    <a href="/shipments" class="dropdown-toggle no-arrow">
                        <span class="fa fa-table"></span><span class="mtext">Shipments</span>
                    </a>
                </li>
            
                
                
        
                <!--Invoices-->
                <li>
                    <a href="/invoices" class="dropdown-toggle no-arrow">
                        <i class="icon-copy fa fa-dollar" aria-hidden="true"></i></i><span class="mtext">Invoices</span>
                    </a>
                </li>
        
              
                
                <!--setting-->
                <li>
                    <a href="/setting" class="dropdown-toggle no-arrow">
                        <i class="icon-copy fa fa-cog" aria-hidden="true"></i><span class="mtext">Setting</span>
                    </a>
                </li>
                
          
             
            </ul>
        </div>
    </div>
</div>