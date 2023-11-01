@extends('user_layout.main_header_footer')
@section('title')
    <title>4 ever memorial About-US</title>
@endsection

@section('headerfiles')
    <link href="{!! asset('theme/user_theme/css/aboutus.css') !!}" rel="stylesheet">
@endsection

@section('body')
    <style>
        .txtcent {
            text-align: center;
        }

        p.head_type {
            font-size: 18px;
            font-weight: 700;
        }
    </style>
    <section>
        <div class="abouttopbanner">
            @include('user_layout.components.banner_menu')
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="bannerdata aboutheading">
                            <h1>Our Terms of service</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="aboutarea">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="">
                            <h3>Last Updated: <?php
                                $hourdiff = 0; // Replace the 0 with your timezone difference (;
                                $site = date(" d /F /Y ");
                                echo $site;
                                ?></h3>
                            <p class="head_type">
                                PLEASE READ THE FOLLOWING TERMS OF SERVICE AGREEMENT
                                CAREFULLY. BY ACCESSING OR USING OUR WEBSITE (THE "SITE")
                                OR OUR SERVICES, YOU HEREBY AGREE TO BE BOUND BY THESE
                                TERMS AND CONDITIONS AND ALL TERMS INCORPORATED HEREIN
                                BY REFERENCE. IT IS THE RESPONSIBILITY OF YOU, THE USER,
                                CUSTOMER, OR PROSPECTIVE CUSTOMER TO READ THE TERMS
                                AND CONDITIONS BEFORE PROCEEDING TO USE THIS SITE. IF YOU
                                DO NOT EXPRESSLY AGREE TO ALL OF THE TERMS AND
                                CONDITIONS, THEN PLEASE DO NOT ACCESS OR USE OUR SITE OR
                                OUR SERVICES.
                            </p>
                            <p>
                                The present terms and conditions (this "Agreement" or "Terms") is a legal agreement between
                                you and Iboto Empire (hereinafter " Ibotoempire"), a company duly organized and validly
                                existing, located at 6101 Cherry Avenue Suite 102A Fontana,
                                CA 92336 USA. This
                                Agreement
                                annuls and voids all previous agreements.

                            </p>
                            <p class="head_type">
                                OVERVIEW

                            </p>
                            <p>
                                The Site (4EverMemorial.com) is designed and operated by Ibotoempire. Throughout the Site,
                                the
                                terms "we", "us" and "our" refer to Ibotoempire. Ibotoempire offers this Site, including all
                                information, tools, and services available from this Site to you, the user, conditioned upon
                                your
                                acceptance of all terms, conditions, policies and notices stated here.
                                By visiting our Site and/or purchasing something from us, you engage in our "Service" and
                                agree
                                to be bound by the following terms and conditions, including those additional terms and
                                conditions
                                and policies referenced herein and/or available by hyperlink. These Terms apply to all users
                                of the
                                Site, including without limitation users who are browsers, vendors, customers, merchants,
                                and/or
                                contributors of content. In the event of an inconsistency between this Agreement and any
                                additional terms or policies referenced herein, the provisions of the additional terms or
                                policies
                                shall control.
                                Please read these Terms carefully before accessing or using our Site. By accessing or using
                                any
                                part of the Site, you agree to be bound by these Terms. If you do not agree to all the Terms
                                of this
                                Agreement, then you may not access the Site or use any Service. If these Terms are
                                considered an
                                offer, acceptance is expressly limited to these Terms.
                                Any new features or tools which are added to the current store shall also be subject to the
                                Terms.
                                You can review the most current version of the Terms at any time on this page. We reserve
                                the
                                right to update, change or replace any part of these Terms by posting updates and/or changes
                                to
                                our Site. It is your responsibility to check this page periodically for changes. Your
                                continued use
                                of or access to the Site following the posting of any changes constitutes acceptance of
                                those
                                changes.

                            </p>
                            <p class="head_type">
                                SECTION 1 - GENERAL TERMS
                            </p>
                            <p>
                                By agreeing to these Terms, you represent that you are at least the age of majority in your
                                state or
                                province of residence, or that you are the age of majority in your state or province of
                                residence,
                                and you have given us your consent to allow any of your minor dependents to use this Site.
                                You may not use our products or Site for any illegal or unauthorized purpose nor may you, in
                                the
                                use of our products or Site, violate any laws in your jurisdiction (including but not
                                limited to motor
                                vehicle laws).
                                You must not transmit any worms or viruses or any code of a destructive nature.
                                A breach or violation of any of the Terms will result in an immediate termination of your
                                account
                                and right to use our Service.
                                We have the right, but not the obligation, to take any of the following actions in our sole
                                discretion
                                at any time and for any reason without giving you any prior notice:
                            <ol>
                                <li>
                                    Restrict, suspend or terminate your access to all or any part of our Site.
                                </li>
                                <li>
                                    Change, suspend or discontinue all or any part of our products or Site.

                                </li>
                                <li>
                                    Refuse, move, or remove any content that is available on all or any part of our Site.
                                </li>
                                <li>
                                    Deactivate or delete your accounts
                                </li>
                                <li>
                                    Establish general practices and limits concerning the use of our Site.
                                </li>

                            </ol>

                            </p>
                            <p>
                                You agree that we will not be liable to you or any third party for taking any of these
                                actions.

                            </p>
                            <p>
                                You understand and agree that our Site may include communications such as service
                                announcements and administrative or legal notices from us. Please note that you cannot opt
                                out of
                                receiving these notices.

                            </p>
                            <p>
                                You understand that your content (not including credit card information), may be transferred
                                unencrypted and involve (a) transmissions over various networks; and (b) changes to conform
                                and
                                adapt to technical requirements of connecting networks or devices. Credit card information
                                is
                                always encrypted during transfer over networks.

                            </p>
                            <p>
                                You agree not to reproduce, duplicate, copy, sell, resell, or exploit any portion of the
                                Site, use of
                                the Site, or access to the Site or any contact on the Site, without express written
                                permission by us.

                            </p>
                            <p>
                                You may not modify, publish, transmit, reverse engineer, participate in the transfer or
                                sale, create
                                derivative works, or in any way exploit any of the content, in whole or in part, found on
                                the Site.
                                Ibotoempire content is not for resale. Use of the Site does not entitle users to make any
                                unauthorized use of any protected content, and in particular you will not delete or alter
                                any
                                proprietary rights or attribution notices in any content. You will use protected content
                                solely for
                                your personal use and will make no other use of the content without the express written
                                permission
                                of Ibotoempire and the copyright owner. You agree that you do not acquire any ownership
                                rights
                                in any protected content. We do not grant you any licenses, express or implied, to the
                                intellectual
                                property of Ibotoempire or our licensors except as expressly authorized by these Terms.
                            </p>
                            <p class="head_type">
                                SECTION 2 - CREATING AN ACCOUNT
                            </p>
                            <p>
                                Once you create an account with us, you are registered on the Ibotoempire Site. The terms
                                "member," "membership," and "account" all refer to this registration as a member on
                                Ibotoempire's
                                Site. If you are merely surfing or browsing through the Site and have not yet created an
                                account,
                                your use of the Site is still subject to this Agreement; if you do not agree to this
                                Agreement, do not
                                use the Site
                            </p>
                            <p>
                                When you create an account, you will provide a unique username and email. We will also ask
                                you
                                to create a password. Because any activities that occur under your username or password are
                                your
                                responsibility it is important for you to keep your username and/or password secure. You may
                                not
                                assign or otherwise transfer your account to any other person or entity. You acknowledge
                                that
                                Ibotoempire is not responsible for third party access to your account that results from
                                theft or
                                misappropriation of your account. Notify us immediately if you believe that someone has used
                                your username, email, or password without your authorization.
                            </p>
                            <p>
                                Furthermore, the registering party hereby acknowledges, understands, and agrees to:
                            </p>
                            <p>
                                a) furnish factual, correct, current and complete information with regards to yourself as
                                may be requested by the data registration process, and
                            </p>
                            <p>
                                b) maintain and promptly update your registration and profile information in an effort to
                                maintain accuracy and completeness at all times.
                            </p>
                            <p>
                                If anyone knowingly provides any information of a false, untrue, inaccurate, or incomplete
                                nature,
                                Iboto Empire will have sufficient grounds and rights to suspend or terminate the member in
                                violation of this aspect of the Agreement, and as such refuse any and all current or future
                                use of
                                Iboto Empire Services, or any portion thereof.
                            </p>
                            <p class="head_type">
                                SECTION 3 - CONDUCT
                            </p>
                            <p>
                                As a user or member of the Site, you herein acknowledge, understand, and agree that all
                                information, text, software, data, photographs, music, video, messages, tags or any other
                                content,
                                whether it is publicly or privately posted and/or transmitted, is the expressed sole
                                responsibility of
                                the individual from whom the content originated. In short, this means that you are solely
                                responsible for any and all content posted, uploaded, emailed, transmitted or otherwise made
                                available by way of the Ibotoempire Services, and as such, we do not guarantee the accuracy,
                                integrity or quality of such content. It is expressly understood that by use of our
                                Services, you may
                                be exposed to content including, but not limited to, any errors or omissions in any content
                                posted,
                                and/or any loss or damage of any kind incurred as a result of the use of any content posted,
                                emailed,
                                transmitted or otherwise made available by Ibotoempire.

                            </p>
                            <p>
                                Furthermore, you herein agree not to make use of Iboto Empire's Services for the purpose of
                            </p>
                            <p>
                                a) uploading, posting, emailing, transmitting, or otherwise making available any content
                                that shall be deemed unlawful, harmful, threatening, abusive, harassing, tortious,
                                defamatory, vulgar, obscene, libelous, or invasive of another's privacy or which is hateful,
                                and/or racially, ethnically, or otherwise objectionable. </p>
                            <p>
                                b) causing harm to minor in any manner whatsoever.</p>
                            <p>
                                c) impersonating any individual or entity, including, but not limited to, any ibotoEmpire
                                officials, forum leaders, guides or hosts or falsely stating or otherwise misrepresenting
                                any
                                affiliation with an individual or entity.</p>
                            <p>
                                d) forging captions, headings or titles or otherwise offering any content that you
                                personally
                                have no right to pursuant to any law nor have any contractual or fiduciary relationship
                                with.</p>
                            <p>
                                e) uploading, posting, emailing, transmitting, or otherwise offering any such content that
                                may infringe upon any patent, copyright, trademark, or any other proprietary or intellectual
                                rights of any other party.</p>
                            <p>
                                f) uploading, posting, emailing, transmitting, or otherwise offering any content that you do
                                not personally have any right to offer pursuant to any law or in accordance with any
                                contractual or fiduciary relationship.</p>
                            <p>
                                g) uploading, posting, emailing, transmitting, or otherwise offering any unsolicited or
                                unauthorized advertising, promotional flyers, "junk mail," "spam," or any other form of
                                solicitation, except in any such areas that may have been designated for such purpose.</p>
                            <p>
                                h) uploading, posting, emailing, transmitting, or otherwise offering any source that may
                                contain a software virus or other computer code, any files and/or programs which have
                                been designed to interfere, destroy and/or limit the operation of any computer software,
                                hardware, or telecommunication equipment.</p>
                            <p>
                                i) disrupting the normal flow of communication, or otherwise acting in any manner that
                                would negatively affect other users' ability to participate in any real time interactions.
                            </p>
                            <p>
                                j) interfering with or disrupting any Iboto EmpireServices, servers and/or networks that
                                may be connected or related to our website, including, but not limited to, the use of any
                                device software and/or routine to bypass the robot exclusion headers.</p>
                            <p>
                                k) intentionally or unintentionally violating any local, state, federal, national or
                                international law, including, but not limited to, rules, guidelines, and/or regulations
                                decreed by the U.S. Securities and Exchange Commission, in addition to any rules of any
                                nation or other securities exchange, that would include without limitation, the New York
                                Stock Exchange, the American Stock Exchange, or the NASDAQ, and any regulations
                                having the force of law;</p>
                            <p>
                                l) providing informational support or resources, concealing and/or disguising the
                                character, location, and or source to any organization delegated by the United States
                                government as a "foreign terrorist organization" in accordance to Section 219 of the
                                Immigration Nationality Act;</p>
                            <p>
                                m) "stalking" or with the intent to otherwise harass another individual; and/or</p>
                            <p>
                                n) collecting or storing of any personal data relating to any other member or user in
                                connection with the prohibited conduct and/or activities which have been set forth in the
                                aforementioned paragraphs.

                            </p>
                            <p>
                                Iboto Empire herein reserves the right to pre-screen, refuse and/or delete any content
                                currently
                                available through our Services. In addition, we reserve the right to remove and/or delete
                                any such
                                content that would violate the Terms, or which would otherwise be considered offensive to
                                other
                                visitors, users and/or members.
                                Iboto Empire herein reserves the right to access, preserve and/or disclose member account
                                information and/or content if it is requested to do so by law or in good faith belief that
                                any such
                                action is deemed reasonably necessary for:

                            </p>
                            <p>
                                a) compliance with any legal process. </p>
                            <p>
                                b) enforcement of the Terms.</p>
                            <p>
                                c) responding to any claim that therein contained content is in violation of the rights of
                                any
                                third party.</p>
                            <p>
                                d) responding to requests for customer service; or</p>
                            <p>
                                e) protecting the rights, property or the personal safety of Iboto Empire, its visitors,
                                users
                                and members, including the general public.

                            </p>
                            <p>
                                Iboto Empire herein reserves the right to include the use of security components that may
                                permit
                                digital information or material to be protected, and that such use of information and/or
                                material is
                                subject to usage guidelines and regulations established by Iboto Empire or any other content
                                providers supplying content services to Iboto Empire. You are hereby prohibited from making
                                any
                                attempt to override or circumvent any of the embedded usage rules in our Services.
                                Furthermore,
                                unauthorized reproduction, publication, distribution, or exhibition of any information or
                                materials
                                supplied by our Services, despite whether done so in whole or in part, is expressly
                                prohibited.
                            </p>
                            <p class="head_type">
                                SECTION 4 - GLOBAL USE; EXPORT/IMPORT COMPLIANCE
                            </p>
                            <p>
                                Due to the global nature of the internet, through the use of our network you hereby agree to
                                comply
                                with all local rules relating to online conduct and that which is considered acceptable
                                content.
                                Uploading, posting and/or transferring of software, technology and other technical data may
                                be
                                subject to the export and import laws of the United States and possibly other countries.
                                Through
                                the use of our network, you thus agree to comply with all applicable export and import laws,
                                statutes and regulations, including, but not limited to, the Export Administration
                                Regulations
                                (http://www.access.gpo.gov/bis/ear/ear_data.html), as well as the sanctions control program
                                of the
                                United States
                                (http://www.treasury.gov/resourcecenter/sanctions/Programs/Pages/Programs.aspx).
                                Furthermore, you state and pledge that you:

                            </p>
                            <p>
                                a) are not on the list of prohibited individuals which may be identified on any government
                                export exclusion report
                                (http://www.bis.doc.gov/complianceandenforcement/liststocheck.htm) nor a member of
                                any other government which may be part of an export-prohibited country identified in
                                applicable export and import laws and regulations; </p>
                            <p>
                                b) agree not to transfer any software, technology or any other technical data through the
                                use of our network Services to any export-prohibited country.</p>
                            <p>
                                c) agree not to use our website network Services for any military, nuclear, missile,
                                chemical
                                or biological weaponry end uses that would be a violation of the U.S. export laws; and</p>
                            <p>
                                d) agree not to post, transfer nor upload any software, technology or any other technical
                                data which would be in violation of the U.S. or other applicable export and/or import laws.
                            </p>
                            <p class="head_type">
                                SECTION 5 - SUBMITTED CONTENT
                            </p>
                            <p>
                                Iboto Empire shall not lay claim to ownership of any content submitted by any visitor,
                                member,
                                or user, nor make such content available for inclusion on our website Services. Therefore,
                                you
                                hereby grant and allow for Iboto Empire the below listed worldwide, royalty-free and
                                nonexclusive licenses, as applicable:
                            </p>
                            <p>
                                a) The content submitted or made available for inclusion on the publicly accessible areas
                                of Iboto Empire's Sites, the license provided to permit to use, distribute, reproduce,
                                modify,
                                adapt, publicly perform and/or publicly display said Content on our network Services is for
                                the sole purpose of providing and promoting the specific area to which this content was
                                placed and/or made available for viewing. This license shall be available so long as you
                                are a member of Iboto Empire's sites and shall terminate at such time when you elect to
                                discontinue your membership. </p>
                            <p>
                                b) Photos, audio, video and/or graphics submitted or made available for inclusion on the
                                publicly accessible areas of Iboto Empire's sites, the license provided to permit to use,
                                distribute, reproduce, modify, adapt, publicly perform and/or publicly display said Content
                                on our network Services are for the sole purpose of providing and promoting the specific
                                area in which this content was placed and/or made available for viewing. This license shall
                                be available so long as you are a member of Iboto Empire's sites and shall terminate at such
                                time when you elect to discontinue your membership. </p>
                            <p>
                                c) For any other content submitted or made available for inclusion on the publicly
                                accessible areas of Iboto Empire's sites, the continuous, binding and completely
                                sub-licensable license which is meant to permit to use, distribute, reproduce, modify,
                                adapt,
                                publish, translate, publicly perform and/or publicly display said content, whether in whole
                                or in part, and the incorporation of any such Content into other works in any arrangement
                                or medium current used or later developed. </p>
                            <p>
                                Those areas which may be deemed "publicly accessible" areas of Iboto Empire's Sites are
                                those
                                such areas of our network properties which are meant to be available to the general public,
                                and
                                which would include message boards and groups that are openly available to both users and
                                members. However, those areas which are not open to the public, and thus available to
                                members
                                only, would include our mail system and instant messaging.

                            </p>
                            <p class="head_type">
                                CONTRIBUTIONS TO COMPANY WEBSITE
                            </p>
                            <p>
                                Iboto Empire may provide an area for our users and members to contribute feedback to our
                                website.
                                When you submit ideas, documents, suggestions and/or proposals ("Contributions") to our
                                site,
                                you acknowledge and agree that:</p>
                            <p>
                                a) your contributions do not contain any type of confidential or proprietary information.
                            </p>
                            <p>
                                b) IbotoEmpire shall not be liable or under any obligation to ensure or maintain
                                confidentiality, expressed or implied, related to any Contributions.</p>
                            <p>
                                c) IbotoEmpire shall be entitled to make use of and/or disclose any such Contributions in
                                any such manner as they may see fit.</p>
                            <p>
                                d) the contributor's Contributions shall automatically become the sole property of
                                IbotoEmpire; and</p>
                            <p>
                                e) IbotoEmpire is under no obligation to either compensate or provide any form of
                                reimbursement in any manner or nature.

                            </p>
                            <p class="head_type">
                                SECTION 6 - INDEMNITY
                            </p>
                            <p>
                                All users and/or members agree to insure and hold Iboto Empire, our subsidiaries,
                                affiliates, agents,
                                employees, officers, partners and/or licensors blameless or not liable for any claim or
                                demand,
                                which may include, but is not limited to, reasonable attorney fees made by any third party
                                which
                                may arise from any content a member or user of our Site may submit, post, modify, transmit
                                or
                                otherwise make available through our Services, the use of IbotoEmpire Services or your
                                connection with these Services, your violations of the Terms of Service and/or your
                                violation of
                                any such rights of another person.

                            </p>
                            <p class="head_type">
                                SECTION 7 - COMMERCIAL REUSE OF SERVICES
                            </p>
                            <p>
                                The member or user herein agrees not to replicate, duplicate, copy, trade, sell, resell nor
                                exploit
                                for any commercial reason any part, use of, or access to IbotoEmpire sites.
                            </p>
                            <p class="head_type">
                                SECTION 8 - MODIFICATIONS
                            </p>
                            <p>
                                Iboto Empire reserves the right at any time it may deem fit, to modify, alter and or
                                discontinue,
                                whether temporarily or permanently, our service, or any part thereof, with or without prior
                                notice.
                                In addition, we shall not be held liable to you or to any third party for any such
                                alteration,
                                modification, suspension and/or discontinuance of our Services, or any part thereof.

                            </p>
                            <p class="head_type">
                                SECTION 9 - TERMINATION
                            </p>
                            <p>
                                As a member of 4EverMemorial.com, you may cancel or terminate your account, associated email
                                address and/or access to our Services by submitting a cancellation or termination request
                                to.
                                As a member, you agree that Iboto Empire may, without any prior written notice, immediately
                                suspend, terminate, discontinue and/or limit your account, any email associated with your
                                account,
                                and access to any of our Services. The cause for such termination, discontinuance,
                                suspension
                                and/or limitation of access shall include, but is not limited to:

                            </p>
                            <p>
                                a) any breach or violation of our Terms or any other incorporated agreement, regulation
                                and/or guideline. </p>
                            <p>
                                b) by way of requests from law enforcement or any other governmental agencies. </p>
                            <p>
                                c) the discontinuance, alteration and/or material modification to our Services, or any part
                                thereof. </p>
                            <p>
                                d) unexpected technical or security issues and/or problems. </p>
                            <p>
                                e) any extended periods of inactivity. </p>
                            <p>
                                f) any engagement by you in any fraudulent or illegal activities; and/or </p>
                            <p>
                                g) the nonpayment of any associated fees that may be owed by you in connection with your
                                4EverMemorial.com account Services.
                            </p>
                            <p>
                                Furthermore, you herein agree that any and all terminations, suspensions, discontinuances,
                                and or
                                limitations of access for cause shall be made at our sole discretion and that we shall not
                                be liable
                                to you or any other third party with regards to the termination of your account, associated
                                email
                                address and/or access to any of our Services
                            </p>
                            <p>
                                The termination of your account with 4EverMemorial.com shall include any and/or all of the
                                following:</p>
                            <p>
                                a) the removal of any access to all or part of the Services offered within
                                4EverMemorial.com.</p>
                            <p>
                                b) the deletion of your password and any and all related information, files, and any such
                                content that may be associated with or inside your account, or any part thereof; and</p>
                            <p>
                                c) the barring of any further use of all or part of our Services.
                            </p>
                            <p class="head_type">
                                SECTION 10 - LINKS
                            </p>
                            <p>
                                Either Iboto Empire or any third parties may provide links to other websites and/or
                                resources.
                                Thus, you acknowledge and agree that we are not responsible for the availability of any such
                                external sites or resources, and as such, we do not endorse nor are we responsible or liable
                                for any
                                content, products, advertising, or any other materials, on or available from such
                                third-party sites
                                or resources. Furthermore, you acknowledge and agree that Iboto Empire shall not be
                                responsible
                                or liable, directly, or indirectly, for any such damage or loss which may be a result of,
                                caused or
                                allegedly to be caused by or in connection with the use of or the reliance on any such
                                content,
                                goods or Services made available on or through any such site or resource.

                            </p>
                            <p class="head_type">
                                SECTION 11 - PROPRIETARY RIGHTS
                            </p>
                            <p>
                                You do hereby acknowledge and agree that Iboto Empire's Services and any essential software
                                that
                                may be used in connection with our Services ("Software") shall contain proprietary and
                                confidential material that is protected by applicable intellectual property rights and other
                                laws.
                                Furthermore, you herein acknowledge and agree that any Content which may be contained in any
                                advertisements or information presented by and through our Services or by advertisers is
                                protected
                                by copyrights, trademarks, patents or other proprietary rights and laws. Therefore, except
                                for that
                                which is expressly permitted by applicable law or as authorized by Iboto Empire or such
                                applicable
                                licensor, you agree not to alter, modify, lease, rent, loan, sell, distribute, transmit,
                                broadcast,
                                publicly perform and/or created any plagiaristic works which are based on Iboto Empire
                                Services
                                (e.g. Content or Software), in whole or part.
                                Iboto Empire hereby grants you a personal, non-transferable and non-exclusive right and/or
                                license
                                to make use of the object code or our Software on a single computer, as long as you do not,
                                and
                                shall not, allow any third party to duplicate, alter, modify, create or plagiarize work
                                from, reverse
                                engineer, reverse assemble or otherwise make an attempt to locate or discern any source
                                code, sell,
                                assign, sublicense, grant a security interest in and/or otherwise transfer any such right in
                                the
                                Software. Furthermore, you do herein agree not to alter or change the Software in any
                                manner,
                                nature or form, and as such, not to use any modified versions of the Software, including and
                                without limitation, for the purpose of obtaining unauthorized access to our Services.
                                Lastly, you
                                also agree not to access or attempt to access our Services through any means other than
                                through
                                the interface which is provided by Iboto Empire for use in accessing our Services.

                            </p>
                            <p class="head_type">
                                SECTION 12 - WARRANTY DISCLAIMERS
                            </p>
                            <p>
                                YOU HEREIN EXPRESSLY ACKNOWLEDGE AND AGREE THAT:
                                a) THE USE OF IBOTO EMPIRE SERVICES AND SOFTWARE ARE AT THE SOLE
                                RISK BY YOU. OUR SERVICES AND SOFTWARE SHALL BE PROVIDED ON AN
                                "AS IS" AND/OR "AS AVAILABLE" BASIS. IBOTO EMPIRE AND OUR
                                SUBSIDIARIES, AFFILIATES, OFFICERS, EMPLOYEES, AGENTS, PARTNERS
                                AND LICENSORS EXPRESSLY DISCLAIM ANY AND ALL WARRANTIES OF
                                ANY KIND WHETHER EXPRESSED OR IMPLIED, INCLUDING, BUT NOT
                                LIMITED TO ANY IMPLIED WARRANTIES OF TITLE, MERCHANTABILITY,
                                FITNESS FOR A PARTICULAR PURPOSE AND NON-INFRINGEMENT.</p>
                            <p>
                                b) IBOTO EMPIRE AND OUR SUBSIDIARIES, OFFICERS, EMPLOYEES, AGENTS,
                                PARTNERS AND LICENSORS MAKE NO SUCH WARRANTIES THAT (i) IBOTO
                                EMPIRE SERVICES OR SOFTWARE WILL MEET YOUR REQUIREMENTS; (ii)
                                IBOTO EMPIRE SERVICES OR SOFTWARE SHALL BE UNINTERRUPTED,
                                TIMELY, SECURE OR ERROR-FREE; (iii) THAT SUCH RESULTS WHICH MAY BE
                                OBTAINED FROM THE USE OF THE IBOTO EMPIRE SERVICES OR SOFTWARE
                                WILL BE ACCURATE OR RELIABLE; (iv) QUALITY OF ANY PRODUCTS,
                                SERVICES, ANY INFORMATION OR OTHER MATERIAL WHICH MAY BE
                                PURCHASED OR OBTAINED BY YOU THROUGH OUR SERVICES OR
                                SOFTWARE WILL MEET YOUR EXPECTATIONS; AND (v) THAT ANY SUCH
                                ERRORS CONTAINED IN THE SOFTWARE SHALL BE CORRECTED.</p>
                            <p>
                                c) ANY INFORMATION OR MATERIAL DOWNLOADED OR OTHERWISE
                                OBTAINED BY WAY OF IBOTO EMPIRE SERVICES OR SOFTWARE SHALL BE
                                ACCESSED BY YOUR SOLE DISCRETION AND SOLE RISK, AND AS SUCH YOU
                                SHALL BE SOLELY RESPONSIBLE FOR AND HEREBY WAIVE ANY AND ALL
                                CLAIMS AND CAUSES OF ACTION WITH RESPECT TO ANY DAMAGE TO YOUR
                                COMPUTER AND/OR INTERNET ACCESS, DOWNLOADING AND/OR
                                DISPLAYING, OR FOR ANY LOSS OF DATA THAT COULD RESULT FROM THE
                                DOWNLOAD OF ANY SUCH INFORMATION OR MATERIAL.</p>
                            <p>
                                d) NO ADVICE AND/OR INFORMATION, DESPITE WHETHER WRITTEN OR
                                ORAL, THAT MAY BE OBTAINED BY YOU FROM IBOTO EMPIRE OR BY WAY
                                OF OR FROM OUR SERVICES OR SOFTWARE SHALL CREATE ANY
                                WARRANTY NOT EXPRESSLY STATED IN THE TERMS.</p>
                            <p>
                                e) A SMALL PERCENTAGE OF SOME USERS MAY EXPERIENCE SOME DEGREE
                                OF EPILEPTIC SEIZURE WHEN EXPOSED TO CERTAIN LIGHT PATTERNS OR
                                BACKGROUNDS THAT MAY BE CONTAINED ON A COMPUTER SCREEN OR
                                WHILE USING OUR SERVICES. CERTAIN CONDITIONS MAY INDUCE A
                                PREVIOUSLY UNKNOWN CONDITION OR UNDETECTED EPILEPTIC
                                SYMPTOM IN USERS WHO HAVE SHOWN NO HISTORY OF ANY PRIOR
                                SEIZURE OR EPILEPSY. SHOULD YOU, ANYONE YOU KNOW OR ANYONE IN
                                YOUR FAMILY HAVE AN EPILEPTIC CONDITION, PLEASE CONSULT A
                                PHYSICIAN IF YOU EXPERIENCE ANY OF THE FOLLOWING SYMPTOMS
                                WHILE USING OUR SERVICES: DIZZINESS, ALTERED VISION, EYE OR MUSCLE
                                TWITCHES, LOSS OF AWARENESS, DISORIENTATION, ANY INVOLUNTARY
                                MOVEMENT, OR CONVULSIONS.
                            </p>
                            <p class="head_type">
                                SECTION 13 - LIMITATION OF LIABILITY
                            </p>
                            <p>
                                YOU EXPLICITLY ACKNOWLEDGE, UNDERSTAND AND AGREE THAT IBOTO
                                EMPIRE AND OUR SUBSIDIARIES, AFFILIATES, OFFICERS, EMPLOYEES, AGENTS,
                                PARTNERS AND LICENSORS SHALL NOT BE LIABLE TO YOU FOR ANY PUNITIVE,
                                INDIRECT, INCIDENTAL, SPECIAL, CONSEQUENTIAL OR EXEMPLARY DAMAGES,
                                INCLUDING, BUT NOT LIMITED TO, DAMAGES WHICH MAY BE RELATED TO THE
                                LOSS OF ANY PROFITS, GOODWILL, USE, DATA AND/OR OTHER INTANGIBLE
                                LOSSES, EVEN THOUGH WE MAY HAVE BEEN ADVISED OF SUCH POSSIBILITY
                                THAT SAID DAMAGES MAY OCCUR, AND RESULT FROM:</p>
                            <p>
                                a) THE USE OR INABILITY TO USE OUR SERVICE.</p>
                            <p>
                                b) THE COST OF PROCURING SUBSTITUTE GOODS AND SERVICES.</p>
                            <p>
                                c) UNAUTHORIZED ACCESS TO OR THE ALTERATION OF YOUR
                                TRANSMISSIONS AND/OR DATA.</p>
                            <p>
                                d) STATEMENTS OR CONDUCT OF ANY SUCH THIRD PARTY ON OUR
                                SERVICE.</p>
                            <p>
                                e) AND ANY OTHER MATTER WHICH MAY BE RELATED TO OUR SERVICE.
                            </p>
                            <p class="head_type">
                                SECTION 14 - RELEASE
                            </p>
                            <p>
                                In the event you have a dispute, you agree to release Iboto Empire(and its officers,
                                directors,
                                employees, agents, parent subsidiaries, affiliates, co-branders, partners and any other
                                third parties)
                                from claims, demands and damages (actual and consequential) of every kind and nature, known
                                and unknown, suspected or unsuspected, disclosed and undisclosed, arising out of or in any
                                way
                                connected to such dispute.
                            </p>
                            <p class="head_type">
                                SECTION 15 - NOTICE
                            </p>
                            <p>
                                Iboto Empire may furnish you with notices, including those with regards to any changes to
                                the
                                Terms, including but not limited to email, regular mail, MMS or SMS, text messaging,
                                postings
                                on our website Services, or other reasonable means currently known or any which may be
                                herein
                                after developed. Any such notice may not be received if you violate any aspects of the Terms
                                by
                                accessing our Services in an unauthorized manner. Your acceptance of this Agreement
                                constitutes
                                your agreement that you are deemed to have received any and all notices that would have been
                                delivered had you accessed our Services in an authorized manner.

                            </p>
                            <p class="head_type">
                                SECTION 16 - INTELLECTUAL PROPERTY RIGHTS
                            </p>
                            <p>
                                You herein acknowledge, understand, and agree that all of the Iboto Empire trademarks,
                                copyright,
                                trade name, service marks, and other Iboto Empire logos and any brand features, and/or
                                product
                                and service names are trademarks and as such, are and shall remain the property of Iboto
                                Empire.
                                You herein agree not to display and/or use in any manner the Iboto Empire logo or marks
                                without
                                obtaining Iboto Empire's prior written consent.
                                Iboto Empire will always respect the intellectual property of others, and we ask that all of
                                our users
                                do the same. With regards to appropriate circumstances and at its sole discretion, Iboto
                                Empire
                                may disable and/or terminate the accounts of any user who violates our Terms and/or
                                infringes the
                                rights of others. If you feel that your work has been duplicated in such a way that would
                                constitute
                                copyright infringement, or if you believe your intellectual property rights have been
                                otherwise
                                violated, you should provide to us the following information: </p>
                            <p>
                                a) The electronic or the physical signature of the individual that is authorized on behalf
                                of
                                the owner of the copyright or other intellectual property interest. </p>
                            <p>
                                b) A description of the copyrighted work or other intellectual property that you believe
                                has been infringed upon. </p>
                            <p>
                                c) A description of the location of the site which you allege has been infringing upon
                                your work. </p>
                            <p>
                                d) Your physical address, telephone number, and email address. </p>
                            <p>
                                e) A statement in which you state that the alleged and disputed use of your work is not
                                authorized by the copyright owner, its agents or the law. </p>
                            <p>
                                f) And finally, a statement, made under penalty of perjury, that the aforementioned
                                information in your notice is truthful and accurate, and that you are the copyright or
                                intellectual property owner, representative or agent authorized to act on the copyright or
                                intellectual property owner's behalf. </p>
                            <p>
                                The Iboto Empire agent for notice of claims of copyright or other intellectual property
                                infringement can be contacted as follows: </p>
                            <p>
                                Mailing Address: </p>
                            <p>
                                Iboto Empire </p>
                            <p>
                                Attn: Copyright Agent </p>
                            <p>
                                6101 Cherry Avenue Suite 102A Fontana,</p>
                               
                            <p>
                                CA 92336 USA </p>
                            <p>
                                Telephone: 9093819095 </p>
                            <p>
                                Email: ibotoempire@gmail.com
                            </p>
                            <p class="head_type">
                                SECTION 17 - ENTIRE AGREEMENT
                            </p>
                            <p>
                                This Agreement constitutes the entire agreement between you and Iboto Empire and shall
                                govern
                                the use of our Services, superseding any prior version of this Agreement between you and us
                                with
                                respect to Iboto Empire Services. You may also be subject to additional terms and conditions
                                that
                                may apply when you use or purchase certain other Iboto Empire Services, affiliate Services,
                                thirdparty content, or third-party software.

                            </p>
                            <p class="head_type">
                                SECTION 18 - CHOICE OF LAW AND FORUM
                            </p>
                            <p>
                                It is at the mutual agreement of both you and Iboto Empire with regard to the Agreement that
                                the
                                relationship between the parties shall be governed by the laws of the state of California
                                without
                                regard to its conflict of law provisions and that any and all claims, causes of action
                                and/or disputes,
                                arising out of or relating to the Agreement, or the relationship between you and Iboto
                                Empire, shall
                                be filed within the courts having jurisdiction within the County of USA, California or the
                                U.S.
                                District Court located in said state. You and Iboto Empire agree to submit to the
                                jurisdiction of the
                                courts as previously mentioned and agree to waive any and all objections to the exercise of
                                jurisdiction over the parties by such courts and to venue in such courts.
                            </p>
                            <p class="head_type">
                                SECTION 19 - WAIVER AND SEVERABILITY OF TERMS
                            </p>
                            <p>
                                At any time, should Iboto Empire fail to exercise or enforce any right or provision of the
                                Agreement, such failure shall not constitute a waiver of such right or provision. If any
                                provision
                                of this Agreement is found by a court of competent jurisdiction to be invalid, the parties
                                nevertheless agree that the court should endeavor to give effect to the parties' intentions
                                as reflected
                                in the provision, and the other provisions of the Agreement remain in full force and effect.
                            </p>
                            <p class="head_type">
                                SECTION 20 - NO RIGHT OF SURVIVORSHIP NONTRANSFERABILITY
                            </p>
                            <p>
                                You acknowledge, understand, and agree that your account is non-transferable and any rights
                                to
                                your ID and/or contents within your account shall terminate upon your death. Upon receipt of
                                a
                                copy of a death certificate, your account may be terminated, and all contents therein
                                permanently
                                deleted.
                            </p>
                            <p class="head_type">
                                SECTION 21 - STATUTE OF LIMITATIONS
                            </p>
                            <p>
                                You acknowledge, understand, and agree that regardless of any statute or law to the
                                contrary, any
                                claim or action arising out of or related to the use of our Services, or the Agreement must
                                be filed
                                within 3 Months year(s) after said claim or cause of action arose or shall be forever barred
                            </p>
                            <p class="head_type">
                                SECTION 22 - VIOLATIONS
                            </p>
                            <p>
                                Please report any and all violations of this Agreement to Iboto Empire as follows:</p>
                            <p>
                                Mailing Address:</p>
                            <p>
                                4 ever memorial</p>
                            <p>
                                6101 Cherry Avenue Suite 102A Fontana,</p>
                               
                            <p>
                                CA 92336 USA</p>
                            <p>
                                Telephone: 9093819095</p>
                            <p>
                                Email: info@4evermemorials.com
                            </p>
                            <p class="head_type">
                                SECTION 23 - GOVERNMENT REQUESTS
                            </p>
                            <p>
                                In order to cooperate with governmental requests, subpoenas or court orders, to protect our
                                systems, or to ensure the integrity and operation of our business and systems, we may access
                                and
                                disclose any information we consider necessary or appropriate, including and without
                                limitation,
                                your information, IP address, and usage history. Our right to disclose any such information
                                is
                                governed by the terms of our Privacy Policy.

                            </p>
                            <p class="head_type">
                                SECTION 24 - FOREIGN ACCESS OF SITE
                            </p>
                            <p>
                                The Site is controlled, operated, and administered by Ibotoempire from our offices within
                                the USA.
                                If you access the Site from a location outside the USA, you are responsible for compliance
                                with
                                all local laws. You agree that you will not use Ibotoempire's content accessed through the
                                Site in
                                any country or in any manner prohibited by any applicable laws, restrictions, or
                                regulations.

                            </p>
                            <p class="head_type">
                                SECTION 25 - ERRORS, INACCURACIES AND OMISSIONS
                            </p>
                            <p>
                                Occasionally there may be information on our Site that contains typographical errors,
                                inaccuracies
                                or omissions that may relate to product descriptions, pricing, promotions, offers, product
                                shipping
                                charges, transit times and availability. We reserve the right to correct any errors,
                                inaccuracies, or
                                omissions, and to change or update information or cancel orders if any information on the
                                Site or
                                on any related Site is inaccurate at any time without prior notice (including after you have
                                submitted your order). </p>
                            <p>
                                We undertake no obligation to update, amend or clarify information on the Site or on any
                                related
                                Site, including without limitation, pricing information, except as required by law. No
                                specified
                                update or refresh date applied on the Site or on any related Site should be taken to
                                indicate that all
                                information on the Site or on any related Site has been modified or updated.

                            </p>
                            <p class="head_type">
                                SECTION 26 - PRIVACY POLICY
                            </p>
                            <p>
                                Every member's registration data and various other personal information are strictly
                                protected by
                                the Iboto Empire Online Privacy Policy (see the full Privacy Policy at
                                https://ibotoempire.com/ourprivacy-policies.html). As a member, you herein consent to the
                                collection and use of the
                                information provided, including the transfer of information within the United States and/or
                                other
                                countries for storage, processing or use by Iboto Empire and/or our subsidiaries and
                                affiliates.
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
@endsection
