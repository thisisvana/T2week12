<?php include "partials/sidebar.php"; ?>
<div class="page-banner small-12 medium-8 large-9 columns">
    <div class="compare-header">
       <div class="small-12 medium-12 large-9 columns">
        <div class="compare-top-left">
            <ul class="party-list">
                <li id="ndpResult">NDP</li>
                <li id="greenResult">Green</li>
                <li id="libResult">Liberal</li>
                <li id="consResult">Conservative</li>

            </ul>
        </div>
        </div>
        <div class="show-for-large medium-12 large-3 columns">
            <div class="top-two-btn">
                <h3 class="two-btn btn final-result-chart" id="">Result</h3>
                <h3 class="two-btn btn" id="clear">Refresh</h3>
            </div>
        </div>

        <div class="small-12 medium-12 large-12 columns">
          <ul class="compare-p">
              <li class="filterButton" data-filter="ndp">NDP</li>
              <li class="filterButton" data-filter="green">Green</li>
              <li class="filterButton" data-filter="liberal">Liberal</li>
              <li class="filterButton" data-filter="conservative">Conservative</li>

          </ul>

          <div class="party-topic-list">

                <ul class="policies">
                  <li class="btn filterButtonTopic" data-filter="topic1"><a>Syrian Refugees</a></li>
                  <li class="btn filterButtonTopic" data-filter="topic2"><a>Marijuana</a></li>
                  <li class="btn filterButtonTopic" data-filter="topic3"><a>Youth Issues</a></li>
                  <li class="btn filterButtonTopic" data-filter="topic4"><a>Pipelines</a></li>
                  <li class="btn filterButtonTopic" data-filter="topic5"><a>Health Care</a></li>
                  <li class="btn filterButtonTopic" data-filter="topic6"><a>Infrastructure</a></li>
                  <li class="btn filterButtonTopic" data-filter="topic7"><a>Senate</a></li>
                  <li class="btn filterButtonTopic" data-filter="topic8"><a>Corporate Taxes</a></li>
                  <li class="btn filterButtonTopic" data-filter="topic9"><a>Small Business Taxes</a></li>

                </ul>
          </div>
        </div>
        <div class="hide-for-large small-12 medium-12 columns">
            <div class="top-two-btn">

                <h3 class="two-btn btn final-result-chart" id="final-result-chart">Result</h3>
                <h3 class="two-btn btn">Refresh</h3>

                <h3 class="two-btn btn">Result</h3>
                <h3 id="clear" class="two-btn btn">Refresh</h3>

            </div>
        </div>

        <!--</div>-->



    <div class="display-pol">

      <div class="chart-graphic">
        <h3 id="result"></h3>
        <div class="pie-chart" id="container"></div>
      </div>
    <!--<div class="large-9 medium-8 small-12 columns">-->
        <div class="all-party-policy syr-ref topic1 topic small-12 medium-12 large-12 columns">
          <div class="parties-pol ndp small-12 medium-12 large-3 columns">
              <div><h4>NDP</h4>
              <p>Bring in 10,000 Syrian refugees by the end of the year, and resettle 9,000 every year until 2019.
              </p></div>
              <h3 class="voteBtn btn voteButton" data-vote="ndp1">Vote</h3>
          </div>


    <!--<div class="large-9 medium-8 small-12 columns">-->
        <div class="all-party-policy syr-ref small-12 medium-12 large-12 columns">

          <div class="parties-pol green small-12 medium-12 large-3 columns">
              <div><h4>Green</h4>
              <p>Eliminate the Temporary Foreign Workers Program and increase immigration where labour shortages are established.
              </p></div>
               <h3 class="voteBtn btn voteButton" data-vote="green1">Vote</h3>
          </div>


          <div class="parties-pol liberal small-12 medium-12 large-3 columns">
              <div><h4>Liberal</h4>
              <p>Immediately admit 25,000 refugees from Syria, and invest an additional $100 million to increase refugee processing, sponsorship, and settlement.
              </p></div>
              <h3 class="voteBtn btn voteButton" data-vote="liberal1">Vote</h3>
          </div>

          <div class="parties-pol conservative small-12 medium-12 large-3 columns">
              <div><h4>Conservative</h4>
              <p>Create a new three year, $9 million program to assist persecuted religious minorities and would accept 10,000 refugees over 4 years.
              </p></div>
              <h3 class="voteBtn btn voteButton" data-vote="cons1">Vote</h3>
          </div>
        </div>
<!-- row 2 -->
          <div class="all-party-policy mariana topic2 topic hide small-12 medium-12 large-12 columns">
              <div class="parties-pol ndp small-12 medium-12 large-3 columns">
                  <div><h4>NDP</h4>
                  <p>The decriminalization of marijuana and continued public discussions.
                  </p></div>
                  <h3 class="voteBtn btn voteButton" data-vote="ndp2">Vote</h3>
              </div>

              <div class="parties-pol green small-12 medium-12 large-3 columns">
                  <div><h4>Green</h4>
                  <p>The complete legalization of marijuana and tax collection on the industry.
                  </p></div>
                   <h3 class="voteBtn btn voteButton" data-vote="green2">Vote</h3>
              </div>


              <div class="parties-pol liberal small-12 medium-12 large-3 columns">
                  <div><h4>Liberal</h4>
                  <p>The complete legalization of marijuana and tax collection on the industry.
                  </p></div>
                  <h3 class="voteBtn btn voteButton" data-vote="liberal2">Vote</h3>
              </div>

              <div class="parties-pol conservative small-12 medium-12 large-3 columns">
                  <div><h4>Conservative</h4>
                  <p>Complete opposition to the legalization and decriminalization of marijuana.
                  </p></div>
                  <h3 class="voteBtn btn voteButton" data-vote="cons2">Vote</h3>
              </div>

      </div>
  <!--row 3 -->
      <div class="all-party-policy youth topic3 topic hide small-12 medium-12 large-12 columns">
          <div class="parties-pol ndp small-12 medium-12 large-3 columns">
              <div><h4>NDP</h4>
              <p>$100 million to improve mental health services for youth, and an additional $200 million over 4 years to help youth find employment, including cracking down on unpaid internships.
              </p></div>
              <h3 class="voteBtn btn voteButton" data-vote="ndp3">Vote</h3>
          </div>

          <div class="parties-pol green small-12 medium-12 large-3 columns">
              <div><h4>Green</h4>
              <p>The elimination of all tuition fees by 2020, by starting off with nixing them for low income students.
              </p></div>
               <h3 class="voteBtn btn voteButton" data-vote="green3">Vote</h3>
          </div>


          <div class="parties-pol liberal small-12 medium-12 large-3 columns">
              <div><h4>Liberal</h4>
              <p>$1.3 billion over 3 years to create jobs for young people, including more guides and interpreters for Park Canada.
              </p></div>
              <h3 class="voteBtn btn voteButton" data-vote="liberal3">Vote</h3>
          </div>

          <div class="parties-pol conservative small-12 medium-12 large-3 columns">
              <div><h4>Conservative</h4>
              <p>Reallocate $7 million over 2 years to support the relocation of youth and immigrants to areas where job opportunities exist.
              </p></div>
              <h3 class="voteBtn btn voteButton" data-vote="cons3">Vote</h3>
          </div>

      </div>

      <!--row 4 -->
      <div class="all-party-policy pipes topic4 topic hide small-12 medium-12 large-12 columns">
          <div class="parties-pol ndp small-12 medium-12 large-3 columns">
              <div><h4>NDP</h4>
              <p>Against Enbridge Northern Gateway and Keystone XL, but supportive of a better environmental review process and future pipeline plans.
              </p></div>
              <h3 class="voteBtn btn voteButton" data-vote="ndp4">Vote</h3>
          </div>

          <div class="parties-pol green small-12 medium-12 large-3 columns">
              <div><h4>Green</h4>
              <p>The complete opposition of all pipeline proposals.
              </p></div>
               <h3 class="voteBtn btn voteButton" data-vote="green4">Vote</h3>
          </div>


          <div class="parties-pol liberal small-12 medium-12 large-3 columns">
              <div><h4>Liberal</h4>
              <p>Against Enbridge Northern Gateway, but supportive of TransCanada Keystone XL and Kinder Morgan Expansion.
              </p></div>
              <h3 class="voteBtn btn voteButton" data-vote="liberal4">Vote</h3>
          </div>

          <div class="parties-pol conservative small-12 medium-12 large-3 columns">
              <div><h4>Conservative</h4>
              <p>The support and approval for Enbridge Northern Gateway, Keystone XL, Kinder Morgan Expansion, and Energy East.
              </p></div>
              <h3 class="voteBtn btn voteButton" data-vote="cons4">Vote</h3>
          </div>

      </div>
      <!--row 5 -->
      <div class="all-party-policy health topic5 topic hide small-12 medium-12 large-12 columns">
          <div class="parties-pol ndp small-12 medium-12 large-3 columns">
              <div><h4>NDP</h4>
              <p>The NDP promise 1.8 billion over 4 years to ensure universal access to prescription medication for Canadians. They would also spend 40 million over four years to develop a nationwide alzheimer's and dementia strategy. Lastly, the NDP would earmark 500 million to expand health care clinics and hire new health care providers.
              </p></div>
              <h3 class="voteBtn btn voteButton" data-vote="ndp5">Vote</h3>
          </div>

          <div class="parties-pol green small-12 medium-12 large-3 columns">
              <div><h4>Green</h4>
              <p>The Greens would introduce a national pharmacare plan, which the party says will save the government $11 billion by buying in bulk.
              </p></div>
               <h3 class="voteBtn btn voteButton" data-vote="green5">Vote</h3>
          </div>


          <div class="parties-pol liberal small-12 medium-12 large-3 columns">
              <div><h4>Liberal</h4>
              <p>The Liberals propose $3 billion in funding over four years to improve the national health care system. This would focus on boosting home care, lower the cost of prescription drugs and improve mental health care. They would also work with the provinces to negotiate better prices on prescription drugs.
              </p></div>
              <h3 class="voteBtn btn voteButton" data-vote="liberal5">Vote</h3>
          </div>

          <div class="parties-pol conservative small-12 medium-12 large-3 columns">
              <div><h4>Conservative</h4>
              <p>Recently chose not to renew the Canada Health Accord which increased funding for healthcare, common wait times, home care, and prescription drugs. Announced $31.5 million in funding for a plan on dementia.
              </p></div>
              <h3 class="voteBtn btn voteButton" data-vote="cons5">Vote</h3>
          </div>

      </div>
      <!--row 6 -->
      <div class="all-party-policy infra topic6 topic hide small-12 medium-12 large-12 columns">
          <div class="parties-pol ndp small-12 medium-12 large-3 columns">
              <div><h4>NDP</h4>
              <p>The NDP promised $1.5 billion per year to infrastructure funding in cities, which he says will be covered by using a portion of the gas tax. He also promised an additional Better Transit Plan.
              </p></div>
              <h3 class="voteBtn btn voteButton" data-vote="ndp6">Vote</h3>
          </div>

          <div class="parties-pol green small-12 medium-12 large-3 columns">
              <div><h4>Green</h4>
              <p>Increase the Gas Tax Transfer to municipalities to five cents/litre to be used in funding the above sustainable transportation initiatives such as public transit, cycling and pedestrian infrastructure, and rural roads
              </p></div>
               <h3 class="voteBtn btn voteButton" data-vote="green6">Vote</h3>
          </div>


          <div class="parties-pol liberal small-12 medium-12 large-3 columns">
              <div><h4>Liberal</h4>
              <p>Liberals promise to invest in infrastructure, spending by $60-billion over the next decade, on top of the currently planned spending of $65-billion. Some of this infrastructure will be “green,” or environmentally friendly.
              </p></div>
              <h3 class="voteBtn btn voteButton" data-vote="liberal6">Vote</h3>
          </div>

          <div class="parties-pol conservative small-12 medium-12 large-3 columns">
              <div><h4>Conservative</h4>
              <p>The Conservatives’ main infrastructure program was the New Building Canada Plan. It promises $53 billion over 10 years to be spent on infrastructure. They have pledged $150 million for communities across Canada to finance repairs and improvements to existing small public infrastructure.
              </p></div>
              <h3 class="voteBtn btn voteButton" data-vote="cons6">Vote</h3>
          </div>

      </div>
      <!--row 7 -->
      <div class="all-party-policy topic7 topic senate hide small-12 medium-12 large-12 columns">
          <div class="parties-pol ndp small-12 medium-12 large-3 columns">
            <div><h4>NDP</h4>
              <p>Thomas Mulcair supports complete abolition of the Senate. He would need to open the Constitution and have all provinces on board to do so.The NDP promised $1.5 billion per year to infrastructure funding in cities, which he says will be covered by using a portion of the gas tax. He also promised an additional Better Transit Plan.</p>
            </div>
            <h3 class="voteBtn btn voteButton" data-vote="ndp7">Vote</h3>
          </div>

          <div class="parties-pol green small-12 medium-12 large-3 columns">
              <div><h4>Green</h4>
              <p>The Green Party of Canada supports the election of Senators through a system that ensures proportional representation.
              </p></div>
               <h3 class="voteBtn btn voteButton" data-vote="green7">Vote</h3>
          </div>


          <div class="parties-pol liberal small-12 medium-12 large-3 columns">
              <div><h4>Liberal</h4>
              <p>Justin Trudeau wants an end to partisan senators and instead advocates for the creation of a merit-based appointment process. Trudeau expelled 32 Liberal senators from his caucus, and has declared there is no longer any such thing as a Liberal senator. The Liberal plan for Senate reform would not require a Constitutional amendment.
              </p></div>
              <h3 class="voteBtn btn voteButton" data-vote="liberal7">Vote</h3>
          </div>

          <div class="parties-pol conservative small-12 medium-12 large-3 columns">
              <div><h4>Conservative</h4>
              <p>Stephen Harper wants a senate that would require all senators to be democratically elected. Before the campaign began, he announced that he would stop appointing Senators in an effort to force the provinces to agree to a reform. However, the legality of this is currently under fire.
              </p></div>
              <h3 class="voteBtn btn voteButton" data-vote="cons7">Vote</h3>
          </div>

      </div>

<!--row 8-->
      <div class="all-party-policy corp topic8 topic hide small-12 medium-12 large-12 columns">
          <div class="parties-pol ndp small-12 medium-12 large-3 columns">
              <div><h4>NDP</h4>
                <p>The NDP promises to reverse the corporate tax cuts, though will not bring them back to where they were before the Conservatives gained power. The NDP would raise the tax to “less than 17.5%, from its current 15%.” They would also close what they call the Stock Option Loophole.</p>
              </div>
                <h3 class="voteBtn btn voteButton" data-vote="ndp8">Vote</h3>
          </div>

          <div class="parties-pol green small-12 medium-12 large-3 columns">
              <div><h4>Green</h4>
              <p>The Green Party would completely reverse the corporate tax cuts made by the Conservative government.
              </p></div>
               <h3 class="voteBtn btn voteButton" data-vote="green8">Vote</h3>
          </div>


          <div class="parties-pol liberal small-12 medium-12 large-3 columns">
              <div><h4>Liberal</h4>
                <p>The Liberals say that reductions in corporate tax rates may be necessary depending on future changes in the US, but that the party plans to maintain the current rate.                </p>
              </div>
              <h3 class="voteBtn btn voteButton" data-vote="liberal8">Vote</h3>
          </div>

          <div class="parties-pol conservative small-12 medium-12 large-3 columns">
              <div><h4>Conservative</h4>
                <p>Under the Conservative government Canada’s federal corporate income tax rate has dropped from 21 per cent to 15 percent. They favour keeping it at its current rate.
              </p></div>
              <h3 class="voteBtn btn voteButton" data-vote="cons8">Vote</h3>
          </div>

      </div>

      <!--row 9-->

      <div class="all-party-policy small-tax topic9 topic hide small-12 medium-12 large-12 columns">
          <div class="parties-pol ndp small-12 medium-12 large-3 columns">
              <h4>NDP</h4>
              <p>The NDP supports the Conservative tax cut to small businesses, and say they will keep the cut from 11 per cent to 9.</p>
              <h3 class="voteBtn btn voteButton" data-vote="ndp9">Vote</h3>
          </div>

          <div class="parties-pol green small-12 medium-12 large-3 columns">
              <h4>Green</h4>
              <p>Establish a federally-funded Green Venture Capital Fund to support viable local businesses, reduce the paperwork burden on small businesses by eliminating red tape, and ensure that small businesses are exempt from any increases to the corporate tax rate.
              </p>
               <h3 class="voteBtn btn voteButton" data-vote="green9">Vote</h3>
          </div>


          <div class="parties-pol liberal small-12 medium-12 large-3 columns">
              <h4>Liberal</h4>
              <p>The Liberals would retain the tax break from 11% to 9% for small businesses, but Justin Trudeau has some concerns about implementation, saying he wants to make sure that it doesn’t primarily benefit the wealthy who may use small businesses to reduce their tax burden.</p>
              <h3 class="voteBtn btn voteButton" data-vote="liberal9">Vote</h3>
          </div>

          <div class="parties-pol conservative small-12 medium-12 large-3 columns">
              <h4>Conservative</h4>
              <p>The Conservatives promise to reduce the small business tax rate from 11 per cent to 9 per cent by 2019. The tax cut is costed at approx. $2.7 billion over the next five years.
              </p>
              <h3 class="voteBtn btn voteButton" data-vote="cons9">Vote</h3>
          </div>

      </div>
    </div>
  </div>
</header>
<?php include "partials/footer.php"; ?>
